<link href="{{ asset('dist/css/calendar.css') }}" rel="stylesheet" type="text/css">

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

  <?php
      class Calendar {

      private $active_year, $active_month, $active_day;
      private $events = [];

      public function __construct($date = null) {
          $this->active_year = $date != null ? date('Y', strtotime($date)) : date('Y');
          $this->active_month = $date != null ? date('m', strtotime($date)) : date('m');
          $this->active_day = $date != null ? date('d', strtotime($date)) : date('d');
      }

      public function add_event($txt, $date, $days = 1, $color = '') {
          $color = $color ? ' ' . $color : $color;
          $this->events[] = [$txt, $date, $days, $color];
      }

      public function __toString() {
          $num_days = date('t', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year));
          $num_days_last_month = date('j', strtotime('last day of previous month', strtotime($this->active_day . '-' . $this->active_month . '-' . $this->active_year)));
          $days = [0 => 'Sun', 1 => 'Mon', 2 => 'Tue', 3 => 'Wed', 4 => 'Thu', 5 => 'Fri', 6 => 'Sat'];
          $first_day_of_week = array_search(date('D', strtotime($this->active_year . '-' . $this->active_month . '-1')), $days);
          $html = '<div class="calendar">';
          $html .= '<div class="header">';
          $html .= '<div class="month-year">';
          $html .= date('F Y', strtotime($this->active_year . '-' . $this->active_month . '-' . $this->active_day));
          $html .= '</div>';
          $html .= '</div>';
          $html .= '<div class="days">';
          foreach ($days as $day) {
              $html .= '
                  <div class="day_name">
                      ' . $day . '
                  </div>
              ';
          }
          for ($i = $first_day_of_week; $i > 0; $i--) {
              $html .= '
                  <div class="day_num ignore">
                      ' . ($num_days_last_month-$i+1) . '
                  </div>
              ';
          }
          for ($i = 1; $i <= $num_days; $i++) {
              $selected = '';
              if ($i == $this->active_day) {
                  $selected = ' selected';
              }
              $html .= '<div class="day_num' . $selected . '">';
              $html .= '<span>' . $i . '</span>';
              foreach ($this->events as $event) {
                  for ($d = 0; $d <= ($event[2]-1); $d++) {
                      if (date('y-m-d', strtotime($this->active_year . '-' . $this->active_month . '-' . $i . ' -' . $d . ' day')) == date('y-m-d', strtotime($event[1]))) {
                          $html .= '<div class="event' . $event[3] . '">';
                          $html .= $event[0];
                          $html .= '</div>';
                      }
                  }
              }
              $html .= '</div>';
          }
          for ($i = 1; $i <= (42-$num_days-max($first_day_of_week, 0)); $i++) {
              $html .= '
                  <div class="day_num ignore">
                      ' . $i . '
                  </div>
              ';
          }
          $html .= '</div>';
          $html .= '</div>';
          return $html;
      }

      }

      $calendar = new Calendar($todayDate->toDateString());
  ?>

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
      <div class="col-sm-6 col-md-7">
        <div id="calendarpanel">
          <?=$calendar?>
        </div>
      </div>
      <div id="clockpanel" class="col-6 col-md-3" style="background-color: white">
        <div id="date"></div>
          <p id="time"></p>
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

    window.setInterval(ut, 1000);

    function ut() {
      var d = new Date();
      document.getElementById("time").innerHTML = d.toLocaleTimeString();
      document.getElementById("date").innerHTML = d.toLocaleDateString();
    }
 </script>
@endsection
