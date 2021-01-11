<?php require_once("auth.php"); ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
    <link rel="stylesheet" href="asset/css/dasboard-style.css">
</head>
<body>
    <header>
        <nav class="navigasi">
            <ul>
                <li><a href="keluar.php" target="_blank">Logout</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <div class="content">
            <article id="data-master" class="card">
                <h2>Edit Profile</h2>
            <div class="profile">
                <img src="asset/img/main-img/user-avatar.png" alt="">
            </div>
            <div class="button">
                <input type="submit" value="Ganti Foto ">
            </div>

            <div class="pembayaran">
                <form action="" id="form-laporan">
                    <table border="0">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td><input type="text" autofocus required></td>
                        </tr>
                        <tr>
                            <td>Email Baru</td>
                            <td>:</td>
                            <td><input type="email" size="20" name="email"></td>
                        </tr>
                        <tr>
                            <td>Passsword Baru</td>
                            <td>:</td>
                            <td><input size="20" name="email"></td>
                        </tr>
                    </table>
                    <div class="button">
                        <input type="submit" value="Ganti Profile">
                    </div>
                </form>
            </div>
            </article>
        </div>

    
        <aside>
            <article class="profile card">
                <header>
                    <h2>Detail Mahasiswa</h2>
                    <figure>
                        <img src="asset/img/main-img/login-avatar.png">
                    </figure>
                </header>

                <section class="informasi-data">
                    <h3>Informasi Mahasiswa</h3>

                    <table border="0">
                        <tr >
                            <td>Contoh</td>
                            <td>:</td>
                            <td><p><?php echo $_SESSION["user"]["username"] ?></p></td>
                        </tr>
                        <tr >
                            <td>Contoh</td>
                            <td>:</td>
                            <td><p><?php echo $_SESSION["user"]["name"] ?></p></td>
                        </tr>
                        <tr >
                            <td>Contoh</td>
                            <td>:</td>
                            <td><p><?php echo $_SESSION["user"]["email"] ?></p></td>
                        </tr>
                    </table>
                    
                </section>

                <hr>

                <nav class="navigasi">
                    <ul>
                        <li><a href="#" target="_blank">Pilihan 1</a></li>
                        <li><a href="#" target="_blank">Pilihan 2</a></li>
                        <li><a href="#" target="_blank">Pilihan 3</a></li>
                        <li><a href="#" target="_blank">Pilihan 4</a></li>
                    </ul>
                </nav>

                <hr>

            </article>
        </aside>
    </main>


    <footer>
        <p>Universitas Gak Eroh &#169; 2021, Admin UGE</p>
    </footer>
</body>
</html>