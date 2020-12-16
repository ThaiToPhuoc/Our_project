
<header id="header" class="module header " data-module="header">
  <nav class="container navbar navbar-expand-lg justify-content-lg-between">
      <div class="header-mobile">
          <div class="col-mb-8">
              <a id="header-logo" class="navbar-brand header-logo" title="Logo" href="{!! App::getLogo()['href'] !!}">
                  <img src="{!! App::getLogo()['url'] !!}" alt="{!! App::getLogo()['alt'] !!}">
              </a>
          </div>

      </div>

      <div class="navbar-collapse main-menu" id="main-menu" data-module="menu">

            {{-- <ul class="menu">

              <li><a href="#" class="active">Home</a></li>
              <li><a href="#">About</a></li>
               <li><a href="#">About</a></li>
              <div id="page">
                @php
                wp_nav_menu(array(
                'theme_location' => 'footer',
                'items_wrap' => '%3$s',
                'container-fuild' => false,
                'depth' => 2,
                // 'walker' => new App\Libs\Services\Nav\C8ThemeFooterMenu()
                ));
                @endphp
              </div>

              <li class="slider"></li>
            </ul> --}}
            <div class="menu">
              @php
              wp_nav_menu(array(
              'theme_location' => 'footer',
              'items_wrap' => '%3$s',
              'container-fuild' => false,
              'depth' => 2,
              // 'walker' => new App\Libs\Services\Nav\C8ThemeFooterMenu()
              ));
              @endphp

            </div>
      </div>
  </nav>
</header>

