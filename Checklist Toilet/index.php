<?php
include("koneksi.php");

$q = "";
if (isset($_GET['submit']) && !empty($_GET['q'])) {
    $q = $_GET['q'];
    $sql_where = "WHERE tanggal LIKE '%".$q."%' or toilet_id LIKE '%".$q."%' or kloset LIKE '%".$q."%' or wastafel LIKE '%".$q."%' or lantai LIKE '%".$q."%' or dinding LIKE '%".$q."%' or sabun LIKE '%".$q."%' or bau LIKE '%".$q."%' or users_id LIKE '%".$q."%'" ;


}
$title = 'Checklist Toilet';
$sql = 'SELECT * FROM checklist ';
if (isset($sql_where))
    $sql .= $sql_where;
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kelompok 2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <div class="main p-4">
            <div class="row">
                <div class="col d-flex mb-4">
                    <a href="home.php"><button class="btn btn-danger me-2 px-3"><i class="fa-solid fa-arrow-left me-2"></i>Back</button></a>
                    <a href="tambah.php"><button class="btn btn-danger me-2 px-3"><i class="fa-solid fa-plus me-2"></i>Tambah</button></a>
                </div>
            </div>

                 
            </div>
            <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Kode Toilet</th>
                <th >Kloset</th>
                <th >Wastafel</th>
                <th >Lantai</th>
                <th >Dinding</th>
                <th >Kaca</th>
                <th >Bau</th>
                <th >Sabun</th>
                <th >Petugas</th>
                <th >Aksi</th>
            </tr>
            <?php if($result): 
                
                $no = 1;?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
                <td ><?= $no++ ?></td>
                <td ><?= $row['tanggal'];?></td>
                <td ><?= $row['toilet_id'];?></td>
                <td ><?= $row['kloset'];?></td>
                <td ><?= $row['wastafel'];?></td>
                <td ><?= $row['lantai'];?></td>
                <td ><?= $row['dinding'];?></td>
                <td ><?= $row['kaca'];?></td>
                <td ><?= $row['bau'];?></td>
                <td ><?= $row['sabun'];?></td>
                <td ><?= $row['id'];?></td>
                <td >
                    <button class="btn" type="button" style="background-color: #09bcf3; width: 45%;"><a style="color: #FFFFFF;" href="ubah.php?id=<?= $row['id'];?>"><i class="fa-solid fa-pen-to-square"></i></a></button> 
                    <button class="btn" type="button" style="background-color: #e4492e; width: 50%;"><a style="color: #FFFFFF;" href="hapus.php?id=<?= $row['id'];?>"><i class="fa-solid fa-trash"></i></a></button>
                </td>
            </tr>
            <?php endwhile; else: ?>
            <tr>
                <td style="color: #7eeef3;" colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
        </div><br><br><br>
        <div>
    </div>
</body>
</html>