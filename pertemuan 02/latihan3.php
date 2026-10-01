<?php
// Inisialisasi variabel untuk menampung input dan hasil
$nilai1 = "";
$nilai2 = "";
$operator = "+";
$hasil = "";
$error = "";

if (isset($_POST['submit'])) {

    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $operator = $_POST['operator'];

    // Validasi apakah input adalah angka
    if (is_numeric($nilai1) && is_numeric($nilai2)) {

        switch ($operator) {

            case '+':
                $hasil = $nilai1 + $nilai2;
                break;

            case '-':
                $hasil = $nilai1 - $nilai2;
                break;

            case '*':
                $hasil = $nilai1 * $nilai2;
                break;

            case '/':
                if ($nilai2 == 0) {
                    $error = "Kesalahan: Tidak dapat melakukan pembagian dengan nol (0)!";
                } else {
                    $hasil = $nilai1 / $nilai2;
                }
                break;

            default:
                $error = "Operator tidak valid.";
        }

    } else {
        $error = "Mohon masukkan angka yang valid.";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Latihan 3 - Kalkulator</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }

        .container {
            width: 450px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            font-size: 14px;
            color: #555;
            padding-bottom: 5px;
            text-align: center;
        }

        td {
            padding: 5px;
            text-align: center;
        }

        input[type="number"] {
            width: 90px;
            padding: 4px;
        }

        select {
            padding: 4px;
        }

        button {
            padding: 5px 10px;
            cursor: pointer;
        }

        .result-box {
            margin-top: 15px;
            padding: 10px;
            background: #f9f9f9;
            border: 1px dashed #999;
        }

        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>

<body>

<div class="container">

    <h3>Latihan 3</h3>

    <p>Kalkulator Sederhana</p>

    <form method="post">

        <table>

            <tr>
                <th>Nilai 1</th>
                <th>Operator</th>
                <th>Nilai 2</th>
                <th></th>
            </tr>

            <tr>

                <td>
                    <input
                        type="number"
                        name="nilai1"
                        value="<?php echo $nilai1; ?>"
                        required
                    >
                </td>

                <td>
                    <select name="operator">

                        <option value="+"
                            <?php if ($operator == "+") echo "selected"; ?>>
                            +
                        </option>

                        <option value="-"
                            <?php if ($operator == "-") echo "selected"; ?>>
                            -
                        </option>

                        <option value="*"
                            <?php if ($operator == "*") echo "selected"; ?>>
                            ×
                        </option>

                        <option value="/"
                            <?php if ($operator == "/") echo "selected"; ?>>
                            ÷
                        </option>

                    </select>
                </td>

                <td>
                    <input
                        type="number"
                        name="nilai2"
                        value="<?php echo $nilai2; ?>"
                        required
                    >
                </td>

                <td>
                    <button type="submit" name="submit">
                        Hitung
                    </button>
                </td>

            </tr>

        </table>

    </form>

    <?php if ($hasil !== "") { ?>

        <div class="result-box">
            <strong>Hasil:</strong>
            <?php echo $hasil; ?>
        </div>

    <?php } ?>

    <?php if ($error !== "") { ?>

        <div class="result-box error">
            <?php echo $error; ?>
        </div>

    <?php } ?>

</div>

</body>
</html>