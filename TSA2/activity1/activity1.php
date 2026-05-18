<!DOCTYPE html>
<html>
<head>
    <title>TSA 2 - Fruit Directory</title>
    <link rel="stylesheet" href="activity1.css">
</head>
<body>

<div class="container">

    <h1>Fruits Basket</h1>
    <p class="subtitle">A simple PHP array activity showing fruits, descriptions, and facts.</p>

    <?php
        $fruits = array(
            array(
                "name" => "Apple",
                "image" => "fruits/apple.png",
                "description" => "Apple is a sweet and crunchy fruit that is commonly eaten fresh.",
                "facts" => "Apples are rich in fiber and vitamin C."
            ),
            array(
                "name" => "Banana",
                "image" => "fruits/banana.png",
                "description" => "Banana is a soft and sweet fruit with a yellow peel when ripe.",
                "facts" => "Bananas are a good source of potassium."
            ),
            array(
                "name" => "Dragon Fruit",
                "image" => "fruits/dragonfruit.png",
                "description" => "Dragon fruit is a tropical fruit with bright skin and soft flesh.",
                "facts" => "Dragon fruit contains antioxidants and fiber."
            ),
            array(
                "name" => "Grapes",
                "image" => "fruits/grapes.png",
                "description" => "Grapes are small round fruits that can be green, red, or purple.",
                "facts" => "Grapes can be eaten fresh or used to make juice."
            ),
            array(
                "name" => "Mango",
                "image" => "fruits/mango.png",
                "description" => "Mango is a sweet tropical fruit known for its juicy yellow flesh.",
                "facts" => "Mangoes are rich in vitamin A and vitamin C."
            ),
            array(
                "name" => "Orange",
                "image" => "fruits/orange.png",
                "description" => "Orange is a citrus fruit with a sweet and sour taste.",
                "facts" => "Oranges are well known for having vitamin C."
            ),
            array(
                "name" => "Papaya",
                "image" => "fruits/papaya.png",
                "description" => "Papaya is a soft orange fruit usually eaten fresh when ripe.",
                "facts" => "Papaya helps support digestion."
            ),
            array(
                "name" => "Pineapple",
                "image" => "fruits/pineapple.png",
                "description" => "Pineapple is a tropical fruit with a sweet and tangy flavor.",
                "facts" => "Pineapple contains bromelain, which helps break down protein."
            ),
            array(
                "name" => "Strawberry",
                "image" => "fruits/strawberry.png",
                "description" => "Strawberry is a red fruit with a sweet and slightly sour taste.",
                "facts" => "Strawberries are rich in antioxidants."
            ),
            array(
                "name" => "Watermelon",
                "image" => "fruits/watermelon.png",
                "description" => "Watermelon is a large fruit with juicy red flesh and black seeds.",
                "facts" => "Watermelon has high water content and helps keep the body hydrated."
            )
        );

        sort($fruits);
    ?>

    <div class="fruit-grid">

        <?php
            foreach ($fruits as $fruit) {
                echo "<div class='fruit-card'>";
                echo "<img src='" . $fruit["image"] . "' alt='" . $fruit["name"] . "'>";
                echo "<div class='fruit-info'>";
                echo "<h2>" . $fruit["name"] . "</h2>";
                echo "<p><b>Description:</b> " . $fruit["description"] . "</p>";
                echo "<p><b>Facts:</b> " . $fruit["facts"] . "</p>";
                echo "</div>";
                echo "</div>";
            }
        ?>

    </div>

</div>

</body>
</html>