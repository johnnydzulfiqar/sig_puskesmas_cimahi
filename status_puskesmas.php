<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>SIG puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<style>
    #img_div:after {
        content: "";
        display: block;
        clear: both;
    }

    img {
        float: left;
        margin: 5px;
        width: 70px;
        height: 75px;
    }
</style>

<body class="sb-nav-fixed">
    <?php include('header.php'); ?>
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Puskesmas</h1>


        </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Puskesmas <a href="tambah_puskesmas.php" class="btn btn-sm btn-success">Tambah Puskesmas</a>
            </div>

            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Lattitude</th>
                            <th>Longtitude</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Foto</th>
                            <th>Lattitude</th>
                            <th>Longtitude</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <?php
                    include('koneksi.php');
                    $no = 1;
                    $query = "SELECT * FROM lokasi";

                    $result = mysqli_query($db, $query);

                    if (!$result) {
                        die("Query Error : " . mysqli_errno($db) . " - " . mysqli_error($db));
                    }

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= "<img src='img/" . $row['image'] . "'>"; ?></td>
                            <td><?= $row['lat']; ?></td>
                            <td><?= $row['ing']; ?></td>

                            <td>
                                <div class="col">

                                    <a href="edit_puskesmas.php?id_lokasi=<?= $row['id_lokasi']; ?>" class="btn btn-sm btn-success">Edit</a>
                                    <a href="hapus.php?id_lokasi=<?= $row['id_lokasi']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
                            </td>

                        <?php $no++;
                    } ?>
                        </tbody>
                </table>
            </div>
        </div>
        </div>
    </main>
    <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
            <div class="d-flex align-items-center justify-content-between small">
                <div class="text-muted">Copyright &copy; M Naufa Dzulfiqar 2020</div>
                <div>
                    <a href="#">Privacy Policy</a>
                    &middot;
                    <a href="#">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>