<?php

    session_start();

    $mysqli =new mysqli('localhost', 'root', '', 'car-shop') or die(mysqli_error($mysqli));
    //$result = $mysqli->query("SELECT * FROM car_loan") or die($mysqli->error);



    if(isset($_GET['accept'])){
        
        $ID=$_GET['accept'];
        $res = $mysqli->query("SELECT * FROM emitable WHERE id=$ID") or die($mysqli->error);
        
        $result=$res->fetch_assoc();

        $to_email = $result['Email'];
        $subject = "buy car on EMI";
        $body = "Hi, your buy car on EMI is accepted. now contact to our shop";
        $headers = "From: zahirulislam15@gmail.com";


            

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
        
        

        header("location: loan-app.php");
    }



    if(isset($_GET['reject'])){
        
        $ID=$_GET['reject'];
        $res = $mysqli->query("SELECT * FROM emitable WHERE id=$ID") or die($mysqli->error);
        
        $result=$res->fetch_assoc();

        
        $to_email = $result['Email'];
        $subject = "buy car on EMI";
        $body = "Hi, your buy car on EMI request is rejected. now contact to our shop";
        $headers = "From: zahirulislam15@gmail.com";

        if (mail($to_email, $subject, $body, $headers)) {
            echo "Email successfully sent to $to_email...";
        } else {
            echo "Email sending failed...";
        }
        
        

        header("location: loan-app.php");
    }








?>