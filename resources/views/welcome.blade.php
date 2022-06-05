<!--
=========================================================
* Material Dashboard 2 - v=3.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('material_assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('material_assets/img/favicon.png')}}">
  <title>
    Land Case Management
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{asset('material_assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{asset('material_assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{asset('material_assets/css/material-dashboard.css?v=3.0.2')}}" rel="stylesheet" />
  @livewireStyles
</head>

<body class="g-sidenav-show  bg-gray-200">
    <livewire:topbar />

    <livewire:leftbar />
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    {{-- <livewire:topbar /> --}}
        <div class="container-fluid py-4">
        <livewire:statrow />

        </div>
    </main>

  <livewire:footer />
  @livewireScripts
</body>

</html>

