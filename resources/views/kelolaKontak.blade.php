<?php 
  //CHECK USER'S ROLE
  $id             = $_SESSION['id'];
  $username       = $_SESSION['username'];
  $name           = $_SESSION['name'];
  $role           = $_SESSION['role'];
  $spesifik_role  = $_SESSION['spesifik_role'];
?>

@extends('master')
<!DOCTYPE html>
<html>
<head>
  <title>KONTAK</title>
    <link rel="author" href="humans.txt">

    <!-- CSS FOR PAGE HIBAH -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/kontak.css') }}">

    <!--FOR MATERIALIZE DONT DELETE THIS-->
      <link href='node_modules/materialize-css/fonts/roboto/' rel='stylesheet' type='text/css'>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--FOR MATERIALIZE DONT DELETE THIS-->

    <script>
      $(document).ready(function(){
        $('.materialboxed').materialbox();
        $('select').material_select();  //FOR FORM SELECT
        $('.modal-trigger').leanModal(); //FOR MODAL
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
          <li id="kelola-kontak"><a href="#">Kelola Kontak</a></li>
          <li id="buat-kontak"><a href="/kontak/buatkontak">Buat Kontak</a></li>     
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#"><?php echo "Login sebagai $name | $spesifik_role"; ?></a></li>
        </ul>
      </div>
    </nav>
    {{-- END OF SECOND NAVBAR --}}

    {{-- FLASH MESSAGE --}}
    <div id="flash-msg">
      @if(Session::has('flash_message'))
        <div class="card-panel teal">
          <span class="white-text">
            {{ Session::get('flash_message') }}<a id="clear" class="btn-flat transparent right">
            <i class="material-icons">clear</i></a>
          </span>
        </div>
      @endif 
    </div>
    {{-- END OF FLASH MESSAGE --}}

    {{-- CONTENT KELOLA HIBAH --}}
    <div class="container">
      <div id="kelola-kontak-konten">
        <div class="header"><h4>Kelola Kontak</h4></div>
        <div class="kelola-content row">
          <div class="col s12">
            <?php $count = 1 ?>
            @foreach($dataKontak as $kontak)
                @if($count == 1)
                  <div class="row">
                @endif

                {{-- CONTENT --}}
                  <div class="col s6">
                    <div class="col s3 left-row">
                      <img src="../upload/fotoKontak/{{ $kontak->foto }}" alt="" width="103" heigt="138" class="materialboxed">
                    </div>
                    <div class="col s9 right-row">
                      Nama       : {{ $kontak->nama }} <br>
                      {{ $kontak->phone }} / {{ $kontak->email }} <br>
                      Institusi  : {{ $kontak->institusi }} <br>
                      Expertise  : {{ $kontak->expertise }} <p></p>
                      {{-- MODAL DELETE KONTAK --}}
                      <button data-target="modal{{$kontak->id}}" class="btn-floating btn modal-trigger">
                        <i class="material-icons right">delete</i>
                      </button>
                      <!-- MODAL STRUCTURE DELETE KONTAK -->
                      <div id="modal{{$kontak->id}}" class="modal">
                        <div class="modal-content">
                          <h4>Hapus Kontak {{$kontak->nama}}?</h4>
                          <p>Kontak akan dihapus secara permanen</p>
                        </div>
                        <div class="modal-footer center-align">
                          <a href="/kontak/delete/{{$kontak->id}}" class="modal-action modal-close btn-flat">Ya</a>
                          <a href="#!" class=" modal-action modal-close btn-flat">Tidak</a>
                        </div>
                      </div>
                      {{-- END OF MODAL DELETE KONTAK --}}

                      {{-- MODAL DETAIL KONTAK --}}
                      <button data-target="modal{{$kontak->id}}detail" class="btn-floating btn modal-trigger" alt="detail">
                        <i class="material-icons right">info</i>
                      </button>
                      <!-- MODAL STRUCTURE DETAIL KONTAK -->
                      <div id="modal{{$kontak->id}}detail" class="modal modal-fixed-footer">
                        <div class="modal-content">
                          <h4>Kontak Detail</h4>
                          <p>
                          Nama       : {{ $kontak->nama }} <br>
                          Phone      : {{ $kontak->phone }} <br>
                          E-mail     : {{ $kontak->email }} <br>
                          Institusi  : {{ $kontak->institusi }} <br>
                          Expertise  : {{ $kontak->expertise }} <br>
                          Detail     : <br>
                          {{ $kontak->deskripsi }}
                          </p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Tutup</a>
                        </div>
                      </div>
                      {{-- END OF MODAL DETAIL KONTAK --}}

                      {{-- BUTTON FOR EDIT PAGE --}}
                      <a class="btn-floating" href="/kontak/editkontak/{{$kontak->id}}">
                        <i class="material-icons right">mode_edit</i></a>
                      {{-- END OF BUTTON EDIT PAGE --}}
                    </div>
                  </div>
                {{-- END OF CONTENT --}}

                @if($count == 2)
                  <?php $count = 1?>
                  </div>
                @else
                  <?php $count = 2?>
                @endif
            @endforeach
          </div>
        </div>
      </div>
    </div>
    {{-- END OF CONTENT KELOLA HIBAH --}}
  </div>
  {{-- END OF PAGE CONTENT --}}

  <script>
    $(document).ready(function(){
      $('.materialboxed').materialbox();
      $('select').material_select();  //FOR FORM SELECT
      $('.modal-trigger').leanModal(); //FOR MODAL
    });
  </script>
  @stop
</body>
</html>