<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class SkyDropx
{
  protected $url;

  public function __construct()
  {
    $this->url = env('SKY_DROPS_API_URL');
  }

  public function test()
  {
    return $this->getClient()->get("https://api.skydropx.com/v1/carriers")->json();
  }

  private function getClient()
  {
    return Http::withToken(env('SKY_DROPS_API_KEY'));
  }
}
