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
        <div class="col-sm-6"><h3 class="mb-0">Добавление тэга</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель администратора</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Тэги</a></li>
            <li class="breadcrumb-item active" aria-current="page">Добавление тэга</li>
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
        <div class="col-12">
            <form action="{{ route('admin.tags.store') }}" class="w-50" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" name="title" class="form-control" placeholder="Название тэга">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>
    <!--end::Row-->
    </div>
    <!--end::Container-->
</div>
<!--end::App Content-->
</main>
<!--end::App Main-->
@endsection