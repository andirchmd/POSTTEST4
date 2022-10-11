<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="assets/bootstrap.min.css" rel="stylesheet">
    <link href="assets/form.css" rel="stylesheet">
</head>
<body>
                <!-- Form Start -->
                <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                        <form action="proses.php" method="POST">
                            <h6 class="mb-4">Form Data</h6>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="namad" name="namad"
                                    placeholder="Nama Depan">
                                <label for="namad">Nama Depan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com">
                                <label for="email">Alamat Email</label>
                            </div>
                            
                            <div class="form-floating mb-3">
                                <select class="form-select" id="selector" name="selector"
                                    aria-label="selector">
                                    <option selected>-</option>
                                    <option value="Genshin">Genshin Impact</option>
                                    <option value="Arknights">Arknights</option>
                                    <option value="MLBB">Mobile Legends: Bang-Bang</option>
                                </select>
                                <label for="selector">Pilih Game</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="number" class="form-control" id="nomorhp" name="nomorhp" placeholder="Nomor Telepon">
                                <label for="nomorhp">Nomor Telepon</label>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Masukkan file save game</label>
                                <input class="form-control bg-dark" type="file" id="formFile" name="files">
                            </div>
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a comment here" name="keterangan"
                                    id="floatingTextarea" style="height: 150px;"></textarea>
                                <label for="floatingTextarea">Keterangan Joki</label>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </form>
                        </div>
                    </div>
                    


            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Omori</a>, All Right Reserved. 
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="js/main.js"></script>
</body>
</html>