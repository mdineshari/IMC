$headers = "MIME-Version: 1.0" . "\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\n";

$htmlContent = file_get_contents("email_template.html");

// send email HTML
mail($to, $subject, $htmlContent, $headers); 