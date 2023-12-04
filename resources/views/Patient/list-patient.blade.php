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
            This panel displays patients' record. Use the search box to spool more records.
        </div>
    </div>
    <div class="container mt-5">
        <table id="patient-table" class="table table-striped">
          <div>
            {{-- search code here --}}
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
                <?php foreach ($patients as $patient): ?>
                    <tr>
                        <td><?php echo $patient->id; ?></td>
                        <td><?php echo $patient->first_name . ' ' . $patient->middle_initial . ' ' . $patient->last_name; ?></td>
                        <td><?php echo $patient->gender; ?></td>
                        <td><?php echo $patient->age; ?></td>
                        <td><button class="btn btn-success"><span class="fa-solid fa-stethoscope"></span>&nbsp;</button></td>
                        <td><button class="btn btn-primary"><span class="fa-solid fa-id-card"></span>&nbsp;</button></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

  </div>
@endsection
