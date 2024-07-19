<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | Tambah Data Pasien</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGEBfJT3GXwE0ngsV7Zt27NXFoaoApmYn81iuXoPkF0wJ8ERdknLPMO" crossorigin="anonymous"> -->
</head>

<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Tambah Data Pasien</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Pasien</label>
                        <input type="text" class="form-control mb-3" name="idPasien" placeholder="ID Pasien">
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Pasien</label>
                        <input type="text" class="form-control mb-3" name="nmPasien" placeholder="Nama Pasien">
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Perempuan">Perempuan
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" name="jk" value="Laki-laki">Laki-laki
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="5" rows="3" placeholder="Alamat" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include 'koneksi.php';

                    $idPasien = $_POST['idPasien'];
                    $nmPasien = $_POST['nmPasien'];
                    $jk = $_POST['jk'];
                    $alamat = $_POST['alamat'];

                    $sql = "INSERT INTO pasien (idPasien, nmPasien, jk, alamat) VALUES ('$idPasien', '$nmPasien', '$jk', '$alamat')";

                    if ($koneksi->query($sql) === TRUE) {
                        echo '<script>alert("Data telah ditambahkan!"); window.location.href = "pasien.php";</script>';
                    } else {
                        echo '<div class="alert alert-danger mt-3" role="alert">Error: ' . $sql . '<br>' . $koneksi->error . '</div>';
                    }

                    $koneksi    ->close();
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>