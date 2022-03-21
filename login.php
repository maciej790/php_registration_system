<?php
    session_start();

    $user_login = $_POST['login'];
    $user_password = $_POST['pass'];

    if(!$user_login || !$user_password){
        $_SESSION['error'] = 'fill all fields!';
        header('Location: index.php');
    }else{
        unset($_SESSION['error']);
        getData($user_login, $user_password);
    }

    function getData($login, $password){
        require_once('connect.php');
        $sql = "SELECT * FROM `użytkownicy` WHERE `login` = '$login' AND `haslo` = '$password'"; 
        $result = mysqli_query($conn, $sql);
        $result_num_rows = mysqli_num_rows($result);

        if($result_num_rows > 0){
            $_SESSION['logged'] = true;
            unset($_SESSION['error']);
            header('Location: gra.php');
        }else{
            $_SESSION['error'] = 'Incorrect login or password';
            header('Location: index.php');
        }
    }

    

?>
