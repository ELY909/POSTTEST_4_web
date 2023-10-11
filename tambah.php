<?php
if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $power = $_POST["power"];
    $ammo = $_POST["ammo"];
    $reload = $_POST["reload"];
    $rate = $_POST["rate"];
    $precision = $_POST["precision"];
    $gambar = $_POST["gambar"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data</title>
    <link rel="stylesheet" href="data/tambah.css">
    <link rel="stylesheet" href="data/style.css">
</head>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.body;

        const darkMode = localStorage.getItem('darkMode');
        if (darkMode === 'enabled') {
            body.classList.add('dark-mode');
        }

        document.getElementById('darkModeToggle').addEventListener('click', function() {
            body.classList.toggle('dark-mode');
            const isDarkMode = body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkMode ? 'enabled' : 'disabled');
        });

    });
</script>

<body>
    <?php include "nav-bar.php" ?>
    <br><br><br>
    <section>
        <form action="" method="post">
            <div class="row">
                <label for="nama">Masukkan Nama Senjata</label>
                <input type="text" name="nama" id="nama" required>
            </div>
            <div class="row">
                <label for="power">Masukkan Power Senjata</label>
                <input type="text" name="power" id="power" required>
            </div>
            <div class="row">
                <label for="ammo">Masukkan Ammo Capacity Senjata</label>
                <input type="number" name="ammo" id="ammo" required>
            </div>
            <div class="row">
                <label for="reload">Masukkan Reload Speed Senjata</label>
                <input type="text" name="reload" id="reload" required>
            </div>
            <div class="row">
                <label for="rate">Masukkan Rate of Fire Senjata</label>
                <input type="text" name="rate" id="rate" required>
            </div>
            <div class="row">
                <label for="precision">Masukkan Precision Senjata</label>
                <input type="text" name="precision" id="precision" required>
            </div>
            <div class="row">
                <label for="gambar">Pilih Gambar Senjata</label>
                <input type="file" name="gambar" id="gambar" accept="image/*" required>
            </div>
            <div class="row akhir">
                <button type="submit" name="submit">Submit</button>
            </div>
        </form>
    </section>

    <?php if (isset($_POST["submit"])) : ?>
        <div class="container">
            <h1>Hasil Inputan</h1>
            <table>
                <tr>
                    <td>Nama Gambar</td>
                    <td>:</td>
                    <td><?= $gambar ?></td>
                </tr>
                <tr>
                    <td>Nama Senjata</td>
                    <td>:</td>
                    <td><?= $nama ?></td>
                </tr>
                <tr>
                    <td>Power Senjata</td>
                    <td>:</td>
                    <td><?= $power ?></td>
                </tr>
                <tr>
                    <td>Ammo Capacity Senjata</td>
                    <td>:</td>
                    <td><?= $ammo ?></td>
                </tr>
                <tr>
                    <td>Reload Speed Senjata</td>
                    <td>:</td>
                    <td><?= $reload ?></td>
                </tr>
                <tr>
                    <td>Rate of Fire Senjata</td>
                    <td>:</td>
                    <td><?= $rate ?></td>
                </tr>
                <tr>
                    <td>Precision Senjata</td>
                    <td>:</td>
                    <td><?= $precision ?></td>
                </tr>
            </table>
        </div>
    <?php endif ?>
</body>

</html>