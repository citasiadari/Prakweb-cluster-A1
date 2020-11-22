<!DOCTYPE html>
<html lang="en">

<head>
    <title>Harga Bet</title>
</head>

<body>
    <form method="GET" action="">
        <label for="nama">Nama : </label>
        <input type="text" name="nama"> <br>
        <label for="color">Color : </label>

        <select name="color" id="">
            <option value="red">Red</option>
            <option value="green">Green</option>
            <option value="blue">Blue</option>
            <option value="black">Black</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $a = $_GET['nama'];
        $b = $_GET['color'];

        function Hasil($nama)
        {
            if (strlen($nama > 20)) {
                return ((strlen($nama)) * 700);
            } elseif (strlen($nama > 11)) {
                return ((strlen($nama)) * 500);
            } else {
                return ((strlen($nama)) * 300);
            }
        }
        echo "<br>";
        echo "<font color='$b'>Nama = $a <br>";
        echo "<font color='$b'>Harga bet $a adalah = " . Hasil($a);
    }
    ?>
</body>

</html>