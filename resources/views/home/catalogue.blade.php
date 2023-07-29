<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/main/user/catalogue.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
</head>
<body>
    <section id="banner">
        <div class="banner-text">
         <h1>WELCOME TO OUR WEBSITE</h1>
         <p><em>Please select your action by clicking the appropriate button...</em></p>
         <div class="banner-btn">
             <a href="{{ route('app_tableau') }}"><span></span>Consulter Catalogue</a>
             <a href="{{ route('login') }}"><span></span>Sélectionner Produit</a>
         </div>
        </div>
     </section> 
</body>
</html>