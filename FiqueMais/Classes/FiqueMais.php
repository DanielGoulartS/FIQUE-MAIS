<html>
    <head>
        <title>Fique Mais</title>
        <link rel="icon" href="./Media/discoball.png">
        <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require './../Classes/FiqueMaisCSS.php'; ?>
        <script src="./Scripts/cronjs.js"></script>
        <script src="./Scripts/pontos.js"></script>
    </head>
    <body>
        <input type="checkbox" id="toggle">
        <label for="toggle" id="balao">
            <h2>Apoie-me</h2>
            <ul>
                <li><a href = "https://www.vakinha.com.br/4527939">Doe por Vakinha</a></li>
                <li>ou Chave PIX:</li>
                <li> <p id="pixKey"> 4527939@vakinha.com.br </p> </li>
                <li><p id="arrow">«</p></li>
                <br>
            </ul>
        </label>
        <form method="post">
            <audio loop id='aud'> <source src='./Media/SaySoInstrumental.mp3'></audio>
            <div id='div1'></div>
            <div id='div2' onclick="start()">
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