@extends('layouts.dashboard')

@section('title')
    Permissions
@endsection

@section('content')
<div class="container-fluid">
    <div class="content-header">
        <div class="row mb-2">
            <h1 class="mx-2 mr-4">System Roles</h1>
            <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Settings</li>
                <li class="breadcrumb-item active"><a href="{{ route('roleindex') }}">Roles</a></li>
            </ol>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Roles Table</h3>
            <div class="card-tools">
                <a class="btn btn-primary" href="{{ route('rolecreate') }}"><span class="fa-solid fa-circle-plus"></span>&nbsp;Create new Role</a>
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Date Posted</th>
                    <th>Permission</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        
                    @forelse ($roles as $role)
                        <tr>
                            <td>{{ $role->id }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->created_at }}</td>
                            <td>
                                @foreach ($role->permissions as $permission)
                                    <span class="badge badge-primary">{{ $permission->name }}</span>
                                @endforeach
                                {{-- <a class="btn btn-danger" href="#"><span class="fa-solid fa-trash"></span>&nbsp;Delete</a> --}}
                            </td>
                            <td>
                                <a class="btn btn-primary" href="#"><span class="fa-solid fa-edit"></span>&nbsp;Edit</a>
                                <a class="btn btn-danger" href="#"><span class="fa-solid fa-trash"></span>&nbsp;Delete</a>
                        </tr>
                    @empty
                        <tr>
                            <td><i class="fas fa-folder-open"></i>&nbsp; No record found.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection