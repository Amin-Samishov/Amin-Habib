<?php
/*
    Milkshake with strawberries recipe
    1. Milk - 200 ml
    2. Strawberries - 200 gram
    3. Honey - 1 tablespoon
*/

    function makeMilkshakeWithStrawberries
    (   int $milk,
        int $strawberries,
        int $honey,
        string $good_words
    )
        {
            echo 
            "1. Put the $strawberries gram strawberries and $honey tablespoon honey in a blender;<br>".
            "2. Pureeing until smooth;<br>".
            "3. Add the $milk ml milk to the strawberry mass and whisk thoroughly again;<br>".
            $good_words;

            /*
                How to make a milkshake with strawberries:
                1. Put strawberries and honey in a blender.
                2. Pureeing until smooth.
                3. Add the milk to the strawberry mass and beat thoroughly again.
                4. That's it - a milkshake with strawberries is ready. 
                5. Pour the cocktail into glasses and serve, preferably with a straw.
            */
        }

    makeMilkshakeWithStrawberries(200, 200, 1, "Enjoy!")
?>