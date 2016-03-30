<?php

   /**
    *@author Carlos Alvarez <carlosxviii@gmail.com>
    */

   /**
    * @param int $idGame
    *
    * @return json
    */
   function SearchMoreGamesByGameId($idGame)
   {
       // Produce: <body text='black'>
     //codifica la estructura de las fechas
       // Obtener los datos del header
      $app = \Slim\Slim::getInstance();
       $Url = BASE_URL_GAMES.'idgame='.$idGame;
       $ch = curl_init();
      // Set URL to download
      curl_setopt($ch, CURLOPT_URL, $Url);
      // Should cURL return or print out the data? (true = return, false = print)
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
      // Timeout in seconds
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);

         // Download the given URL, and return output
      $output = curl_exec($ch);

         // Close the cURL resource, and free system resources
      curl_close($ch);

         //return $output;
   }

  /**
   * @param int $idFamilyGame
   *
   * @return json
   */
  function RelatedFamilyGames($idFamilyGame)
  {
      // Produce: <body text='black'>
    //codifica la estructura de las fechas
      // Obtener los datos del header
     $app = \Slim\Slim::getInstance();
      $Url = BASE_URL_GAMES.'familygame='.$idFamilyGame;
      $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        //curl automaticamente retorna los valores
     curl_close($ch);
      //echo $output;
        //return $output;
  }

/**
 * @param varchar[10] $TeamName, varchar[40] $startDate, varchar[40] $endDate
 *
 * @return json
 */
   //search=cav&startdate=2016-02-16&enddate=2016-02-19
  function SearchTeamNameRangeDates($TeamName, $startDate, $endDate)
  {
      // Produce: <body text='black'>
    //codifica la estructura de las fechas
      // Obtener los datos del header
      $startDate_mod = str_replace('/', '-', $startDate);
      $endDate_mod = str_replace('/', '-', $endDate);

      $app = \Slim\Slim::getInstance();
      // $Url = BASE_URL_GAMES.'search='.$TeamName.'&startdate='.$startDate_mod.'$enddate='.$endDate_mod;
      $Url = BASE_URL_GAMES.'search='.$TeamName.'&startdate='.$startDate_mod.'&enddate='.$endDate_mod;
      $ch = curl_init();
     // Set URL to download
     curl_setopt($ch, CURLOPT_URL, $Url);
     // Should cURL return or print out the data? (true = return, false = print)
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
     // Timeout in seconds
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        // Download the given URL, and return output
     $output = curl_exec($ch);

        // Close the cURL resource, and free system resources
     curl_close($ch);
      
        //return $output;
  }
