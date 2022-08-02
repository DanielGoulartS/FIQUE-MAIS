<html>
    <head>
        <title>Fique Mais</title>
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require './FiqueMaisCSS.php'; ?>
        <script src="cronjs.js"></script>
        <script src="pontos.js"></script>
    </head>
    <body>
        <form method="post">
            <audio loop id='aud'> <source src='IMG/SaySoInstrumental.mp3'></audio>
            <div id='div1'></div>
            <div id='div2'>
                <a id='lol'>PLAY</a>
                <div id='divcent'><h1 id='body'>00:00:00:00</h1></div>
                <input type='text' id='nickname' class='box' name='nickname' placeholder='NickName' maxlength='20'></input>
                <input type='text' id='time' class='box' name='temp'></input>
                <button type='submit' id='enviarbt' class='box'>ENVIAR</button>
            </div>
        </form>
        <div id='div3'>
            <h2>RECORDS</h2>
            <table>
                <?php
                foreach ($tquery as $tquery) {
                    if ($i < 5) {
                        ?>
                        <tr id='tr<?php echo $i; ?>'>
                        <?php echo "<td id='td" . $i . "'>" . $tquery['nome']; ?></td> 
                        <?php echo "<td id='td" . $i . "-2'>" . $tquery["lpad(tempo,8,'0')"]; ?></td> 
                        </tr>
                        <?php
                    }
                    $i++;
                }
                ?>
                        
            </table>
        </div>
    </body>
</html>