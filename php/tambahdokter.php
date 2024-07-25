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
                <h3>Tambah Data Dokter</h3>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="form-group">
                        <label for="idDokter">ID Dokter</label>
                        <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter">
                    </div>
                    <div class="form-group">
                        <label for="nmDokter">Nama Dokter</label>
                        <input type="text" class="form-control mb-3" name="nmDokter" placeholder="Nama Dokter">
                    </div>
                    <div class="form-group">
                        <label for="nmDokter">Spesialisasi</label>
                        <input type="text" class="form-control mb-3" name="spesialisasi" placeholder="Spesialisasi">
                    </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="alamat">Nomor Telepon</label>
                        <textarea name="nmTelp" id="nmTelp" cols="5" rows="3" placeholder="Nomor Telepon" class="form-control"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <input type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary">
                    </div>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include 'koneksi.php';

                    $idDokter = $_POST['idDokter'];
                    $nmDokter = $_POST['nmDokter'];
                    $spesialisasi = $_POST['spesialisasi'];
                    $noTelp = $_POST['noTelp'];

                    $sql = "INSERT INTO dokter (idDokter, nmDokter, spesialisasi, noTelp) VALUES ('$idDokter', '$nmDokter', '$spesialisasi', '$noTelp')";

                    if ($koneksi->query($sql) === TRUE) {
                        echo '<script>alert("Data telah ditambahkan!"); window.location.href = "dokter.php";</script>';
                    }else{
                        echo '<div class="alert alert-danger mt-3" role="alert">Error: ' . $sql . '<br>' . $koneksi->error . '</div>';
                    }

                    mysqli_close($koneksi);
                }
                ?>

            </div>
        </div>
    </div>
</body>

</html>