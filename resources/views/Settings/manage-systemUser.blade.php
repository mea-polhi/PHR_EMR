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
    </div>
@endsection