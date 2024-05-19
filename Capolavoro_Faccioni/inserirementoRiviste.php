<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="UTF-8"></script>
    <meta charset="UTF-8">
    <title>Inserimento</title>
    <?php
    include "connessione.php";
    ?>
</head>
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
    background-position: center;
    background-size: cover;
}
.form-box{
    position: relative;
    width: 400px;
    height: 600px;
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
.btn-upload {
    width: 100%;
    height: 40px;
    border-radius: 40px;
    background: #fff;
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 1em;
    font-weight: 600;
    margin-top: 15px; /* Aggiunto margine superiore */
}

.btn-upload:hover {
    background-color: #f0f0f0; /* Cambia il colore di sfondo al passaggio del mouse */
}
.inputbox select ion-icon {
    position: absolute;
    right: 8px;
    color: #fff;
    font-size: 1.2em;
    top: calc(50% - 12px); /* Posiziona al centro verticalmente */
}
.ferr {
    text-align: center; /* Centra il testo all'interno del div */
    color: white; /* Imposta il colore del testo a bianco */
}
</style>
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
            <form action="" method="post">
                <h2>Inserimento Riviste</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="titolo" required="">
                    <label for="">Titolo</label>
                </div>

                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="periodicità" required="">
                    <label for="">Periodicità</label>
                </div>

                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="prezzo" required="">
                    <label for="">Prezzo</label>
                </div>
                        <button class="btn" name="insert">inserisci</button>
                        <div class="register">
                        
                    </div>
            </form>
        </div>
    </section>
    <?php
       if(isset($_POST['insert'])){
    $titolo = $_POST["titolo"];
    $periodicità = $_POST["periodicità"];
    $prezzo = $_POST["prezzo"];

    $query = "INSERT INTO rivista (Titolo,Periodicità,Prezzo) VALUES ('$titolo','$periodicità','$prezzo')";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "successo";
    }else{
        echo"error";
    }
       }
    ?>
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