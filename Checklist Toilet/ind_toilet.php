<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE keterangan LIKE '%".$q."%' or lokasi LIKE '%".$q."%'";
}
$title = 'Toilet';
$sql = 'SELECT * FROM toilet ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelompok 2</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@400;500;600&display=swap');

        body {
            font-family: "IBM Plex Sans", sans-serif;
        }
    </style>
</head>
<body class="bg-body-tertiary">

        <nav class="navbar bg-primary-subtle">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                <i class="fa-solid fa-user me-3"></i>Checklist Toilet
                </a>
                <div class="d-flex justify-content-end">
                        <form class="d-flex" role="search">
                            <input type="text" placeholder="Masukkan Pencarian"  id="q" name="q" class="input-q pt-2" value="<?php echo $q ?>">
                            <button type="submit" name="submit" class="btn btn-primary mt-0">Cari</button>
                        </form>
                    </div>
            </div>
        </nav>

    <div class="container bg-primary-subtle mt-4 rounded-4">
        <br><br>
        <div class="head">
        <h1 style="color: #000000;">Data Toilet</h1>
        </div>
        <div class="container bg-primary-subtle mt-4 rounded-4">
            <div class="main p-4">
                <div class="row">
                    <div class="col d-flex mb-4">
                        <a href="home.php"><button class="btn btn-danger me-2 px-3"><i class="fa-solid fa-arrow-left me-2"></i>Back</button></a>
                        <a href="tam_toilet.php"><button class="btn btn-danger me-2 px-3"><i class="fa-solid fa-plus me-2"></i>Tambah</button></a>
                    </div>
                </div>


        <div class="main">
            <table class="table table-striped table-hover">
            <tr>
                <th style="color: #000000;">Kode Toilet</th>
                <th style="color: #000000;">Lokasi Toilet</th>
                <th style="color: #000000;">Keterangan</th>
                <th style="color: #000000;">Aksi</th>
            </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td style="color: #000000;"><?= $row['id'];?></td>
                <td style="color: #000000;"><?= $row['lokasi'];?></td>
                <td style="color: #000000;"><?= $row['keterangan'];?></td>
                <td style="color: #000000;">
                    <button class="btn" type="button" style="background-color: #e4492e; width: 70%;"><a style="color: #FFFFFF;" href="hap_toilet.php?id=<?= $row['id'];?>">Hapus Data</a></button>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td style="color: #FFFFFF;" colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div><br><br><br>
    </div>
</body>
</html>