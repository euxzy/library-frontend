<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class HttpClient
{
  static function fetch($method, $url, $body = [], $files = [])
  {
    /**
     * Langsung return response jika method yang
     * dipakai adalah GET
     */
    if ($method == "GET") return Http::get($url)->json();

    if (sizeof($files) > 0) {
      $client = Http::asMultipart();

      foreach ($files as $key => $file) {
        $path = $file->getPathname();
        $name = $file->getClientOriginalName();

        $client->attach($key, file_get_contents($path), $name);
      }
      return $client->post($url, $body)->json(); // fetch api
    }
    return Http::post($url, $body)->json(); // fetch post
  }
}
