@extends('layouts.dashboard')

@section('title')
    Permissions
@endsection

@section('content')
<div class="container-fluid">
    <div class="content-header">
        <div class="row mb-2">
            <h1 class="mx-2 mr-4">Manage Permissions</h1>
            <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Settings</li>
                <li class="breadcrumb-item active"><a href="{{ route('Permindex') }}">Permissions</a></li>
                <li class="breadcrumb-item active">Create</li>
            </ol>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add new Permission</h3>
            <div class="card-tools">
                <a class="btn btn-danger" href="{{ route('Permindex') }}"><i class="fa-solid fa-shield-alt"></i>&nbsp;See All Permissions</a>
            </div>
        </div>

        <form method="post" action="{{ route('permission.store') }}">
            @csrf

            <div class="card-body">
                <div class="form-group">
                    <label for="name">Permission Name</label>
                    <input type="text" name="name" id="name" class="form-control @error('name') is invalid @enderror" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>&nbsp;Create Permission</button>
            </div>
        </form>
    </div>
</div>
@endsection