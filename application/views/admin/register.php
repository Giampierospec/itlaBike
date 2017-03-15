<?php
$this->load->database();

// The following lines of code add a user to the database
// I still have the task of validating that two users with the same mail are not registered...
if($_POST){
    
    $CI =& get_instance();
    $f = new stdClass();
    $f->nombre = $_POST['name'];
    $f->correo = $_POST['email'];
    $f->clave = md5($_POST['pass']);
    $CI->db->insert('usuario',$f);
}
?>

  <!-- This view is for Registering in the application-->
  <div class="row" id="input_login">
    <div class="col col-sm-6">
      <div class="jumbotron redcd_jb">
        <h2>Ingresa tus datos</h2>
        <form action="" method="post" class="form-horizontal" id="form_login">
          <div class="form-group input-group">
            <label for="name" class="input-group-addon bg-green"><i class="fa fa-address-card-o"></i> Nombre:</label>
            <input type="text" class="form-control" name="name" required placeholder="Jhon" />
          </div>
          <div class="form-group input-group">
            <label for="email" class="input-group-addon bg-green"><i class="fa fa-envelope"></i> Email:</label>
            <input type="email" class="form-control" name="email" required placeholder="user@example.com" />
          </div>
          <div class="form-group input-group">
            <label for="pass" class="input-group-addon bg-green"><i class="fa fa-key"></i> contraseña:</label>
            <input type="password" class="form-control" name="pass" required/>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-success">Registrarse</button>
          </div>
          <a href="<?php echo $this->facebook->login_url();?>" class="btn btn-facebook">Accede vía Facebook</a>
        </form>
      </div>
    </div>
    <!-- Redirect to Login -->
    <div class="col col-sm-6">
      <div class="jumbotron redcd_jb">
        <h1>¿Tiene cuenta?</h1>
        <div class="row">
          <div class="col-sm-12">
            <a href="<?php echo base_url('admin') ?>" class="btn btn-info"><i class="fa fa-sign-in"></i> Conecta a tu cuenta</a>
          </div>
        </div>
      </div>
    </div>
  </div>