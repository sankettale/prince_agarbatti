<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Prince Agarbattis</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    @include('Admin.common_page.link')
    <style>
        /* pagination
        .w-5{
            width: 30px;

        }
        .flex-1{
            margin-bottom: 15px;
        } */
    </style>
 </head>
 <body>
    <!-- sidebar-->
     @include('Admin.common_page.sidebar')
    <!-- //sidebar-->

    <div id="right-panel" class="right-panel">
      <!-- Main Navbar-->
      @include('Admin.common_page.header')
      <!-- //Main Navbar-->

      @yield('content')

    </div>

    <!-- JavaScript files-->
        @include('Admin.common_page.script')
 </body>
</html>
