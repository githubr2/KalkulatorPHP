<?php
if($proses)
{
if($pilih_operator=='pilih operator')
{
echo"<span style='font-size:15px; color:red;'>anda belum memilih operator</span>";
}
if($pilih_operator=='+')
{
$eksekusi=$nilaiA + $nilaiB;
}
if($pilih_operator=='-')
{
$eksekusi=$nilaiA - $nilaiB;
}
if($pilih_operator=='*')
{
$eksekusi=$nilaiA * $nilaiB;
}
if($pilih_operator=='/')
{
$eksekusi=$nilaiA / $nilaiB;
}
echo"$eksekusi";
}
?>

