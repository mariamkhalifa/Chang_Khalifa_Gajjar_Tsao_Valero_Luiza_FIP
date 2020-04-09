<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://use.typekit.net/its0ltk.css">
    <link rel="stylesheet" href="https://use.typekit.net/its0ltk.css">
    <link rel="icon" type="image/x-icon/" href="images/favicon.ico">
    <link href="css/main.css" rel="stylesheet" type="text/css">

    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2.5.15/dist/vue.js"></script> -->
    <script src="https://unpkg.com/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-router/dist/vue-router.js"></script>
    <script src="https://kit.fontawesome.com/cfa5b23a00.js" crossorigin="anonymous"></script>

    <title>Keep It Neutral Campaign</title>
</head>

<body>
    <main id="app">
    <h1 class="hidden">Keep It Neutral</h1>
    <header class="header">
        <h2 class="hidden">Main Navigation</h2>
        <a href="index.php" class="logo">
            <picture>
                <source srcset="images/kin_logo.svg" media="(min-width: 767px)">
                <img src="images/kin_symbol.svg" alt="logo">
            </picture>
        </a>
        <img v-on:click="expandBurger" class="burger" :class="{'rotated':burger.isExpanded}" src="images/burger_menu.svg" alt="burger menu">
        <div class="nav-wrapper" :class="{'visible':burger.isExpanded}">
            <div class="title-close">
                <h3>Keep It Neutral</h3>
                <p v-on:click="closeBurger" class="close-nav">X</p>
            </div>
            <ul class="nav">
                <li>
                    <a href="index.php">Home</a>
                    <div class="link1"><div>
                </li>
                <li>
                    <a href="facts.php">Facts</a>
                    <div class="link2"><div>
                </li>
                <li>
                    <a href="community.php">Community</a>
                    <div class="link3"><div>
                </li>
                <li>
                    <a href="contact.php">Contact</a>
                    <div class="link4"><div>
                </li>
            </ul>
            <ul class="h-social-media">
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-snapchat"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </header>

    <router-view></router-view>

    <footer class="footer">
        <h2 class="hidden">Footer</h2>
        <ul class="f-nav">
            <h3>All Links</h3>
                <li><a href="index.php">Home</a></li>
                <li><a href="facts.php">Facts</a></li>
                <li><a href="community.php">Community</a></li>
                <li><a href="contact.php">Contact</a></li>
        </ul>
        <ul class="f-social-media">
            <h3>Stay Connected</h3>
            <div class="f-social-icons">
                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-snapchat"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-youtube"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            </div>
        </ul>
        <div class="subscribe">
            <h3>Want to Stay Neutral?</h3>
            <p>Sign up to our newsletter for community events, updates, and contests.</p>
            <form class="subs-form" action="includes/subscribe.php" method="post">
                <label for="email">Email Address *</label>
                <input id="email" name="email" type="email" required>
                <input id="subs-submit" type="submit" value="SUBMIT">
            </form>
        </div>
        <img class="f-logo" src="images/kin_symbol.svg" alt="logo">
        <h3 class="f-title">Keep It Neutral</h3>
        <div class="f-symbol">
            <img src="images/footer_symbol2.svg" alt="footer decoration">
        </div>
    </footer>
   
    <p class="reg-trademark">Keep It Neutral &copy; 2020. All Rights Reserved.</p>
    </main>

    <script src="js/main.js" type="module"></script>
</body>
</html>