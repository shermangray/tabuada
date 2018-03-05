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
        .moldura {
            display: inline-block
        }
    </style>
    <body>
        <div class="moldura">
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