<?php

$nama = @$_REQUEST['namad'];
$email = @$_REQUEST['email'];
$selector = @$_REQUEST['selector'];
$nomorhp = @$_REQUEST['nomorhp'];
$files = @$_REQUEST['files'];
$keterangan = @$_REQUEST['keterangan'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href="assets/form.css" rel="stylesheet">
</head>
<body>
    <div class="col-12">
        <div class="bg-secondary rounded p-4">
            <h6 class="mb-4">Tampil</h6>
            <dl class="row mb-0">
                <dt class="col-sm-4">Nama: </dt>
                <dd class="col-sm-8"><?php echo "{$nama}"?></dd>

                <dt class="col-sm-4">Email:</dt>
                <dd class="col-sm-8"><?php echo "{$email}"?></dd>

                <dt class="col-sm-4">Select Game:</dt>
                <dd class="col-sm-8"><?php echo "{$selector}"?></dd>

                <dt class="col-sm-4">Nomor HP:</dt>
                <dd class="col-sm-8"><?php echo "{$nomorhp}"?></dd>

                <dt class="col-sm-4">Files:</dt>
                <dd class="col-sm-8"><?php echo "{$files}"?></dd>

                <dt class="col-sm-4">Keterangan:</dt>
                <dd class="col-sm-8"><?php echo "{$keterangan}"?></dd>
            </dl>
        </div>
</body>
</html>

