<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Dummy" />
    <meta name="author" content="Dummy" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Dummy Project</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
    <!-- icons -->
    <link href="{{ asset('Backend/fonts/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/fonts/material-design-icons/material-icon.css') }}" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="{{ asset('Backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ asset('Backend/plugins/material/material.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Backend/css/material_style.css') }}">
    <!-- inbox style -->
    <link href="{{ asset('Backend/css/pages/inbox.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Theme Styles -->
    <link href="{{ asset('Backend/css/theme/light/theme_style.css') }}" rel="stylesheet" id="rt_style_components" type="text/css" />
    <link href="{{ asset('Backend/css/plugins.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/css/theme/light/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('Backend/css/theme/light/theme-color.css') }}" rel="stylesheet" type="text/css" />

    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">

<!-- Image Zoom On click -->
<style>
img {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 111111 /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 50%;
  max-height: 500px !important;
  max-width: 500px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)}
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)}
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 80px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
    </style>
    <!-- end of css -->

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="{{ asset('Backend/css/sweetalert.css') }}">
    <style>
        span.form-error{
            color: red !important;
        }
        input.error::placeholder{
            color: red !important;
        }
        span.input-group-text{
            background-color: #335D98 !important;
            color: #fff !important;
        }
        #logoSite img,
        #favicon img{
            border: 1px solid grey !important;
            padding: 10px !important;
        }
    </style>
    @yield('css')
    <!-- favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>
