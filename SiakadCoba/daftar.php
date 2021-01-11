<?php

require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: masuk.php");
}

?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Daftar Mahasiswa </title>
    <link rel="stylesheet" href="asset/css/login-style.css"> 
</head>
<body>
    <div class="login-box">
        <img src="asset/img/main-img/login-avatar.png" class="avatar">
        <h1>Register Here</h1>
        <form action="" method="POST">
            <p>Nama Lengkap</p>
            <input type="text" name="name" placeholder="Masukkan Nama Lengkap">
			<p>Username</p>
            <input type="text" name="username" placeholder="Masukkan Username">
            <p>Email</p>
            <input type="text" name="email" placeholder="Masukkan Email">
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukkan Password">
			
			<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar Menjadi Mahasiswa" />
         </form>
</html>