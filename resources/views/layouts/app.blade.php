<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link id="pagestyle" href="{{ asset('css/style.css') }}" rel="stylesheet" />
    @livewireStyles

</head>

<body class="mainbody">
    <div class="d-flex justify-content-center">
        <div class="card homepage-card">
            <div class="card-header homepage-card-header">
                <div class="row col-12">
                    <div class="col-md-6 left-aligned-content">
                        ভূমি মন্ত্রণালয়, গণপ্রজাতন্ত্রী বাংলাদেশ সরকার
                    </div>
                    <div class="col-md-6 right-aligned-content">
                        @livewire('components.currentday')
                    </div>
                </div>
            </div>
            <div class="card-header homepage-card-header2">
                <div class="row col-12">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center left-aligned-content">
                            <x-land-logo class="logo-home"/>
                            <x-project-title class="title-home"/>
                        </div>
                    </div>
                    <div class="col-md-6 right-aligned-content">
                        <div class="d-flex flex-row-reverse align-items-center">
                            <x-project-logo class="logo-home"/>
                            <x-credit style="padding: 1rem;"/>
                        </div>
                    </div>


                </div>

            </div>
            <div class="nav-section">
                <x-navbar-home/>
            </div>
            <div class="card-body homepage-card-body text-center">
                <div class="d-flex justify-content-center">
                    {{ $slot }}
                </div>
            </div>
            <div class="card-footer text-center upper-footer">
                <div class="row upper-footer-row">
                    <div class="col-md-3 footer-column text-center">
                        <div class="fo-title"><h2>গুরুত্বপূর্ণ লিঙ্ক</h2></div>
                        <div class="foo-content text-center">
                            <a target="_blank" href="www.bangladesh.gov.bd">www.bangladesh.gov.bd</a>
                        </div>
                    </div>
                    <div class="col-md-3 footer-column text-center">
                        <div class="fo-title"><h2>সামাজিক যোগাযোগ </h2></div>

                        <div class="foo-content text-center">
                            <a class="social-icons facebook" target="_blank" href="http://www.facebook.com/minland.gov.bd"><i class="fa fa-facebook"></i></a>
                            <a class="social-icons youtube" target="_blank" href="https://www.youtube.com/channel/UCBlCPkpMK00tcPcdR-DTxrw"><i class="fa fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-md-3 footer-column text-center">
                        <div class="fo-title"><h2>পরিকল্পনা ও বাস্তবায়নে  </h2></div>

                        <div class="foo-content text-center">
                            <a href="https://minland.gov.bd/" target="_blank"><img src="https://land.gov.bd/wp-content/themes/land-portal/images/icons/land.png" alt=""></a>
                            <a href="https://a2i.gov.bd/" target="_blank"><img src="https://land.gov.bd/wp-content/themes/land-portal/images/icons/a2i.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-3 footer-column text-center">
                        <div class="fo-title"><h2>কারিগরি সহায়তায়</h2></div>
                        <div class="foo-content text-center">
                            <a href="https://taqitizar.com/" target="_blank"><img class="img-fluid" src="{{asset('images/taqi-logo.png')}}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer text-center lower-footer">
               <x-copyright/>
            </div>
        </div>
    </div>
    @livewireScripts
</body>

</html>
