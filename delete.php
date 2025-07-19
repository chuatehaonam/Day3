<?php
   include 'connect.php';
            $con = connectDB();
            $id = $_GET['id'];
            $sql="DELETE from accounts  where id = $id";
            if($con->query($sql) === TRUE) { 
               header("Location: accountslist.php");
            } 
             else {
                 header("Location: createaccountf.php" );
            }     
            $con->close();