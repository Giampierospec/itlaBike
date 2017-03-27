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

function cargar_fotos(){
    $CI =& get_instance();
    $sql = "select * from images";
    $rs = $CI->db->query($sql);
    return $rs->result();
}

$anuncios = cargar_anuncios();
$fotos = cargar_fotos();

foreach($anuncios as $anuncio){

    foreach($fotos as $foto){

        $path = base_url('')."adImages/";
        $content = $foto->imgContent;

        $fullPath= $path . $content;
    }

    echo "<div class='jumbotron redcd_jb'>
    <div class='row'>
    <div class='col-sm-6'>
    <div class='big-box'>
    <a href='{$url}admin/ver_anuncio/{$anuncio->id}'>
    <img src='{$fullPath}' alt='{$anuncio->titulo}'>
    </div>
    </div>
    <div class='col-sm-6'>
    <h2>{$anuncio->titulo}</h2>
    <div class='row'>
    <div class='col-sm-12'>
    <h2>$anuncio->descripcion</h2>

    </div>
    </div>
    </div>
    </div>
    </div>";
}



?>

</div>
