<?php
require_once '../../../header.php';
require_once '../helper.php';

$super = false;
global $tag, $form, $parametros;

$tag->body('role="document"');

new Components('menu', $parametros);
$tag->br();
$tag->br();
	
	$objeto = new Artefatos(ROOTPATH.ARTEFATOSIMGPATH);
	$artefatos = $objeto->select($objeto->getTable(),null,[ ['id','=', $_GET['id']] ]);
	
	helper_adsense();
	
	if(!isset($artefatos[0]['id'])):
		$form->_container();
			$form->_col(12);
				$form->h1(REGISTRO_NAO_ENCONTRADO_MSG);
			$form->col_();
		$form->container_();
	else:
		$form->_container();
			$form->_col(2);
				$tag->p('class="span_title"');
					$tag->imprime(ARTEFATOS);
				$tag->p;
			$form->col_();
			
			//botoes de anterior e proximo
			helper_prev_next($objeto, $_GET['id'], 'artefatos');
			
			//verificando permiçoes
			foreach($permit as $p):
				if($s->get_session('nome') == $p):
					$super = true;
				endif;
			endforeach;
			
			//monsta a cadeia de botoes que sao exibitos de acordo com o tipo de usuario
			//caso esteja logado
			helper_buttons_bar($super, 'artefatos', $artefatos[0]['id']);
			
			$form->_col(12);
				$tag->hr();
			$form->col_();
			
			helper_modal_alert_confirm();
			
			$form->_container();
				$form->_col(6);
					$img = $artefatos[0]['img'];
					helper_sow_artefatos($artefatos[0]);
				$form->col_();
				
				$form->_col(6);
					$tag->div('class="center"');
						if($img != null):
							$tag->img('src="'.ROOTPATHURL.ARTEFATOSIMGPATH.$img.'" class="img-responsive img-thumbnail size-img"');
						else:
							$tag->img('src="'.ROOTPATHURL.IMGPATH.'noimage.png" class="img-responsive img-thumbnail size-img"');
						endif;
					$tag->div;
				$form->col_();
					
			$form->container_();
		$form->div_();
	endif;	
require_once '../../../footer.php';