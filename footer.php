<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'];

    $to = "reymould.social@gmail.com";
    $subject = "Enquiry from aquasite  website";
    $body = "Email: $email";

    // Send email to both recipients
    mail("pravallika.pentakota@reymould.com", $subject, $body);

    if (mail($to, $subject, $body)) {
        header("Location: contact.html?emailSuccess=true");
    } else {
        header("Location: contact.html?emailSuccess=false");
    }
    exit;
}
?>