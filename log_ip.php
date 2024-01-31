<?php
// Log the IP address when the "Yes" button is clicked
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['yesClicked'])) {
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    file_put_contents('yes_clicks.log', $ipAddress . PHP_EOL, FILE_APPEND);
}
?>
