<?php
/*
  Clementine mock mojito Recipe
  Ingredients:
    * 1 clementine
    * ½ tsp demerara sugar
    * 1 lemon wedge, chopped
    * ice
    * small handful of mint, woody stalks removed
    * a few drops of orange blossom water
    * sparkling water, to top up
*/

function makeClementineMojito(
  int $clementine,
  float $demerara_sugar,
  int $lemon_wedges,
  string $ice,
  string $mint,
  string $orange_blossom_water,
  string $sparkling_water
) {
  // It's hard to make math operations inside a string, so we make it out of the string itself
  $half_clementine = $clementine / 2;
  echo
  "<h1>Clementine mock mojito Recipe</h1>
    <p>Enjoy this mock clementine mojito as a non-alcoholic option at a party. With clementine, orange blossom water and sparkling water, it's fabulously refreshing</p>
    <h2>STEP 1</h2>
      <p>Juice $half_clementine of the clementine and chop the other $half_clementine into small pieces. Pour the juice into a glass and stir in $demerara_sugar teaspoon of the sugar. Tip in the chopped clementine and $lemon_wedges lemon, then crush using a muddler.</p>
    <h2>STEP 2</h2>
      Add a handful of $ice, the $mint and $orange_blossom_water. Top up slowly with $sparkling_water.";
}

makeClementineMojito(1, 0.5, 1, 'ice', 'mint', 'orange blossom water', 'sparkling water');

/*
    Milkshake with banana recipe
    1. Milk - 200 ml
    2. Banana - 200 gram
    3. Ice-Cream - 100 gram
*/

function makeMilkshakeWithBanana(
  int $milk,
  int $banana,
  int $ice_cream,
  string $good_words
) {
  echo
    "1. Put the $banana gram banana and $ice_cream gram honey in a blender;<br>" .
    "2. Pureeing until smooth;<br>" .
    "3. Add the $milk ml milk to the banana mass and whisk thoroughly again;<br>" .
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

makeMilkshakeWithBanana(200, 200, 100, "Enjoy!");

/*
  Milkshake with strawberries recipe
    1. Milk - 200 ml
    2. Strawberries - 200 gram
    3. Honey - 1 tablespoon
*/

function makeMilkshakeWithStrawberries(
  int $milk,
  int $strawberries,
  int $honey,
  string $good_words
) {
  echo
    "1. Put the $strawberries gram strawberries and $honey tablespoon honey in a blender;<br>" .
    "2. Pureeing until smooth;<br>" .
    "3. Add the $milk ml milk to the strawberry mass and whisk thoroughly again;<br>" .
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

makeMilkshakeWithStrawberries(200, 200, 1, "Enjoy!");
