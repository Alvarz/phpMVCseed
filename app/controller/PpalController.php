<?php
/**
 *@author Carlos Alvarez <carlosxviii@gmail.com>
 */

require 'MainController.php';

class PpalController extends MainController
{



  /**
   * @param   $out | es el codigo html con el que sera reemplazada la etiqueta CONTENIDO
   * @param   $pagina | es el codigo html de la pagina que contiene la etiqueta CONTENIDO
   *
   * @return   HTML | cuando realiza el reemplazo devuelve el codigo completo de la pagina
   *
   * @description  PARSEA LA PAGINA CON LOS NUEVOS DATOS ANTES DE MOSTRARLA AL USUARIO
   */
    public function buscar($carrera, $cantidad)
    {
        $universitario = new universitario();
  //carga la plantilla
  $pagina = $this->load_template('- Resultados de la busqueda -');
  //carga html del buscador
       $buscador = $this->load_page('app/views/default/modules/m.buscador.php');
       //obtiene los registros de la base de datos
    ob_start();
    //realiza consulta al modelo
     $tsArray = $universitario->universitarios($carrera, $cantidad);
        if ($tsArray != '') {
            //si existen registros carga el modulo en memoria y rellena con los datos
      $titulo = 'Resultado de busqueda por "'.$carrera.'" ';
      //carga la tabla de la seccion de VIEW
        include 'app/views/default/modules/m.table_univ.php';
            $table = ob_get_clean();
      //realiza el parseado
      $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $buscador.$table, $pagina);
        } else {
            //si no existen datos -> muestra mensaje de error
        $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $buscador.'<h1>No existen resultados</h1>', $pagina);
        }
        $this->view_page($pagina);
    }


 /**
  *
  * @return   codigo html de la pagina
  *
  * @description  METODO QUE MUESTRA LA PAGINA PRINCIPAL CUANDO NO EXISTEN NUEVAS ORDENES
  */
   public function principal()
   {
       $pagina = $this->load_template('Pagina Principal MVC');
       $html = $this->load_page('app/views/default/modules/m.principal.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $html, $pagina);
       $this->view_page($pagina);
   }


 /**
  *
  * @return   HTML | codigo html de la pagina
  *
  * @description  METODO QUE MUESTRA LA PAGINA HISTORIA DE BOLIVIA, ES UNA PAGINA ESTATICA
  */
   public function historia()
   {
       $pagina = $this->load_template('History of Bolivia');
       $html = $this->load_page('app/views/default/modules/m.historia.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $html, $pagina);
       $this->view_page($pagina);
   }

   /**
    *
    * @return   HTML | codigo html de la pagina con el buscador incluido
    *
    * @description  METODO QUE MUESTRA EN PANTALLA EL FORMULARIO DE BUSQUEDA
    */
   public function buscador()
   {
       $pagina = $this->load_template('Busqueda de registros');
       $buscador = $this->load_page('app/views/default/modules/m.buscador.php');
       $pagina = $this->replace_content('/\#CONTENIDO\#/ms', $buscador, $pagina);
       $this->view_page($pagina);
   }
}
