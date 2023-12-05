


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color: salmon;">
        Latihan Pertama
    </h1>
            <h2>Menghitung Luas Segitiga</h2>
            <form action="" method="post">
                <label>
                    Alas
                    <input type="text" name="alas">
                </label>
                <label>
                    Tinggi
                    <input type="text" name="tinggi">
                </label>
                 <button type="submit" name="submit">Hitung</button>
            </form>

            <?php 
        if(isset($_POST['submit'])){

            $alas=$_POST['alas'];
            $tinggi=$_POST['tinggi'];

            $jumlah= ($alas  * $tinggi) / 2;
       
?>

            <p>Dari Alas <b><?=$alas; ?></b> Dan Tinggi <b><?=$tinggi; ?></b> Maka Jumlanya Luas
            Segitiga Adalah =
           <b> <?= $jumlah; ?></b></p>

            <?php } ?>
              
</body>
</html>