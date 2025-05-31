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
        <div class="col-sm-6"><h3 class="mb-0">Добавление поста</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель администратора</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.posts.index') }}">Посты</a></li>
            <li class="breadcrumb-item active" aria-current="page">Добавление поста</li>
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
        <div class="col-12 w-75">
            <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <input type="text" name="title" class="form-control" placeholder="Название поста" value="{{ old('title') }}">
                    @error('title')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Добавить превью</label>
                    <input name="preview_image" class="form-control" type="file">
                    @error('preview_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Добавить главное изображение</label>
                    <input name="main_image" class="form-control" type="file">
                    @error('main_image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                    @error('content')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Выберите категорию</label>
                    <select name="category_id" class="form-select" aria-label="Выберите категорию">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : ''}}>{{ $category->title }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Тэги</label>
                    <select name="tag_ids[]" class="select2" multiple="multiple" data-placeholder="Выберите тэги" style="width: 100%;">
                        @foreach ($tags as $tag)
                            <option {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : '' }} value="{{ $tag->id }}">{{ $tag->title }}</option>
                        @endforeach
                    </select>
                    @error('tag_ids')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Добавить</button>
                </div>
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