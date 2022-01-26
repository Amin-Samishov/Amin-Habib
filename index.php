<?php
/*
    Milkshake with banana recipe
    1. Milk - 200 ml
    2. Banana - 200 gram
    3. Ice-Cream - 100 gram
*/

    function makeMilkshakeWithBanana
    (   int $milk,
        int $banana,
        int $ice_cream,
        string $good_words
    )
        {
            echo 
            "1. Put the $banana gram banana and $ice_cream gram honey in a blender;<br>".
            "2. Pureeing until smooth;<br>".
            "3. Add the $milk ml milk to the banana mass and whisk thoroughly again;<br>".
            $good_words;

            /*
                How to make a milkshake with banana:
                1. Put banana and ice-cream in a blender.
                2. Pureeing until smooth.
                3. Add the milk to the banana mass and beat thoroughly again.
                4. That's it - a milkshake with banana is ready. 
                5. Pour the cocktail into glasses and serve, preferably with a straw.
            */
        }

    makeMilkshakeWithBanana(200, 200, 100, "Enjoy!")








?>