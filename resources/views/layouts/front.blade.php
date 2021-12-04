<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Создание сайтов в Уфе без переплат от частого веб-мастера</title>
  <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet"/>
</head>
<body>
  <header>
    <nav class="container">
      <div class="navbar">
        <div class="row row-center">
          <div class="col navbar-nav">
            <ul>
              <li>
                <a href="#">Портфолио</a>
              </li>
              <li>
                <a href="#">Сайты</a>
              </li>
              <li>
                <a href="#">Веб-приложения</a>
              </li>
              <li>
                <a href="#">Обслуживание</a>
              </li>
            </ul>
          </div>
          <div class="col navbar-tel">
            <a href="#">+7 937 34 55 377</a>
            <a href="#">Обсудить проект</a>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <div id="app">
    @yield('content')
  </div>
  <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
  @yield('scripts')
</body>
</html>