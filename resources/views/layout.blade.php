<!DOCTYPE html>
<html>
    <head>
       <title>Thông tin</title>
       <link rel="stylesheet" type="text/css" href="{{asset('user.css')}}">
        <!-- font-awesome -->
    <link href="{{asset('css/font-awesome')}}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Animation Css -->
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <!-- font-awesome -->
    <link href="{{asset('css/font-awesome')}}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet">
    <!-- Animation Css -->
    <link href="{{ asset('css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">


   
    </head>
    <body>

        <div class="container">
            @yield('content')
            @yield('edit')
        </div>
        <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
        <script>
                function show(anything) {
      document.querySelector('.textBox').value = anything;

    }
            const open = document.querySelector('.textBox');
            const form = document.querySelector('.add_hidden');
            const close =document.querySelector('.card_close');
            open.onclick = function(){
                form.classList.toggle('active');
            }
            close.onclick = function(){
                form.classList.remove('active');
            }
            </script>
    </body>
</html>