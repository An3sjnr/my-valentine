<!DOCTYPE html>
<html lang="af">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sal jy my Valentyn wees?</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffcccc; /* Light red background */
            text-align: center;
            padding: 50px;
        }

        h1 {
            color: #ff69b4; /* Pink text */
            font-size: 36px; /* Larger font size */
        }

        .flowers {
            font-size: 72px;
            color: #ff69b5; /* Pink flowers */
        }

        #message {
            display: none;
            margin-top: 20px;
            font-size: 24px;
            color: #333; /* Dark text */
            max-width: 600px; /* Limit message width */
            margin: 20px auto; /* Center message */
            animation: fadeIn 1.5s ease forwards; /* Fade-in animation */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .bubble {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            background-color: #ffffff; /* White bubble background */
            padding: 10px 20px;
            border-radius: 20px;
            display: none;
            z-index: 1;
            font-size: 18px;
            color: #ff69b4; /* Pink text */
        }

        #noButton {
            padding: 10px 20px; /* Padding adjusted */
            font-size: 18px;
            background-color: #ffffff; /* White button */
            border: 2px solid #ff69b4; /* Pink border */
            border-radius: 20px;
            cursor: pointer;
            color: #ff69b4; /* Pink text */
            transition: background-color 0.7s ease;
            position: absolute;
            bottom: 20px; /* Align to bottom */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Center horizontally */
            height: 45px; /* Allow button to adjust height based on content */
        }

        #noButton:hover {
            background-color: #ff69b4; /* Pink background on hover */
            color: #ffffff; /* White text on hover */
        }

        #yesButton {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #ff69b4; /* Pink button */
            border: none;
            cursor: pointer;
            color: #ffffff; /* White text */
            border-radius: 20px;
            transition: background-color 0.3s ease;
            
        }


        #yesButton:hover {
            background-color: #ffcccc; /* Light pink background on hover */
        }
    </style>
</head>
<body>
    <h1>Liewe Maryke,</h1>
    <h1>Sal jy my Valentyn wees?</h1>
    <div class="flowers">
        🌹💖🌹
    </div>
    <div id="message">
        <p>Elke oomblik saam met jou is 'n seen, en ek koester die liefde wat ons deel. Jy is vir my so spesiaal en ek kan nie wag om meer spesiale oomblikke saam met jou te deel nie. Dankie dat jy my Valentyn sal wees♥.</p>
    </div>
    <div id="bubble" class="bubble">Die NEE is net hier vir kosmetiese doeleindes</div>
    <div id="piet" class="bubble">Jy kan maar stop click dit werk ni :/ </div>
    <button id="yesButton" onclick="showMessage()">Ja</button>
    <button id="yesButton" onclick="trackYesButtonClick()">Ja</button>

    <button id="noButton" onclick="showBubble()">Nee</button>

    <script>
// Function to send a POST request to log_ip.php when the "Yes" button is clicked
function trackYesButtonClick() {
    // Create a new XMLHttpRequest object
    var xhr = new XMLHttpRequest();
    
    // Prepare the POST request
    xhr.open('POST', 'log_ip.php', true);
    
    // Set the content type
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
    // Send the POST request with a parameter indicating that "Yes" was clicked
    xhr.send('yesClicked=true');
}
        
        var clickCount = 0;

        function moveButton() {
            var button = document.getElementById("noButton");
            var newX = Math.random() * (window.innerWidth - button.offsetWidth);
            var newY = Math.random() * (window.innerHeight - button.offsetHeight);
            button.style.left = newX + "px";
            button.style.top = newY + "px";
        }

        function showBubble() {
            clickCount++;
            if (clickCount >= 3 ) {
                var bubble = document.getElementById("bubble");
                bubble.style.display = "block";
            }
            if (clickCount >= 5) {
                
                var bubble = document.getElementById("piet");
                bubble.style.display = "block";
            }
            moveButton();
        }

        function showMessage() {
            var bubble = document.getElementById("bubble");
            bubble.style.display = "none";
            document.getElementById("message").style.display = "block";
            document.getElementById("noButton").style.display = "none";
            document.getElementById("yesButton").style.display = "none";
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Initially position the No button next to the Yes button
            var yesButton = document.getElementById("yesButton");
            var noButton = document.getElementById("noButton");
            var rect = yesButton.getBoundingClientRect();
            noButton.style.left = rect.right + 45+"px";
            noButton.style.top = rect.top + "px";
        });
    </script>
</body>
</html>
