@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="content-header">
            <div class="row mb-2">
                <h1 class="mx-2 mr-4">Add Patient</h1>
                <div class="col-sm-10">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Patients</li>
                    <li class="breadcrumb-item active">Add Patient</li>
                  </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="height: 550px; overflow: auto">
        <div class="alert alert-info" role="alert">
            <i class="fa-solid fa-lightbulb fa-beat-fade mr-2" style="color: yellow;"></i>
            Use the form below to enter the patient's details
        </div>

        <form method="post" action="{{ route('add-patient') }}">
            @csrf
    
            <div class="row g-2">
                <div class="col-sm">
                    <div class="card">
                        <h5 class="card-header">Personal Details</h5>
                        <div class="card-body">
                            <label for="first_name">First Name:</label>
                            <input type="text" name="first_name" id="first_name" placeholder="Patient's first name" class="form-control mb-1" required>
    
                            <label for="middle_initial">Middle Initial:</label>
                            <input type="text" name="middle_initial" id="middle_initial" class="form-control mb-1" placeholder="Patient's M.I. (Optional)">
    
                            <label for="last_name">Last Name:</label>
                            <input type="text" name="last_name" id="last_name" placeholder="Patient's last name" class="form-control mb-1" required>
    
                            <label for="patient_phone_no">Phone No:</label>
                            <input type="number" name="patient_phone_no" id="patient_phone_no" placeholder="Patient's phone number" class="form-control mb-1" required>
    
                            <label for="gender">Gender:</label>
                            <select name="gender" id="gender" class="form-control mb-1" required>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Prefer not to say</option>
                            </select>
    
                            <label for="date_of_birth">Date of Birth:</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" class="form-control mb-1" required>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="card">
                        <h5 class="card-header">Other Details</h5>
                        <div class="card-body">
                            <label for="address">Address:</label>
                            <input type="text" name="address" id="address" placeholder="Patient's address" class="form-control mb-1" required>

                            <div class="row g-3">
                                <div class="col">
                                    <label for="guardian">Guardian:</label>
                                    <input type="text" name="guardian" id="guardian" placeholder="Patient's guardian" class="form-control mb-1" required>
                                </div>
                                <div class="col">
                                    <label for="guardian_phone_no">Guardian's Phone No:</label>
                                    <input type="number" name="guardian_phone_no" id="guardian_phone_no" placeholder="Guarduan's phone number mb-1" class="form-control" required>
                                </div>
                            </div>

                            <label for="relationship">Relationship:</label>
                            <input type="text" name="relationship" id="relationship" placeholder="Guardian's relationship with patient" class="form-control mb-1" required>

                            <label for="payment">Payment Method:</label>
                            <select name="payment" id="payment" class="form-control mb-1" required>
                                <option value="cash">Cash</option>
                            </select>
                        </div>
                    </div>
                    @if (isset( $message ))
                        <div class="alert alert-danger" role="alert">
                            <i class="fa-solid fa-triangle-exclamation fa-beat mr-2" style="color: #ff8892;"></i>
                            {{ $message }}  
                        </div>
                    @endif

                    <button type="submit" class="btn mt-3 mr-2 px-3 btn-success"><span class="bi bi-check-lg"></span>&nbsp;Submit</button>
                    <button type="submit" id="clearBtn" class="btn mt-3 px-4 btn-danger"><span class="bi bi-backspace-fill"></span>&nbsp;Clear</button>

                </div>
                
            </div>
        </form>
    </div>

    <script>
        $(document).ready(function(){
            $("#clearBtn").click(function(){
                $("input[type='text']").val("");
                $("select").val("");
            });
        });
        </script>

@endsection
