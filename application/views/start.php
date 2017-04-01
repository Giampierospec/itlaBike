<h1>Últimos Anuncios</h1>
<!-- This is the main page -->
<div class="row">

  <?php
$url = base_url('');

$anuncios = cargar_anuncios();
	
$miurl = current_url('');
$miurlencoded = urlencode($miurl);
	

foreach($anuncios as $anuncio){
	global $contador;
	$contador++;
	
    $fotos = getPhotosByAd($anuncio->id);
    
    $user = getUsuariosById($anuncio->idUser);
    $path = base_url('')."bikeImages/";
    $content = $fotos->imgContent;
    
    $fullPath= $path . $content;
    
    if($anuncio->isBlocked != true){
        
        echo "<div class='row'>
        <div class='col-sm-6 col-sm-offset-3'>
        <a href='{$url}start/ver_anuncio/{$anuncio->id}'>
        <div class='thumbnail bs-shad-user'>
        <img src='{$fullPath}' alt='foto' class='img-responsive'/>
        <div class='caption'>
        <p>Publicante: {$user->nombre}</p>
        <p>Titulo Anuncio: {$anuncio->titulo}</p>
        </div></a>
        <p>
		<div class='fb-share-button' data-href='$url/start/ver_anuncio/$contador' data-layout='button_count' data-size='large' data-mobile-iframe='true'><a class='fb-xfbml-parse-ignore' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=$miurlencoded%2fstart%2Fver_anuncio%2F$contador&amp;src=sdkpreparse'>Compartir</a></div>
		</p>
		</div>
        </div>
        </div>
        ";
		
		
    }
}



?>

</div>