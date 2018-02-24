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
    
    <section>
<div class="gallery-con">
    <h2 class="w3-center">Pokoje...</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="assets/img/111.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/222.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/333.jpg" style="width:100%">
  <img class="mySlides" src="assets/img/444.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
        </div>
    </section>

    <footer>
        <p> Copyright &copy Michał Gromadzki 2018 </p>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <!-- <script type="text/javascript" src="assets/js/home.js"></script> -->

</body>

</html>