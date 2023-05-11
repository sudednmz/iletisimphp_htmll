


<?php
$ad=$_POST["ad"];
$soyad=$_POST["soyad"];
$email=$_POST["email"];
$num=$_POST["numara"];
$yaz=$_POST["yaz"];
?>

<table>
    <tr><th colspan="2"><h1>Bilgileriniz Kaydedilmiştir.</h1></tr>
    <tr><th colspan="2"><h2>Gönderilen Bilgiler:</h2></th></tr>
    <tr>
        <th>Ad:</th>
        <td><?php echo $ad ?></td><br>
</tr>
<tr>
    <th>Soyad:</th>
    <td><?php echo $soyad ?></td><br>
</tr>
<tr>
    <th>Email:</th>
    <td><?php echo $email ?></td><br>
</tr>
<tr>
    <th>Telefon num:</th>
    <td><?php echo $num ?></td>

</tr>
<tr>
    <th>İletilen Yazı:</th>
    <td><?php echo $yaz ?></td>
</tr>
</table>