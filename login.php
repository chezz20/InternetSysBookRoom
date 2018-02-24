<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Conscructive &amp; Co.</title>
    <link rel="stylesheet" href="assets/css/c01.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<body>
    <div class="topup1">
        INTERNETOWY SYSTEM REZERWACJI POKOJU
    </div>
    <div class="nav" style="background-color: white;">
        <a class="nav-link active" style="color: black;" href="index.php">Home</a>
        <a class="nav-link" style="color: black;" href="galeria.php">Galeria</a>
        <a class="nav-link" style="color: black;" href="login.php">Login</a>
        <a class="nav-link" style="color: black;" href="kontakt.php">Kontakt</a>
    </div>  
    
    <div class="container">
  <div class="row">
    <div class="col">
    <nav>
        <div>
            <h1>
                <img src="assets/img/constructive-logo.gif" alt="">
            </h1>
            <script src="assets/js/main.js"></script>
            <br>
            <p>Zapraszam do internetowej rezerwacji pokoju. Wypełnij wszysatkie pola i zakończ naciskając przycisk Wyślij. Dziękuję
                <br>
                <em>tel.555-555-555</em>
            </p>
            <br>
            <p>
                <a class="btn btn-primary" style="background-color: #5a514c" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                Autor
                </a>
                <button class="btn btn-primary" style="background-color: #5a514c" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
                O Aplikacji
                </button>
            </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                    Michał Gromadzki, Informatyka zaoczna, semestr V, nr indeksu 7431
                    </div>
                </div>
                <div class="collapse" id="collapseExample1">
                    <div class="card card-body">
                    Prosta aplikacja internetowa służąca do rezerwacji pokoju.
                    </div>
                </div>
        </div>
    </nav>
    </div>
    <div class="col">
      <!-- tutaj środkowy row -->
    </div>
    <div class="col-6">

    <?php
mysqli_connect("localhost","admin","haslo");
mysqli_select_db("testowa");
 
function filtruj($zmienna)
{
    if(get_magic_quotes_gpc())
        $zmienna = stripslashes($zmienna); // usuwamy slashe
 
   // usuwamy spacje, tagi html oraz niebezpieczne znaki
    return mysqli_real_escape_string(htmlspecialchars(trim($zmienna)));
}
 
if (isset($_POST['rejestruj']))
{
   $login = filtruj($_POST['login']);
   $haslo1 = filtruj($_POST['haslo1']);
   $haslo2 = filtruj($_POST['haslo2']);
   $email = filtruj($_POST['email']);
   $ip = filtruj($_SERVER['REMOTE_ADDR']);
 
   // sprawdzamy czy login nie jest już w bazie
   if (mysqli_num_rows(mysqli_query("SELECT login FROM uzytkownicy WHERE login = '".$login."';")) == 0)
   {
      if ($haslo1 == $haslo2) // sprawdzamy czy hasła takie same
      {
         mysqli_query("INSERT INTO `uzytkownicy` (`login`, `haslo`, `email`, `rejestracja`, `logowanie`, `ip`)
            VALUES ('".$login."', '".md5($haslo1)."', '".$email."', '".time()."', '".time()."', '".$ip."');");
 
         echo "Konto zostało utworzone!";
      }
      else echo "Hasła nie są takie same";
   }
   else echo "Podany login jest już zajęty.";
}

echo'

<div class="login-page">
  <div class="form">
    <form class="register-form" method="POST" action="login.php" style="background-color: #f1deda; border: solid #5a514c 2px; border-style: dashed; line-height: 2; text-align: center; padding: 10px;">
      <p>UTWÓRZ KONTO</p>
      <input type="text" name="login" placeholder="login"/>
      <input type="password" name="haslo1" placeholder="hasło"/>
      <input type="password" name="haslo2" placeholder="powtórz hasło"/>
      <input type="text" name="email" placeholder="email"/>
      <button class="btn btn-outline-primary" type="submit" name="rejestruj" style="background-color: #5a514c; color: white; margin: 5px;">Utwórz</button>
    </form>
    <form class="login-form"  style="background-color: #f1deda; border: solid #5a514c 2px; border-style: dashed; line-height: 2; text-align: center; padding: 10px;">
      <p>ZALOGUJ</p>
      <input type="text" placeholder="login"/>
      <input type="password" placeholder="hasło"/>
      <button class="btn btn-outline-primary" style="background-color: #5a514c; color: white; margin: 5px;">Zaloguj</button>
    </form>
  </div>
</div>
';
?>  
    </div>
  </div>
</div>
    
    <footer>
        <p> Copyright &copy Michał Gromadzki 2018 </p>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/home.js"></script>

</body>

</html>