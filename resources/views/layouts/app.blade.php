<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
        <div class="container-fluid">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('accueil')}}">accueil</a>
            </li>
            @auth
                
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('myArticles')}}">Mes articles</a>
                 </li>
                 <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Se deconnecter</a>
                 </li>
                 @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('registrer')}}">Creer un Compte</a>
                    </li>

            @endauth
           
            
            <li class="nav-item">
               <!-- <a class="nav-link disabled" href="#">Disabled</a> -->
            </li>
            </ul>
        </div>
</nav>
    <div class="">
        @yield('page-content')
    </div>
   
    
   
   
</body>
</html>