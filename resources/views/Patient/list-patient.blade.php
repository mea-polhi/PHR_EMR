@extends('layouts.dashboard')

@section('content')
  <div class="content-header">
    <div class="row mb-2">
      <h1 class="mx-3 mr-5">List of Patients</h1>
      <div class="col-sm-9">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Patients</li>
          <li class="breadcrumb-item active">List of Patients</li>
        </ol>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
  </div>
@endsection
