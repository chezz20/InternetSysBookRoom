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
        <a class="nav-link disabled" href="kontakt.php">Kontakt</a>
    </div>  
    
    <section class="formula" style="margin-top:20px; padding: 15px;">
    
        <h2 class="section-heading h1 pt-4">KONTAKT</h2>

        <p class="section-description">Masz pytania? Pisz.</p>

        <div class="row">

            <div class=" col-xl-12">
                <form class="formKontakt"id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <div class="row">

                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="formText">
                                        <br>Imię</label><br><br>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="md-form">
                                <div class="md-form">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="formText">
                                        <br>Email</label><br><br>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="md-form">
                                <input type="text" id="subject" name="subject" class="form-control">
                                <label for="subject" class="formText">
                                    <br>Temat</label><br><br>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">

                            <div class="md-form">
                                <textarea type="text" id="message" name="message" class="md-textarea"></textarea>
                                <label for="message">
                                   <br> Wpisz wiadomość</label>
                            </div>
                                <br>
                        </div>
                    </div>
                    <div class="center-on-small-only">
                    <a class="btn btn-primary" style="background-color: #5a514c; color: white;" onclick="document.getElementById('contact-form').submit();">Wyślij</a>
                </div>
                <div class="status" id="status"></div>
                </form>


            </div>
        </div>
    </section>

    <footer>
        <p> Copyright &copy Michał Gromadzki 2018 </p>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>


</body>

</html>