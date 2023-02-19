<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemaskini</title>
</head>
<body>
    
    <?php
    
        include 'connect.php';
        $id = $_GET['companyID'];
        $sql = "SELECT * FROM sample WHERE companyID = $id";

        $result = mysqli_query($conn, $sql);

        while ($res = mysqli_fetch_array($result)){
            $companyID = $res['companyID'];
            $name = $res['name'];
            $position = $res['position'];
            $company_name = $res['company_name'];
            $company_address = $res['company_address'];
            $company_phone = $res['company_phone'];
            $company_fax = $res['company_fax'];
            $company_email = $res['company_email'];
        }
    
    ?>

    <form action="pros_kemaskini.php" name="update" method="post">

        <label for="">Company ID</label>
        <input type="text" name="companyID" value="<?php echo $companyID; ?>"><br>

        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $name; ?>"><br>

        <label for="">Position</label>
        <input type="text" name="position" value="<?php echo $position; ?>"><br>

        <label for="">Company Name</label>
        <input type="text" name="company_name" value="<?php echo $company_name; ?>"><br>

        <label for="">Company Address</label>
        <input type="text" name="company_address" value="<?php echo $company_address; ?>"><br>

        <label for="">Company Phone</label>
        <input type="text" name="company_phone" value="<?php echo $company_phone; ?>"><br>

        <label for="">Company Fax</label>
        <input type="text" name="company_fax" value="<?php echo $company_fax; ?>"><br>

        <label for="">Company Email</label>
        <input type="text" name="company_email" value="<?php echo $company_email; ?>"><br>

        <input type="submit" name="update" value="Kemaskini">

    </form>
    <br><a href="home.php">Kembali</a>
</body>
</html>