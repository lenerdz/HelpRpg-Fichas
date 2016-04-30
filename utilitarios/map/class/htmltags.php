<?php

class Tag{
    
    function __call($tag, $propiedades = null){	
		$tag = "<{$tag}";
		
		if(is_array(isset($propiedades[0])) && count($propiedades[0]) > 0):
		    if($this->isAssoc($propiedades[0])):
                foreach($propiedades[0] as $key => $p):
			        $tag .= " {$key}=\"{$p}\" ";
		        endforeach;
            else:
                foreach($propiedades as $p):
			        $tag .= " {$p} ";
		        endforeach;
            endif;
		else:
		    if($propiedades == null):
		        $tag .= "";
		    else:
    		    $tag .= " {$propiedades[0]} ";
    		endif;
		endif;
		$tag .= ">\n";	    
		
		echo $tag;
	}
	
	function __get($tag){
		echo "\n</$tag>\n";
	}
	
	function isAssoc($arr){
	    return array_keys($arr) !== range(0, count($arr) - 1);
    }
      
	function printer($string, $modo=null){
		$barra_n = "\n";
		$tabulacao = "\t";
		if($modo == 'decode'):
			print $tabulacao.utf8_decode($string).$barra_n;
		elseif($modo == 'encode'):
			print $tabulacao.utf8_encode($string).$barra_n;
		else:
			print $tabulacao.$string.$barra_n;
		endif;
		
	}
}
