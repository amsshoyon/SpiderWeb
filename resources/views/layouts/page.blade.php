<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="csrf-token" content="{{ csrf_token() }}">

          <title>SpiderWeb</title>

          <link rel="icon" type="image/ico" href="images/logo/logo.png" />
          <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet"> 

     
          <link rel="stylesheet" href="/css/bootstrap.min.css">
          <script src="/js/jquery-1.11.1.min.js"></script>
          <link rel="stylesheet" href="/css/animate.css">
          <link rel="stylesheet" href="/css/magnific-popup.css">
          <link rel="stylesheet" href="/css/style.css">
          <link rel="stylesheet" href="/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script> 
          <script>
          var myVar;

          function pageloaderjs() {
              myVar = setTimeout(showPage, 3000);
          }

          function showPage() {
            document.getElementById("preloader").style.display = "none";
            document.getElementById("PageToDisplay").style.display = "block";
          }
          </script>
     </head>
     <body onload="pageloaderjs()">

          @include('inc.page.pageloader')
          
          
          <div style="display:none;" id="PageToDisplay" class="animate-bottom">
               @include('inc.page.navbar')

               <div class="clearfix"></div>
               <div style="width: 100%; height: 100px;"></div>
               <div class="clearfix"></div>

               @yield('content')
               
               @include('inc.page.chat')
               @include('inc.page.backtotop')
               @include('inc.page.footer')
          </div>
         
          <script type="text/javascript" src="/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="/js/bootstrap.js"></script>
          <script type="text/javascript" src="/js/jquery.min.js"></script>
          <script type="text/javascript" src="/js/jquery.easing.min.js"></script>
          
          <!-- Waypoints -->
          <script src="/js/jquery.waypoints.min.js"></script>
          <!-- Stellar Parallax -->
          <script src="/js/jquery.stellar.min.js"></script>

          <script src="/js/jquery.magnific-popup.min.js"></script>
          <script src="/js/magnific-popup-options.js"></script>

     
               <!-- wow effect -->
          <script src="/js/wow.min.js"></script>
          <script>new WOW().init();</script>
     </body>
</html>