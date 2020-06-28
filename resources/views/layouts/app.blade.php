<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/4/minty/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Home</title>
</head>

<body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-primary sticky-top">
        <a href="/">
            <h5 class="my-0 mr-md-auto font-weight-normal text-white"> Company name</h5>
        </a>
        <nav class="my-2 my-md-0 ml-auto">
            <a class="p-2 text-white" href="/">Home</a>
            <a class="p-2 text-white" href="/showall">Funcionários</a>
        </nav>
    </div>  

        @include('inc.message')
        @yield('content') 
        
        <footer class="bg-primary">
            <h6 class="text-center py-5 text-light">Desenvolvido por: Rodrigo Rabelo &copy;</h6>
        </footer>
    </body>
    
    </html>