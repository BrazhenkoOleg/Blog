<!--begin::Sidebar-->
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="{{ route('admin.posts.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-clipboard"></i>
                  <p>Посты</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.categories.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-table-list"></i>
                  <p>Категории</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.tags.index') }}" class="nav-link">
                  <i class="nav-icon fa-solid fa-tags"></i>
                  <p>Тэги</p>
                </a>
              </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>
<!--end::Sidebar-->