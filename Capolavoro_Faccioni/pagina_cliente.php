<html lang="en" data-bs-theme="light">

<head>
  <script src="/docs/5.3/assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.122.0">
  <title>Product example · Bootstrap v5.3</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/product/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>


  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
  <link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
  <link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
  <link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
  <meta name="theme-color" content="#712cf9">


  <style>
    body {
      background: #282828;


    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .btn-bd-primary {
      --bd-violet-bg: #712cf9;
      --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

      --bs-btn-font-weight: 600;
      --bs-btn-color: var(--bs-white);
      --bs-btn-bg: var(--bd-violet-bg);
      --bs-btn-border-color: var(--bd-violet-bg);
      --bs-btn-hover-color: var(--bs-white);
      --bs-btn-hover-bg: #6528e0;
      --bs-btn-hover-border-color: #6528e0;
      --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
      --bs-btn-active-color: var(--bs-btn-hover-color);
      --bs-btn-active-bg: #5a23c8;
      --bs-btn-active-border-color: #5a23c8;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .bd-mode-toggle .dropdown-menu .active .bi {
      display: block !important;
    }

    .custom-carousel {
      max-width: 1000px;
      /* Imposta la larghezza massima desiderata per il carosello */
      margin: auto;
      /* Centra il carosello nella pagina */
    }

    .custom-img {
      max-width: 100%;
      /* Imposta la larghezza massima delle immagini al 100% del container */
      height: auto;
      /* Imposta l'altezza automaticamente per mantenere le proporzioni */
    }

    #carouselExampleFade {
      background-color: black;
    }

    .dark-footer {
      background-color: #333;
      /* Colore di sfondo scuro */
      color: #fff;
      /* Testo bianco */
    }

    .dark-card {
      background-color: #333;
      /* Colore di sfondo scuro */
      color: #fff;
      /* Testo bianco */
    }

    * {
      box-sizing: border-box;
      font-family: 'lato', sans-serif;
    }

    .wrapper {
      display: flex;
      width: 100%;
      justify-content: space-around;
    }

    .card {
      width: 280px;
      height: 360px;
      padding: 2rem 1rem;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
      transition: 0.5s ease-in-out;
    }

    .card:hover {
      transform: translateY(20px);
    }

    .card:before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      display: block;
      width: 100%;
      height: 100%;
      background: linear-gradient(0deg, rgba(15, 15, 15, 0.9948354341736695) 0%, rgba(52, 50, 50, 0.9164040616246498) 35%, rgba(96, 101, 102, 0.6502976190476191) 100%);
      z-index: 2;
      transition: 0.5s all;
      opacity: 0;
    }

    .card:hover:before {
      opacity: 1;
    }

    .card img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      position: absolute;
      top: 0;
      left: 0;
    } 

    .card .info {
      position: relative;
      z-index: 3;
      color: #fff;
      opacity: 0;
      align-items: center;
  justify-content: center;
      transform: translateY(30px);
      transition: 0.5s all;
    }

    .card:hover .info {
      opacity: 1;
      transform: translateY(0px);
    }

    .card .info h1 {
      margin: 0;

    }

    .card .info p {
      letter-spacing: 1px;
      font-size: 15px;
      margin-top: 8px;
      margin-top: 20px;
    }

    .card .info .btn {
      text-decoration: none;
      padding: 0.5 rem 1rem;
      background: #fff;
      color: #000;
      font size: 14px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.4s ease-in-out;
    }

    .card .info .btn: hover {
      box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
    }
    
     
  </style>


  <!-- Custom styles for this template -->
  <link href="product.css" rel="stylesheet">
</head>

<body>

  <div>
    <center><img src="logo1.png" alt="" height="" width=""></center><br>
    
  </div>
  <nav class="navbar navbar-expand-md bg-dark sticky-top border-bottom" data-bs-theme="dark">
    <div class="container">
      <a class="navbar-brand d-md-none" href="#">
        <svg class="bi" width="24" height="24">
          <use xlink:href="#"></use>
        </svg>
       
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas"
        aria-controls="offcanvas" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav flex-grow-1 justify-content-between">
            <li class="nav-item"><a class="nav-link" href="pagina_cliente.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-book"
                  viewBox="0 0 16 16">
                  <path
                    d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783" />
                </svg>
              </a></li>
            <li class="nav-item"><a class="nav-link" href="abbonamentiCliente.php">Abbonamenti</a></li>
            <li class="nav-item"><a class="nav-link" href="pagina_carrello.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bag"
                  viewBox="0 0 16 16">
                  <path
                    d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                </svg>
              </a></li>
              <li class="nav-item"><a class="nav-link" href="login.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
  <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
  </svg>
              </a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <main>
   
   <br>
   <div style="position: relative;">
  <h2 style="color: white; position: absolute; top: 0; left: 31.1%; transform: translateX(-50%); z-index: 1;">TITOLI POPOLARI</h2><br><br>
    <div id="carouselExampleFade" class="carousel slide carousel-fade custom-carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="caro3.png" class="d-block w-100 custom-img" alt="..." height="100" width="100">
        </div>
        <div class="carousel-item">
          <img src="caro4.png" class="d-block w-100 custom-img" alt="..." height="100" width="100">
        </div>
        <div class="carousel-item">
          <img src="caro5.png" class="d-block w-100 custom-img" alt="..." height="250" width="250">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div><br>
  
    <div>
      <center>
        <p>
        <h1 style="color: white;">Tutte le riviste</h1>
        </p>
      </center>
    </div>
    
    <div class="wrapper">
      <div class="container">
        <!-- Loop per generare le righe di card delle riviste -->
        <?php
        include "connessione.php";

         $query = "SELECT r.Titolo, r.Periodicità, r.Prezzo, i.immagine 
          FROM rivista r 
          INNER JOIN immagini i ON r.ID_Rivista = i.ID_Rivista";
        $result = mysqli_query($conn, $query);

        if ($result->num_rows > 0) {
          $count = 0;
          while ($row = $result->fetch_assoc()) {
            if ($count % 4 == 0) {
              // Apri una nuova riga ogni quattro card
              echo '<div class="row">';
            }
            
            echo '<div class="col-md-3">'; // Ogni card occupa 1/4 della larghezza della riga su dispositivi di dimensioni medie o superiori
            echo '<div class="card">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['immagine']) . '">';
            echo '<div class="info">';
            echo '<p><h1>' . $row['Titolo'] . '</h1></p>';
            echo '<p>Periodicità: ' . $row['Periodicità'] . '</p>';
            echo '<p>Prezzo:' . $row['Prezzo'] . '€</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            
            $count++;
            if ($count % 4 == 0 || $count == $result->num_rows) {
              // Chiudi la riga ogni quattro card o alla fine del loop
              echo '</div><br><br>';
            }
          }
        } else {
          echo "Errore.";
        }
        $conn->close();
        ?>
      </div>
    </div>


    <footer class="container-fluid py-5 dark-footer">
      <div class="row">

        <div class="col-12 col-md">
          <h5>RivistaMondo</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary text-decoration-none" href="#">Informazioni su RivistaMondo</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Lavora con noi</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Ufficio Stampa</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Editori</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Diventa Partner</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Supporto</h5>
          <ul class="list-unstyled text-small">
            <li><a class="link-secondary text-decoration-none" href="#">Supporto</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Domande frequenti</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Contattaci</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Informativa sulla privacy</a></li>
            <li><a class="link-secondary text-decoration-none" href="#">Utilizzo dei cookie</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>Seguici</h5>
          <ul class="list-unstyled text-small">
            <li>
              <a class="link-secondary text-decoration-none" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-instagram" viewBox="0 0 16 16">
                  <path
                    d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                </svg>
                Instgram
              </a>
            </li>

            <li>
              <a class="link-secondary text-decoration-none" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-facebook" viewBox="0 0 16 16">
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                </svg>
                facebook
              </a>
            </li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>APP</h5>
          <ul class="list-unstyled text-small">
            <li>
              <a class="link-secondary text-decoration-none" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-apple"
                  viewBox="0 0 16 16">
                  <path
                    d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
                  <path
                    d="M11.182.008C11.148-.03 9.923.023 8.857 1.18c-1.066 1.156-.902 2.482-.878 2.516s1.52.087 2.475-1.258.762-2.391.728-2.43m3.314 11.733c-.048-.096-2.325-1.234-2.113-3.422s1.675-2.789 1.698-2.854-.597-.79-1.254-1.157a3.7 3.7 0 0 0-1.563-.434c-.108-.003-.483-.095-1.254.116-.508.139-1.653.589-1.968.607-.316.018-1.256-.522-2.267-.665-.647-.125-1.333.131-1.824.328-.49.196-1.422.754-2.074 2.237-.652 1.482-.311 3.83-.067 4.56s.625 1.924 1.273 2.796c.576.984 1.34 1.667 1.659 1.899s1.219.386 1.843.067c.502-.308 1.408-.485 1.766-.472.357.013 1.061.154 1.782.539.571.197 1.111.115 1.652-.105.541-.221 1.324-1.059 2.238-2.758q.52-1.185.473-1.282" />
                </svg>
                App store
              </a>
            </li>

            <li>
              <a class="link-secondary text-decoration-none" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-google-play" viewBox="0 0 16 16">
                  <path
                    d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055zM1 13.396V2.603L6.846 8zM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27" />
                </svg>
                Google Play
              </a>
            </li>

            <li>
              <a class="link-secondary text-decoration-none" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-amazon"
                  viewBox="0 0 16 16">
                  <path
                    d="M10.813 11.968c.157.083.36.074.5-.05l.005.005a90 90 0 0 1 1.623-1.405c.173-.143.143-.372.006-.563l-.125-.17c-.345-.465-.673-.906-.673-1.791v-3.3l.001-.335c.008-1.265.014-2.421-.933-3.305C10.404.274 9.06 0 8.03 0 6.017 0 3.77.75 3.296 3.24c-.047.264.143.404.316.443l2.054.22c.19-.009.33-.196.366-.387.176-.857.896-1.271 1.703-1.271.435 0 .929.16 1.188.55.264.39.26.91.257 1.376v.432q-.3.033-.621.065c-1.113.114-2.397.246-3.36.67C3.873 5.91 2.94 7.08 2.94 8.798c0 2.2 1.387 3.298 3.168 3.298 1.506 0 2.328-.354 3.489-1.54l.167.246c.274.405.456.675 1.047 1.166ZM6.03 8.431C6.03 6.627 7.647 6.3 9.177 6.3v.57c.001.776.002 1.434-.396 2.133-.336.595-.87.961-1.465.961-.812 0-1.286-.619-1.286-1.533M.435 12.174c2.629 1.603 6.698 4.084 13.183.997.28-.116.475.078.199.431C13.538 13.96 11.312 16 7.57 16 3.832 16 .968 13.446.094 12.386c-.24-.275.036-.4.199-.299z" />
                  <path
                    d="M13.828 11.943c.567-.07 1.468-.027 1.645.204.135.176-.004.966-.233 1.533-.23.563-.572.961-.762 1.115s-.333.094-.23-.137c.105-.23.684-1.663.455-1.963-.213-.278-1.177-.177-1.625-.13l-.09.009q-.142.013-.233.024c-.193.021-.245.027-.274-.032-.074-.209.779-.556 1.347-.623" />
                </svg>
                Amazon Appstore
              </a>
            </li>
          </ul>
        </div>
      </div>
    </footer>
    </main>
    <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>