<link href="{{ asset('dist/css/Panel.css') }}" rel="stylesheet" type="text/css">

@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <div class="content-header">
      <div class="row mb-2">
          <h1 class="mx-2 mr-5">List of Patients</h1>
          <div class="col-sm-9">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Patients</li>
              <li class="breadcrumb-item active">Patient List</li>
            </ol>
          </div>
      </div>
  </div>
</div>

  <div class="container">
    <div>
        <div class="alert alert-info" role="alert">
            <i class="fa-solid fa-lightbulb fa-beat-fade mr-2" style="color: yellow;"></i>
            This panel displays patients' sensitive record.
        </div>
    </div>

    <div id="panel">
      <div class="container mt-5">
          <table id="patient-table" class="table table-striped">
            <div class="row">
              <div class="col">
              </div>
              <div class="col-sm-7">
              </div>
              <div class="col-sm-4">
                <input type="text" class="form-control mb-2" placeholder="Search">
              </div>
            </div>
              <thead>
                  <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Age</th>
                      <th>Consult</th>
                      <th>Profile</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($patients as $patient)
                      <tr>
                          <td>{{ $patient->id }}</td>
                          <td>{{ $patient->first_name . ' ' . $patient->middle_initial . ' ' . $patient->last_name }}</td>
                          <td>{{ $patient->gender }}</td>
                          <td>{{ $patient->age }}</td>
                          <td><button class="btn btn-success"><span class="fa-solid fa-stethoscope"></span>&nbsp;</button></td>
                          <td><button class="btn btn-primary"><span class="fa-solid fa-id-card"></span>&nbsp;</button></td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
      </div>
    </div>

  </div>
@endsection
