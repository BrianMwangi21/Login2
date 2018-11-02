<?php

function query($sql)
{

    global $connection;

    return mysqli_query($connection, $sql);
}

function confirm($result)
{
    global $connection;
    if(!$result)
    {
        die('QUERY FAILED' . mysqli_error($connection));
    }
}

function fetch_array($result)
{

    return mysqli_fetch_array($result);

}

function redirect($location)
{

    return header("Location: $location ");

}

include("db.php");

$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$Contacts=$_POST['Contacts'];
$Email=$_POST['Email'];
$UserType=$_POST['UserType'];
$Password=md5($_POST['Password']);
$Confirm_Password=md5($_POST['Confirm_Password']);

// var_dump($Confirm_Password);
// die();


if($Password==$Confirm_Password)
{
    if($LastName ==""  ||$Email =="" )
    {
        echo
        ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Please Fill In All The Blanks') </SCRIPT>");
    }
    else
    {
        $query ="INSERT INTO users(FirstName, LastName, Contacts, Email, UserType, Password)";
        $query.="VALUES ('$FirstName', '$LastName', '$Contacts', '$Email','$UserType','$Password')";

        if(mysqli_query($connection,$query)){

            $mysqli_insert_id = mysqli_insert_id($connection);

            $spot_info = "INSERT INTO people_info (user_Id)VALUES('$mysqli_insert_id')";
            if(mysqli_query($connection,$spot_info)){

                redirect("index.php");
        
            }else{
                echo "Error: " . $spot_info . "<br>" . mysqli_error($connection);
            }

        }else{
            echo "Error: " . $query . "<br>" . mysqli_error($connection);
        }  

    }

}
else
{
    echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('The Passwords Don't Match!') </SCRIPT>");
}
?>
