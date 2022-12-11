<?php 
include("db.php");

$errMesg = '';

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-reg'])){

    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $passF = trim($_POST['pass-first']);
    $passS = trim($_POST['pass-second']);
    $_SESSION['count'] = 1;
    
    if ($login === '' || $email === '' || $pass === ''){
        $errMesg = "Not all filled";
    } elseif ($passF !== $passS){
        $errMsg = "Passwords do not match";
    }
    else{
        
        $post = [
            'admin' => $admin,
            'username' => $login,
            'email ' => $email ,
            'password' => $passF
        ];
        $id = insert('users', $post);
        $user = selectOne('users', ['id' => $id]);

        $_SESSION['id'] = $user['id'];
        $_SESSION['login'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        

        header('location: '. BASE_URL);
    }

}else{
    $login = '';
    $email = '';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['button-log'])) {
    $email = trim($_POST['email']);
    $pass = trim($_POST['password']);
    $_SESSION['count'] = 1;
    if ($email === '' || $pass === '') {
        $errMesg = "Not all filled";
    } else{
        $existence = selectOne('users', ['email' => $email]);
        if($existence && $pass){
            $_SESSION['id'] = $existence['id'];
            $_SESSION['login'] = $existence['username'];
            $_SESSION['admin'] = $existence['admin'];
            header('Location: ' . BASE_URL);
        }else{
            $errMesg = 'Password or email are wrong';
        }
    }
}
else{
    $email = '';
}