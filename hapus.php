<?php

    include('connect.php');
    $companyID = $_GET['companyID'];

    $result = mysqli_query($conn, "DELETE FROM sample WHERE companyID = '$companyID'");
    echo "<script>alert('Hapus Maklumat Berjaya');"."window.location='home.php'</script>";

?>