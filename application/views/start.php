<h1>Ultimos Anuncios</h1>
<!-- This is placeholder info for the page we can come back and change it later -->
<!-- This is the main page -->
<div class="row">

  <?php
$url = base_url('');


function cargar_anuncios(){
    $CI =& get_instance();
    $sql = "select * from anuncio";
    $rs = $CI->db->query($sql);
    return $rs->result();
}

function cargar_fotos($idAnuncio){
    $CI =& get_instance();
    $sql = "select * from images where idAd = ?";
    $rs = $CI->db->query($sql,array($idAnuncio));
    $rs = $rs->result();
    $result = $rs[0];
    return $result;
}
//added this function to show the user
function cargar_usuarios($idUser){
  $CI =& get_instance();
  $sql = "select * from usuario where id = ?";
  $rs = $CI->db->query($sql,array($idUser));
  $rs = $rs->result();
  $result = $rs[0];
  return $result;
}

$anuncios = cargar_anuncios();


foreach($anuncios as $anuncio){
$fotos = cargar_fotos($anuncio->id);

$user = cargar_usuarios($anuncio->idUser);
        $path = base_url('')."bikeImages/";
        $content = $fotos->imgContent;

        $fullPath= $path . $content;

    echo "<div class='row'>
    <div class='col-sm-6 col-sm-offset-3'>
    <a href='{$url}start/ver_anuncio/{$anuncio->id}'>
      <div class='thumbnail'>
        <img src='{$fullPath}' alt='foto'/>
        <div class='caption'>
          <p>Publicante: {$user->nombre}</p>
          <p>Titulo Anuncio: {$anuncio->titulo}</p>
        </div>
      </div></a>

    </div>
    </div>
    ";
}



?>

</div>
