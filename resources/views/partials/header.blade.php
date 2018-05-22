<header class="banner">
  <div class="container">
   <a class="brand" href="{{ home_url('/') }}">{{ the_custom_logo() }}</a>
   <div class="menu">
    @php dynamic_sidebar('custom-header-widget') @endphp
    <nav class="nav-primary">
      <div class="hamburger"><i></i></div>
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
   </div>
  </div>
</header>
