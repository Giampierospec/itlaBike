<?php
$currentUser = $_SESSION['itla_bike_user'];
 ?>

 <div class="text-right">
   <p>Usted está conectado como <?php echo $currentUser->correo ?> <a href="<?php echo base_url('admin/logout')?>"> Salir</a></p>
 </div>

 <div class="container-fluid">

      <div class="row">

         <div class="col-sm-6">
            <div class="row">
               <div class="col-sm-6">
                  <div class="thumbnail">
                     <img src="http://www.freeiconspng.com/uploads/person-icon-5.png" alt="<? php echo $currentUser->nombre?>" class="img-responsive">
                     <div class="caption">
                        <p><?php echo $currentUser->nombre ?></p>
                     </div>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-sm-6">

            </div>
      </div>

 </div>
