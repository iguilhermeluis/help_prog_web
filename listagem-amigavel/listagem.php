<?php 

$path = "galeria/";
$diretorio = dir($path); 
$tarquivo = array();

while ($Sarquivo = $diretorio -> read()){
$tarquivo[] = $Sarquivo;
}

$numTemas = count($tarquivo);
sort($tarquivo);
$numAlbum = 0;
$in=1;

while($numAlbum < $numTemas){
	$arquivo=$tarquivo[$numAlbum];

	if(($arquivo!='.')&&($arquivo!='..')){

		echo '"'.$arquivo.'"';
		$indiretorio = dir($path.$tarquivo[$numAlbum]);
	$inn=1;
	while($inarquivo = $indiretorio -> read()){
	if(($inarquivo!='.')&&($inarquivo!='..')&&($inn!=2)){
	$inn++;
}

}
$indiretorio -> close();

}
echo '

</div>
';

$numAlbum++; $in++; $acor++;if($acor==11){$acor=0;}
}

$diretorio -> close();

?>