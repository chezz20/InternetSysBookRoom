

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
        <a class="nav-link" style="color: black;" href="login.php"><--NIE MASZ KONTA? ZAREJESTRUJ SIĘ!--></a>
    </div>  
    
    <div class="container">
        <div class="row">
            <div class="col-sm">
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
            <div class="col-sm">
                <!-- środkowy -->
            </div>
            <div class="col-sm">
            <?php 
                /********************************************* 
                formularz
                *********************************************/ 
                error_reporting(E_ALL ^ E_NOTICE);
                $firstName = trim($_POST['firstName']); 
                $secondName = trim($_POST['secondName']); 
                $email = trim($_POST['email']); 
                $phone = trim($_POST['phone']); 
                $date = trim($_POST['date']); 
                $date = trim($_POST['date']); 
                $numberOfGuest = trim($_POST['numberOfGuest']); 
                $meals = trim($_POST['meals']); 
                    
                //formularz zawierający pola 
                echo ' <form action="" method="post" id="form1" name="form1" class="glownyform">
                <div id="main">
                    <fieldset>
                        <legend>Twoje dane:</legend>
                        <label for="firstName">Imię: </label> 
                        <input type="text" name="firstName" id="firstName" required autofocus placeholder="Imię" title="Więcej jak trzy znaki">
                        <br>
                        <label for="secondName">Nazwisko: </label>
                        <input type="text" name="secondName" id="secondName" required autofocus placeholder="Nazwisko" title="Więcej jak trzy znaki">
                        <br>
                        <label for="emil">Email: </label>
                        <input type="text" name="email" id="email" required placeholder="email" title="Wpisz emil">
                        <br>
                        <label for="phone">Telefon: </label>
                        <input type="tel" name="phone" id="phone" required placeholder="Wpisz nr telefonu" pattern="[0-9]{3}[0-9]{3}[0-9]{3}" title="#########">
                        <br>
                        <br>
                    </fieldset>

                    <fieldset>
                        <legend>Szczegóły rezerwacji:</legend>
                        <label for="date">Od: </label>
                        <input type="date" name="date" id="date" min="2018-01-01">
                        <label for="date">Do: </label>
                        <input type="date" name="date" id="date">
                        <br>
                        <label for="numberOfGuest">Ilość gości: </label>
                        <input type="number" name="numberOfGuest" id="" min="1" max="6">
                        <br>
                        <label for="">Posiłki: </label>
                        <label for="yesMeals">Tak</label>
                        <input type="radio" name="meals" id="" value="yesMeals">
                        <label for="noMeals">Nie</label>
                        <input type="radio" name="meals" id="" value="noMeals">
                        <br>
                        <br>    
                        <button type="submit" class="btn btn-outline-primary" style="background-color: #5a514c; color: white">Wyślij</button>
                        <br>
                        <br>
                    </fieldset>
                    </div>
                </form>'; 
                if(empty($firstName) and empty($secondName) and empty($email)) { 
                } 
                else { 
                    
                    // dane pochodzące z formularza 
                    $dane = $firstName."`".$secondName."`".$email."`".$phone."`".$date."`".$date."`".$numberOfGuest."`".$meals."\n"; 
                    // przypisanie zmniennej $file nazwy pliku 
                    $file = "baza.txt"; 
                    // uchwyt pliku, otwarcie do dopisania 
                    $fp = fopen($file, "a"); 
                    // blokada pliku do zapisu 
                    flock($fp, 2); 
                    // zapisanie danych do pliku 
                    fwrite($fp, $dane); 
                    // odblokowanie pliku 
                    flock($fp, 3); 
                    // zamknięcie pliku 
                    fclose($fp); 
                    
                    echo "<div class=\"alert alert-success\" role=\"alert\">
                    Rezerwacja została zapisana!<br />
                    <a href=\"podglad.php\">Szczegóły</a>
                </div>";
                } 
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