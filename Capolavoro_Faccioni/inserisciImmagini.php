<?php
// Connessione al database (assumendo che $conn sia già definito)
include "connessione.php"; // Includi il file con le informazioni di connessione al database

// Variabili per memorizzare il messaggio di stato dell'inserimento
$success_message = $error_message = '';

// Verifica se è stato effettuato l'invio del modulo
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ottieni l'ID dalla selezione dell'utente
    $id_rivista = $_POST['id_rivista'];
    
    // Controlla se è stata caricata un'immagine
    if (isset($_FILES['immagine']) && $_FILES['immagine']['error'] === UPLOAD_ERR_OK) {
        // Percorso temporaneo del file caricato
        $tmp_name = $_FILES['immagine']['tmp_name'];
        
        // Leggi il contenuto del file in una variabile
        $immagine = file_get_contents($tmp_name);
        
        // Query di inserimento per la tabella immagini
        $query_insert_immagine = "INSERT INTO immagini (immagine, ID_Rivista) VALUES (?, ?)";
        
        // Prepara l'istruzione SQL
        $stmt = mysqli_prepare($conn, $query_insert_immagine);
        
        // Associa i parametri
        mysqli_stmt_bind_param($stmt, "si", $immagine, $id_rivista);
        
        // Esegui l'istruzione preparata
        $result = mysqli_stmt_execute($stmt);
        
        // Controlla se l'inserimento è avvenuto con successo
        if ($result) {
            $success_message = "Immagine inserita con successo.";
        } else {
            $error_message = "Si è verificato un errore durante l'inserimento dell'immagine.";
        }
        
        // Chiudi l'istruzione preparata
        mysqli_stmt_close($stmt);
    } else {
        // Se non è stata caricata alcuna immagine, mostra un messaggio di errore
        $error_message = "Per favore, carica un'immagine valida.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="UTF-8"></script>
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
 /* Rimuovi questo stile dal tag style nel file HTML */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');

/* Stili per tutto il documento */
*{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif; /* Utilizza la famiglia di caratteri Poppins */
}

/* Stili per la sezione principale */
section{
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    width: 100%;
    background-position: center;
    background-size: cover;
}

/* Stili per il modulo di inserimento */
.form-box{
    position: relative;
    width: 400px;
    height: 600px;
    background: transparent;
    border: 2px solid rgba(255,255,255,0.5);
    border-radius: 20px;
    backdrop-filter: blur(15px);
    display: flex;
    flex-direction: column; /* Imposta la direzione dei figli in colonna */
    justify-content: center;
    align-items: center;
    padding: 20px; /* Aggiungi spazio interno */
}

/* Stili per l'intestazione */
h2{
    font-size: 2em;
    color: #fff;
    text-align: center;
    margin-bottom: 20px; /* Aggiungi spazio sotto l'intestazione */
}

/* Stili per i campi di input */
.inputbox{
    position: relative;
    margin: 20px 0; /* Riduci il margine superiore */
    width: 100%; /* Usa la larghezza completa */
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

/* Stili per gli input */
.inputbox input {
    width: 100%;
    height: 50px;
    background: transparent;
    border: none;
    outline: none;
    font-size: 1em;
    padding: 0 35px 0 5px;
    color: #fff;
}

/* Stili per il pulsante */
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

/* Stili per i messaggi di stato */
.ferr {
    text-align: center;
    color: white;
}
/* Aggiorna lo stile del menu a tendina per renderlo più grande */
.inputbox select {
    width: 100%; /* Usa la larghezza completa del contenitore */
    height: 50px; /* Altezza del menu a tendina */
  
    border: none;
    outline: none;
    font-size: 1em; /* Dimensione del testo */
    padding: 0 35px 0 5px; /* Spaziatura interna */
    color: black; /* Colore del testo */
}



    </style>
    <title>Inserimento Immagini</title>
</head>
<body>
<div class="menu-btn">
     <i class="fas fa-bars"></i>   
    </div>
    <div class="sidebar">
        <div class="close-btn">
            <i class="fas fa-times"></i>
        </div>
        <div class="menu">
            <div class="item"><a href="admin.html"><i class="fas fa-desktop"></i>Home</a></div>
            <div class="item">
                <a class="sub-btn"><i class="fas fa-cogs"></i>Inserimento<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="inserirementoRiviste.php" class="sub-item">Riviste</a>
                    <a href="inserisciImmagini.php" class="sub-item">Immagini</a>
                    <a href="inserireAbbonamento.php" class="sub-item">Abbonamenti</a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn"><i class="fas fa-cogs"></i>Cancellazione<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="cancellaRiviste.php" class="sub-item">Riviste</a>
                    <a href="cancellaAbbonamento.php" class="sub-item">Abbonamenti</a>
                </div>
            </div>
            <div class="item">
                <a class="sub-btn"><i class="fas fa-cogs"></i>Modifica<i class="fas fa-angle-right dropdown"></i></a>
                <div class="sub-menu">
                    <a href="modificaRiviste.php" class="sub-item">Riviste</a>
                    <a href="modificaAbbonamenti.php" class="sub-item">Abbonamenti</a>
                </div>
            </div>
            <div class="item"><a href="login.php"><i class="fas fa-cogs"></i>Logout</a></div>
        </div>
    </div>
    <section>
    
        <div class="form-box">
        <h2>Inserimento Immagini</h2>
            <?php
            // Mostra messaggi di stato
            if (!empty($success_message)) {
                echo '<div class="ferr">' . $success_message . '</div>';
            }
            if (!empty($error_message)) {
                echo '<div class="ferr">' . $error_message . '</div>';
            }
            ?>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                <div class="inputbox">
                    <label for="id_rivista"></label>
                    <select name="id_rivista" id="id_rivista" required>
                        <?php
                        // Query per recuperare gli ID delle riviste
                        $query_riviste = "SELECT ID_Rivista, Titolo FROM rivista";
                        $result_riviste = mysqli_query($conn, $query_riviste);
                        // Loop attraverso i risultati della query e stampa le opzioni del menu a tendina
                        while ($row = mysqli_fetch_assoc($result_riviste)) {
                            echo "<option value=\"" . $row['ID_Rivista'] . "\">" . $row['Titolo'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="inputbox">
            <ion-icon name="mail-outline"></ion-icon>
                    <input type="file" name="immagine" id="immagine" required>
                </div>
                <button class="btn" type="submit">Invia</button>
               
            </form>
        </div>
    </section>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.sub-btn').click(function() {
            $(this).next('.sub-menu').slideToggle();
            $(this).find('.dropdown').toggleClass('rotate');
        });

        // Nascondi il pulsante del menu inizialmente
        $('.menu-btn').css("visibility", "hidden");

        $('.menu-btn').click(function() {
            $('.sidebar').removeClass('hidden');
            $('.menu-btn').css("visibility", "hidden");
        });

        $('.close-btn').click(function() {
            $('.sidebar').addClass('hidden');
            $('.menu-btn').css("visibility", "visible");
        });
    });
    </script>
</body>
</html>

