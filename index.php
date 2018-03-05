<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
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
            <fieldset><legend>Tabuada Escolha um numero</legend>
                    <form method="get" action="tabuada.php">
                        <select name="num">
                            <?php
                                for($c = 1; $c <= 10; $c++){
                                    echo "<option>$c</option>";
                                }
                            ?>
                        </select>
                        <input type="submit" value="Tabuada"/>
                    </form>
            </fieldset>
        </div>
    </body>
</html>