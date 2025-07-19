<?php
   include 'connect.php';
            $con = connectDB();
            $email = $_POST['email'];
            $password = $_POST['password'];  
            $confirm = $_POST['confirm'];
            $fullname = $_POST['name'];
            $phone = $_POST['phone'];
            $sql="INSERT INTO accounts (email, password, fullname, phone) VALUES ('$email', '$pwd', '$fullname', '$phone')";
            if($con->query($sql) === TRUE) { 
               header("Location: accountslist.php");
            } 
             else {
                 header("Location: createaccountf.php" );
            }     
            $con->close();