<?php

    include 'connection.php';

    if(isset($_POST['adminSignup'])){
        $adminName=$_POST['adminName'];
        $adminEmail=$_POST['adminEmail'];
        $DOB=$_POST['DOB'];
        $pass=$_POST['pass'];

        $q = "INSERT INTO `admin`(`Admin_Name`, `Admin_Email`, `Admin_Password`, `Admin_DOB`) 
                    VALUES        ('$adminName','$adminEmail','$pass','$DOB')";
        
        $r = mysqli_query($conn,$q);

        if($r){
            header('location:adminLogin.php');
        }else {
            header('location:adminSignup.php?error=' .mysqli_error($conn));
        }
    } else if(isset($_POST['adminLogin'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

      if(!empty($email) && !empty($pass)){
          $query = "SELECT * FROM `admin` WHERE `Admin_Email` ='$email' && `Admin_Password`='$pass'";
          $result = mysqli_query($conn,$query);
          $num = mysqli_num_rows($result);

          if($num == 1){
              $row =mysqli_fetch_array($result);

              $_SESSION['Admin_Name'] = $row['Admin_Name'];
              $_SESSION['Admin_Email'] = $row['Admin_Email'];
              $_SESSION['Admin_DOB'] = $row['Admin_DOB'];

              header('location:index.php?success=succsessfull');
            } else {
                header('location:adminLogin.php?error=Login Failed');
            }    
        } else {
            header('location:adminLogin.php?error=Please fill all the textboxes');
        }      
          }
      
    

?>