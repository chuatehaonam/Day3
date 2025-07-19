<?php
   include 'connect.php';
            $con = connectDB();
            $id= $_POST['id'];
            $email = $_POST['email'];

            $fullname = $_POST['name'];
            $phone = $_POST['phone'];
            $sql="update accounts set email='$email',fullname='$fullname', phone = '$phone' where id = $id";
            if($con->query($sql) === TRUE) { 
               header("Location: accountslist.php");
            } 
             else {
                 header("Location: createaccountf.php" );
            }     
            $con->close();
?>
            