<?php

class mainController{


   /* METODO QUE CARGA LAS PARTES PRINCIPALES DE LA PAGINA WEB
   INPUT
   $title | titulo en string del header
   OUTPIT
   $pagina | string que contiene toda el cocigo HTML de la plantilla
   */
   protected function load_template($title = 'Sin Titulo')
   {
       $pagina = $this->load_page('app/views/default/page.php');
       $header = $this->load_page('app/views/default/sections/s.header.php');
       $pagina = $this->replace_content('/\#HEADER\#/ms', $header, $pagina);
       $pagina = $this->replace_content('/\#TITLE\#/ms', $title, $pagina);
       $menu_left = $this->load_page('app/views/default/sections/s.menuizquierda.php');
       $pagina = $this->replace_content('/\#MENULEFT\#/ms', $menu_left, $pagina);

       return $pagina;
   }

   /* METODO QUE CARGA UNA PAGINA DE LA SECCION VIEW Y LA MANTIENE EN MEMORIA
   INPUT
   $page | direccion de la pagina
   OUTPUT
   STRING | devuelve un string con el codigo html cargado
   */
   protected function load_page($page)
   {
       return file_get_contents($page);
   }

   /* METODO QUE ESCRIBE EL CODIGO PARA QUE SEA VISTO POR EL USUARIO
   INPUT
   $html | codigo html
   OUTPUT
   HTML | codigo html
   */
   protected function view_page($html)
   {
       echo $html;
   }

   /* PARSEA LA PAGINA CON LOS NUEVOS DATOS ANTES DE MOSTRARLA AL USUARIO
   INPUT
   $out | es el codigo html con el que sera reemplazada la etiqueta CONTENIDO
   $pagina | es el codigo html de la pagina que contiene la etiqueta CONTENIDO
   OUTPUT
   HTML | cuando realiza el reemplazo devuelve el codigo completo de la pagina
   */
   protected function replace_content($in = '/\#CONTENIDO\#/ms', $out, $pagina)
   {
       return preg_replace($in, $out, $pagina);
   }
}


?>
