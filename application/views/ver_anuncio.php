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
$image = $rs2;
$path = base_url('')."bikeImages/";
$categoria = getCategoriaById($anuncio->idCate);
$user = getUsuariosById($anuncio->idUser);
$currentUser = (isset($_SESSION['itla_bike_user'])?$_SESSION['itla_bike_user']:"");
?>



<div class="row">
  <div class="col-sm-6 col-sm-offset-3">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1><?php echo $anuncio->titulo ?></h1>
      </div>
        <div id="imageSliding" class="panel-body">

        </div>
        <div class="panel-footer">
          <p><strong>Vendedor:</strong> <?php echo $user->nombre?></p>
          <p><strong>Precio:</strong> <?php echo $anuncio->precio?> $USD</p>
          <p><strong>Categoria:</strong> <?php echo $categoria->categoria?></p>
          <p><strong>Descripcion:</strong> <?php echo $anuncio->descripcion?></p>
          <h3>
          <p>
          <!--integracion del Boton compartir en el panel-footer de cada publicacion-->
          <?php
			$miurl = current_url('');
			$miurlencoded = urlencode($miurl);

			echo "<div class='fb-share-button' data-href='$miurl' data-layout='button_count' data-size='large' data-mobile-iframe='true'><a class='fb-xfbml-parse-ignore' target='_blank' href='https://www.facebook.com/sharer/sharer.php?u=$miurlencoded&amp;src=sdkpreparse'>Compartir</a></div>"
			  ?>
          </p>


        </div>
  </div>
  </div>
</div>

  <script>
    //This script will allow me to make some sort of slideshow with the images
    var path = '<?php echo base_url("")?>';
    var image;
    var i = 0;
    function loadData(){
        image = JSON.parse('<?php echo json_encode($image);?>');
       showImage();
    }
    function showImage(){
      if( i == image.length){
        i = 0;
        setTimeout(showImage,0);
      }
      else{
        $("#imageSliding").html("<img src='"+path+"bikeImages/"+image[i].imgContent+"' class='img-responsive'/>").show(0,dissappearImage);
      }
    }
    function dissappearImage(){
      $("#imageSliding").fadeOut(6000);
      i++;
      setTimeout(showImage,5000);
    }
   $(document).ready(loadData);
  </script>
  <!-- This will load the facebook comments plugin -->
  <div class="row">
    <div class="col-sm-4 col-sm-offset-4">
      <div class="jumbotron jb-blank bs-shad-user">
        <form class="form-horizontal" action="" method="post">
          <div class="row">
            <div class="col-sm-6">
                <textarea name="commentary" rows="1" cols="100" class="form-control" required minlength="5"></textarea>
            </div>
            <div class="col-sm-4">
              <button type="submit" class="btn btn-success"><i class="fa fa-comment"></i> comentar</button>
            </div>
          </div>

        </form>

      </div>
    </div>
  </div>
