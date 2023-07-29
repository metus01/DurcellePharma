
<link rel="stylesheet" href="{{ asset('assets/main/user/navbar.css') }}">
<header class="main-head">
   <nav>
       <h1 id="logo">UCME CNHU-HKM</h1>
       <ul>
           <li><a href="{{ route('app_home') }}">HOME</a></li>
           <li><a href="https://fr.wikipedia.org/wiki/Centre_national_hospitalier_et_universitaire_Hubert_Koutoukou_Maga">HOPITAL</a></li>
           <li><a href="{{ route('app_pharmacie') }}">PHARMACIE</a></li>
           <li><a href="{{ route('app_catalogue') }}">CATALOGUE</a></li>
           <li><a href="{{ route('app_logout') }}">Déconnexion</a></li>
       </ul>
 </nav>
</header>