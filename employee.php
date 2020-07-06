<?php

    include 'connection.php';

    if(isset($_POST['empSignup'])){
        $EmpName=$_POST['EmpName'];
        $EmpDept=$_POST['dddepartment'];
        $EmpEmail=$_POST['EmpEmail'];
        $EmpPass=$_POST['EmpPass'];
        $DOB=$_POST['DOB'];
        $EmpConatct=$_POST['EmpContact'];

        $q = "INSERT INTO employee (`Emp_Name`, `Emp_Dept`, `Emp_Email`, `Emp_Password`, `Emp_DOB`, `Emp_Contact`) 
                    VALUES           ('$EmpName','$EmpDept','$EmpEmail','$EmpPass','$DOB','$EmpConatct')";

        $r = mysqli_query($conn,$q);

        if($r){
            header('location:empLogin.php');
        }else {
            header('location:empSignup.php?error=' .mysqli_error($conn));
        }
    }  else if (isset($_POST['empLogin'])){
            $email = $_POST['email'];
            $pass  = $_POST['pass'];

        if(!empty($email) && !empty($pass)){
            $query = "SELECT * FROM `employee` WHERE `Emp_Email`='$email' && `Emp_Password`='$pass'";
            $result = mysqli_query($conn,$query);
            $num = mysqli_num_rows($result);
    
            if($num == 1){
                $row = mysqli_fetch_array($result);
    
                $_SESSION['Emp_Name'] = $row['Emp_Name'];
                $_SESSION['Emp_Email'] = $row['Emp_Email'];
                $_SESSION['Emp_DOB'] = $row['Emp_DOB'];
    
                header('location:index.php?success=successfull');
            } else {
                header('location:empLogin.php?error=Login Failed');
            }    
        } else {
            header('location:empLogin.php?error=Please fill all the textboxes');
        }
    }



?>