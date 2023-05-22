<?php
                               $con = new mysqli('localhost','root','','date');
                               if($con->connect_error){
                                   die("Failed to connect:".$con->connect_error);
                               } else{
                                   $stmt=$con->prepare("select*from logg where name=? ");
                                   $stmt->bind_param("s",$name);
                                   $stmt->execute();
                                   $stmt_result=$stmt->get_result();
                                   if($stmt_result->num_rows>0){
                                       $data=$stmt_result->fetch_assoc();
                                       if($data['parola']===$parola){
                                           echo"Autentificare cu succes!";
                                       }
                                       else {
                                           echo"Nume sau parola invalide";
                                       }
                                   }
                               }
                            header("index.php");
             
             
           ?>