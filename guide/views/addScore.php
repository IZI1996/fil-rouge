<?php
$serveur="localhost";
$user="root";
$pw="";
$bdd="guide";
session_start();
$mail=$_SESSION['email'];
$cnpstock= new mysqli($serveur,$user,$pw,$bdd);
      $json = json_decode(file_get_contents('php://input') , true); 
      $count = $json['count'];
      if(isset($count)) {
            $query= "UPDATE `users` SET `score` = ' $count' WHERE users.Email = '$mail'";
            if ($cnpstock->query($query) === TRUE) {
                  echo '{"success":"Record updated successfully "}' ;
                 
                } else {
                  echo "Error updating record: " . $conn->error;
                }
      }
  ?>