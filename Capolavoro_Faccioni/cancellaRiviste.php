<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" charset="UTF-8"></script>
    <title>Cancellazione Rivista</title>
    <?php include "connessione.php"; ?>
</head>
<style>
     <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
           
        }
        .menu-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            font-size: 24px;
            color: #fff;
            cursor: pointer;
            z-index: 1000;
        }
        .form-box {
            width: 400px;
            padding: 40px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
        h2 {
            font-size: 2em;
            color: #fff;
            margin-bottom: 20px;
        }
        .inputbox {
            position: relative;
            margin: 30px 0;
            width: 100%;
            border-bottom: 2px solid #fff;
            text-align: left;
        }
        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #fff;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }
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
        .inputbox input:focus ~ label,
        .inputbox input:valid ~ label {
            top: -5px;
        }
        .btn {
            width: 100%;
            height: 40px;
            border-radius: 40px;
            background: #fff;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 1em;
            font-weight: 600;
            margin-top: 20px;
        }
        .register {
            font-size: .9em;
            color: #fff;
            text-align: center;
            margin: 25px 0 10px;
        }
        .register p a {
            text-decoration: none;
            color: #fff;
            font-weight: 600;
        }
        .register p a:hover {
            text-decoration: underline;
        }
        .social-icons {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 20px 0;
        }
        .social-icons a {
            color: #fff;
            text-decoration: none;
            border: 1px solid #ccc;
            border-radius: 50%;
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
            color: white;
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
            margin-top: 15px;
        }
        .btn-upload:hover {
            background-color: #f0f0f0;
        }
        .inputbox select ion-icon {
            position: absolute;
            right: 8px;
            color: #fff;
            font-size: 1.2em;
            top: calc(50% - 12px);
        }
        .ferr {
            text-align: center;
            color: white;
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
            <h2>Cancellazione Riviste</h2>
            <div class="inputbox">
                <ion-icon name="mail-outline"></ion-icon>
                <input type="text" name="id_rivista" required="">
                <label for="">ID_Rivista</label>
            </div>
            <button class="btn" name="delete">Cancella</button>
        </form>
    </div>
    </section>
<?php
if(isset($_POST['delete'])){
    $id_rivista = $_POST["id_rivista"];

    $query = "DELETE FROM rivista WHERE ID_Rivista = '$id_rivista'";
    $result = mysqli_query($conn, $query);
    if($result){
        echo "";
    }else{
        echo "errore";
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
