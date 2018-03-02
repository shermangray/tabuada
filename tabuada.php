<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Tabuada</title>
    </head>
    <style>
        body{
            background-color: #9a9b9a;
        }
        H2{
            font-family:”Trebuchet MS”, Helvetica, sans-serif;
            color:#FFF;
            background-color:#C63;
            margin-bottom:1px;
            padding:15px;
        }
    </style>
    <body>
        <div>
            <?php
                $n = isset($_GET["num"]) ? $_GET["num"] : 1;
            ?>
            <fieldset><legend>Tabuada de <?php echo $n; ?></legend>
                <?php
                    for ($c = 1; $c <= 10; $c++){
                        $r = $n * $c;
                        echo "$n x $c = $r <br/>";
                    }
                ?>
            </fieldset>
            <a href="javascript:history.go(-1)"><h2>Voltar</h2></a>
        </div>
    </body>
</html>