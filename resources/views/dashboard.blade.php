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

  <style>
    #calendarpanel {
      border-radius: 25px;
      background: #b5b5b5;
      padding: 20px; 
      width: 65%;
      height: 23rem;
      margin: 5px 10px 10px 5px;
    }
  
    #clockpanel {
      border-radius: 25px;
      background: #b5b5b5;
      padding: 20px; 
      width: 100%;
      height: 5rem;
      margin: 5px 5px 10px 35px;
    }
  </style>

  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{ $totalPatients }}</h3>

            <p>Patients</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-user-group"></i>
          </div>
          <a href="/list-patients" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{ $totalMen }}</h3>

            <p>Men</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-person"></i>
          </div>
          <a href="/list-patients" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $totalWomen }}</h3>

            <p>Women</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-person-dress"></i>
          </div>
          <a href="/list-patients" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{ $totalChildren }}</h3>

            <p>Children</p>
          </div>
          <div class="icon">
            <i class="fa-solid fa-children"></i>
          </div>
          <a href="/list-patients" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
          </a>
        </div>
      </div>
    </div>

    <div class="row g-0 text-center">
      <div id="calendarpanel" class="col-sm-6 col-md-7">
        <div id="calendar"></div>
        <h3>Calendar</h3>
      </div>
      <div id="clockpanel" class="col-6 col-md-4">
        <div id="digitalClock"></div>
        <h3>clock</h3>
      </div>
    </div>
  </div>


  <script>
    $(document).ready(function() {
      // Get the current date and time
      var currentDate = new Date();

      // Display the calendar
      $("#calendar").append(currentDate);

      // Display the digital clock
      setInterval(function() {
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        var ampm = hours >= 12 ? 'PM' : 'AM';

        hours = hours % 12;
        hours = hours ? hours : 12;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;

        $("#digitalClock").html(hours + ':' + minutes + ':' + seconds + ' ' + ampm);
      }, 1000);

    });
 </script>

@endsection
