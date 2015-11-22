<?php
require_once '../../../header.php';
require_once '../helper.php';

global $s;

$s->restricted_access();

$show_armadura = new Armaduras(ROOTPATH.ARMADURASIMGPATH);
$armadura = $show_armadura->select($show_armadura->getTable(), null, [['id','=', $_GET['id'] ? $_GET['id'] : ' ']]);

$pass = helper_check_permitions($armadura[0]['dono']);
if(!$pass)
	header("Location: ".ROOTPATHURL.ARMASPATH);

$delete = $show_armadura->delete_data($armadura);
if($delete == 1):
	header("Location: ".ROOTPATHURL.ARMADURASPATH.'?status=deleted');
else:
	header("Location: ".ROOTPATHURL.ARMADURASPATH.'?status=error');
endif;