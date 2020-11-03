<?php

function carregaMenu(){
   $rst =  DBSelect("menu", "WHERE ativo = 'S'");
   
   return $rst;
}
?>