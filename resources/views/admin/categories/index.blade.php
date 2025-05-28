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
        <div class="col-sm-6"><h3 class="mb-0">Категории</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Главная</a></li>
            <li class="breadcrumb-item active" aria-current="page">Категории</li>
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
        <div class="col-12 mb-3">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Добавить</a>
        </div>
    </div>
    </div class="row">
        <div class="col-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Название</th>
                    <th class="text-center" scope="col" colspan="3">Действия</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->title }}</td>
                            <td class="text-center"><a href="{{ route('admin.categories.show', $category->id) }}"><i class="fa-solid fa-eye"></i></a></td>
                            <td class="text-center"><a href="{{ route('admin.categories.edit', $category->id) }}" class="text-success"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td class="text-center">
                                <form action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="border-0 bg-transparent">
                                    <i class="fa-solid fa-trash text-danger"></i>
                                </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
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