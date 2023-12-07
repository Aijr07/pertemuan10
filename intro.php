<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>variabel</h1>
    <?php
        $nama="luffy";
    ?> 

    <h1><?php echo $nama;?></h1>

    <!-- conditional -->
    <h4>If Else</h4>
    <?php
        $nilai= 75;

        if($nilai >= 80){
            echo "nilai anda sangat baik";
        } elseif ($nilai >=60){
            echo "nilai anda cukup baik";
        } else {
            echo "anda perlu belajar lebih keras";
        }
    ?>

    <h4>switch case</h4>
    <?php
        $hari = "senin";

        switch ($hari){
            case "senin":
                ?> <p>hari ini adalah hari senin</p> <?php
                break;
            case "selasa":
                echo "hari ini adalah hari selasa";
                break;
            default:
                echo "hari ini bukan hari senin dan selasa";
        } 
    ?>

    <h4>looping</h4>
    <?php
        for ($i=0; $i < 5; $i++){
            echo "$i <br>";
        }
    ?>
    <?php
    $fruits = ["apel","jeruk","mangga"];
    for ($i=0; $i<count($fruits);$i++){
        echo "$fruits[$i] <br>";
    }

    echo "<br>";
    
    foreach ($fruits as $tes){
        echo "$tes <br>";
    }
    ?>

</body>
</html>