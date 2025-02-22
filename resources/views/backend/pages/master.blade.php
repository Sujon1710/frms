<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{url('/backend/css/styles.css')}}" rel="stylesheet" />
        
        @notifyCss
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

        <style>
           
          .notify{
            margin-top: 80px;
            z-index: 999999;
          }
         </style>

    </head>
    <body class="sb-nav-fixed">


 @include('backend.pages.partials.header')
 @include('notify::components.notify')


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">



           @include('backend.pages.partials.sidebar')
     

            </div>

            <div id="layoutSidenav_content">
                <main>
               

                
@yield('content')

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        

                </main>
            </div>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>

        @notifyJs
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>

    </body>
</html>
