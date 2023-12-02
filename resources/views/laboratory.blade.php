@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="row mb-2">
                <h1 class="mx-2 mr-4">Laboratory</h1>
                <div class="col-sm-10">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Laboratory</li>
                </ol>
                </div>
            </div>
        </div>
    </div>
@endsection