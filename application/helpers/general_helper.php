<?php
//This method will help me get ads by user
function getadByUser($userId){
  $CI =& get_instance();
  $sql = "select * from anuncio where idUser = ?";
  $rs = $CI->db->query($sql,array($userId));
  return $rs->result();
}
 ?>
