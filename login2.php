
           <html>

           <?php include 'header.php';?>
           
           <!-- breadcrumb-section -->
           <div class="breadcrumb-section breadcrumb-bg">
                   <div class="container">
                       <div class="row">
                           <div class="col-lg-8 offset-lg-2 text-center">
                               <div class="breadcrumb-text">
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
             
             
           ?>
                    
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
               <!-- end breadcrumb section -->
    </html>