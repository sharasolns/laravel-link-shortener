<?php

namespace Sharasolns\LinkShortener\Links;

use Sharasolns\LinkShortener\Facades\SmApi;

class Shortener
{
    protected $apiKey;
    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }
    /**
     * Shorten a link
     * @param int $domain_id
     * @param string $url
    */

    public function shortenLink($url, $domain_id=0){
        $smApi = new SmApi($this->apiKey);
        $data = [
          'link'=>$url,
          'domain_id'=>$domain_id
        ];
        return $smApi->makePostRequest('links/store', $data);
    }
}
