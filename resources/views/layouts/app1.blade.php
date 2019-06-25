<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" type="image/png" href="{{asset ('public/img/alfamind/Mind_logo_header.png')}}">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        {{-- css file --}}

        <link rel="manifest" href="/manifest.json">
        <link rel="stylesheet" href="{{ asset ('public/css/animate.css')}}">
        <link rel="manifest" href="{{ asset ('public/manifest.json')}}">
        <link rel="stylesheet" href="{{ asset ('public/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset ('public/css/stylee.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/image.css')}}">
        {{--  --}}
        <link rel="stylesheet" href="{{asset('public/css/content.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/news.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/homes.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('public/css/hover-image.css')}}/">
        <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/waves.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/css/placeholder-loading.min.css')}}">
        <!-- ANIMATE CSS -->
        <link rel="stylesheet" href="{{asset('public/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('public/fonts/Avenir.ttc') }}">
        
        <meta name="Description" content="@ArtTerror23" />
        <!-- theme-color defines the top bar color (blue in my case)-->
        <meta name="theme-color" content="#414f57" />
        <!-- Add to home screen for Safari on iOS-->
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="default" />
        <meta name="apple-mobile-web-app-title" content="@ArtTerror23" />
    <link rel="apple-touch-icon" href="{{ asset('/img/android-icon-144x144.png') }}" />
        <!-- Add to home screen for Windows-->
    <meta name="msapplication-TileImage" content="{{ asset('/img/android-icon-144x144.png') }}" />
        <meta name="msapplication-TileColor" content="#000000" />
    <script>
        if ('serviceWorker' in navigator ) {
          window.addEventListener('load', function() {
            navigator.serviceWorker.register('public/serviceeworker.js').then(function(registration) {
               // Registration was successful
               console.log('ServiceWorker registration successful with scope: ', registration.scope);
             }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
                 });
              });
            }
    </script>
    </head>
    <body class="">
        <style>
            .*{
                font-family: 'Avenir', open sans-serif;
            }    
        </style>
            <nav class="navbar navbar-expand-lg navbar-light bg-white">
                    <a class="navbar-brand" style="padding-left:60px;" href="{{ url('/') }}"> <img src="{{asset('public/img/logs.png')}}" style=" padding-left:30px;" alt="" class="img-nav"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="navbar-nav ml-auto p-2">
                          <ul class="navbar-nav" style="font-weight:300;">
                            @yield('nav')
                          </ul>
                        </div>
                        </div>
                      </nav>
              </header>

        
    @yield('content')
    {{-- FOOTER --}}
    <footer>
        <div style="padding-top:40px;">
                <div class="sticky-bottom footer footer-text">
                    <div class="row">
                        <div class="col-md-3 justify-content-md-center " style="padding-top:2%;padding-left:40px;">
                                <p style="font-size: 20px;
                                font-weight: 900;
                                line-height: 24px;
                                text-align: left;">Member of</p>
                                <a href="https://wirglobal.com" target="_blank">    
                                <img src="{{asset('public/img/content/Asset/wir.png')}}" class="mx-auto" width="" style="padding-top:20   px;;width:12rem;min-width:30px; max-width:100%;" alt="foto"></a>
                            </div>

                       <div class="col-md-3" style="padding-top:2%;">
                           <h5 style="font-size: 20px;
                           font-weight: 900;
                           line-height: 24px;
                           text-align: left;">Contact Us</h5>
                           <a class="text-white" style="text-decoration:underline;padding-top:2%;" href="mailto:info@mymindstores.com">info@mymindstores.com</a>
                           <p style="padding-top:2%;">+62 21 5367 8064</p> 
                           <p style="padding-top:2%">Jalan Panjang No.70 Kebun Jeruk,Jakarta Barat</p>
                       </div>

                       <div class="col-md-3" style="padding-top:2%;">
                           <h5 style="font-size: 20px;
                           font-weight: 900;
                           line-height: 24px;
                           text-align: left;">Terms</h5>
                       <p style="padding-top:2%;">By using the site, you accept our <a class="text-white" style="text-decoration:underline" href="{{ url('/privacy-policy') }}">Privacy Policy</a></p>
                       </div>
                                <div class="col-md-3" style="padding-top:2%;">
                                    <div class="row">
                                        <div class="col-md-12" style="padding-top:5px;font-size: 20px;
                                        font-weight: 900;
                                        line-height: 24px;
                                        text-align: left;">
                                                <p>You can find us here</p>
                                            </div> 
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-2">
                                                        <a href="http://www.youtube.com/channel/UCt7AdpqCAx0TRKmPxQE4UNQ" target="_blank">
                                                            <img class="ft-img" src="{{asset('public/img/content/ytb-f.png')}}" alt=""></a>
                                                        </div>
                                                        <div class="col-2">
                                                            <a href="http://www.instagram.com/mindstores" target="_blank">
                                                                <img class="ft-img" src="{{asset('public/img/content/ig-f.png')}}" alt=""></a>
                                                            </div>
                                                            <div class="col-2">
                                                                <a href="http://www.twitter.com/mindstores" target="_blank">
                                                        <img class="ft-img" src="{{asset('public/img/content/tweet-t.png')}}" alt=""></a>
                                                    </div>
                                                    <div class="col-2">
                                                        <a href="http://www.facebook.com/mindstores" target="_blank">
                                                            <img class="ft-img" src="{{asset('public/img/content/fb-.png')}}" alt=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="" style="color:#fff;font-size:13px; padding-left:40px;text-align:right;padding-top:5%">&copy MindStores. All rights reserved</p>
                        </div>
                    </div>
          </footer>
          
          <!-- Scripts -->
          
          {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>    
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> --}}
          {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
          <script src="{{ asset('public/js/jquery.min.js') }}"></script>
          <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
          @yield('scripts')
          <script>
              Waves.init();
              Waves.attach('.btn');
             $(document).ready(function(){
                  $("[rel='tooltip']").tooltip();    
                  
                $('.thumbnail').hover(
                function(){
                    $(this).find('.caption').slideDown(250); //.fadeIn(250)
                    },
                    function(){
                        $(this).find('.caption').slideUp(250); //.fadeOut(205)
                }
             );
            
        });
      
        </script>
        <script>
            $(function() {
                $('.material-card > .mc-btn-action').click(function () {
                    var card = $(this).parent('.material-card');
                    var icon = $(this).children('i');
                    icon.addClass('fa-spin-fast');
                    
                    if (card.hasClass('mc-active')) {
                        card.removeClass('mc-active');
                        
                        window.setTimeout(function() {
                            icon
                            .removeClass('fa-arrow-left')
                            .removeClass('fa-spin-fast')
                            .addClass('fa-bars');
                            
                        }, 800);
                    } else {
                        card.addClass('mc-active');
                        
                        window.setTimeout(function() {
                            icon
                            .removeClass('fa-bars')
                                .removeClass('fa-spin-fast')
                                .addClass('fa-arrow-left');
        
                        }, 800);
                    }
                });
            });
            </script>
    <script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script src="{{ asset('public/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/js/wow.min.js') }}"></script>
    <script src="{{ asset('public/js/app.js') }}"></script>
    <script src="{{ asset('public/js/waves.min.js') }}"></script>
    <script src="{{asset('public/js/wow.js')}}"></script>
    <script>
        new WOW().init();
        </script>
    </body>
    </html>
    