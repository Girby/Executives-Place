<?php 
namespace App\Classes;
use Illuminate\Support\Facades\Http;
class Currency {

    public function __construct()
    {
        return 'initialised';
    }

    public function convert($amount, $currency){
        $converted = array(
            "usd" => $amount,
            "gbp" => $amount,
            "eur" => $amount
        );

        if (env("CONVERSION_METHOD") !== "externalApi") {
            if ($currency == "GBP") {
                $converted['usd'] = $amount * 1.3;
                $converted['eur'] = $amount * 1.1;
            }else if ($currency == "EUR"){
                $converted['usd'] = $amount * 1.2;
                $converted['gbp'] = $amount * 0.9;
            }else if ($currency == "USD"){
                $converted['gbp'] = $amount * 0.7;
                $converted['eur'] = $amount * 0.8;
            }else {
                return null;
            }
    
        }else if(env("CONVERSION_METHOD") == "externalApi"){
            $response = Http::get('https://api.exchangeratesapi.io/latest?base='.$currency.'');
            $response->json();

            $converted['gbp'] = round($amount * $response->json()['rates']['GBP'], 2);
            $converted['usd'] = round($amount * $response->json()['rates']['USD'], 2);
            
            // if base currency is EUR, API is not returning EUR rate
            if ($currency !== "EUR") {
                $converted['eur'] = round($amount * $response->json()['rates']['EUR'], 2);
            }
        }

        
        return json_encode($converted);
    }

}

?>