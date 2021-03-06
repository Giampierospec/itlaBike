<?php
$queryAd = $this->db->query('SELECT * FROM anuncio');
$queryUsers = $this->db->query('SELECT * FROM usuario');

$currentUser = $_SESSION['itla_bike_user'];
$anuncios = getadByUser($currentUser->id);

// Redirect to home if the user is not the admin.

if($currentUser->correo != 'admin@gmail.com'){
    $url = base_url('');
    header("Location: $url");
}

$CI =& get_instance();
if($_POST){
    $u = new stdClass();
    $u->email = "";
    $u->email = (isset($_POST['email']) ? $_POST['email'] : '');

    $sql = "update usuario set bloqueado = true where correo = ?";
    $sqlSelect = "select * from usuario where correo = ?";

    $rs = $CI->db->query($sql, array($u->email));
}

$C2 =& get_instance();
if($_POST){
    $a = new stdClass();
    $a->id = (isset($_POST['id']) ? $_POST['id'] : '');

    $sql2 = "update anuncio set isBlocked = true where id = ?";

    $rs2 = $C2->db->query($sql2, array($a->id));
}
?>





  <h1 class="text-center">Actualmente hay: <?php echo $queryAd->num_rows(); ?> anuncios registrados</h1>
  <h1 class="text-center">Actualmente hay: <?php echo $queryUsers->num_rows(); ?> usuarios registrados</h1>
  <div class="jumbotron jb-reduced-ad">
    <legend>
      <h2>Bloquear usuario</h2></legend>
    <div class="row">
      <div class="col-sm-12">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group input-group">
            <label for="email" class="input-group-addon bg-green">Correo</label>
            <select class="form-control" name="email" required>
              <option value="" disabled selected>Escoja un correo para bloquear</option>
              <?php
              $emails = getAllUsers();
              foreach ($emails as $email) {
                if($email->bloqueado != true && $email->correo != "admin@gmail.com"){
                  echo "<option value='{$email->correo}'>{$email->correo}</option>";
                }
              }

               ?>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class=" btn bg-green " id="btn_block ">Bloquear</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="jumbotron jb-reduced-ad">
    <legend>
      <h2>Bloquear anuncio</h2></legend>
    <div class="row">
      <div class="col-sm-12">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group input-group">
            <label for="id" class="input-group-addon bg-green">ID</label>
            <select class="form-control" name="id">
              <option value="" selected disabled>Escoja un Id de anuncio que desea bloquear</option>
              <?php
              $idAnuncio = cargar_anuncios();
              foreach ($idAnuncio as $idAd) {
                if($idAd->isBlocked != true){
                echo "<option value='{$idAd->id}'>{$idAd->id}</option>";
              }
              }
               ?>
            </select>
          </div>
          <div class="text-center">
            <button type="submit" class=" btn bg-green " id="btn_block ">Bloquear</button>
          </div>
        </form>
      </div>
    </div>
  </div>
