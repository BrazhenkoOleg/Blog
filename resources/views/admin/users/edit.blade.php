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
        <div class="col-sm-6"><h3 class="mb-0">Редактирование данных пользователя</h3></div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="{{ route('admin.main.index') }}">Панель администратора</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.users.index') }}">Список пользователей</a></li>
            <li class="breadcrumb-item active" aria-current="page">Редактирование данных пользователя</li>
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
            <form action="{{ route('admin.users.update', $user->id) }}" class="w-50" method="POST">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <input type="text" name="name" class="form-control" placeholder="Имя пользователя" value="{{ $user->name }}">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $user->email }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Выберите права</label>
                    <select name="role" class="form-select" aria-label="Выберите права">
                        @foreach ($roles as $role_id=>$role_value)
                            <option value="{{ $role_id }}" {{ $role_id == $user->role ? 'selected' : ''}}>{{ $role_value }}</option>
                        @endforeach
                    </select>
                    @error('role')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <input name="user_id" type="hidden" value="{{ $user->id }}">
                </div>
                <button type="submit" class="btn btn-primary">Изменить</button>
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