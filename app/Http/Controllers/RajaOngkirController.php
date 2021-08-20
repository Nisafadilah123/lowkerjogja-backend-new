<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RajaOngkirController extends Controller
{   private $api_key = '65b86474176cb3ac970e11dd36052aa4';
    //
    public function provinsi (){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "http://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: $this->api_key"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
    $array_response = json_decode($response, true);
    $data_provinsi = $array_response['rajaongkir']['results'];
    echo "<option value=''>--Pilih Provinsi--</option>";
    foreach ($data_provinsi as $key => $value) {
        echo "<option value='" . $value['province'] . "'id_provinsi='" . $value['province_id'] . "'>" . $value['province'] . "</option>";
//   echo $response;
}
}
    }
}