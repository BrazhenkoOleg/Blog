<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{ route('personal.main.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-house"></i>
                  <p>Главная</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('personal.liked.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-heart"></i>
                  <p>Понравившиеся посты</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('personal.comments.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-comment"></i>
                  <p>Комментарии</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->