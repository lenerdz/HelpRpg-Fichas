<?php
require_once '../../../header.php';
require_once '../helper.php';

global $s;

$s->restricted_access();

$show_personagem = new Magias(ROOTPATH.MAGIASIMGPATH);
$objeto = $show_personagem->select($show_personagem->getTable(), null, [['id','=', $_GET['id'] ? $_GET['id'] : ' ']]);

$pass = helper_check_permitions($objeto[0]['dono']);
if(!$pass)
	header("Location: ".ROOTPATHURL.MAGIASPATH);

$delete = $show_personagem->delete_data($objeto);
if($delete == 1):
	header("Location: ".ROOTPATHURL.MAGIASPATH.'?status=deleted');
else:
	header("Location: ".ROOTPATHURL.MAGIASPATH.'?status=error');
endif;