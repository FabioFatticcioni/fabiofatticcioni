<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "fabiofatticcioni8@gmail.com";
    $subject = "Message from $name";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error in sending message. :(";
    }
} else {
    echo "Access not allowed.";
}
?>
