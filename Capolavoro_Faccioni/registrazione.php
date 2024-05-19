<html lang="en">
<head>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/2.1.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <title>Registrazione</title>
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
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
*{
    margin: 0;
    padding: 0;
    font-family: 'poppins',sans-serif;
}
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;

    background: url('lib.jpg')no-repeat;
    background-position: center;
    background-size: cover;
}
.form-box{
    position: relative;
    width: 400px;
    height: 700px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    justify-content: center;
    align-items: center;

}
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
}
.inputbox{
    position: relative;
    margin: 30px 0;
    width: 310px;
    border-bottom: 2px solid #fff;
}
.inputbox label{
    position: absolute;
    top: 50%;
    left: 5px;
    transform: translateY(-50%);
    color: #fff;
    font-size: 1em;
    pointer-events: none;
    transition: .5s;
}
input:focus ~ label,
input:valid ~ label{
top: -5px;
}
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding:0 35px 0 5px;
    color: #fff;
}
.inputbox ion-icon{
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: 20px;
}
.forget{
    margin: -15px 0 15px ;
    font-size: .9em;
    color: #fff;
    display: flex;
    justify-content: space-between;  
}

.forget label input{
    margin-right: 3px;

}
.forget label a{
    color: #fff;
    text-decoration: none;
}
.forget label a:hover{
    text-decoration: underline;
}
.btn{
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
}

.register{
    font-size: .9em;
    color: #fff;
    text-align: center;
    margin: 25px 0 10px;
}
.register p a{
    text-decoration: none;
    color: #fff;
    font-weight: 600;
}
.register p a:hover{
    text-decoration: underline;
}
.social-icons{
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 20px 0;
}
.social-icons a{
    color: #fff;
    text-decoration: none;
    border: 1px solid #ccc;
    border-radius: 20%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    margin: 0 3px;
    width: 40px;
    height: 40px;
}
.labels {
display: flex;
justify-content: center;
color:white;
}
    </style>
    <section>
   

        <div class="form-box">
            <div class="form-value">
                <form action="" method="post">
                    <h2>Registrazione</h2>
                  
            <div class="form-value">
                <form action="" method="post">
                <input type="hidden" id="tipoUtente" name="tipoUtente" value="amministratore">
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
                        <ion-icon name=""></ion-icon>
                        <input type="text" name="nome" required="">
                        <label for="">Nome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name=""></ion-icon>
                        <input type="text" name="cognome" required="">
                        <label for="">Cognome</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name=""></ion-icon>
                        <input type="text" name="indirizzo" required="">
                        <label for="">Indirizzo</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="text" name="email" required="">
                        <label for="">Email</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" name="password" required="">
                        <label for="">Password</label>
                    </div>
                    
                    <button class="btn" name="registrati">Registrati</button>
                    <div class="register">
                        <p> -> <a href="Login.php">Torna al login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php
        if(isset($_POST['registrati'])){
            $tipoUtente = $_POST['tipoUtente'];
            switch ($tipoUtente) {
                case 'utente':
                    // Recupera i dati dal modulo
                    $nome=$_POST["nome"];
                    $cognome=$_POST["cognome"];
                    $indirizzo=$_POST["indirizzo"];
                    $mail=$_POST["email"];
                    $password=$_POST["password"];
               
                   
                    $query="INSERT INTO cliente (Nome,Cognome,Indirizzo,Email,Password) VALUES ('$nome','$cognome','$indirizzo','$mail','$password')";
                    $result=mysqli_query($conn,$query);  
                     if(mysqli_num_rows($result) > 0) {
                // L'utente è stato trovato nel database, quindi il login è riuscito
                // Puoi eseguire le azioni necessarie dopo il login, ad esempio reindirizzare l'utente alla pagina di dashboard
          
                echo"registrazione effettuata";
                exit();
               
            } else {
                // Nessun utente trovato con le credenziali fornite
                echo "Credenziali non valide. Riprova.";
            }
                    
                    break;
                    case 'amministratore':
                      // Recupera i dati dal modulo
                      $mail=$_POST["email"];
                      $password=$_POST["password"];
                  
                      // Query per verificare l'esistenza dell'utente nel database
                      $query="INSERT INTO amministratore (Email,Password) VALUES ('$mail','$password')";
                      $result = $conn->query($query);
                  
                      // Controlla se ci sono risultati
                      if (mysqli_num_rows($result) > 0) {
                          // Utente trovato nel database, reindirizza alla pagina "inserimento.php"
                            echo"registrazione effettuata";
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