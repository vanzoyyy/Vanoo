<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | Halaman Utama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <div class="col-4">
                <h3>Edit Data Dokter</h3>
                <?php
                include 'koneksi.php';
                $panggil = $koneksi->query("SELECT * FROM dokter where idDokter");
                while ($row = $panggil->fetch_assoc()) {
                ?>
                <form action="koneksi.php" method="POST">
                    <div class="form-group">
                        <label for="idPasien">ID Dokter</label>
                        <input type="text" class="form-control mb-3" name="idDokter" placeholder="ID Dokter" value="<?= $row['idDokter'] ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label for="nmPasien">Nama Dokter</label>
                        <input type="text" class="form-control mb-3" name="nmDokter" placeholder="Nama Dokter" value="<?= $row['nmDokter'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="spesialisasi">Spesialisasi</label>
                        <input type="text" class="form-control mb-3" name="spesialiasi" placeholder="Spesialisasi" value="<?= $row['spesialisasi'] ?>">
                        <div class="form-check">
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="noTelp">Nomor Telepon</label>
                        <textarea type="text" class="form-control" name="noTelp" placeholder="Nomor Telepon"><?= $row['noTelp'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="simpan" value="Simpan" class="form-control btn btn-primary mt-3">Simpan</button>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>