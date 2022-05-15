<?php

session_start();


$db=new PDO("mysql:host=localhost;dbname=kullanicilar;charset=utf8","root","");

$kadi=$_POST['kullanici_adi'];
$sifre=$_POST['sifre'];

if(!$kadi||!$sifre){
    die("bos bırakma");
}


$user=$db->query("SELECT*FROM kullanicilar WHERE kullanici_adi='$kadi' AND sifre='$sifre'")->fetch();

if($user){
    $_SESSION['user']=$user;
    header("location:engel.jpeg");

}
else{
    header("location:yaza.jpeg");
}