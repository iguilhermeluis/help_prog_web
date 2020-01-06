<?php 

	$path = "galeria/".$_GET['ab']."/";
	$diretorio = dir($path); 

	$in=1;
	while($tarquivo = $diretorio -> read()){ 
		if(($tarquivo!='.')&&($tarquivo!='..')){ 
			echo "<div class='c-album'> <div class='album'><a href='../".$path.$tarquivo."' class='lightview' data-lightview-group='fotos' data-lightview-title='' data-lightview-caption=''><img  src='../".$path.$tarquivo."' /></a></div></div>";     
		}
	$in++;
	} 
	$diretorio -> close(); 

?>
