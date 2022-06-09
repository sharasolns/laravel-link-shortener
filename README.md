# laravel-link-shortener
Php package to easily shorten your links from https://sm.ke.

## Installation

Using composer, install it with the following command

```shell
composer require sharasolns/link-shortener
```

## Authentication

You need an api key to use this package, procedure
- Login to your sm account here https://app.sm.ke
- Go to Profile > Settings > ApiKeys or click this link if you are logged in https://app.sm.ke/settings/tab/api-keys
- Click Add Key, give it a name then submit
- You will be prompted to copy the api key
You are done with generating api key, use it in the step below

## Usage

To use it, in plain php, below is the code structure

```injectablephp
$apikey = "Your_Api_ Key";

$shortener = new \Sharasolns\LinkShortener\Links\Shortener($apikey);
$longUrl = "https://example.com/long-url";
$res = $shortener->shortenLink($url);

$shortenedUrl = $res->link->shortened_url

```
