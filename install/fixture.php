<?php
require_once('../conexao.php');

/* Removendo tabelas*/

$sql[]="DROP TABLE IF EXISTS conteudo;";
$sql[]="DROP TABLE IF EXISTS menu;";

/* Criando tabelas */

$sql[]="DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `SITE_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `SITE_MENU` varchar(50) DEFAULT NULL,
  `SITE_ORDEM` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`SITE_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;";

$sql[]="DROP TABLE IF EXISTS `conteudo`;
CREATE TABLE `conteudo` (
  `CONTEUDO_ID` smallint(6) NOT NULL AUTO_INCREMENT,
  `SITE_ID` smallint(6) DEFAULT NULL,
  `CONTEUDO` text,
  PRIMARY KEY (`CONTEUDO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;";

$sql[]="DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `LOGIN` varchar(100) NOT NULL,
  `SENHA` varchar(60) NOT NULL,
  PRIMARY KEY (`LOGIN`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";

/* Populando tabelas */

$sql[]="INSERT INTO `menu` VALUES ('1', 'home', '1');";
$sql[]="INSERT INTO `menu` VALUES ('2', 'empresa', '2');";
$sql[]="INSERT INTO `menu` VALUES ('3', 'produtos', '3');";
$sql[]="INSERT INTO `menu` VALUES ('4', 'servicos', '4');";
$sql[]="INSERT INTO `menu` VALUES ('5', 'contato', '5');";



$sql[]="INSERT INTO `conteudo` VALUES ('1', '1', 'Você está na home do site, obrigado pela visita!');";
$sql[]="INSERT INTO `conteudo` VALUES ('2', '2', 'Empresa com 10 anos de experiência em desenvolvimento de sistema online.');";
$sql[]="INSERT INTO `conteudo` VALUES ('3', '3', 'Desenvolvimento de sistemas online');";
$sql[]="INSERT INTO `conteudo` VALUES ('4', '4', 'Consultoria');";
$sql[]="INSERT INTO `conteudo` VALUES ('5', '5', 'Entre em contato no e-mail: teste@teste.com.br ou preencha o formulário abaixo');";

$sql="INSERT INTO `login` VALUES ('adm', '$2y$10$3SZx2ssUQQIyedXZmzU9hewzFK178qtiEmE648U0kuW3UNN0ftFQy');";




foreach($sql as $query){
$stmt= $conexao->prepare($query);
$stmt->execute();
}


?>

  <h2>Banco de dados criado com sucesso! </h2>

