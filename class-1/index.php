<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    

    <?php
    $name = "Dark Matter";
    $read = true;

    if($read){
        $message= "You have read $name ";
    }else{
        $message = "You have Not read $name";
    }
    
    ?>

    <h1>
        <?= $message ?>
    </h1>



</body>
</html>