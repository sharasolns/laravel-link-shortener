# laravel-link-shortener
Laravel Link Shortener using sm.ke system

```injectablephp
$apikey = "Your_Api_ Key";

$shortener = new \Sharasolns\LinkShortener\Links\Shortener($apikey);
$longUrl = "https://example.com/long-url";
$res = $shortener->shortenLink($url);

$shortenedUrl = $res->link->shortened_url

```
