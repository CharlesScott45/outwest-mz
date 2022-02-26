<?php

if(isset($_POST(['email']) && !empty($_POST['email']){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);



$to = "OutwestMz45@gmail.com";
$subject = "Contacto - OutwestMz";
$body = "Nome: ".$name. "\n"
        "email: ".$email. "\n"
        "mensage,: ".$message;
$header = "From:Carlosdosanjosjunqueiro40@gmail.com"."\r\n" 
                ."Reply-To:".$email."\e\n"    
                ."X-Mailer: PHP/".phpversion();   

if(mail($to, $subject, $message, $header)){

    echo("Email enviado com Sucesso!");
}else{
    echo("O Email não pode ser enviado!");
}             
         
         
}

?>