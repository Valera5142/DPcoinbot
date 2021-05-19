<?php
session_start();
$email = $_SESSION['email'];
$arr = array(
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R',
    'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'
);
$code = "";
for ($i = 0; $i<=5; $i++){
    $rd = rand(0, 35);
    $code .= $arr[$rd];
}
mail($email, "Код подтвержения", "Ваш код подтверждения: ".$code);
$_SESSION['code'] = $code;
$_SESSION['truemessage'] = "Код отправлен еще раз, проверьте спам";
header("Location: ../forgotend/forgotend.php");      
