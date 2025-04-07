<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TKJ32 Web Statis</title>
    <link rel="shortcut icon" href="gambar/download (1).png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href=".">
                <img src="gambar/TKJ 32.png" alt="logo" width="30" height="24" class="d-inline-block align-text-top" >
                TKJ32
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href=".">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mata diklat
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?m=hardware">Hardware & software</a></li>
                            <li><a class="dropdown-item" href="?m=jarkom">Jaringan Komputer</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="?m=server">Server</a></li>
                            <li><a class="dropdown-item" href="?m=webdev">Web Development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=Galeri">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=video">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?m=Hubungi Kami">Hubungi Kami</a>
                    </li>
                    
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container mt-2 mb-4">
 <?php
$module = (isset($_GET['m'])) ? $_GET['m'] : "home" ;
switch ($module) {
    case 'home': default:
        include "home.php";
        break;
    
    case 'profil':
        include "profil.php";
        break;

    case 'hardware' :
        include "hardware.php";
        break;
        
    case 'jarkom' :
        include "jarkom.php";
        break;
        
    case 'server' :
        include "server.php";
        break;
        
    case 'webdev' :
        include "webdev.php";
        break;
        
    case 'galeri' :
        include "galeri.php";

    case 'vidio' :
        include "vidio.php";
        break;

    case 'hubungi' :
        include "hubungi.php";
        break;
}
?>  
 </div>

    <div class="fixed-bottom">
        <div class="card">
            <div class="card-body">
                    <div class="float-end text-right">
                        <b>Version</b> 0,0,1 by <a href="https://muhidin.web.id" target="_blank" rel="noopener noreferrer">Najibs</a>
                    </div>
                    &copy; 2025-<?= date('Y') ?> <b><a href="http://rumahgemilang.com" target="_blank" rel="noopener noreferrer" title="Rumah 
                    Gemilang Indonesia">TKJ32</a></b>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>