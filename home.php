<?php

    include('connect.php');
    $result = mysqli_query($conn, "SELECT * FROM sample");

    session_start();
    if (isset($_SESSION['id']) && isset($_SESSION['user_name'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <?php

        }
        else{

            header("Location: index.php");
            exit();

        }

    ?>

    <table>

        <td>ID</td>
        <td>NAME</td>
        <td>POSITION</td>
        <td>COMPANY NAME</td>
        <td>COMPANY ADDRESS</td>
        <td>COMPANY PHONE</td>
        <td>COMPANY FAX</td>
        <td>COMPANY EMAIL</td>
        <td>TINDAKAN</td>
        <td>TINDAKAN</td>

        <?php

            $no = 1;

            while ($res = mysqli_fetch_array($result)){
                echo "<tr>";

                echo "<td>".$res['companyID']."</td>";
                echo "<td>".$res['name']."</td>";
                echo "<td>".$res['position']."</td>";
                echo "<td>".$res['company_name']."</td>";
                echo "<td>".$res['company_address']."</td>";
                echo "<td>".$res['company_phone']."</td>";
                echo "<td>".$res['company_fax']."</td>";
                echo "<td>".$res['company_email']."</td>";
                echo "<td><a href=\"form_kemaskini.php?companyID=$res[companyID]\"onclick\return confirm('Adakah anda pasti?')\">KEMASKINI</a></td>";
                echo "<td><a href=\"hapus.php?companyID=$res[companyID]\"onclick\return confirm('Adakah anda pasti?')\">HAPUS</a></td>";

                $no++;

            }
            
        ?>

    </table>

    <a href="tambah.php">+ TAMBAH REKOD</a><br>

    <a href="logout.php">Logout</a>

</body>
</html>
