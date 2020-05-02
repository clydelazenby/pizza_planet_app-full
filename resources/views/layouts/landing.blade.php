<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link rel="stylesheet" href="/css/app.css">
        <script src="https://kit.fontawesome.com/b13a54d819.js" crossorigin="anonymous"></script>
        
 
    </head>
 <body>
    <section id="app-layout">
     @include('includes.side-menu')
        <div class="welcome-jumbo">
            <div class="status">New</div>
            <h1>Galaxy Pizza</h1>
            <img src="https://www.freepnglogos.com/uploads/pizza-png/derwent-park-pizza-5.png" class="pizza">
        </div>
    </section>
    @yield('content')
 

</body>

</html>
