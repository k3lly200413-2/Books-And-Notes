<?php
    // require_once("bootstrap.php");

    // Keeping to remember how it works

    // $templateParams["titolo"] = "Blog TW - Home";
    // $templateParams["nome"] = "lista-articoli.php";
    // $templateParams["articolicasuali"] = $dbh->getRandomPosts(2);
    // $templateParams["categorie"] = $dbh->getCategories();
    
    // what I may actually need

    // $templateParams["bestSellers"] = $dbh->getBestSellers();

    $bestSeller = [
        [
            'id'        => 1,
            'title'     => 'Onyx Storm',
            'author'    => 'Rebecca Yarros',
            'image'     => './img/a2b17204-7a8b-4319-88c1-497ffad67192.webp',
            'rating'    => 4.4,
            'price'     => 10.00,
            'old_price' => 13.00,
        ],
        // [
        //     'id'     => 2,
        //     'title'  => 'Fourth Wing',
        //     'author' => 'Rebecca Yarros',
        //     'image'  => './img/fourth-wing.webp',
        //     'rating' => 4.6,
        //     'price'  => 9.50,          // no old_price, so that element is skipped
        // ],
    ];

    require("home.php");
?>