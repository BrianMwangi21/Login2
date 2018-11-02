<?php
include "db.php";
session_start();
$Email = $_POST['Email'];
$Password =md5($_POST['Password']);
 

$sql="SELECT * FROM users where Email='$Email' and password='$Password'";
$result=$connection->query($sql);

if($result->num_rows>0){

                      $row=$result->fetch_assoc();
                     //   Selecting the data from the db
                          $user_id = $row['user_Id'];
                          $FirstName = $row['FirstName'];
                          $LastName = $row['LastName'];
                          $Contacts = $row['Contacts'];
                          $Email = $row['Email'];
                          $UserType = $row['UserType'];
                          $Password = $row['Password'];

                         $_SESSION['user_id']= $user_id;
                         $_SESSION['FirstName']= $FirstName;
                         $_SESSION['LastName']= $LastName;
                         $_SESSION['Contacts']= $Contacts;
                         $_SESSION['Email']= $Email;
                         $_SESSION['UserType']= $UserType;
                         $_SESSION['Password']= $Password;

                         header("location:firstpage.php");
                       

                                         
        
        }else{

            ?>
            <div class="alert alert-danger" role="alert" style="margin-left: 20px;margin-right: 20px;">
                     <?php echo " Wrong email/password. Try again"."<br>".$connection->error; ?>
                     </div>

      <?php
    }

?>


