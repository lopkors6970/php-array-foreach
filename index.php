<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php  
            
            $age = array (
                "Yunus" => "18",
                "Mustafa" => "49",
                "Özge" => "21",
            );
            foreach($age as $i => $text){
                echo $i ." : ".$text."<br>";
            }

        ?>
    </div>    

</body>
</html>