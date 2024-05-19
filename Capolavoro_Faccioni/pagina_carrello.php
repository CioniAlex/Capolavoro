<!DOCTYPE html>
<html lang="it">

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
    <title>Carrello</title>
    <style>
        #carrello {
            border: 1px solid #ccc;
            padding: 20px;
            color: white;
            margin-top: 20px;
        }

        #carrello h2 {
            margin-top: 0;
        }

        #carrello ul {
            list-style-type: none;
            padding: 0;
        }

        #carrello ul li {
            margin-bottom: 10px;
        }
        
    body {
      background: #282828;
      display: flex;
  flex-direction: column;
  min-height: 100vh;
    }
    .flex-grow-1 {
  flex-grow: 1;
}

.dark-footer {
  background-color: #333; /* Colore scuro per il footer */
  color: #fff;
}
table {
  width: 100%;
  margin-top: 20px; border-collapse: collapse;
}

th, td {
  padding: 8px;
  text-align: left;
}

th {
  background-color: #333;
  color: #fff;
}

th, td {
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #f2f2f2;
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
      margin: auto;
    }

    .custom-img {
      max-width: 100%;
      height: auto;
    }

    #carouselExampleFade {
      background-color: black;
    }

    .dark-footer {
      background-color: #333;
      color: #fff;
    }

    .dark-card {
      background-color: #333;
      color: #fff;
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
      background: #3f3f3f;
      /* Cambiato il colore di sfondo a grigio */
      display: flex;
      justify-content: center;
      align-items: center;
      box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
      transition: 0.5s ease-in-out;
      position: relative;
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
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      height: 100%;
      /* Assicurati che l'altezza della sezione info sia 100% */
      transition: 0.5s all;
    }

    .card .info h1,
    .card .info p {
      margin: 0;
      margin-top: 10px;
    }

    .card .info .btn {
      text-decoration: none;
      padding: 0.5rem 1rem;
      background: #fff;
      color: #000;
      font-size: 14px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.4s ease-in-out;
    }

    .card .info .btn:hover {
      box-shadow: 0px 7px 10px rgba(0, 0, 0, 0.5);
    }

    </style>
</head>

  <div class="flex-grow-1">
    <!-- Contenuto principale della pagina -->
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
  <main class="container my-4">
      <div id="carrello">
        <h2>Carrello</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col">ID</th>
                <th scope="col">Prodotto</th>   
                <th scope="col">Descrizione</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data Inizio</th>
                <th scope="col">Data Fine</th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody id="carrello-items">
              <!-- Qui verranno inseriti i prodotti -->
            </tbody>
          </table>
        </div>
        <p id="carrello-totale" class="text-end fw-bold">Totale: 0€</p>
      </div>
    </main>
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
          <li><a class="link-secondary text-decoration-none" href="#">
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
                  d="M11.334 0c.057 1.06-.485 2.124-1.197 2.828-.692.695-1.81 1.304-2.884 1.207-.064-.986.377-2.042 1.066-2.74C9.029.64 10.207.118 11.334 0zM13.92 16c-1.03.036-1.3-.5-2.427-.5-1.127 0-1.472.485-2.428.528-1.037.043-1.838-.995-2.728-2.03C5.222 12.962 4.51 11.033 4.667 9.05c.083-1.117.472-2.267 1.056-2.964.728-.856 1.683-1.35 2.604-1.35.992 0 1.563.515 2.428.515.843 0 1.379-.515 2.417-.515.491 0 1.687.03 2.483 1.33-.064.036-1.483.83-1.472 2.515.01 2.005 1.843 2.674 1.854 2.68-.021.065-.276.928-.915 1.84-.541.784-1.248 1.548-2.093 1.566z" />
              </svg>
              App Store
            </a>
          </li>
          <li>
            <a class="link-secondary text-decoration-none" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-android2" viewBox="0 0 16 16">
                <path
                  d="M5.88 2.315a.548.548 0 0 0-.105-.76.562.562 0 0 0-.781.12A5.933 5.933 0 0 0 3.107 3.6a.534.534 0 0 0 .224.737.55.55 0 0 0 .747-.234c.215-.38.488-.73.8-1.035zm4.152 0c.313.304.586.654.8 1.034a.55.55 0 0 0 .747.235.534.534 0 0 0 .224-.738 5.932 5.932 0 0 0-1.888-1.924.563.563 0 0 0-.781-.12.548.548 0 0 0-.106.76zM5.25 5.75a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5zm5.5 0a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5zm-6.94 2.2c0-1.083.883-1.95 1.97-1.95h6.44c1.087 0 1.97.867 1.97 1.95v4.85c0 .67-.58 1.2-1.3 1.2H5.11c-.72 0-1.3-.53-1.3-1.2V7.95zm9.68-1.25c-.68 0-1.25.556-1.25 1.24v5.08c0 .204.166.37.37.37h1.11c.204 0 .37-.166.37-.37V7.94c0-.684-.57-1.24-1.25-1.24zm-10.38 0c-.68 0-1.25.556-1.25 1.24v5.08c0 .204.166.37.37.37h1.11c.204 0 .37-.166.37-.37V7.94c0-.684-.57-1.24-1.25-1.24z" />
              </svg>
              Google play
            </a>
          </li>
        </ul>
      </div>
    </div>
  </footer>

  <script>


document.addEventListener('DOMContentLoaded', function () {
  const carrelloItems = JSON.parse(localStorage.getItem('carrelloItems')) || [];
  let carrelloTotale = carrelloItems.length > 0 ? parseFloat(localStorage.getItem('carrelloTotale')) || 0 : 0;
  const carrelloItemsContainer = document.getElementById('carrello-items');
  const carrelloTotaleElement = document.getElementById('carrello-totale');

  // Funzione per visualizzare il carrello
  function mostraCarrello() {
    carrelloItemsContainer.innerHTML = ''; // Pulisci il contenitore

    // Aggiungi ogni elemento al carrello alla tabella
    carrelloItems.forEach((item, index) => {
      const tr = document.createElement('tr');
      tr.innerHTML = `
      <td>${item.id}</td>
        <td>${item.genere}</td>
        <td>${item.descrizione}</td>
        <td>${item.prezzo}€</td>
        <td>${item.dataInizio}</td>
        <td>${item.dataFine}</td>
        <td><button class="btn btn-danger" onclick="rimuoviProdotto(${index})">Rimuovi</button></td>
      `;
      carrelloItemsContainer.appendChild(tr);
    });
  }
    // Funzione per rimuovere un elemento dal carrello
function rimuoviProdotto(index){
  // Rimuovi il prodotto dalla memoria locale
  carrelloItems.splice(index, 1);
  localStorage.setItem('carrelloItems', JSON.stringify(carrelloItems));
  const table = document.getElementById('carrello-items');
  table.deleteRow(index + 1); // +1 per compensare l'intestazione della tabella

  // Ricarica la tabella del carrello e il totale
   mostraCarrello();
  calcolaTotale();
}

  // Funzione per calcolare il totale del carrello
  function calcolaTotale() {
    carrelloTotale = carrelloItems.reduce((acc, item) => acc + parseFloat(item.prezzo), 0);
    carrelloTotaleElement.textContent = `Totale: ${carrelloTotale.toFixed(2)}€`;
  }
  // Initial load
  mostraCarrello();
  calcolaTotale();
});
</script>
</main>
</body>
</html>