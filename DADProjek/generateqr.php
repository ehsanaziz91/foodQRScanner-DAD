<?php 
  include "meRaviQr/qrlib.php";

if(isset($_POST['create']))
{
    $nama =  $_POST['namaitem'];
    $harga = $_POST['hargaitem'];
    $brand =  $_POST['namabrand'];
    $tempatbuat = $_POST['tempatbuat'];
    $qrImgName = "food".rand();
    if($nama=="" && $harga=="" && $brand=="" && $tempatbuat=="")
    {
      echo "<script>alert('Please Pay Attention On Textfield');</script>";
    }
    elseif($nama=="")
    {
      echo "<script>alert('Please Enter Product Name');</script>";
    }
    elseif($harga=="")
    {
      echo "<script>alert('Please Enter Price');</script>";
    }
    elseif($brand=="")
    {
      echo "<script>alert('Please Enter Brand Name');</script>";
    }
    elseif($tempatbuat=="")
    {
      echo "<script>alert('Please Enter Manufacture');</script>";
    }
    else
    {
    $final = $nama.":".$harga.":".$brand.":".$tempatbuat;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3"); 
    $qrimage = $qrImgName.".png";  

    if($final==true)
    {
      echo "<script> window.location='index.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    } 
    }
}
    

  ?>