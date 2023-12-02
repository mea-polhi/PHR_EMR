@extends('layouts.dashboard')

@section('content')
<div class="container-fluid">
  <div class="content-header">
      <div class="row mb-2">
          <h1 class="mx-2 mr-4">List of Paitents</h1>
          <div class="col-sm-10">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">Patients</li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div>
      </div>
  </div>
</div>

  <div class="container">

    <div class="container mt-5">
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Gender</th>
                  <th>Age</th>
                  <th>Consult</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($patients as $patient): ?>
                  <tr>
                      <td><?php echo $patient->id; ?></td>
                      <td><?php echo $patient->first_name . ' ' . $patient->middle_initial . ' ' . $patient->last_name; ?></td>
                      <td><?php echo $patient->gender; ?></td>
                      <td><?php echo $patient->age; ?></td>
                      <td><button class="btn btn-primary">Consult</button></td>
                  </tr>
              <?php endforeach; ?>
          </tbody>
      </table>
  </div>

  </div>
@endsection
