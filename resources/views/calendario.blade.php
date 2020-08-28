@extends('layouts.app')
@section('header')
    Calendario
@endsection
@section('container')
<div class="card col-10 m-auto">
  <div class="card-body p-0" id="external-events">
    <!-- THE CALENDAR -->
    <div id="calendar"></div>
  </div>
  <!-- /.card-body -->
  <!-- fullCalendar 2.2.5 -->
  <script src="../plugins/moment/moment.min.js"></script>
  <script src="../plugins/fullcalendar/main.min.js"></script>
  <script src="../plugins/fullcalendar-daygrid/main.min.js"></script>
  <script src="../plugins/fullcalendar-timegrid/main.min.js"></script>
  <script src="../plugins/fullcalendar-interaction/main.min.js"></script>
  <script src="../plugins/fullcalendar-bootstrap/main.min.js"></script>
</div>
@endsection