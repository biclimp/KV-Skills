<?php

    include('connect.php');

    if (isset($_POST['Submit'])) {
        $companyID = $_POST['companyID'];
        $name = $_POST['name'];
        $position = $_POST['position'];
        $company_name = $_POST['company_name'];
        $company_address = $_POST['company_address'];
        $company_phone = $_POST['company_phone'];
        $company_fax = $_POST['company_fax'];
        $company_email = $_POST['company_email'];

        $result = mysqli_query($conn, "INSERT INTO sample(companyID, name, position, company_name, company_address, company_phone, company_fax, company_email)"."VALUES ('$companyID','$name','$position','$company_name','$company_address','$company_phone','$company_fax','$company_email')");

        echo "<script>alert('Tambah Maklumat Berjaya');"."window.location='home.php'</script>";
    }

    else{}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TAMBAH REKOD</title>
</head>
<body>
    <h2>TAMBAH REKOD</h2>
    <fieldset>
        <form action="tambah.php" method="post">
            <table>

                <tr>
                    <td>Company ID</td>
                    <td><input type="text" name="companyID"></td>
                </tr>

                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>

                <tr>
                    <td>Position</td>
                    <td><input type="text" name="position"></td>
                </tr>

                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="company_name"></td>
                </tr>

                <tr>
                    <td>Company Address</td>
                    <td><input type="text" name="company_address"></td>
                </tr>

                <tr>
                    <td>Company Phone</td>
                    <td><input type="text" name="company_phone"></td>
                </tr>

                <tr>
                    <td>Company Fax</td>
                    <td><input type="text" name="company_fax"></td>
                </tr>

                <tr>
                    <td>Company Email</td>
                    <td><input type="text" name="company_email"></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="submit" name="Submit" value="Tambah Rekod"></td>
                </tr>

            </table>
        </form>
        <br><a href="home.php">Kembali</a>
    </fieldset>
</body>
</html>