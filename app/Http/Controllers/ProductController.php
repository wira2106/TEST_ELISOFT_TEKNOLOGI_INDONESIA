<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct()
    {
        $ch = curl_init();
  
        $url = "http://107.172.204.17/jubelio/api/all/products/stock";
        $dataArray = [
                        'email' => 'blrsit21@gmail.com',
                        'page' => 1,
                        'pageSize' => 1,
                    ];
      
        $data = http_build_query($dataArray);
      
        $getUrl = $url."?".$data;
      
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_URL, $getUrl);
        curl_setopt($ch, CURLOPT_TIMEOUT, 80);
           
        $response = curl_exec($ch);
            
        if(curl_error($ch)){
            return response()->json([
                'errors' => true,
                'message' =>  'Request Error:' . curl_error($ch),
            ],500);
            
        }else{
            return response()->json([
                'errors' => false,
                'message' =>  "Berhasil",
                'data' =>  $response,
            ]);
        }
           
        curl_close($ch);
    }
}
