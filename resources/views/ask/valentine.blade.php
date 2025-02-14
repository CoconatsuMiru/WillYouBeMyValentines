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

        let fleeSpeed = 20; // Initial speed of fleeing
        const fleeDistance = 200; // Distance from cursor to trigger flee

        function fleeFromCursor(event) {
            const buttonRect = noButton.getBoundingClientRect();
            const containerRect = container.getBoundingClientRect();
            const cursorX = event.clientX;
            const cursorY = event.clientY;
            const buttonCenterX = buttonRect.left + buttonRect.width / 2;
            const buttonCenterY = buttonRect.top + buttonRect.height / 2;

            const distanceX = cursorX - buttonCenterX;
            const distanceY = cursorY - buttonCenterY;
            const distance = Math.sqrt(distanceX ** 2 + distanceY ** 2);

            if (distance < fleeDistance) {
                let moveX = (distanceX / distance) * fleeSpeed;
                let moveY = (distanceY / distance) * fleeSpeed;

                // New position
                let newX = buttonRect.left - moveX;
                let newY = buttonRect.top - moveY;

                // Ensure it stays within container boundaries
                newX = Math.max(containerRect.left, Math.min(newX, containerRect.right - buttonRect.width));
                newY = Math.max(containerRect.top, Math.min(newY, containerRect.bottom - buttonRect.height));

                noButton.style.position = "absolute";
                noButton.style.left = `${newX - containerRect.left}px`;
                noButton.style.top = `${newY - containerRect.top}px`;

                fleeSpeed += 10; // Increase speed when the mouse gets closer
            }
        }

        function showYippie() {
            container.innerHTML = "";

            const yippieText = document.createElement("h1");
            yippieText.textContent = "Yippie! 🎉";
            yippieText.style.fontSize = "50px";
            yippieText.style.color = "#ff4d6d";
            yippieText.style.textAlign = "center";

            container.appendChild(yippieText);
        }

        // Attach event listeners
        yesButton.addEventListener("click", showYippie);
        document.addEventListener("mousemove", fleeFromCursor);
    });
</script>

</html>