@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="row mb-2">
                <h1 class="mx-2 mr-4">Add ICD-10 Codes</h1>
                <div class="col-sm-9">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Settings</li>
                    <li class="breadcrumb-item active">Add ICD-10</li>
                </ol>
                </div>
            </div>
        </div>
    </div>
@endsection