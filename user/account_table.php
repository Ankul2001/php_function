<?php

    include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data list</title>
</head>
<body style="text-align: center;">
    <h1>Accounts List</h1>
    <table border="2" celpadding="10px" style="margin: auto;">
        <thead>
            <tr>
                <th>S.No.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
        </thead>
        <tbody>
            <?php
                        $sql= "SELECT * FROM login";
                        $result=mysqli_query($connect,$sql);
                        $no=1;

                        while($data=mysqli_fetch_assoc($result)){

            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['email'] ?></td>
                <td><?php echo md5($data['password']) ?></td>
            </tr>
            <?php

                            $no++;
                        }
            ?>
        </tbody>
    </table>
</body>
</html>