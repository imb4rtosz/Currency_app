<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function getRates()
   {
    

    $response = Http::get('http://api.nbp.pl/api/exchangerates/tables/A/?format=json'); 
    
    $data = json_decode($response, true);  // if arg = true return associative array

  
    foreach($data as $elm){
        foreach($elm['rates'] as $rate){    // 2 foreach loops (access inner array)
        $currency = new Currency;
        
        $currency->name = $rate['currency'];
        $currency->currency_code = $rate['code'];
        $currency->exchange_rate = $rate['mid'];
     
         $currency->save();
        }
}

   }
}
