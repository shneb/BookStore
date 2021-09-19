<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>BookStore | Contact</title>
</head>
<body>
<header>
        <a href="index.html" class="navLogo">BOOK|STORE</a>
        <nav>
            <ul>
                <li><a href="index.html" title="Home page for Book Store">Home</a></li>
                <li><a href="books.html" title="product page for Book Store">Books</a></li>
                <li><a href="about.html"  title="about page for Book Store">About</a></li>
                <li><a href="contact.php" class="active" title="contact page for Book Store">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="contactBanner" aria-label="books in shelfs">
            <form class="contactForm" action="" method="get">
                <label id="error"></label>
                <label for="fullName">Full Name</label>
                    <input id="fullName" name="name" type="text" placeholder="Full name...">
                <label for="emailAddress">Email Address</label>
                    <input id="emailAddress" name="mail" type="text" placeholder="email@domain.com">
                <label for="subject">subject</label>
                    <input id="subject" name="subject" type="text" placeholder="subject">
                <label for="message">Message</label>
                    <textarea name="message" id="message" placeholder="message"></textarea>
                <button type="submit" name="submit" >Send</button>
            </form>
        </section>
    </main>
    <footer>
        <ul>
            <li><a href="#">Terms & conditions</a></li>
            <li><a href="#">Return Policy</a></li>
        </ul>
    </footer>
    <script src="js/contactValidation.js"></script>
</body>
</html>