@extends('layouts.front')
@section('content')
<section class="main-intro">
  <div class="container">
    <div class="main-intro-content">
      <h1>сайты <br>и веб-приложения <br>без переплат</h1>
      <p>Приветствую! Меня зовут Михаил, я — частный веб-разработчик. Создаю сайты и веб-приложения полностью «под ключ».</p>
    </div>
  </div>
</section>

<section class="main-about">
  <div class="container">
    <div class="row">
      <div class="col main-about-item main-about-item-1">
          <div class="main-about-item-inner">
              <span>Гарантии <br>и договор</span>
              <p>Являюсь ИП с 2016-го года. Все работы выполняются официально, с заключением договора. Предоставляю все закрывающие документы.</p>
          </div>
      </div>
      <div class="col main-about-item main-about-item-2">
          <div class="main-about-item-inner">
              <span>Без <br>посредников</span>
              <p>Никаких менеджеров, руководителей проектов и прочих посредников. Связь напрямую с разработчиком. Все работы выполняю самостоятельно или совместно с партнером.</p>
          </div>
      </div>
      <div class="col main-about-item main-about-item-3">
          <div class="main-about-item-inner">
              <span>Финансово <br>выгоднее</span>
              <p>Мне, как частному разработчику, не нужно включать в стоимость разработки затраты на офис и менеджеров. А это ощутимая экономия для Вас — в 2-3 раза!</p>
          </div>
      </div>
    </div>
  </div>
</section>

<section class="main-portfolio">
  <div class="container">
    <h5 class="block-title">Портфолио</h5>
    <div class="row">
      <div class="col main-portfolio-item">
        <a href="#">
          <div class="main-portfolio-item-cover" style="background-image:url('portfolio/nomerus.jpg');"><span>Подробнее</span></div>
          <p>Создан сайт с удобным онлайн-заказом автомобильного номера</p>
        </a>
      </div>
      <div class="col main-portfolio-item">
        <a href="#">
          <div class="main-portfolio-item-cover" style="background-image:url('portfolio/dieselmag.jpg'); background-position: 0 50%;"><span>Подробнее</span></div>
          <p>Создан сайт с удобным онлайн-заказом автомобильного номера</p>
        </a>
      </div>
      <div class="col main-portfolio-item">
        <a href="#">
          <div class="main-portfolio-item-cover" style="background-image:url('portfolio/dieselmag.jpg'); background-position: 0 50%;"><span>Подробнее</span></div>
          <p>Создан сайт с удобным онлайн-заказом автомобильного номера</p>
        </a>
      </div>
      <div class="col main-portfolio-item">
        <a href="#">
          <div class="main-portfolio-item-cover" style="background-image:url('portfolio/nomerus.jpg');"><span>Подробнее</span></div>
          <p>Создан сайт с удобным онлайн-заказом автомобильного номера</p>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="main-websites">
  <div class="container">
    <h5 class="block-title">Сайты</h5>
    <div class="row">

      <div class="col main-websites-item main-websites-item-1">
        <div class="main-websites-item-inner">
          <div class="row">
            <div class="col col-main-websites-item-left">
              <h2>Лендинг</h2>
            </div>
            <div class="col col-main-websites-item-right">
              <p>Тот самый одностраничный сайт, который вам нужен на старте.</p>
              <ul>
                <li>индивидуальный дизайн</li>
                <li>мобильная версия</li>
                <li>удобная панель управления</li>
                <li>домен и хостинг (1 год)</li>
                <li>подключение метрики</li>
              </ul>
            </div>
          </div>
          <div class="row row-end">
            <div class="col col-main-websites-item-left">
              <button class="btn">Обсудить проект</button>
            </div>
            <div class="col col-main-websites-item-right">
              <span>от 18 000 ₽</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col main-websites-item main-websites-item-2">
        <div class="main-websites-item-inner">
          <div class="row">
            <div class="col col-main-websites-item-left">
              <h2>Сайт компании</h2>
            </div>
            <div class="col col-main-websites-item-right">
              <p>Ваш вариант, если информации много и нужны дополнительные страницы.</p>
              <ul>
                <li>индивидуальный дизайн</li>
                <li>мобильная версия</li>
                <li>много разделов и страниц</li>
                <li>удобная панель управления</li>
                <li>домен и хостинг (1 год)</li>
                <li>подключение метрики</li>
              </ul>
            </div>
          </div>
          <div class="row row-end">
            <div class="col col-main-websites-item-left">
              <button class="btn">Обсудить проект</button>
            </div>
            <div class="col col-main-websites-item-right">
              <span>от 22 000 ₽</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col main-websites-item main-websites-item-3">
        <div class="main-websites-item-inner">
          <div class="row">
            <div class="col col-main-websites-item-left">
              <h2>Интернет-магазин</h2>
            </div>
            <div class="col col-main-websites-item-right">
              <p>Каталог ваших товаров с онлайн-оплатой.</p>
              <ul>
                <li>индивидуальный дизайн</li>
                <li>мобильная версия</li>
                <li>удобная панель управления</li>
                <li>подключение онлайн-оплаты</li>
                <li>связь магазина с 1С</li>
                <li>домен и хостинг (1 год)</li>
                <li>подключение метрики</li>
              </ul>
            </div>
          </div>
          <div class="row row-end">
            <div class="col col-main-websites-item-left">
              <button class="btn">Обсудить проект</button>
            </div>
            <div class="col col-main-websites-item-right">
              <span>от 36 000 ₽</span>
            </div>
          </div>
        </div>
      </div>

      <div class="col main-websites-item main-websites-item-4">
        <div class="main-websites-item-inner">
          <h2>Индивидуальная разработка</h2>
          <p>Реализую любые ваши самые смелые идеи - системы управления бизнес-процессами, CRM, корпоративные порталы и многое другое.</p>
          <div class="row row-end">
            <div class="col col-main-websites-item-left">
              <button class="btn">Обсудить проект</button>
            </div>
            <div class="col col-main-websites-item-right">
              <span>от 80 000 ₽</span>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="main-obs">
  <div class="container">
    <h5 class="block-title">Техпомощь</h5>
    <p>Есть старый сайт и нужно что-то починить или доработать?</p>
    <ul class="main-obs-list">
      <li>Обновить дизайн</li>
      <li>Сделать мобильную версию</li>
      <li>Поправить верстку</li>
      <li>Ускорить сайт</li>
      <li>Починить форму обратной связи</li>
      <li>Установить метрику</li>
      <li>Установить счетчик метрики</li>
      <li>Установить SSL-сертификат</li>
      <li>Перенести сайт на другой хостинг</li>
      <li>Продлить домен</li>
    </ul>
    <div style="text-align: center;">
      <button class="btn">Нужна техпомощь</button>
    </div>
  </div>
</section>
@endsection