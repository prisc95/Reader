<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<header class="banner">
  {{-- <a class="brand" href="{{ home_url('/') }}">
    {!! $siteName !!}
  </a> --}}

  <section class="navbar">
    <div class="container">
      <div class="logo">
        <h1>Reader</h1>
      </div>
      <div id="menu-icon" class="burger-menu">
           <i class="fa-solid fa-bars"></i>
      </div>
      <div class="navigation">
         <a href="#"><span>H</span>ome</a>
        <a href="#"><span>O</span>ver ons</a>
        <a href="#"><span>B</span>oeken</a>
        <a href="#"><span>F</span>eedback</a>
        
      </div>
       
    </div>
  </section>

  @if (has_nav_menu('primary_navigation'))
    <nav class="nav-primary" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
    </nav>
  @endif
</header>
