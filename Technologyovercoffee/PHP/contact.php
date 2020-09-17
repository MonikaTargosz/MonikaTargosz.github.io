<?php 
$name = $_POST['name']; 
$email =$_POST['email']; 
$message = $_POST['message'];

    // incoming data
    $data = $name."\n".$email."\n".$message."\n\n"; 
    // giving $file file name 
 
    $file = "feed/kontakt.".$name.".".$email.".txt";
    // file handle 
    $fp = fopen($file, "a"); 
    // blokada pliku do zapisu 
    flock($fp, 2); 
    // zapisanie danych do pliku 
    fwrite($fp, $data); 
    // odblokowanie pliku 
    flock($fp, 3); 
    // zamknięcie pliku 
    fclose($fp); 
    $_SESSION['send']=true;
    $_SESSION['send']="Wysłano poprawnie!";
    header('Location: \Technologyovercoffee/php/kontakt.php');
    
?>