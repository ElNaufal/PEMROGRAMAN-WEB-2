<html>

<head>
    <title>Contoh Penggunaan UDF</title>
</head>

<body>

<h3>Program Operasi Bilangan</h3>

<!-- Form Input -->
<form method="post">

    Masukkan Bilangan Pertama : <br>
    <input type="text" name="A" size="10">
    <br><br>

    Masukkan Bilangan Kedua : <br>
    <input type="text" name="B" size="10">
    <br><br>

    <input type="submit" value="Hitung">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST["A"];
    $b = $_POST["B"];

    // Fungsi Penjumlahan
    function jumlah($A, $B)
    {
        return $A + $B;
    }

    // Fungsi Pengurangan
    function kurang($A, $B)
    {
        return $A - $B;
    }

    // Fungsi Perkalian
    function kali($A, $B)
    {
        return $A * $B;
    }

    // Fungsi Pembagian
    function bagi($A, $B)
    {
        return $A / $B;
    }

    echo "<br>";
    echo "Bilangan Pertama : " . $a;
    echo "<br>";

    echo "Bilangan Kedua : " . $b;
    echo "<br><br>";

    // Penjumlahan
    $jumlahbil = jumlah($a, $b);
    echo "Hasil Penjumlahan 2 buah bilangan";
    echo "<br>";
    printf(
        "Penjumlahan antara : %d + %d = %d",
        $a,
        $b,
        $jumlahbil
    );

    echo "<br><br>";

    // Pengurangan
    $kurangbil = kurang($a, $b);
    echo "Hasil Pengurangan 2 buah bilangan";
    echo "<br>";
    printf(
        "Pengurangan antara : %d - %d = %d",
        $a,
        $b,
        $kurangbil
    );

    echo "<br><br>";

    // Perkalian
    $kalibil = kali($a, $b);
    echo "Hasil Perkalian 2 buah bilangan";
    echo "<br>";
    printf(
        "Perkalian antara : %d * %d = %d",
        $a,
        $b,
        $kalibil
    );

    echo "<br><br>";

    // Pembagian
    if ($b != 0) {
        $bagibil = bagi($a, $b);

        echo "Hasil Pembagian 2 buah bilangan";
        echo "<br>";

        printf(
            "Pembagian antara : %d / %d = %.2f",
            $a,
            $b,
            $bagibil
        );
    } else {
        echo "Bilangan kedua tidak boleh 0 untuk pembagian.";
    }
}

?>

</body>

</html>