<?php

namespace Sharasolns\LinkShortener\Facades;

class SmApi
{
    protected $base_url = "https://sm.ke/api";
    protected $apiKey;

    public function __construct($apiKey)
    {
    }

    public function makePostRequest($endPoint, $data){
        $res = $this->doCurl($endPoint,$data);
        return $res;
    }

    public function makeGetRequest($endPoint){

    }

    protected function getHeaders(){
        $header = [
            'Content-Type: application/json'
        ];
        $header[] = 'Authorization: Bearer '.$this->apiKey;
        return $header;
    }

    protected function doCurl($endPoint, $data, $method='POST'){
        $url = $this->base_url.'/'.ltrim($endPoint,'/');
        $header = $this->getHeaders();
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl,CURLOPT_HTTPHEADER, $header);
        $response = curl_exec($curl);
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        if($status>199 && $status <205){
            return json_decode($response);
        }else{
            throw new \Exception($response);
        }
    }
}
