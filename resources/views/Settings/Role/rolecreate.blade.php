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
                <li class="breadcrumb-item active">Create</li>
            </ol>
            </div>
        </div>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Create new Role</h3>
            <div class="card-tools">
                <a class="btn btn-danger" href="{{ route('roleindex') }}"><i class="fas fa-shield-alt"></i>&nbsp;See all Roles</a>
            </div>
        </div>
        <div class="card-body">
            <div class="form-group mb-3">
                <input type="text" id="roleInput" placeholder="Example: Doctor" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>            

            <div class="form-group">
                <label for="permissions">Assign Permissions</label>
                
                @foreach ($permissions as $permission)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $permission->name }}" name="permissions[]">
                        <label class="form-check-label">{{ $permission->name }}</label>
                    </div>
                @endforeach
            </div>
            
            <div class="form-group">
                <button class="btn btn-success" onclick="myApp.createRole()">Create Role</button>
            </div>
        </div>
    </div>
</div>

<script>
    const myApp = {
        permissions: @json($permissions),
        form: {
            'name': '',
            'permissions': [],
        },

        getPermissions() {
            axios.get('http://127.0.0.1:8000/getAllPermissions')
                .then(response => {
                    this.permissions = response.data.permission;
                })
                .catch(error => {
                    console.log(error);
                });
        },

        createRole() {
            this.form.permissions = [];
            this.form.name = document.getElementById('roleInput').value;

            let permissions = document.querySelectorAll('input[type=checkbox]:checked');
            permissions.forEach(permission => {
                this.form.permissions.push(permission.value);
            });

            axios.post('http://127.0.0.1:8000/postRole', this.form)
                .then(response => {
                    console.log(response);
                })
                .catch(error => {
                    console.log(error);
                });
        },

        init() {
            this.getPermissions();
        },
    };

    myApp.init();
</script>

@endsection
