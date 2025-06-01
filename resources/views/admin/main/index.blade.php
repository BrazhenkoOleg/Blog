@extends('admin.layouts.main')
@section('content')
<!--begin::App Main-->
<main class="app-main">
<!--begin::App Content Header-->
<div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <div class="col-sm-6"><h3 class="mb-0">Панель администратора</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item active" aria-current="page">Панель администратора</li>
        </ol>
        </div>
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content Header-->
<!--begin::App Content-->
<div class="app-content">
    <!--begin::Container-->
    <div class="container-fluid">
    <!--begin::Row-->
    <div class="row">
        <!--begin::Col-->
        <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 1-->
        <div class="small-box text-bg-primary">
            <div class="inner">
            <h3>{{ $data['userCount'] }}</h3>
            <p>Пользователи</p>
            </div>
            <div class="small-box-icon">
                <i class="fa-solid fa-users"></i>
            </div>
            <a
            href="{{ route('admin.users.index') }}"
            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
            Подробнее <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 1-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 2-->
        <div class="small-box text-bg-success">
            <div class="inner">
            <h3>{{ $data['postCount'] }}</h3>
            <p>Посты</p>
            </div>
            <div class="small-box-icon">
                <i class="fa-solid fa-clipboard"></i>
            </div>
            <a
            href="{{ route('admin.posts.index') }}"
            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
            Подробнее <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 2-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 3-->
        <div class="small-box text-bg-warning">
            <div class="inner">
            <h3>{{ $data['categoryCount'] }}</h3>
            <p>Категории</p>
            </div>
            <div class="small-box-icon">
                <i class="fa-solid fa-table-list"></i>
            </div>
            <a
            href="{{ route('admin.categories.index') }}"
            class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
            >
            Подробнее <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 3-->
        </div>
        <!--end::Col-->
        <div class="col-lg-3 col-6">
        <!--begin::Small Box Widget 4-->
        <div class="small-box text-bg-danger">
            <div class="inner">
            <h3>{{ $data['tagCount'] }}</h3>
            <p>Тэги</p>
            </div>
            <div class="small-box-icon">
                <i class="fa-solid fa-tags"></i>
            </div>
            <a
            href="{{ route('admin.tags.index') }}"
            class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
            >
            Подробнее <i class="bi bi-link-45deg"></i>
            </a>
        </div>
        <!--end::Small Box Widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
</main>
<!--end::App Main-->
@endsection