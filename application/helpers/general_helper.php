<?php
//This method will help me get ads by user
function getadByUser($userId){
  $CI =& get_instance();
  $sql = "select * from anuncio where idUser = ?";
  $rs = $CI->db->query($sql,array($userId));
  return $rs->result();
}
// This will help me get the id of the current category
function getCategoriaByName($categoria){
  $CI =& get_instance();
  $sql = "select * from categoria where categoria = ?";
  $rs = $CI->db->query($sql,array($categoria));
  $rs = $rs->result();
  return $rs[0];
}
//this will help me get all the categories
function getAllCategorias(){
   $CI =& get_instance();
  $sql = "select * from categoria";
  $rs = $CI->db->query($sql);
  return $rs = $rs->result();
}
//Method to get categories by Id
function getCategoriaById($idCate){
  
  $CI =& get_instance();
  $sql = "select * from categoria where id = ?";
  $rs = $CI->db->query($sql,array($idCate));
  $rs = $rs->result();
  return $rs[0];
}
 ?>
