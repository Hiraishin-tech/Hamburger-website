<?php
$errors = [];
$name = null;
$surname = null;
$email = null;
$telephone = null;
$message = null;

$pohlavi = [
    "Muž", "Žena", "Jiné"
];

if (array_key_exists("Odeslat", $_POST)) {
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $message = $_POST["message"];
    $gender = $_POST["gender"];
    
    // Kontrola chyb v kontaktním formuláři
    if (mb_strlen($name) < 3) {
        $errors["name"] = "Jméno je neplatné";
    } 
    if (mb_strlen($surname) < 3) {
        $errors["surname"] = "Příjmené je neplatné";
    }

    if ($email === "") {
        $errors["email"] = "Email není zadaný";
    } else if (preg_match("/.+@.+\\..+/", $email) == false) {
        $errors["email"] = "Email je neplatný";
    }

    if (!preg_match("/^(\\+420)?[1-9][0-9]{8}$/", $telephone)) {
        $errors["telephone"] = "Telefonní číslo NEní platné";
    }

    if (mb_strlen($message) === 0) {
        $errors["message"] = "Musíte vyplnit váš dotaz";
    } else if (mb_strlen($message) < 5) {
        $errors["message"] = "Vaše zpráva je příliš krátká";
    }


}

?>

<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/hambuger-favicon.png">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/grid.css">
    <link rel="stylesheet" href="css/lightbox.min.css">
    <script src="js/lightbox-plus-jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/88b85df50e.js" crossorigin="anonymous"></script>
    <title>Tomas Burger</title>
</head>

<body>

    <header>
        <section>
            <div class="nav-menu row">
                <div id="logo">
                    <img src="images/logo2.png" alt="">
                </div>
                <nav>
                    <ul>
                        <li><a href="#" id="our-burgers">Naše burgery</a></li>
                        <li><a href="#" id="about-our-burgers">O našich Hamburgerech</a></li>
                        <li><a href="#" id="review">Recenze</a></li>
                        <li><a href="#" id="gallery">Galerie</a></li>
                        <li><a href="#" id="contact">Kontakt</a></li>
                    </ul>
                    <div class="clearfix"></div>
                </nav>
            </div>
        </section>


        <section>
            <div class="header-main">
                <div class="header-heading">
                    <h1>Ochutnejte naše výborné hamburgery ještě dnes</h1>
                </div>
                <div class="btn">
                    <a href="#" class="btn-full about-our-burgers">O nás</a>
                    <a href="#" class="btn-transparent" id="contact-button">Kontakt</a>
                </div>
            </div>
        </section>


    </header>

    <main>
        <section>
            <div class="main-heading row">
                <h2>Naše burgery</h2>
            </div>
            <div class="hamburger-images row">
                <ul>
                    <li class="col span-1-of-2"><img src="images/hamburger.png" alt=""></li>
                    <li class="col span-1-of-2"><img src="images/cheeseburger.png" alt=""></li>
                </ul>
            </div>
        </section>

        <section>
            <div class="main-heading row">
                <h2 id="about-our-burgers-heading">O našich Hamburgerech</h2>
            </div>
            <div class="our-burger row">
                <div class="col span-1-of-2">
                    <img src="images/baconburger2.png" alt="">
                </div>
                <div class="col span-1-of-2">
                    <div class="rank jedna">1</div>
                    <p>Naše hamburgery jsou tvořeny ze 100% masa.</p>
                    <div class="rank dva">2</div>
                    <p>Máme vlastní krávy, které chováme k pasení, tím pádem kvalita našeho masa je na špičkové úrovni.
                    </p>
                    <div class="rank">3</div>
                    <p>Samotný Gordon Ramsay pochválil naše burgery, když nás navštívil v roce 2019.</p>
                    <div class="rank">4</div>
                    <p>Každým rokem se snažíme inovovat a zlepšit naši recepturu, abychom byli stále
                        konkurenceschopnějšími.</p>
                </div>

            </div>
        </section>

        <section>
            <div class="customer-reference">
                <div class="main-heading row">
                    <h2 id="review-heading">Co o nás řekli naši zákazníci</h2>
                </div>
                <div class="reference row">
                    <div class="reference-people col span-1-of-3">
                        <p>Miluji jejich burgery. Chodím sem každý den, i když to není zdravý, protože vím, že neodolám
                            🤣.</p>
                        <img src="images/profile1.jpg" alt="">
                        <div class="signature">
                            <p>Roman Skočdopole</p>
                        </div>

                    </div>
                    <div class="reference-people col span-1-of-3">
                        <p>Obsluha tu je krásně přívětivá a vždycky na konci dne mi zvednou náladu, když je navštívím.
                        </p>
                        <img src="images/profile2.png" alt="">
                        <div class="signature">
                            <p>Igor Vodendal</p>
                        </div>

                    </div>
                    <div class="reference-people col span-1-of-3">
                        <p>Jsem ráda, že jsem je náhodou navštívila před 2 lety. Od té doby si dávám burgery jenom od
                            Tomas Burger.</p>
                        <img src="images/profile3.png" alt="">
                        <div class="signature">
                            <p>Jana Makovcová</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="main-heading2 row">
                <h2 id="gallery-heading">Jaké Burgery u nás můžete ochutnat</h2>
            </div>
            <div class="photo-gallery row">
                <ul>
                    <li class="col span-1-of-2"><a href="images/hamburger.png" data-lightbox="mygallery"
                            data-title="Hamburger"><img src="images/hamburger.png" alt=""></a></li>
                    <li class="col span-1-of-2"><a href="images/cheeseburger.png" data-lightbox="mygallery"
                            data-title="Cheeseburger"><img src="images/cheeseburger.png" alt=""></a></li>
                </ul>
                <ul>
                    <li class="col span-1-of-2"><a href="images/chickenburger.png" data-lightbox="mygallery"
                            data-title="Kuřecí burger"><img src="images/chickenburger.png" alt=""></a></li>
                    <li class="col span-1-of-2"><a href="images/lambburger.png" data-lightbox="mygallery"
                            data-title="Jehněčí burger"><img src="images/lambburger.png" alt=""></a></li>
                </ul>
                <ul>
                    <li class="col span-1-of-2"><a href="images/veggieburger.png" data-lightbox="mygallery"
                            data-title="Veganský burger"><img src="images/veggieburger.png" alt=""></a></li>
                    <li class="col span-1-of-2"><a href="images/baconburger.png" data-lightbox="mygallery"
                            data-title="Slaninový burger"><img src="images/baconburger2.png" alt=""></a></li>
                </ul>
            </div>
        </section>

        <section>
            <div class="main-heading row">
                <h2 id="contact-form">Zeptejte se nás na cokoli</h2>
            </div>
            <form action="#contact-form" method="POST">
                <div>
                    <input type="text" placeholder="Jméno" name="name" value="<?= $name ?>"><br>
                    <?php if (array_key_exists("name", $errors)) echo $errors["name"] ?>
                </div>
                
                <div>
                    <input type="text" placeholder="Příjmení" name="surname" value="<?= $surname ?>"><br>
                    <?php if (array_key_exists("surname", $errors)) echo $errors["surname"] ?>
                </div>
                
                <div>
                    <input type="email" placeholder="Email" name="email" value="<?= $email ?>"><br>
                    <?php if (array_key_exists("email", $errors)) echo $errors["email"] ?>
                </div>
                
                <div>
                    <input type="text" placeholder="Telefon" name="telephone" value="<?= $telephone ?>"><br>
                    <?php if (array_key_exists("telephone", $errors)) echo $errors["telephone"] ?>
                </div>
                
                <div>
                    <textarea cols="25" rows="8" placeholder="Napište svoji zprávu." name="message"><?= $message ?></textarea><br>
                    <?php if (array_key_exists("message", $errors)) echo $errors["message"] ?>
                </div>
                
                <select name="gender">
                    <option value="Muž">Muž</option>
                    <option value="Žena">Žena</option>
                    <option value="Jiné">Jiné</option>
                </select><br>
                <input type="submit" name="Odeslat" value="odeslat"><br>
            </form>
        </section>

    </main>

    <footer class="contact">
        <div class="social-contact row">
            <a href="https://www.facebook.com/" target="_blank"><img src="images/facebook-logo.png" alt=""
                    class="facebook-logo"></a>
            <a href="https://www.instagram.com/" target="_blank"><img src="images/instagram-logo.png" alt=""></a>
        </div>
        <div class="text-contact row" id="contact-heading">
            <p class="tel-contact">Tel. kontakt: +420 123 456 789</p>
            <p>Tomas Burger &copy; Všechna práva vyhrazena.</p>
        </div>

    </footer>
<div class="arrow"><i class="fa-solid fa-arrow-up-long"></i></div>

<script src="js/index.js"></script>
</body>

</html>