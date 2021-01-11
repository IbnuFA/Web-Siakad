<?php 

require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: profile.php");
        }
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Login Mahasiswa </title>
    <link rel="stylesheet" href="asset/css/login-style.css"> 
</head>
<body>
    <div class="login-box">
        <img src="asset/img/main-img/login-avatar.png" class="avatar">
        <h1>Masuk ke Siakad</h1>
        <p>&larr; <a href="index.php">Home</a> </p>
		
        <form action="" method="POST">

        <center><h5>Login</h5></center>
            
			<div class="form-group">
                <label for="username">Username</label>
                <input class="form-control" type="text" name="username" placeholder="Username atau email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>
			
				<p1>Belum punya akun? <a href="daftar.php">Daftar di sini</a></p1>

				<input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />

        </form>
            
        </div>

        <div class="col-md-6">
           
        </div>

    </div>
</div>
    
</body>
</html>