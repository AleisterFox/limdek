<?php

namespace App\Models;

use Illuminate\Support\Facades\Http;

class SkyDropx
{
  const ORIGIN_ZIP_CODE = '29066';

  protected $url;

  public function __construct()
  {
    $this->url = env('SKY_DROPS_API_URL');
  }

  public function checkAbility($data = [])
  {
    $data = json_decode('{ "zip_from": "02900", "zip_to": "44100", "parcel": { "weight": "1", "height": "10", "width": "10", "length": "10" }}');
    return $this->getClient()->post("https://api.skydropx.com/v1/quotations", $data)->json();
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
