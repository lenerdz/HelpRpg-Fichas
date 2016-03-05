<?php
	
require_once 'rotas/rotas-servidor.php';
require_once 'rotas/rotas-painel.php';
require_once 'rotas/rotas-url.php';
require_once 'rotas/rotas-fragmentos.php';
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
							'Deamon'=>'Deamon',
							'7º Mar'=>'7º Mar',
							'Abismo RPG'=>'Abismo RPG',
							'Alchemia RPG'=>'Alchemia RPG',
							'Animes'=>'Animes',
							'Aventuras Fantásticas'=>'Aventuras Fantásticas',
							'Blood & Honor'=>'Blood & Honor',
							'Chamado de Cthulhu'=>'Chamado de Cthulhu',
							'Dungeon World'=>'Dungeon World',
							'Dungeon Evolution'=>'Dungeon Evolution',
							'Dust Devils'=>'Dust Devils',
							'Este Corpo Mortal'=>'Este Corpo Mortal',
							'Fiasco'=>'Fiasco',
							'Final Fantasy RPG'=>'Final Fantasy RPG',
							'Forgotten Realms'=>'Forgotten Realms',
							'Guerra dos Tronos RPG'=>'Guerra dos Tronos RPG',
							'GURPS'=>'GURPS',
							'Mutantes & Malfeitores'=>'Mutantes & Malfeitores',
							'O Senhor dos Anéis'=>'O Senhor dos Anéis',
							'O Um Anel'=>'O Um Anel',
							'Old Dragon'=>'Old Dragon',
							'Pathfinder'=>'Pathfinder',
							'Reinos de Ferro'=>'Reinos de Ferro',
							'RPG Quest'=>'RPG Quest',
							'Scion Hero'=>'Scion Hero',
							'Shotgun Diaries'=>'Shotgun Diaries',
							'Shadowrun'=>'Shadowrun',
							'Sistema d20'=>'Sistema d20',
							'Space Dragon'=>'Space Dragon',
							'Star Wars'=>'Star Wars',
							'Storyteller RPG'=>'Storyteller RPG',
							'Tagmar'=>'Tagmar',
							'Terra Devastada'=>'Terra Devastada',
							'Tormenta'=>'Tormenta',
							'World of Warcraft'=>'World of Warcraft',
							'Yggdrasill RPG'=>'Yggdrasill RPG'
							];

$rpg_sistemas = [
				'ded'=>'Dungeons and Dragons 3.5',
				'ded-4.0'=>'Dungeons and Dragons 4.0',
				'ded-5.0'=>'Dungeons and Dragons 5.0',
				'fate'=>'FATE',
				'savage_worlds'=>'Savage Worlds',
				'3det'=>'3D&T', 
				'deamon'=>'Deamon',
				'7mar'=>'7º Mar',
				'abismo_rpg'=>'Abismo RPG',
				'alchemia_rpg'=>'Alchemia RPG',
				'animes'=>'Animes',
				'aventuras_fantasticas'=>'Aventuras Fantásticas',
				'blood_honor'=>'Blood & Honor',
				'chamado_de_cthulhu'=>'Chamado de Cthulhu',
				'dungeon_world'=>'Dungeon World',
				'dungeon_evolution'=>'Dungeon Evolution',
				'dust_devils'=>'Dust Devils',
				'dste_corpo_mortal'=>'Este Corpo Mortal',
				'fiasco'=>'Fiasco',
				'final_fantasy_rpg'=>'Final Fantasy RPG',
				'forgotten_realms'=>'Forgotten Realms',
				'guerra_tronos_rpg'=>'Guerra dos Tronos RPG',
				'GURPS'=>'GURPS',
				'mutantes_malfeitores'=>'Mutantes & Malfeitores',
				'senhor_aneis'=>'O Senhor dos Anéis',
				'um_anel'=>'O Um Anel',
				'old_dragon'=>'Old Dragon',
				'pathfinder'=>'Pathfinder',
				'reinos_ferro'=>'Reinos de Ferro',
				'rpg_quest'=>'RPG Quest',
				'scion_hero'=>'Scion Hero',
				'shotgun Diaries'=>'Shotgun Diaries',
				'shadowrun'=>'Shadowrun',
				'sistemad20'=>'Sistema d20',
				'space_dragon'=>'Space Dragon',
				'star_wars'=>'Star Wars',
				'storyteller_rpg'=>'Storyteller RPG',
				'tagmar'=>'Tagmar',
				'terra_devastada'=>'Terra Devastada',
				'tormenta'=>'Tormenta',
				'world_warcraft'=>'World of Warcraft',
				'yggdrasill_rpg'=>'Yggdrasill RPG'];

require_once 'termos/load-lenguage.php';