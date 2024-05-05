<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Projetos;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class ApiLumxController extends Controller
{

    public function criarCarteira()
    {
        $token  = env('TOKEN_LUMX');
        $curl   = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://protocol-sandbox.lumx.io/v2/wallets",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30000,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $token
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            $dados = [];
        } else {
            $dados  = json_decode($response, true);
        }
        
        return $dados;

    }

}
