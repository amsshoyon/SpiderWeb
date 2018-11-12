<!DOCTYPE html>
<html lang="en" dir="ltr">
     <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <meta name="csrf-token" content="{{ csrf_token() }}">
          <title>SpiderWeb: Dashboard</title>
          <link rel="icon" type="image/ico" href="images/logo/logo.png" />
          <link href="https://fonts.googleapis.com/css?family=Spectral" rel="stylesheet"> 

          <!--link rel="stylesheet" href="/css/app.css"-->
          <link rel="stylesheet" href="/css/dashboard.css">
          <link rel="stylesheet" href="/css/bootstrap.min.css">
          <link rel="stylesheet" href="/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" crossorigin="anonymous">

          <script src="/js/jquery-1.11.1.min.js"></script>

     </head>
     <body >


          
          
          <div style=" height: 100%;" id="PageToDisplay" class="animate-bottom">
               @include('inc.dashboard.navbar')
               <aside id="page-content" class="page-content" style="margin-top: 60px;">
                    <div style="margin-left: -20px;">
                         @yield('dashboard')
                    </div>
                    
               </aside>


          </div>
         
          <script type="text/javascript" src="/js/bootstrap.min.js"></script>
          <script type="text/javascript" src="/js/jquery.min.js"></script>
          <script type="text/javascript" src="/js/jquery.fancybox.min.js"></script>
          <script type="text/javascript" src="/js/custom.js"></script>
     </body>
</html>