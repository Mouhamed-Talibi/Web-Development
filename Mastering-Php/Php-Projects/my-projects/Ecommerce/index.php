<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playwrite+DE+Grund:wght@100..400&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Website</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body {
            font-family: 'Playwrite DE Grund', sans-serif;
            background-color: black;
            color: white;
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: silver;
            padding: 10px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }

        .login{
            background-color: green;
            color: white;
            border-radius: 3px;
            padding: 5px;
            width: 20px;
        }

        nav a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        main {
            padding: 20px;
        }

        .section-clothes, .section-computers, .section-books, .section-fruits {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
            padding: 15px;
            background-color: #222;
            border-radius: 10px;
        }

        .section-clothes .text, .section-books .text {
            order: 1; /* Text on left */
        }

        .section-computers .text, .section-fruits .text {
            order: 2; /* Text on right */
        }

        .text {
            flex: 1;
            padding: 20px;
        }

        .image {
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .section-image {
            width: 400px;
            height: 350px;
            object-fit: cover;
            border-radius: 10px;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: silver;
        }

        footer a {
            color: white;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Infos</a></li>
        <li><a href="#">Contact-Us</a></li>
        <li><a href="front/login.php" class="login">Login</a></li>
        </ul>
    </nav>
    
    <!-- Main Content Section -->
    <main>
        <!-- Section 1: Clothes -->
        <div class="section-clothes">
        <div class="text">
            <p>Welcome to our <span>online store</span>, where you can discover everything you need to elevate your wardrobe! Whether you're searching for the latest trends, timeless classics, or unique pieces, we have a diverse selection of clothing to suit every style and occasion. Enjoy a seamless shopping experience as you browse through our collection and find the perfect outfits to express your individuality. Your dream wardrobe awaits!</p>
        </div>
        <div class="image">
            <img src="front_images/man.jpg" alt="Clothes Image" class="section-image">
        </div>
        </div>
        
        <!-- Section 2: computers -->
        <div class="section-computers">
        <div class="image">
            <img src="front_images/computer_store.jpg" alt="computer Image" class="section-image">
        </div>
        <div class="text">
            <p>Here, you can explore a wide range of products, from the latest laptops and desktops to essential accessories and peripherals. Whether you're a gamer, a creative professional, or just looking to upgrade your setup, we have the perfect solutions to meet your needs. Dive into our collection and discover the technology that will enhance your productivity and bring your digital experiences to life!</p>
        </div>
        </div>
        
        <!-- Section 3: books -->
        <div class="section-books">
        <div class="text">
            <p>you'll find an extensive collection of books across various genres, from gripping fiction and insightful non-fiction to enchanting children's stories and educational resources. Whether you're a passionate reader, a student, or someone looking to explore new worlds, our curated selection offers something for everyone. Dive into the pages of your next great read and let your imagination soar!</p>
        </div>
        <div class="image">
            <img src="front_images/books_store.jpg" alt="books Image" class="section-image">
        </div>
        </div>
        
        <!-- Section 4: fruits -->
        <div class="section-fruits">
        <div class="image">
            <img src="front_images/fruit_store.jpg" alt="fruits Image" class="section-image">
        </div>
        <div class="text">
            <p>Indulge in the vibrant world of fresh fruits! Our collection features a delightful variety of seasonal and exotic fruits, bursting with flavor and nutrition. Whether you're looking for a sweet snack, a refreshing smoothie ingredient, or the perfect addition to your meals, we have something for every palate. Explore our selection and enjoy the natural goodness of fruits that not only satisfy your cravings but also nourish your body. Taste the freshness and embrace a healthier lifestyle!</p>
        </div>
        </div>
    </main>
    
    <!-- Footer Section -->
    <footer>
        <p>Developed By <span>Mouhamed Talibi</span></p>
        <br>
        Follow Us On :
        <br>
        ↪ <a href="#">Our Instagram</a> <br>
        ↪ <a href="#">Our Github</a>
        <p>&copy; 2024 Shopping Website</p>
    </footer>
</body>
</html>