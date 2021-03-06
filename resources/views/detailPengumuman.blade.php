@extends('master')
<?php 
  //CHECK USER'S ROLE
  $id             = $_SESSION['id'];
  $username       = $_SESSION['username'];
  $name           = $_SESSION['name'];
  $role           = $_SESSION['role'];
  $spesifik_role  = $_SESSION['spesifik_role']; 
?>

<!DOCTYPE html>
<html>
<head>
  <title>HIBAH</title>
    <link rel="author" href="humans.txt">

    <!-- CSS FOR PAGE HIBAH -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/detailPengumuman.css')}}">

    <!--FOR MATERIALIZE DONT DELETE THIS-->
      <link href='node_modules/materialize-css/fonts/roboto/' rel='stylesheet' type='text/css'>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <!--FOR MATERIALIZE DONT DELETE THIS-->

    <script>
    $(document).ready(function(){
        //DATE PICKER
        $('.datepicker').pickadate({
          selectMonths: true, // Creates a dropdown to control month
          selectYears: 15 // Creates a dropdown of 15 years to control year
        });
    });
    </script>
</head>
<body>
  @section('main_content')
  {{-- PAGE CONTENT --}}
  <div class="page-content">
    {{-- SECOND NAVBAR --}}
    <nav class="second-navbar">
      <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down">
          <li id="kembali"><a href="/">Kembali</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#"><?php echo "Login sebagai $name | $spesifik_role"; ?></a></li>
        </ul>
      </div>
    </nav>
    {{-- END OF SECOND NAVBAR --}}

    {{-- PENGUMUMAN --}}
    <div class="container">
      <div class="row">
        <div class="col s8 offset-s2">
          <div class="pengumuman">
          @foreach($pengumuman as $pengumuman)
            <div id="title" class="title center-align"><h5 style="bold">{{$pengumuman->judul}}</h5></div>
            <div id="created_by" class="time center-align"><h6>By {{ $pengumuman->nama }}</h6></div>
            <div id="time" class="time center-align"><h6>{{$pengumuman->created_at}}</h6></div>
            <div id="content" class="content">{{$pengumuman->konten}}</div>
            @if($pengumuman->file != "")
                  <a href="/upload/pengumuman/{{$pengumuman->file}}">{{$pengumuman->file}}</a>
            @endif
          @endforeach
          </div>
        </div>
      </div>
    </div>
    {{-- END OF PENGUMUMAN --}}
  </div>
  <script>
    $(document).ready(function() {
        $('select').material_select();
    });
  </script>
  @stop
</body>
</html>
