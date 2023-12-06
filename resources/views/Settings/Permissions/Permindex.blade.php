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
                    <li class="breadcrumb-item active">Permissions</li>
                </ol>
                </div>
            </div>
        </div>


        <div class="alert alert-info" role="alert">
            <i class="fa-solid fa-lightbulb fa-beat-fade mr-2" style="color: yellow;"></i>
            This panel displays system permissions.
        </div>

        <div class="card">
            <div class="card-header">
              <h3 class="card-title">Permission Table</h3>

              <div class="card-tools">
                <a class="btn btn-primary" href="{{ route('Permcreate') }}"><span class="fa-solid fa-circle-plus"></span>&nbsp;Create new Permission</a>
              </div>
            </div>
            <div class="card-body table-responsive p-0">
              <table class="table table-hover text-nowrap">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Date Posted</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->created_at }}</td>
                        <td>
                            <a class="btn btn-primary" href="#"><span class="fa-solid fa-pencil"></span>&nbsp;Edit</a>
                            <a class="btn btn-danger" href="#"><span class="fa-solid fa-trash"></span>&nbsp;Delete</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
    </div>
@endsection