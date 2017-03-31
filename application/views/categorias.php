<?php
$categorias = getAllCategorias();
?>
<!--SDK de facebook para el boton compartir-->
<div id="fb-root"></div>
		<script>(function(d, s, id) {
  			var js, fjs = d.getElementsByTagName(s)[0];
  			if (d.getElementById(id)) return;
  			js = d.createElement(s); js.id = id;
  			js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.8&appId=1823829894500693";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>

<div id="catRow" class="row">
   
</div>

<script type="text/javascript">
    var cate;
     function startVariable(){
        cate = JSON.parse('<?php echo json_encode($categorias); ?>');
        relativePath = '<?php echo base_url("")?>';
        showCategories();
     }
     //This code is to show all the categories stored in the database
     function showCategories(){
         for(var i = 0; i < cate.length; i++){
                $("#catRow").hide().append("\
                <div class='col-sm-4'>\
                 <a href='"+relativePath+"start/ver_categoria/"+cate[i].id+"' class='text-muted'>\
                <div class='panel panel-default bs-shad-user'>\
                <div class='panel-heading'><h1>"+
                cate[i].categoria+"</h1></div>\
                <div class='panel-body'>\
                <img src='"+relativePath+'bikeImages/'+cate[i].imgContent+"' class='img-responsive'/>\
                </div>\
                <div class='panel-footer'>\
                <p>"+cate[i].descripcion+"</p>\
                </div>\

                </div></a>\
                </div>").fadeIn(2000);
                
			 //integracion del Boton compartir en el panel-footer de cada publicacion fuera de la seccion ver anuncio
          <div class="fb-share-button" data-href="http://localhost:8080/itlaBike/application/views/templates/footer.php" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8080%2FitlaBike%2Fapplication%2Fviews%2Ftemplates%2Ffooter.php&amp;src=sdkpreparse">Compartir</a></div>
          
            
         }
     }

    
    $(document).ready(startVariable);
</script>
