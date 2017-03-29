<?php
$queryAd = $this->db->query('SELECT * FROM anuncio');
$queryUsers = $this->db->query('SELECT * FROM usuario');

$CI =& get_instance();
if($_POST){
    $u = new stdClass();
    $u->email = $_POST['email'];
    $sql = "update usuario set bloqueado = true where correo = ?";
    $sqlSelect = "select * from usuario where correo = ?";
    
    $rs = $CI->db->query($sql, array($u->email));
}

?>


  <h1 class="text-center">Actualmente hay: <?php echo $queryAd->num_rows(); ?> anuncios registrados</h1>
  <h1 class="text-center">Actualmente hay: <?php echo $queryUsers->num_rows(); ?> usuarios registrados</h1>

  </form>
  <div class="jumbotron jb-reduced-ad">
    <legend>
      <h2>Bloquear usuario</h2></legend>
    <div class="row">
      <div class="col-sm-12">
        <form class="form-horizontal" action="" method="post">
          <div class="form-group input-group">
            <label for="email" class="input-group-addon bg-green">Correo</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn bg-green" id="btn_block">Bloquear</button>
          </div>
        </form>