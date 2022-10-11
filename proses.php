<?php

$nama = @$_REQUEST['namad'];
$email = @$_REQUEST['email'];
$selector = @$_REQUEST['selector'];
$nomorhp = @$_REQUEST['nomorhp'];
$files = @$_REQUEST['files'];
$keterangan = @$_REQUEST['keterangan'];

echo "Selamat {$nama}, anda telah terdaftar :)";
echo "<br />";
echo "Email: {$email}";
echo "<br />";
echo "Selector: {$selector}";
echo "<br />";
echo "Nomor HP: {$nomorhp}";
echo "<br />";
echo "Files: {$files}";
echo "<br />";
echo "Keterangan: {$keterangan}";
