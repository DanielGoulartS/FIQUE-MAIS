<?php
//Cuidado alterar a ordem das Queries
error_reporting(0);
//Configure a conexão aqui:
$host = 'localhost'; $user = 'newuser'; $pswrd = ''; $db = 'basedoce';
$conn = mysqli_connect($host, $user, $pswrd, $db);
if(mysqli_connect_error()){
    $conn = mysqli_connect($host,$user,$pswrd);
    mysqli_query($conn, "create database $db;");
    mysqli_query($conn, "use $db;");
    mysqli_query($conn, "create table ranq(nome varchar(20), tempo int);");
    mysqli_query($conn, "INSERT INTO `ranq` VALUES ('Caramelo',1852),('Bolinho',2159),('Marshmallow',1143),('DaniBoy',1963),('HmPaçoquinha',1181);");
    $conn = mysqli_connect($host, $user, $pswrd, $db);
}
$query1 = mysqli_fetch_array(mysqli_query($conn, 'select * from ranq where tempo = (select min(tempo) from ranq) limit 1;'));

//Recupera Nome com menor rank para ser substituido
$nomesubs = $query1['nome'];
$temposubs = $query1['tempo'];

//Se houver valores no Formulário ...
if ($_POST['temp'] && $_POST['nickname']) {
    $novoTempo = $_POST['temp'];
    $novoNickname = $_POST['nickname'];
    $query2 = mysqli_fetch_array(mysqli_query($conn, "select * from ranq where nome='" . $novoNickname . "';"));
//Se o jogador ja consta no Banco, Atualize-o. (Evita reenvio de formulários com F5)
//'Query 2' Recupera dados do novo jogador para saber se ja é ranqueado.
    if ($query2) {                                                        //Se a Query de busca retornar resultados...
        $query3 = mysqli_query($conn, "update ranq set nome ='" . $novoNickname . "', tempo=" . $novoTempo . " where nome = '" . $novoNickname . "'and tempo < " . $novoTempo . ";"); //Substitua pelo Proprio Nome.
    } else {
        $query3 = mysqli_query($conn, "update ranq set nome ='" . $novoNickname . "', tempo=" . $novoTempo . " where nome = '" . $nomesubs . "'and tempo < " . $novoTempo . ";"); // Se não, substitua-o pelo nome a ser substituido (nomesubs).
    }
}
$tquery = mysqli_query($conn, "SELECT nome, lpad(tempo,8,'0') from ranq order by tempo desc;");
require'./FiqueMais.php';
mysqli_close($conn);
