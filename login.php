<?php
session_start();
include 'connect.php';

$nis = $_POST['nis'];
$password = $_POST['password'];

if($nis == "" || $password == "")
{
    header("location: tugas.php");
}
else
{

}
    $query = "SELECT * FROM tb_siswa WHERE nis = '$nis' AND password = '$password'";
    $result = mysqli_query($connect, $query);

    $num = mysqli_num_rows($result);

    if($num == 1)
    {
        // echo "Login berhasil";
        // header("location:recor.php");
        echo "<script>
            alert('Login Berhasil!!!')
        </script>";
        echo "<h1><a href='logout.php'>Logout!</a></h1>";
        $_SESSION['nis'] = $nis;
    }
    else
    {
        echo "<script>
            alert('Login Gagal!!!')
        </script>";
        include 'tugas.php';
        // echo "<h1><a href='tugas.php'>Logout!</a></h1>";
        // header("location: tugas.php");
    }
?>
