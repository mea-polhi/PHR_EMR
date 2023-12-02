@extends('layouts.dashboard')

@section('content')
  <div class="content-header">
    <div class="row mb-2">
      <h1 class="px-3">Dashboard</h1>
      <div class="col-sm-10">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div>
    </div>
  </div>

  <div class="content-wrapper">
  </div>
@endsection
