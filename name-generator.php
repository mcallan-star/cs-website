<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Kitty Name Generator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>🎀 Hello Kitty Name Generator 🎀</header>

    <nav>
        <a href="index.php">Back to Gallery</a>
    </nav>

    <div class="container">
        <h1>🌸 Get Your Hello Kitty Name! 🌸</h1>
        <p>Click the button below to receive a super cute Hello Kitty name!</p>

        <?php
            function generateHelloKittyName() {
                $adjectives = ["Fluffy", "Sparkly", "Sweet", "Snuggly", "Bouncy", "Chirpy", "Peachy", "Cuddly", "Fuzzy", "Dreamy"];
                $nouns = ["Paws", "Mittens", "Cupcake", "Pudding", "Marshmallow", "Twinkle", "Mochi", "Rainbow", "Sprinkle", "Cherry"];

                $randomAdj = $adjectives[array_rand($adjectives)];
                $randomNoun = $nouns[array_rand($nouns)];

                return $randomAdj . " " . $randomNoun;
            }

            if (isset($_POST['generate'])) {
                $helloKittyName = generateHelloKittyName();
                echo "<h2>Your Hello Kitty Name: <span class='name'>$helloKittyName</span> 🎀</h2>";
            }
        ?>

        <form method="POST">
            <button type="submit" name="generate">Generate Name</button>
        </form>
    </div>

    <footer>&copy; 2025 Hello Kitty Fan Site. All rights reserved.</footer>
</body>
</html>
