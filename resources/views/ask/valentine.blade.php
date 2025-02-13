<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Lora:ital,wght@0,400..700;1,400..700&family=Oswald:wght@200..700&display=swap"
        rel="stylesheet">
    <title>Will you be my valentine?</title>
</head>

<body>
    <div class="container">
        <div class="questionsContainer">
            <h1>Will you be my valentine?</h1>
            <div class="imageContainer">
                <img src="/assets/pictures/flowers.png" alt="">
            </div>
            <div class="buttonContainer">
                <button type="submit" class="button">Yes</button>
                <button type="submit" class="button">No</button>
            </div>
        </div>
    </div>
</body>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const container = document.querySelector(".container");
        const yesButton = document.querySelector(".button:first-child");
        const noButton = document.querySelector(".button:last-child");

        function moveNoButton() {
            // Get container size
            const containerRect = container.getBoundingClientRect();
            const buttonWidth = noButton.offsetWidth;
            const buttonHeight = noButton.offsetHeight;

            // Generate random position **within the container boundaries**
            const randomX = Math.random() * (containerRect.width - buttonWidth);
            const randomY = Math.random() * (containerRect.height - buttonHeight);

            // Move the "No" button
            noButton.style.position = "absolute";
            noButton.style.left = `${randomX}px`;
            noButton.style.top = `${randomY}px`;
        }

        function showYippie() {
            // Remove everything
            container.innerHTML = "";

            // Create a new "Yippie!" text
            const yippieText = document.createElement("h1");
            yippieText.textContent = "Yippie! 🎉";
            yippieText.style.fontSize = "50px";
            yippieText.style.color = "#ff4d6d";
            yippieText.style.textAlign = "center";

            // Append to container
            container.appendChild(yippieText);
        }

        // Attach event listeners
        noButton.addEventListener("click", moveNoButton);
        yesButton.addEventListener("click", showYippie);
    });
</script>


</html>