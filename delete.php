<?php
    include "koneksi.php";
    $id = $_GET['idcustomer'];
    $ambilData = mysqli_query($connect, "DELETE FROM customer WHERE idcustomer='$id'");
    echo "<meta http-equiv='refresh' content='1;url=http://localhost/TugasBesar/data_customer.php'>";
?>