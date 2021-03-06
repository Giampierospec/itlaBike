<?php
$CIc =& get_instance();
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

if($_POST){
  $cm = new stdClass();
  $cm->commentary = $_POST["commentary"];
  $cm->idUser = $currentUser->id;
  $cm->idAnuncio = $id;
  $CIc->db->insert("comment",$cm);
}
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
  <!-- This will verify if anyone is logged in to comment-->
  <?php if(isset($_SESSION["itla_bike_user"])): ?>
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
<?php
$comments = getAllComments();
$url = base_url('');
foreach ($comments as $cm) {
  if($cm->idAnuncio == $id){
  $user = getUsuariosById($cm->idUser);
  echo "<div class='row'>
          <div class='col-sm-6 col-sm-offset-5'>
            <div class='panel panel-success bs-shad-user'>
              <div class='panel-heading text-center'>
                <h3>Comentarios</h3>
              </div>
              <div class='panel-body'>
                <div class='row'>
                  <div class='col-sm-4'>
                  <p id='comment{$cm->id}'>{$cm->commentary}<p>
                  </div>
                  <div class='col-sm-4'>
                    <div class='row'>
                      <div class='col-sm-6'>
                        <img src='{$url}userImage/user1.png' class='img-circle img-responsive'  alt='user'/>
                      </div>
                      <div class='col-sm-6'>
                        <p>{$user->nombre}<p>
                      </div>
                    </div>
                    </div>";
                    if($currentUser->correo == $user->correo){
                      ?>
                      <div class='col-sm-4'>
                            <a href='#' class='btn btn-default' onclick='confirmationEdit("<?php echo $cm->id ?>","<?php echo $cm->commentary ?>","<?php echo $anuncio->id ?>");'><i class='fa fa-pencil'></i></a>
                      </div>
                      <?php
                    }
                    if($currentUser->correo == 'admin@gmail.com'){
                      ?>
                      <div class='col-sm-4'>
                            <a href='#' class='btn btn-danger' onclick='confirmationDelete("<?php echo $cm->id ?>","<?php echo $anuncio->id ?>")'><i class='fa fa-trash'></i></a>
                        </div>
                    <?php
                    }

          ?>
          <?php
                echo"</div>
                </div>
            </div>
          </div>
        </div>";
}
}
 ?>
 <?php endif; ?>
 <script type="text/javascript">
 var urlEdit = '<?php echo base_url('start/edit_comment') ?>';
 var urlDelete = '<?php echo base_url('start/delete_comment') ?>';
   function confirmationEdit(id,comment,idAd){
     pId = document.getElementById("comment"+id);
     if(confirm("¿Estás seguro que quieres editar este comentario?")){
       pId.contentEditable = "true";
       pId.focus();
       $(pId).keydown(function(ev){
        if(ev.which == 13){
          ev.preventDefault();
          encodedComment = encodeURIComponent(pId.textContent);
          window.open(urlEdit+"/"+id+"/"+encodedComment+"/"+idAd,"_self");
        }
       });
     }

   }
   function confirmationDelete(id,idAd){
     if(confirm("¿Estás seguro que quieres eliminar este comentario?")){
       window.open(urlDelete+"/"+id+"/"+idAd,"_self");
     }
   }
 </script>
