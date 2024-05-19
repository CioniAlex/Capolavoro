<!DOCTYPE html>
<html lang="en">
<head>  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
  <link rel="stylesheet" href="index.css">
  <title>Login</title>
  <script>

        document.addEventListener('DOMContentLoaded', function () {
    // Ottieni riferimenti agli elementi del DOM
    const amministratoreLabel = document.getElementById('amministratoreLabel');
    const utenteLabel = document.getElementById('utenteLabel');
    const amministratoreIcon = document.getElementById('amministratore');
    const utenteIcon = document.getElementById('utente');

    // Aggiungi gestori di eventi per i click sulle icone
    amministratoreIcon.addEventListener('click', function () {
        document.getElementById('tipoUtente').value = 'amministratore';
        amministratoreLabel.style.display = 'block';
        utenteLabel.style.display = 'none';
        
    });

    utenteIcon.addEventListener('click', function () {
        document.getElementById('tipoUtente').value = 'utente';
        amministratoreLabel.style.display = 'none';
        utenteLabel.style.display = 'block';
    });
});
    </script>
  <?php
  include "connessione.php";
  ?>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                <input type="hidden" id="tipoUtente" name="tipoUtente" value="amministratore">
                    <h2>Login</h2>
                    <div class="social-icons">
                    <a href="#" class="icon" id="amministratore"><i
                            class="fi fi-sr-user"></i></i></a><!--amministrazione-->
                    <a href="#" class="icon" id="utente"><i class="fi fi-sr-users-alt"></i></i></a><!--utente-->
                    
                </div>
                <div class="labels">
                    <span id="amministratoreLabel" style="display: block;">inserisci i dati amministratore</span>
                    <span id="utenteLabel" style="display: none;">inserisci i dati utente</span>
                </div>

               
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" required="">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required="">
                        <label for="">Password</label>
                    </div>
                    <button  class="btn" name="accedi">Accedi</button>
                    <div class="register">
                        <p>Non possiedi un account? <a href="registrazione.php">Registrazione</a></p>
                    </div>
                    <!-- Aggiunta di due icone -->
                    
                </form>
            </div>
        </div>
    </section>
    <?php
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['accedi'])){

    $tipoUtente = $_POST['tipoUtente'];
    switch ($tipoUtente) {
        case 'utente':
            // Recupera i dati dal modulo
            $mail=$_POST["email"];
            $password=$_POST["password"];
       
            $query = "SELECT * FROM cliente WHERE Email='$mail' AND Password='$password'";
    $result = mysqli_query($conn, $query);
    // Verifica se la query ha restituito un risultato
    if(mysqli_num_rows($result) > 0) {
        // L'utente è stato trovato nel database, quindi il login è riuscito
        // Puoi eseguire le azioni necessarie dopo il login, ad esempio reindirizzare l'utente alla pagina di dashboard
  
        
        header("Location: pagina_cliente.php");
        exit();
       
    } else {
        // Nessun utente trovato con le credenziali fornite
        echo "Credenziali non valide. Riprova.";
    }
            
            break;
            case 'amministratore':
              // Recupera i dati dal modulo
              $email = $_POST['email'];
              $password = $_POST['password'];
          
              // Query per verificare l'esistenza dell'utente nel database
              $sql = "SELECT * FROM amministratore WHERE Email = '$email' AND Password = '$password'";
              $result = $conn->query($sql);
          
              // Controlla se ci sono risultati
              if ($result->num_rows > 0) {
                  // Utente trovato nel database, reindirizza alla pagina "inserimento.php"
                  header("Location: admin.html");
                  exit; // Assicura che lo script si fermi qui e che il reindirizzamento venga eseguito
              } else {
                  // Utente non trovato nel database
                  echo "Accesso fallito. Email o password errate.";
              }
              break;
}
    }
?>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
