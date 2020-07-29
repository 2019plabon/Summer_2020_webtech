<?php

    session_start(); 

    if(isset($_POST['submit'])){

        $name= $_POST['name'];
        $email= $_POST['email'];
        $userName= $_POST['userName'];
        $password= ( $_POST['password']);
        $gender= $_POST['gender'];
        
        //date of birth
        $day= $_POST['day'];
        $month= $_POST['month'];
        $year= $_POST['year'];

        if(empty($userName) || empty($email) || empty($password)){
            echo "Null Submission";
        } else {

            setcookie('name', $name, time()+100, '/'); 
            setcookie('email', $email, time()+100, '/');
            setcookie('userName', $userName, time()+100, '/');
            setcookie('password', $password, time()+100, '/');

            if($gender == "male")
            {	
                setcookie('gender', $gender, time()+100, '/');
            }
            elseif($gender == "female")
            {
                setcookie('gender', $gender, time()+100, '/');
            }
            elseif($gender == "other")
            {
                setcookie('gender', $gender, time()+100, '/');
            }

            setcookie('day', $day, time()+100, '/'); 
            setcookie('month', $month, time()+100, '/');
            setcookie('year', $year, time()+100, '/');

            //echo "Registration Ok";
            header('location:login.html');
        }
    }

    else{
        echo "invalid request";
        //header('location:login.html'); 

    }


?>