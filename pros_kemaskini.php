<?php

    include 'connect.php';

    if (isset($_POST['update'])){
        $companyID = $_POST['companyID'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $company_name = $_POST['company_name'];
        $company_address = $_POST['company_address'];
        $company_phone = $_POST['company_phone'];
        $company_fax = $_POST['company_fax'];
        $company_email = $_POST['company_email'];

        $query = "UPDATE sample SET companyID = '$companyID', name = '$name', position = '$position', company_name = '$company_name', company_address = '$company_address', company_phone = '$company_phone', company_fax = '$company_fax', company_email = '$company_email' WHERE companyID = $companyID";

        $result = mysqli_query($conn, $query);

        if (mysqli_query($conn, $query)){
            echo "<script>alert('Kemaskini maklumat berjaya! Yey!')</script>"."<script>window.location='home.php'</script>";
        }
        else{
            echo "<script>alert('Maklumat tidak berjaya dipadam.')</script>";
        }
    }

?>