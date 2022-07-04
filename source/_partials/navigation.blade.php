<div class="container">
<nav class="navbar is-transparent" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item has-text-weight-bold is-family-alusus" href="{{ trim($page->baseUrl, '/') }}">
      {{ $page->siteName }} >_
    </a>

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="mainNavbar">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>
  <div id="mainNavbar" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item {{ $page->selected('/') }}" href="{{ $page->baseUrl }}/">الرئيسية</a>
      <a class="navbar-item {{ $page->selected('posts') }}" href="{{ $page->baseUrl }}/posts">المدونة</a>
    </div>
  </div>
</nav>
</div>