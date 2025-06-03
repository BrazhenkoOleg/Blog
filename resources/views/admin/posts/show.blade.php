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
            <h3 class="mb-0">{{ $post->title }}</h3>
            <a href="{{ route('admin.posts.edit', $post->id) }}" class="text-success ms-2"><i class="fa-solid fa-pen-to-square"></i></a>
            <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
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
            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $post->title }}</li>
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
                    <td scope="col">{{ $post->id }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Название</td>
                        <td>{{ $post->title }}</td>
                    </tr>
                    @isset($post->preview_image)
                    <tr>
                        <th scope="row">Превью</td>
                        <td>
                            <img src="{{ Storage::url($post->preview_image) }}" class="w-25" alt="preview_image">
                        </td>
                    </tr>
                    @endisset
                    @isset($post->main_image)
                    <tr>
                        <th scope="row">Главное изображение</td>
                        <td>
                            <img src="{{ Storage::url($post->main_image) }}" class="w-25" alt="main_image">
                        </td>
                    </tr>
                    @endisset
                    <tr>
                        <th scope="row">Содержание</td>
                        <td>{!! $post->content !!}</td>
                    </tr>
                    @isset($post->category)
                    <tr>
                        <th scope="row">Категория</td>
                        <td> {{ $post->category->title }}</td>
                    </tr>
                    @endisset
                    @if($post->tags->isNotEmpty())
                    <tr>
                        <th scope="row">Тэги</th>
                        <td>
                            @foreach($post->tags as $tag)
                                <span class="badge bg-primary">{{ $tag->title }}</span>
                            @endforeach
                        </td>
                    </tr>
                    @endif
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