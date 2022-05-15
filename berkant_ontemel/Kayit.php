<?php

$db=new PDO("mysql:host=185.27.134.10;dbname=epiz_31715440_kullanicilar;charset=utf8","epiz_31715440","akp2osJEPgSckn2");



$adi=$_POST['adi'];
$soyadi=$_POST['soyadi'];
$kullanici_adi=$_POST['kullanici_adi'];
$sifre=$_POST['sifre'];

if(!$adi ||!$soyadi||!$kullanici_adi||!$sifre){
    die("boş bırakma");
}

$ekle= $db->prepare("INSERT INTO kullanici SET adi=?,soyadi=?,kullanici_adi=?,sifre=?");

$ekle->execute([$adi,$soyadi,$kullanici_adi,$sifre]);

if($ekle){
    
    header("location:engel.jpeg");
}
else {
    header("location:engel.jpeg");
}