<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIMAK | Sistem Informasi Akademik</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('landingpage/img/favicon.png') }}" rel="icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/toastr/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <link rel="shrotcut icon" href="{{ asset('img/favicon.ico') }}">

      <!-- Google Fonts -->
      <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet">

  <!-- Vendor-lp CSS Files -->
  <link href="{{ asset('landingpage/vendor-lp/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('landingpage/vendor-lp/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- Fontawesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <!-- Template Main CSS File -->
  <link href="{{ asset('landingpage/css/landingpage.css') }}" rel="stylesheet">


  <style>
    body {
        display: flex;
        margin: 0;
    }

    .left-column {
        flex: 1;
        background-color: #d3d3d3; /* Warna abu-abu untuk sebelah kiri */
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .right-column {
        flex: 1;
        background-color: #fff; /* Warna putih untuk sebelah kanan */
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 40px;
      
    }

    .login-box {
        background-color: rgba(255, 255, 255, 0.8);
        max-width: 400px;
    }
</style>

</head>
<body class="hold-transition login-page">
  {{-- style="background-image: url('{{ asset("img/anime.jpg") }}'); background-size: cover; background-attachment: fixed;" --}}
  
  {{-- <div class="row" class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
    <div class="login-logo">
      <img src="{{ asset('img/polindra.png') }}" width="50%" alt="login">
    </div>
     <div class="login-box">
  
      <div class="login-logo" style="color: white;">
        @yield('page')
      </div>
  
      <div class="card">
        @yield('content')
      </div>
  
      <footer style="color: white;">
        <marquee>
            <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> &diams; <a href="#" style="color: white;">Project Puh Sepuh</a>. </strong>
        </marquee>
      </footer>
    </div>
  </div> --}}

<div class="container">
    <div class="row">
        <!-- Kolom untuk Logo -->
        <div class="col-md-6 d-flex align-items-center justify-content-center">
          <div class="login-logo text-center">
              <img src="{{ asset('img/polindra.png') }}" width="50%" alt="login">
          </div>
      </div>
        <!-- Kolom untuk Card Login -->
        <div class="col-md-6 right-column">
            <div class="login-box p-2 ml-4">
                <div class="login-logo" style="color: black;">
                    @yield('page')
                </div>
                <div class="card">
                    @yield('content')
                </div>
                <footer style="color: grey;">
                    <marquee>
                        <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> &diams; <a href="#" style="color: black;">Project Puh Sepuh</a>. </strong>
                    </marquee>
                </footer>
            </div>
        </div>
    </div>
</div>

  



<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/toastr/toastr.min.js') }}"></script>
<!-- page script -->
<script>
  $(document).ready(function(){
      $('#role').change(function(){
          var kel = $('#role option:selected').val();
          if (kel == "Guru") {
            $("#noId").addClass("mb-3");
            $("#noId").html(`
              <input id="nomer" type="text" maxlength="5" onkeypress="return inputAngka(event)" placeholder="No Id Card" class="form-control @error('nomer') is-invalid @enderror" name="nomer" autocomplete="nomer">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-card"></span>
                </div>
              </div>
              `);
            $("#pesan").html(`
              @error('nomer')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            `);
          } else if(kel == "Siswa") {
            $("#noId").addClass("mb-3");
            $("#noId").html(`
              <input id="nomer" type="text" placeholder="No Induk Siswa" class="form-control" name="nomer" autocomplete="nomer">
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-id-card"></span>
                </div>
              </div>
            `);
            $("#pesan").html(`
              @error('nomer')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            `);
          } else {
            $('#noId').removeClass("mb-3");
            $('#noId').html('');
          }
      });
  });
  function inputAngka(e) {
    var charCode = (e.which) ? e.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)){
      return false;
    }
    return true;
  }
</script>
@yield('script')

@error('id_card')
  <script>
    toastr.error("Maaf User ini tidak terdaftar sebagai Guru MDTA Zaid Bin Tsabit!");
  </script>
@enderror
@error('guru')
  <script>
    toastr.error("Maaf Guru ini sudah terdaftar sebagai User!");
  </script>
@enderror
@error('no_induk')
  <script>
    toastr.error("Maaf User ini tidak terdaftar sebagai Siswa MDTA Zaid Bin Tsabit!");
  </script>
@enderror
@error('siswa')
  <script>
    toastr.error("Maaf Siswa ini sudah terdaftar sebagai User!");
  </script>
@enderror
@if (session('status'))
  <script>
    toastr.success("{{ Session('success') }}");
  </script>
@endif
@if (Session::has('error'))
    <script>
        toastr.error("{{ Session('error') }}");
    </script>
@endif

</body>
</html>
