<?php

/** @var string $title */
/** @var string $content */
/** @var array $buttonGroup */

if (!$buttonGroup) {
    $buttonGroup = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Nieuws</a></li>
                <li><a href="">Over ons</a>

                    <ul>
                        <li><a href="">Wie zijn wij?</a></li>
                        <li><a href="">Portofolio</a></li>
                    </ul>
                <li><a href="">Contact</a></li>
            </ul>
        </nav>
    </header>

    <div id="masthead">
        <div class="slider-item active">
            <img src="https://external-content.duckduckgo.com/iu/?u=http%3A%2F%2Fnowboarding.changiairport.com%2Fcontent%2Fcanowboarding%2Fen%2Fgo-global%2F4-rollercoaster-rides-for-the-ultimate-adrenaline-junkie.img.png%2F1519263540966.jpg&f=1&nofb=1" alt=""></img>
            <div class="slider-content">
                <h2></h2>
                <span></span>
            </div>
        </div>

        <div class="slider-item">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fwww.pcgamesn.com%2Fwp-content%2Fuploads%2F2020%2F09%2Frollercoaster-tycoon-3-platinum-complete-edition-release-date.jpg&f=1&nofb=1" alt=""></img>
            <div class="slider-content">
                <h2></h2>
                <span></span>
            </div>
        </div>

        <div class="slider-item">
            <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F1.bp.blogspot.com%2F-gwbVt-2BlnQ%2FTlw3gaaBPHI%2FAAAAAAAAAA4%2FAMjIewQm-GE%2Fs1600%2Fhulk.jpg&f=1&nofb=1" alt=""></img>
            <div class="slider-content">
                <h2></h2>
                <span></span>
            </div>
        </div>
    </div>
</body>

</html>

<div class="home">
    <?php if ($buttonGroup) : ?>
        <?php render('views/molecules/button-collection.php', compact('buttonGroup')); ?>
    <?php endif; ?>

</div>