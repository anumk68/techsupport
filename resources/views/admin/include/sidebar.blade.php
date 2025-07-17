<aside class="sidebar-wrapper" data-simplebar="true">
  <div class="sidebar-header">
    <div>
      <h4 class="logo-text">Techsupport24X7</h4>
    </div>
    <div class="toggle-icon ms-auto"><i class="bi bi-chevron-double-left"></i></div>
  </div>

  <ul class="metismenu" id="menu">
    <li>
      <a href="{{route('admindashboard')}}" class="has-arrow">
        <div class="parent-icon"><i class="bi bi-house-door-fill"></i></div>
        <div class="menu-title">Dashboard</div>
      </a>
    </li>

    <li>
      <a href="{{route('admin.contact.index')}}">
        <div class="parent-icon"><i class="bi bi-envelope-fill"></i></div>
        <div class="menu-title">Contact</div>
      </a>
    </li>

    <li>
      <a href="{{route('admin.categories.index')}}">
        <div class="parent-icon"><i class="bi bi-tags-fill"></i></div>
        <div class="menu-title">Category</div>
      </a>
    </li>

    <li>
      <a href="{{route('brands.index')}}">
        <div class="parent-icon"><i class="bi bi-award-fill"></i></div>
        <div class="menu-title">Brand</div>
      </a>
    </li>

    <li>
      <a href="{{route('issues.index')}}">
        <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i></div>
        <div class="menu-title">Issues</div>
      </a>
    </li>
{{--
    <li>
      <a href="#">
        <div class="parent-icon"><i class="bi bi-gear-fill"></i></div>
        <div class="menu-title">Settings</div>
      </a>
    </li> --}}

    <li>
      <a href="{{route('headers')}}">
        <div class="parent-icon"><i class="bi bi-menu-button-fill"></i></div>
        <div class="menu-title">Header Menu</div>
      </a>
    </li>

    <li>
      <a href="{{route('blog-category')}}">
        <div class="parent-icon"><i class="bi bi-journal-bookmark-fill"></i></div>
        <div class="menu-title">Blog Category</div>
      </a>
    </li>

    <li>
      <a href="{{route('admin.blog')}}">
        <div class="parent-icon"><i class="bi bi-file-post-fill"></i></div>
        <div class="menu-title">Blogs</div>
      </a>
    </li>
  </ul>
</aside>
