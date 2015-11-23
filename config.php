<?php
	
//Definindo constantes para os caminhos base
define('CLASSPATH', "class/");
define('JSPATH', "js/");
define('CSSPATH', "css/");
define('IMGPATH', "img/");
define('HOMEPATH', "pages/home");
define('ROOTPATH',"C:/xampp/htdocs/HelpRpg-Fichas/"); 			
define('ROOTPATHURL',"http://127.0.0.1/HelpRpg-Fichas/");		
define('SEPARETOR',"/");
define('ABOUTPATH', ROOTPATHURL."pages/sobre/");
define('HOWTOUSE', 'pages/como-usar/');
define('DOWNLOADPATH','arquivos/');

//url login
define('LOGINPATH', ROOTPATHURL."pages/login");

//URL - Usuarios
define('USUARIOSNEW',ROOTPATHURL."pages/usuario/new.php");
define('USUARIOSEDIT',ROOTPATHURL."pages/usuario/edit.php");
define('USUARIOSDELETE',ROOTPATHURL."pages/usuario/delete.php");

// Retorna o dom�nio do servidor
define('SERVER_NAME',$_SERVER['SERVER_NAME'].SEPARETOR); //127.0.0.1

// Retorna o path do arquivo onde est� sendo executado
define('PHP_SELF',$_SERVER['PHP_SELF']); //PainelAdm/index.php

// Retorna o path do pasta onde est� sendo executado
define('DOCUMENT_ROOT',$_SERVER['DOCUMENT_ROOT']); //C:/xampp/htdocs

// Retorna o path do arquivo onde est� sendo executado o script
define('SCRIPT_FILENAME',$_SERVER['SCRIPT_FILENAME']); //C:/xampp/htdocs/PainelAdm/index.php

// Retorna o path e nome do arquivo que est� executando
define('SCRIPT_NAME',$_SERVER['SCRIPT_NAME']); ///PainelAdm/index.php
	
$path = $_SERVER['SCRIPT_FILENAME'];
$path_parts = pathinfo($path);
// retorna o path absoluto do diret�rio no servidor
define('DIRNAME',$path_parts['dirname']."/"); //C:/xampp/htdocs/helpRpg

// retorna o nome do arquivo com extensão
define('BASENAME',$path_parts['basename']); //index.php

// retorna a extens�o do arquivo
define('EXTENSION',$path_parts['extension']); //php

// retorna o nome do arquivo sem extensão
define('FILENAME',$path_parts['filename']); //index

//Actions - links de acao do sistema
define('ACTION_LOGIN', "login");

//File - Links de arquivos do sistemas
define('LOGIN_PATH', ROOTPATHURL.'pages/login/');
define('LOGIN_VALIDATION_PATH', ROOTPATHURL.'pages/login/login.php');
define('LOGOFF_PATH', 'pages/login/logoff.php');
define('HOME_PATH', 'pages/home/');
define('PAINEL_PATH', ROOTPATHURL.'pages/painel/');
define('BASE_PATH', 'http://127.0.0.1/HelpRpg-Fichas/'); //http://helprpg.com.br

//Usu�rio e senha do banco de dados
define('DB_USER', "root");		
define('DB_PASS', "");	  		
define('DB_NAME', "help_rpg"); 	
define('DB_HOST', "localhost");


//msgs para usuarios
define('U4004', 'Usuário não encontrado!');
define('U4005', 'Cadastro realizado com sucesso!');
define('U4006', 'Email ou login já está em uso.');
define('U4007', 'Dados deletado com sucesso!');
define('U4008', 'Alteração feita com sucesso!');


//Nome/T�tulo do site/projeto
define('PROJECTTITLE', "Help RPG Fichas");
define('PROGRAMER', 'Desenvolvido por <a href="http://www.mrcurriculo.orgfree.com/" target="blank">Maickon Rangel</a> todos os direitos reservados');
define('COPY', "&copy 2013-2015");

//Labels de menu no painel adm
define('NOVO', "Novo");
define('EDITAR', "Editar");
define('DELETAR', "Apagar");
define('VER', "Visualizar");
define('DOWNLOAD','Baixar');
//botoes
define("BACK", "Voltar");


define('CADASTRAR', "Cadastrar");
define('AVENTURAS', "Aventuras");

//lista de superusuarios do sistema
global $permit;
$permit  = ['root','Maickon'];

require_once 'termos/3det.php';
require_once 'termos/d20.php';
require_once 'termos/deamon.php';

