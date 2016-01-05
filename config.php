<?php
	
require_once 'rotas/rotas-servidor.php';
require_once 'rotas/rotas-url.php';
require_once 'db/db-config.php';

//msgs para usuarios
define('U4004', 'Usuário não encontrado!');
define('U4005', 'Cadastro realizado com sucesso!');
define('U4006', 'Email ou login já está em uso.');
define('U4007', 'Dados deletado com sucesso!');
define('U4008', 'Alteração feita com sucesso!');

//lista de superusuarios do sistema
global $permit, $rpg_sistemas, $rpg_sistemas_arquivo_nome, $rpg_sistemas_labels;

//variaveis globas no sitema
$permit  = ['root','Maickon'];
$rpg_sistemas_arquivo_nome = [
							'Dungeons and Dragons 3.5'=>'d20-ded.php',
							'Dungeons and Dragons 4.0'=>'d20-ded-4.0.php',
							'Dungeons and Dragons 5.0'=>'d20-ded-5.0.php',
							'FATE'=>'fate.php',
							'Savage Worlds'=>'savage_worlds.php',
							'3D&T'=>'3det.php', 
							'Deamon'=>'daemon.php'];
$rpg_sistemas_labels 	= 	[
							'Dungeons and Dragons 3.5'=>'Dungeons and Dragons 3.5',
							'Dungeons and Dragons 4.0'=>'Dungeons and Dragons 4.0',
							'Dungeons and Dragons 5.0'=>'Dungeons and Dragons 5.0',
							'FATE'=>'FATE',
							'Savage Worlds'=>'Savage Worlds',
							'3D&T'=>'3D&T',
							'Deamon'=>'Deamon'
							];

$rpg_sistemas = [
				'ded'=>'Dungeons and Dragons 3.5',
				'ded-4.0'=>'Dungeons and Dragons 4.0',
				'ded-5.0'=>'Dungeons and Dragons 5.0',
				'fate'=>'FATE',
				'savage_worlds'=>'Savage Worlds',
				'3det'=>'3D&T', 
				'deamon'=>'Deamon'];

require_once 'termos/3det.php';
require_once 'termos/d20.php';
require_once 'termos/deamon.php';
require_once 'termos/d20-ded-4.0.php';
require_once 'termos/d20-ded-5.0.php';
require_once 'termos/fate.php';
require_once 'termos/itens.php';
require_once 'termos/magias.php';
require_once 'termos/pericias.php';
require_once 'db/db-config.php';

$ip = $_SERVER['REMOTE_ADDR'];
$pais = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
if(isset($pais['geoplugin_countryName']) && $pais['geoplugin_countryName'] == 'United States'):
	$carregar_traducao = $pais['geoplugin_countryName'];
else:
	$carregar_traducao = 'Brazil';
endif;

switch('Brazil'):
	case 'Brazil':
		require_once 'termos/pt-br.php';
	break;

	case 'United States':
		require_once 'termos/en.php';
	break;
endswitch;