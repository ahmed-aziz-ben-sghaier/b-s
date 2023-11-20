<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $cardNumber = $_POST["cardNumber"];
    $expiryMonth = $_POST["expiryMonth"];
    $expiryYear = $_POST["expiryYear"];
    $cvv = $_POST["cvv"];
    

    echo "Name: $name<br>";
    echo "Phone: $phone<br>";
    echo "Address: $address<br>";
    echo "Card Number: $cardNumber<br>";
    echo "Expiration Date: $expiryMonth/$expiryYear<br>";
    echo "CVV: $cvv<br>";
    
    echo "Félicitations ! Votre achat en ligne a été validé avec succès. Si vous avez des questions ou si vos coordonnées nécessitent une correction, veuillez nous contacter par e-mail à [votre@email.com]. Merci pour votre achat" ;
}
?>
