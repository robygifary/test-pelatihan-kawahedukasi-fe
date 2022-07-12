<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Test Soal 2</title>
    <style>
    .error {
        color: #ff0000;
    }
    </style>
</head>

<body>
    <h2>Form Validation</h2>
    <form action="berhasil.php" method="POST">
        Nama <input type="text" name="input1">
        <input type="submit" value="Kirim">
        <span class="error">
            <?php 
        if(isset($_GET['errnama']) ) {
          $err = $_GET['errnama'];
          echo $err;
        }
        ?>
        </span>
    </form>

</body>

</html>