<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <title>BookStore | payment</title>
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
                <form class="paymentForm" action="success.php" method="POST">
                    <img class="acceptedCards" src="img/icons.png" alt="Merchant Credit Card Logos"/>
                    <label for="cardType" class="paymentLabel">Card Type:</label>
                        <select id="cardType" name="card">
                            <option>Visa card</option>
                            <option>Amex</option>
                            <option>Mastercard</option>
                            <option>JCB Card</option>
                            <option>Maestro Card</option>
                        </select>
                    <label for="cardNumberInput">Card number:</label>
                        <input type="text" id="cardNumberInput" name="cardNumber" placeholder="1234 1234 1234 1234">
                        <p id="cardNumberError"></p>
                        <article id="expiryContainer">
                    <label for="expiryMonth">Expiry date:</label>
                        <select id="expiryMonth" name="expiryMonth">
                            <option selected> Month </option>
                            <option>12</option>
                        </select>
                        <select id="expiryYear" name="expiryYear">
                            <option selected>2021</option>
                            <option>2030</option>
                        </select>
                        <p id="expiryError"></p>
                        </article>
                    <label for="cvvInput">CVV:</label>
                        <input type="text" name="cvv" id="cvvInput" placeholder="123" maxlength="4">
                        <p id="cvvError"></p>
                        <input type="hidden" name="hidden" id="hidden" value="" >
                        <button id="btn" type="submit" name="submit">Cuntinue</button>
                </form>
            </section>
        </main>
        <footer>
            <ul>
                <li><a href="#">Terms & conditions</a></li>
                <li><a href="#">Return Policy</a></li>
            </ul>
        </footer>
        <script src="js/paymentValidation.js"></script>
    </body>
</html>