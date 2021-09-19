<?php

// setting the connection

$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "creditcard";

$conn = mysqli_connect($serverName, $userName, $password, $dbName);

if(!$conn){
    die("error: " . mysqli_connect_error());
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
  // setting up variables
  $expiryYear = $_POST['expiryYear'];
  $expiryMonth = $_POST['expiryMonth'];
  $cardNumber = $_POST['cardNumber'];
  $cvv = $_POST['cvv'];

  // making the date into right format
  $date = $expiryYear.$expiryMonth."01" ;
  $expiryDate = date("Y-m-d", strtotime($date));
  // encripting the card number
  $hashedccnum = md5($cardNumber);
  // inserting data into the data base
  $sql = "INSERT INTO `card` (`#`, `ccnum`, `expdate`, `seccode`) VALUES (`#`, '$hashedccnum', '$expiryDate', '$cvv')";
  // setting up a variable to show the last 4 digits
  $regexp = "/^\d{12}/";
  $txtRpl = "**** **** **** ";
  $disNumber = preg_replace($regexp, $txtRpl, $cardNumber);

if (mysqli_query($conn, $sql)) {

  $message = "The payment has been successful.";
} else {
  $message = "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

        <title>BookStore | successful</title>

    </head>
    <body>
    <header>
        <a href="index.html" class="navLogo">BOOK|STORE</a>
        <nav>
            <ul>
                <li><a href="index.html" title="Home page for Book Store">Home</a></li>
                <li><a href="books.html" title="product page for Book Store">Books</a></li>
                <li><a href="about.html"  title="about page for Book Store">About</a></li>
                <li><a href="contact.php" title="contact page for Book Store">Contact</a></li>
            </ul>
        </nav>
    </header>
        <main>
          <section class="paymentBanner">
            <section class="paymentForm">
              <h1><?=$message?></h1>
              <h2>Your credit card number ends in  <?=$disNumber?></h2>
              <button><a href="index.html">Home Page!</a></button>
            </section>
          </section>
        </main>
        <footer>
          <ul>
              <li><a href="#">Terms & conditions</a></li>
              <li><a href="#">Return Policy</a></li>
          </ul>
        </footer>
</body>
</html>