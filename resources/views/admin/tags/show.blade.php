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
        <div class="col-sm-6 d-flex align-items-center">
            <h3 class="mb-0">{{ $tag->title }}</h3>
            <a href="{{ route('admin.tags.edit', $tag->id) }}" class="text-success ms-2"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="{{ route('admin.tags.destroy', $tag->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="border-0 bg-transparent ms-2">
                    <i class="fa-solid fa-trash text-danger"></i>
                </button>
            </form>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель администратора</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.tags.index') }}">Тэги</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $tag->title }}</li>
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
    </div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <td scope="col">{{ $tag->id }}</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Название</th>
                        <td>{{ $tag->title }}</td>
                        </tr>
                </tbody>
            </table>
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