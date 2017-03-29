<?php

$CI =& get_instance();
$sql = "select * from anuncio where id = ?";
$rs = $CI->db->query($sql, array($id));
$rs = $rs->result();

$anuncio = $rs[0];

$CI2 =& get_instance();
$sql2 = "select * from images where idAd = ?";
$rs2 = $CI2->db->query($sql2, array($id));
$rs2 = $rs2->result();

$image = $rs2[0];

$path = base_url('')."bikeImages/";
$content = $image->imgContent;
$fullPath= $path.$content;
$categoria = getCategoriaById($anuncio->idCate);
?>

  <div class='jumbotron redcd_jb'>
    <div class='row'>
      <div class='col-sm-12'>
        <div class='row'>
          <div class='col-sm-12'>
            <h1><?php echo $anuncio->titulo ?></h1>

          </div>
              
          <h1><?php echo $categoria->categoria ?>
</h1>
          <div class='row'>
            <div class='col-sm-12'>
              <h1><?php echo $anuncio->descripcion ?></h1>

            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <h1><?php echo $anuncio->precio ?></h1>

                <img src="<?php echo$fullPath;?>" class="img-responsive"/>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
