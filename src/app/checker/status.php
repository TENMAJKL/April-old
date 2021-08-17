<?php

/**
 *
 * Returns whenever webpage is online or not
 *
 * @param String $url Url of page you want to check
 * @return int
 *
 * */
function getStatus(String $url)
{
    try
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

        $res = curl_exec($curl);
        $response = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        return $response == 200 ? 1 : 0;
    }

    catch (Exception $e)
    {
        return 0;
    }
}


?>
