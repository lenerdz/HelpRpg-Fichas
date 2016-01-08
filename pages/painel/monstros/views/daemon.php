<?php 
function helper_show_mostro_deamon($personagem){
	global $tag, $form;
	$unserialize_params = unserialize($personagem['dados']);
	
	$tag->div('class="col-md-12 header_deamon"');
		$form->_row();
			$form->_col(6);
				$tag->imprime($form->bold($personagem['nome']));
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(CODIGO).$personagem['id']);
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold($personagem['sistema']));
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(CRIADOR.' ('.$personagem['dono'].')'));				
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold($personagem['raca']).'<br>'.$personagem['classe']);	
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold('Personagem de Nível '.$personagem['lv']));
				$tag->br();
				$tag->imprime(XP.' '.helper_check_params('xp',$unserialize_params));
			$form->col_();
		$form->row_();
	$tag->div;
	
	$tag->div('class="col-md-12 body1_deamon"');
		$form->_row();
			$form->_col(12);
				$tag->imprime($form->bold(NASCIDO_NO_DIA).' '.$unserialize_params['data_nascimento']);
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(LOCAL_DE_NASCIMENTO).' '.$unserialize_params['local_nascimento']);
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(SEXO).' '.$unserialize_params['sexo']);
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(ALTURA).' '.$unserialize_params['altura']);
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(PESO).' '.$unserialize_params['peso']);
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(PROFISSAO).' '.$unserialize_params['profissao']);
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(IDADE_APARENTE).' '.$unserialize_params['idade_aparente'].' '.$form->bold(IDADE_REAL).' '.$unserialize_params['idade_real']);
			$form->col_();
			$form->_col(4);
				$tag->imprime($form->bold(RELIGIAO).' '.$unserialize_params['religiao']);
			$form->col_();
		$form->row_();
	$tag->div;
	
	$tag->div('class="col-md-12 body2_deamon"');
		$form->_row();
			$form->_col(3);
				$tag->imprime($form->bold(CON_DAEMON).' '.$unserialize_params['constituicao'].' ('.($unserialize_params['constituicao']*4).'%) ');
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(FOR_DAEMON).' '.$unserialize_params['forca'].' ('.($unserialize_params['forca']*4).'%) ');
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(DEX_DAEMON).' '.$unserialize_params['destreza'].' ('.($unserialize_params['destreza']*4).'%) ');
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(AGI_DAEMON).' '.$unserialize_params['agilidade'].' ('.($unserialize_params['agilidade']*4).'%) ');
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(INT_DAEMON).' '.$unserialize_params['inteligencia'].' ('.($unserialize_params['inteligencia']*4).'%) ');
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(PER_DAEMON).' '.$unserialize_params['percepcao'].' ('.($unserialize_params['percepcao']*4).'%) ');
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(CAR_DAEMON).' '.$unserialize_params['carisma'].' ('.($unserialize_params['carisma']*4).'%) ');
			$form->col_();
			$form->_col(3);
				$tag->imprime($form->bold(WILL_DAEMON).' '.$unserialize_params['will'].' ('.($unserialize_params['will']*4).'%) ');	
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(IP_DAEMON).': '.$unserialize_params['ip']);
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(PV_DAEMON).': '.$unserialize_params['pv']);				
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(PH_DAEMON).': '.$unserialize_params['ph']);	
			$form->col_();
			$form->_col(6);
				$tag->imprime($form->bold(PM_DAEMON).': '.$unserialize_params['pm']);
			$form->col_();
			$form->_col(12);
				$tag->imprime($form->bold(PF_DAEMON).': '.$unserialize_params['pf']);
			$form->col_();
		$form->row_();
	$tag->div;
	
	$tag->div('class="col-md-12 body1_deamon"');
		$form->_row();
			$form->_col(12);
				$tag->imprime($form->bold(PERICIAS_COM_ARMAS_DAEMON).'<br>'.$unserialize_params['pericias_com_armas']);
			$form->col_();
			$form->_col(12);
				$tag->imprime($form->bold(APRIMORAMENTOS_DAEMON).'<br>'.$unserialize_params['aprimoramentos']);
			$form->col_();
		$form->col_();
	$form->row_();
	
	$tag->div('class="col-md-12 body2_deamon"');
		$form->_row();
			$form->_col(12);
				$tag->imprime($form->bold(PERICIAS).'<br>'.$unserialize_params['pericias']);
			$form->col_();
			$form->_col(12);
				$tag->imprime($form->bold(PODERES).'<br>'.$unserialize_params['poderes']);
			$form->col_();
		$form->row_();
	$tag->div;
			
	$tag->div('class="col-md-12 body1_deamon border-button"');
		$form->_row();
			$form->_col(12);
				$tag->imprime($form->bold(MAGIAS).'<br>'.$unserialize_params['magias']);
			$form->col_();
			$form->_col(12);
				$tag->imprime($form->bold(OUTROS).'<br>'.$unserialize_params['outros']);
			$form->col_();
		$form->row_();
	$tag->div;
}

helper_show_mostro_deamon($monstros[0]);
