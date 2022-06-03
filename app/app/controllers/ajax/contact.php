<?php

if(isset($_POST['submit'])){

$data = json_encode($_POST);

mail("imagiobox@gmail.com","New Enquiry from Website",$data);

header("Location: https://colorpencil.me/index.php/Avesacademy_c/contactus?success=1");
}
?>
