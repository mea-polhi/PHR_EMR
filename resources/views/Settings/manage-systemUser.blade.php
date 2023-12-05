<link href="{{ asset('dist/css/Panel.css') }}" rel="stylesheet" type="text/css">

@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="row mb-2">
                <h1 class="mx-2 mr-4">Manage System User</h1>
                <div class="col-sm-9">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                    <li class="breadcrumb-item active">Manage User</li>
                </ol>
                </div>
            </div>
        </div>
        
        <div class="alert alert-info" role="alert">
            <i class="fa-solid fa-lightbulb fa-beat-fade mr-2" style="color: yellow;"></i>
            This panel displays system users.
        </div>
        <div id="panel">
            <div class="row">
                <div class="col-sm-8">
                    <button class="btn btn-success"><span class="fa-solid fa-user-plus"></span>&nbsp; Add User</button>
                </div>
                <div class="col-sm-4">
                    <input type="text" class="form-control mb-2" placeholder="Search">
                </div>
            </div>

            <table id="users-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Access</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user->id; ?></td>
                            <td><?php echo $user->name; ?></td>
                            <td><?php echo $user->email; ?></td>
                            <td><?php echo $user->role; ?></td>
                            <td><button class="btn btn-primary"><span class="fa-solid fa-id-badge"></span>&nbsp;</button></td>
                            
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
@endsection