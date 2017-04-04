<!-- In this view we will edit the ads -->
<?php
//This will catch who is the current user
$currentUser = $_SESSION['itla_bike_user'];
$CI =& get_instance();
$message = "";
$anuncio = getAdById($id);
//This method will retrieve the category
$categoria = getCategoriaById($anuncio->idCate);
if($_POST){
    $ad = new stdClass();
    $ad->titulo = $_POST['titulo'];
    $categoria = $_POST['categoria'];
    $ad->precio = $_POST['precio'];
    $ad->descripcion = $_POST['descripcion'];
    $ad->idUser = $currentUser->id;
    $ad->idCate = $categoria->id;
    $CI->db->where("id",$id);
    $CI->db->update('anuncio',$ad);
    redirect('admin');
}
?>

  <div class="jumbotron jb-reduced-ad">
    <legend>
      <h2>Publique su anuncio</h2></legend>
    <div class="row">
      <div class="col-sm-12">
        <form class="form-horizontal" enctype="multipart/form-data" action="" method="post">
          <div class="form-group input-group">
            <label for="titulo" class="input-group-addon bg-green"><i class="fa fa-header"></i> Titulo</label>
            <input type="text" name="titulo" class="form-control" placeholder="<?php echo $anuncio->titulo ?>"required>
          </div>
          <div class="form-group input-group">
            <label for="categoria" class="input-group-addon bg-green"><i class="fa fa-bars"></i> Categoria</label>
            <input type="text" name="categoria" disabled value="<?php echo $categoria->categoria ?>" class="form-control">
          </div>

          <div id="message" class="alert alert-danger" style="display:none;">

          </div>
          <div class="form-group input-group">
            <label for="precio" class="input-group-addon bg-green"><i class="fa fa-usd"></i> Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" placeholder="<?php echo $anuncio->precio ?>"required>
          </div>
          <div class="form-group input-group">
            <label for="descripcion" class="input-group-addon bg-green"><i class="fa fa-comment"></i> Descripcion</label>
            <textarea name="descripcion" rows="4" cols="80" class="form-control" placeholder="<?php echo $anuncio->descripcion ?>"required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn bg-green" id="btn_publish"><i class="fa fa-paper-plane-o"></i> Publicar</button>
          </div>
        </form>
      </div>
    </div>
    <div id="messagePhp" class="alert alert-danger" style="display:none;">
      <?php echo $message ?>
        <script type="text/javascript">
          $(document).ready(initMessage);

          function initMessage() {
            //This will retrieve my variable from php verifying that is not empty
            var message = '<?php echo (isset($message)?$message:'
            ') ?>';
            if (message != '') {
              $("#messagePhp").show(0, messageAppend).addClass('alert-dismissable fade in');
            } else {
              $("#messagePhp").hide();
            }

          }
          //function to append the desired message
          function messageAppend() {
            $(message).appendTo('#messagePhp').fadeIn(5000, closeMessage).addClass("animated bounce");
          }

          function closeMessage() {
            var close = '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>';
            $(close).appendTo('#messagePhp').fadeIn(5000);
          }
        </script>
    </div>
  </div>
