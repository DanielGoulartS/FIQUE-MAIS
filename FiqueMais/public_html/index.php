<?php

//Cuidado alterar a ordem das Queries
error_reporting(1);

//Classe necessária
require_once './../Classes/Connection.php';

//Configure a conexão nesta classe:
$conn = new Connection();

if (!$conn->IsConnected()) { //Servidores com restrição de criação de DB podem exigir que esta etapa seja feita manualmente.
    $conn->setDbConnection(mysqli_connect($conn->getHost(), $conn->getUsuario(), $conn->getSenha()));
    $conn->Query("create database " . $conn->getBase() . ";");
    $conn->Query("use " . $conn->getBase() . ";");
    $conn->Query("create table ranq(nome varchar(20), tempo int);");
    $conn->Query("INSERT INTO `ranq` VALUES "
            . "('Caramelo',1852),"
            . "('Bolinho',2159),"
            . "('Marshmallow',1143),"
            . "('DaniBoy',1963),"
            . "('HmPaçoquinha',1181);");
    $conn->setDbConnection(mysqli_connect($conn->getHost(), $conn->getUsuario(), $conn->getSenha(), $conn->getBase()));
}

//Contador de Acessos
$queryVisitas = mysqli_fetch_array($conn->Query('select * from visitas where id = 1;'));
$visitas = $queryVisitas['visitas'];
$visitas ++;
$queryUpdateVisitas = $conn->Query("update visitas set visitas = " . $visitas . " where id = 1;");

//Seleciona o menor tempo para realizar a substituição quando/se necessário.
$query1 = mysqli_fetch_array($conn->Query('select * from ranq where tempo = (select min(tempo) from ranq) limit 1;'));

//Recupera Nome com menor rank para ser substituido
$nomesubs = $query1['nome'];
$temposubs = $query1['tempo'];

//Se houver valores no Formulário ...
if (filter_input(INPUT_POST, "temp") && filter_input(INPUT_POST, "nickname")) {
    $novoTempo = filter_input(INPUT_POST, "temp");
    $novoNickname = filter_input(INPUT_POST, "nickname");
    $query2 = mysqli_fetch_array($conn->Query("select * from ranq where nome='" . $novoNickname . "';"));

//Se o jogador ja consta no Banco, Atualize-o. (Evita reenvio de formulários com F5)
//'Query 2' Recupera dados do novo jogador para saber se ja é ranqueado.

//Se a Query de busca retornar resultados...
    if ($query2) {
//Substitua pelo Proprio Nome.
        $query3 = $conn->Query("update ranq set nome ='" . $novoNickname . "', tempo ="
                . $novoTempo . " where nome = '" . $novoNickname . "'and tempo < " . $novoTempo . ";");
    } else {
// Se não, substitua-o pelo nome a ser substituido (nomesubs).
        $query3 = $conn->Query("update ranq set nome ='" . $novoNickname . "', tempo ="
                . $novoTempo . " where nome = '" . $nomesubs . "'and tempo < " . $novoTempo . ";");
    }
}

//Montagem da tabela
$tquery = $conn->Query("SELECT nome, lpad(tempo,8,'0') from ranq order by tempo desc;");
require_once './../Classes/FiqueMais.php';
$conn->CloseConnection();
