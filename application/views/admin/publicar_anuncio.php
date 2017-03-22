<!-- In this view we will register the adds -->
<?php
//This will catch who is the current user
$currentUser = $_SESSION['itla_bike_user'];
 ?>

 <div class="text-right">
   <!-- This will show me an option to logout from the system -->
   <p>Esta conectado como <?php echo $currentUser->correo ?> <a href="admin/logout"> Salir</a></p>
 </div>
<div class="jumbotron jb-reduced-ad">
  <legend><h2>Publique su anuncio</h2></legend>
  <div class="row">
    <div class="col-sm-12">
      <form class="form-horizontal" action="" method="post">
        <div class="form-group input-group">
          <label for="nombre" class="input-group-addon bg-green"><i class="fa fa-user"></i> Nombre</label>
          <input type="text" name="nombre" class="form-control" required>
        </div>
          <div class="form-group input-group">
            <label for="categoria" class="input-group-addon bg-green"><i class="fa fa-bars"></i> Categoria</label>
            <select class="form-control" name="categoria" required>
              <option value="" disabled selected="">Escoja una categoria</option>
              <option value="BMX">BMX</option>
              <option value="mountain_bike">Mountain Bike</option>
              <option value="estatica">Estatica</option>
              <option value="electrica">Electrica</option>
              <option value="cruiser">Cruiser</option>
              <option value="chopper">Chopper</option>
              <option value="tandem">Tandem</option>
            </select>
          </div>
          <div class="form-group input-group">
            <label for="photo_ad" class="input-group-addon bg-green"><i class="fa fa-camera"></i> Foto</label>
            <input type="file" name="photo_ad" class="form-control"  accept="image/*" multiple="true" id="photo_file"required>
            <div id="message" class="alert alert-danger" style="display:none;">

            </div>
          </div>
          <div class="form-group input-group">
            <label for="precio" class="input-group-addon bg-green"><i class="fa fa-usd"></i> Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control" required>
          </div>
          <div class="form-group input-group">
            <label for="descripcion" class="input-group-addon bg-green"><i class="fa fa-comment"></i> Descripcion</label>
            <textarea name="descripcion" rows="4" cols="80" class="form-control" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn bg-green" id="btn_publish"><i class="fa fa-paper-plane-o"></i> Publicar</button>
          </div>
      </form>
    </div>
  </div>
</div>

<script src="<?php echo base_url('') ?>js/verifyImageQuantity.js" charset="utf-8"></script>
