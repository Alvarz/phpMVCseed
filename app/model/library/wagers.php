<?php

/**
 *@author Carlos Alvarez <carlosxviii@gmail.com>
 */

/**
 * @param int $IdAgent
 *
 * @return json
 */
function Report_Wager_Listing_Details($IDWager)
{
    $app = \Slim\Slim::getInstance();
    $prodecedure = 'sp_Report_Wager_Listing_Details';
    $Url = BASE_URL.$prodecedure.'&p1='.$IDWager;
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
