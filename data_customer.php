<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Customer</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <!--NAV-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">LOGO</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="utama.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Hubungi Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="keluar.php">Log Out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    <div class="container col-md-10">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Tabel Data Customer
            </div>
            <div class="card-body">
                <a href="input_data.php" class="btn btn-primary">Tambah Data</a>
                <table class="table table-bordered">
                    <tr>
                        <th>ID CUSTOMER</th>
                        <th>NAMA CUSTOMER</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th>KOTA</th>  
                        <th>KODE POS</th>  
                        <th>AKSI</th>
                    </tr>
                    <?php 
                        include "koneksi.php";
                        $no = 1;
                        $tampil = mysqli_query($connect, "SELECT * FROM customer");
                        while($data=mysqli_fetch_array($tampil))
                        {
                    ?>
                    <tr>
                        <td> <?php echo $no++; ?> </td>
                        <td> <?php echo $data['nama']; ?> </td>
                        <td> <?php echo $data['telp']; ?> </td>
                        <td> <?php echo $data['alamat']; ?> </td>
                        <td> <?php echo $data['kota']; ?> </td>
                        <td> <?php echo $data['kodepos']; ?> </td>
                        <td>
                            <a href="edit_customer.php?idcustomer=<?php echo $data['idcustomer']; ?>" class="btn btn-sm btn-warning">Edit</a>
                            <a href="delete.php?idcustomer=<?php echo $data['idcustomer']; ?>" class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>

                        <?php } ?>

                </table>
            </div>
        </div>
    </div>


</body>
</html>