<template>
    <div>
      <div v-if="portfolioItem && portfolioItem.name && portfolioItem.name.length > 0">
          <ul class="box-tabs">
              <li @click="selectTab('general')" :class="{ 'active' : current_tab == 'general'}">Общая информация</li>
              <li @click="selectTab('gallery')" :class="{ 'active' : current_tab == 'gallery'}">Галерея</li>
              <li @click="selectTab('seo')" :class="{ 'active' : current_tab == 'seo'}">SEO</li>
          </ul>
          <div class="box px-4 py-4">
              <div v-show="current_tab == 'general'" class="box-tab-content">
                  <div class="mb-3">
                      <label class="form-label">Наименование</label>
                      <input v-model="name" type="text" class="form-control">
                  </div>

                  <div class="mb-3">
                      <label class="form-label">Описание</label>
                      <ckeditor :editor="editor" v-model="description" :config="editorConfig"></ckeditor>
                  </div>
              </div>
              
              <div v-show="current_tab == 'gallery'" class="box-tab-content">
                  <file-pond
                      name="gallery[]"
                      ref="gallery"
                      label-idle="Выбрать картинки..."
                      v-bind:allow-multiple="true"
                      v-bind:allow-reorder="true"
                      accepted-file-types="image/jpeg, image/png"
                      :server="server"
                      v-bind:files="filepond_gallery_edit"
                  />
              </div>

              <div v-show="current_tab == 'seo'" class="box-tab-content">
                  SEO
              </div>

              <button :disabled="updatePortfolioItem_button == false"  @click="updatePortfolioItem(portfolioItem.id)" class="btn btn-primary">Сохранить</button>
          </div>
      </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import ClassicEditor from '@ckeditor/ckeditor5-build-classic';
    import vueFilePond from "vue-filepond";
    import "filepond/dist/filepond.min.css";
    import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";
    import FilePondPluginFileValidateType from "filepond-plugin-file-validate-type";
    import FilePondPluginImagePreview from "filepond-plugin-image-preview";
    const FilePond = vueFilePond(
        FilePondPluginFileValidateType,
        FilePondPluginImagePreview
    );
    export default {
        props: ['portfolio_item_id'],
        data() {
            return {
                portfolioItem: {},
                name: '',
                description: '',
                gallery: [],
                filepond_gallery: [],
                filepond_gallery_edit: [],
                current_tab: 'general',
                updatePortfolioItem_button: false,
                editor: ClassicEditor,
                editorData: '',
                editorConfig: {
                    toolbar: [ 'bold', 'italic', '|', 'bulletedList', 'numberedList', '|', 'insertTable', '|', 'undo', 'redo' ],
                    //table: {
                    //    toolbar: [ 'tableColumn', 'tableRow', 'mergeTableCells' ]
                    //},
                    //extraPlugins: [this.uploader],
                },
                server: {
                    remove(filename, load) {
                        load('1');
                    },
                    process: (fieldName, file, metadata, load, error, progress, abort, transfer, options) => {
                        const formData = new FormData();
                        formData.append(fieldName, file, file.name);
                        const request = new XMLHttpRequest();
                        request.open('POST', '/_admin/portfolio/file/upload');
                        request.upload.onprogress = (e) => {
                            progress(e.lengthComputable, e.loaded, e.total);
                        };
                        request.onload = function() {
                            if (request.status >= 200 && request.status < 300) {
                                load(request.responseText);
                            }
                            else {
                                error('oh no');
                            }
                        };
                        request.send(formData);
                        return {
                            abort: () => {
                                request.abort();
                                abort();
                            }
                        };
                    },
                    revert: (filename, load) => {
                        load(filename)
                    },
                    load: (source, load, error, progress, abort, headers) => {
                        var myRequest = new Request(source);
                        fetch(myRequest).then(function(response) {
                            response.blob().then(function(myBlob) {
                                load(myBlob)
                            });
                        });
                    },
                },
            };
        },
        created() {
            this.getPortfolioItemInfo()
        },
        methods: {
            getPortfolioItemInfo() {
                axios
                .get(`/_admin/portfolio-item/${this.portfolio_item_id}`)
                .then((response => {
                    this.portfolioItem = response.data
                    this.name = response.data.name
                    if(response.data.description && response.data.description.length > 0) {
                        this.description = response.data.description
                    }
                    if(response.data.gallery) {
                        this.filepond_gallery_edit = response.data.gallery.map(function(element){
                            {
                                return {
                                    source: element,
                                    options: {
                                        type: 'local',
                                    }
                                } 
                            }
                        })
                    }
                }));
            },
            selectTab(tab) {
                this.current_tab = tab
            },
            updatePortfolioItem(id) {                
                if(document.getElementsByName("gallery[]")) {
                    this.gallery = []
                    document.getElementsByName("gallery[]").forEach((galleryItem) => {
                        if(galleryItem.value) {
                            this.gallery.push(galleryItem.value)
                        }
                    });
                }
                if(this.name && this.name.length > 0 && this.price && this.price > 0 && this.category && this.category > 0) {
                    this.updatePortfolioItem_button = false
                    axios
                    .put(`/_admin/portfolio-item/${id}`, { id: id, name: this.name, price: this.price, description: this.description, category: this.category, attribute: this.attribute, gallery: this.gallery })
                    .then(response => (
                        window.location.href = '/admin/portfolio'
                    ))
                    .catch((error) => {
                        if(error.response) {
                            this.updatePortfolioItem_button = true
                            for(var key in error.response.data.errors){
                                console.log(key)
                                alert(key)
                            }
                        }
                    });
                } else {
                    alert('Заполните поля')
                }
            },
        },
    }
</script>