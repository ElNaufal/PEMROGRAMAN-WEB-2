
<!DOCTYPE html>
<html>
<head>
    <title>Tanggal</title>
</head>
<body>
    <font size="10px">
        <?php
        date_default_timezone_set('Asia/Jakarta');

        echo "Sekarang tanggal ";
        echo date('d-F-Y');
        echo "<br>dan jam ";
        echo date('H:i:s');
        ?>
    </font>
</body>
</html>