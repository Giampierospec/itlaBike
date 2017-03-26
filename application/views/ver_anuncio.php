<?php
//The first and third line imports the templates
// which are in the templates folder under views.
// the middle one is to render the view you want to see.
$this->load->view('templates/top');
$this->load->view('templates/footer');

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

$path = $image->imgPath;
$content = $image->imgContent;
$fullPath= $path . $content;
?>

  <div class='jumbotron redcd_jb'>
    <div class='row'>
      <div class='col-sm-12'>
        <div class='row'>
          <div class='col-sm-12'>
            <h1><?php echo $anuncio->titulo ?></h1>

          </div>

          <h1><?php echo $anuncio->categoria ?>
</h1>
          <div class='row'>
            <div class='col-sm-12'>
              <h1><?php echo $anuncio->descripcion ?></h1>

            </div>
            <div class='row'>
              <div class='col-sm-12'>
                <h1><?php echo $anuncio->precio ?></h1>

                <img src="<?php echo$fullPath;?>" />

              </div>
            </div>
          </div>
        </div>
      </div>