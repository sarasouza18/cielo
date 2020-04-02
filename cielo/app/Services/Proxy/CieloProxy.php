<?php


namespace App\Services\Proxy;


use GuzzleHttp\Client;

/**
 * Class CieloProxy
 * @package App\Services\Proxy
 */
class CieloProxy
{
    /**
     * @return mixed
     */
    public function sendPayment(){
         $client = new Client([
             'timeout' => 5,
         ]);

        $data['api_key'] = env('CIELO_API_KEY');

        $url = 'https://api.cieloecommerce.cielo.com.br/';

        $response = $client->request('POST', $url, [
            'form_params' => $data
        ]);
        $result = $response->getBody()->getContents();
        return \GuzzleHttp\json_decode($result, true);;
    }

}
