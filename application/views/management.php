<?php
$CI =& get_instance();
if($_POST){
    $u = new stdClass();
    $u->email = $_POST['email'];
    $sql = "update usuario set bloqueado = true where correo = ?";
    $sqlSelect = "select * from usuario where correo = ?";
    
    $rs = $CI->db->query($sql, array($u->email));
}
?>

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