@extends('master')
<!DOCTYPE html>
<html>
<head>
  <title>APPLY HIBAH</title>
    <link rel="author" href="humans.txt">

    <!-- CSS FOR PAGE HIBAH -->
    <link rel="stylesheet" href="assets/css/applyHibah.css">

    <!--FOR MATERIALIZE DONT DELETE THIS-->
      <link href='node_modules/materialize-css/fonts/roboto/' rel='stylesheet' type='text/css'>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">  
    <!--FOR MATERIALIZE DONT DELETE THIS-->

    <!--FOR BOOTSTRAP DONT DELETE THIS-->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Josefin+Slab:600' rel='stylesheet' type='text/css'>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
      <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!--FOR BOOTSTRAP DONT DELETE THIS-->

    <script>
    $(document).ready(function(){
        $("#apply-hibah").hide(); //hide page apply hibah

        $("#apply").click(function(){
            $("#apply-hibah").fadeIn(800);
        });

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
  <div class="page-content">
    <nav class="second-navbar">
      <div class="nav-wrapper">
        <ul class="left hide-on-med-and-down">
          <li id="daftar"><a href="{{action('HibahController@index')}}">Daftar Hibah</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
          <li><a href="#">Login Sebagai muhammad.ezra - Staf Riset</a></li>
        </ul>
      </div>
    </nav>
    
    <!-- CONTENT INFORMASI HIBAH -->
    <div class="container">
      <div id="daftar-hibah">
        <div class="header">HIBAH RISET/PENGMAS XXX</div>
          <div class="daftar-content">
            <div class="row">
              <div class="col s4">
                <table class="centered">
                  <thead>
                    <tr>
                        <th data-field="besar">Besar Dana</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Rp. 150.000.000</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col s4">
                <table class="centered">
                  <thead>
                    <tr>
                        <th data-field="besar">Pemberi Dana</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Universitas Indonesia</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="col s4">
                <table class="centered">
                  <thead>
                    <tr>
                        <th data-field="besar">Periode</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>11, April 2016 - 11, Juni 2016</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col s12">
                <div class="description-head">Deskripsi</div>
                <div class="description-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa quiofficia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <div class="container center-align">
      <button class="btn waves-effect waves-light" id="apply">Apply Hibah</button>
    </div>

    <!-- CONTENT APPLY HIBAH -->
    <div class="container">
      <div id="apply-hibah">
        <div class="header">APPLY HIBAH</div>
        <div class="apply-content">
          <div class="row">
            <form class="col s12">
              <!-- FIRST ROW = NAMA -->
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <input placeholder="Nama Anda" id="nama" type="text" class="validate">
                  <label for="nama">Nama</label>
                </div>
              </div>

              <!-- SECOND ROW = NIP/NUP -->
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <input placeholder="Masukan NIP/NUP Anda" id="nip/nup" type="text" class="validate">
                  <label for="nip/nup">Nama</label>
                </div>
              </div>

              <!-- THIRD ROW = EMAIL -->
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <input placeholder="Email Anda" id="email" type="email" class="validate">
                  <label for="email">Email</label>
                </div>
              </div>

              <!-- FOUR ROW = NOMOR HP -->
              <div class="row">
                <div class="input-field col s6 offset-s3">
                  <input placeholder="Nomor HP Anda" id="nohp" type="text" class="validate">
                  <label for="nohp">Nomor HP</label>
                </div>
              </div>

              <form action="#">
                <div class="file-field input-field col s6 offset-s3">
                  <div class="btn">
                    <span>File</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text">
                  </div>
                </div>
              </form>

              <div class="center-align">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                  <i class="material-icons right">send</i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- END OF CONTENT BUAT HIBAH -->
  </div>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.js"></script>
  <script>
    $(document).ready(function() {
        $('select').material_select();
    });
  </script>
  @stop
</body>
</html>