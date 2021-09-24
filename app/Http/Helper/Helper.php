<?php
/// method get itu defaultnya untuk type nya
function rajaongkir_point($end_point,$method="GET",$body=[]){
    $curl = curl_init();

    /// untuk cek kalau end point kosong
    if(empty($end_point)){
        return false; // kaya untuk tandain enpoint ga boleh kosong
    }

    if(str_starts_with($end_point,'/')){
        // untuk misal kalau ada slashnya itu ada lagi di belakangnya end point
        // biar clean endpointnya misal ga jadi kaya gini //starter/province
        $end_point=substr($end_point,1); // diabmbilnya jadi gini /starter/province misal kalau awalnya ke dobel
        // jadi nanti itu bisa pake awalan / atau engga ada / ga masalah.
    }

    $api_key="65b86474176cb3ac970e11dd36052aa4";
    $rajaongkir_api = "http://api.rajaongkir.com/starter/"; // url dsar api nya lupa apa nanti coba isi    // body curl dasar


    // biar bisa dinamis
    $method_curl = is_array($method) ? 'GET' : $method;
    $method_curl = strtolower($method_curl);

    $curl_body = [
        CURLOPT_URL => $rajaongkir_api.$end_point,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => strtoupper($method_curl),
        CURLOPT_HTTPHEADER => [
            "key: $api_key"
        ]
    ];

    if($method_curl!='get'){ //misal kalau post dll. selain get lah pokonya
        if($body!=null && is_array($body) && count($body)>0){
            /// kalauselain get perlu ditambah curl body post
            $curl_body[CURLOPT_POSTFIELDS] = json_encode($body);
            //karna post field isinya json kita tambah content type di headernya
            // $curl_body[CURLOPT_HTTPHEADER][] = "Content-Type: application/json";
             $curl_body[CURLOPT_HTTPHEADER][] = "Content-Type: application/object";

        }
        // misal kalau ada paramnya ambil url/enpoint dasarnya
        $fix_endpoint = explode("?",$curl_body[CURLOPT_URL]);
        $curl_body[CURLOPT_URL] = $fix_endpoint[0]; // tanpa ada params end point (?)
    }else{
        $param = null; // kalau get jadinya params url/end point
        $field = count($body)>0 ? $body : $method ; // inipake parameter functionnya jadi untuk get bisa langsung endpoint nya sama param tanpa di isi parameter method itu jadi get

        if($field!=null && is_array($field) && count($field)>0){
            $param = implode("&",$field); // jadi simethod ini bisa string atau array
            // dd($param);
            // kalau misal parameter mehtod itu array maka jadinya itu curl get, selain itu method sesuai dengan tipe nyakaya post dll.
        }
        $curl_body[CURLOPT_URL] = $curl_body[CURLOPT_URL]."?".$param; // karna get itu param diawalinnya pake tanda ?
    }

    curl_setopt_array($curl,$curl_body); //final curl nya
    $respon = curl_exec($curl);
    $respon = json_decode($respon);
    $error_curl = curl_error($curl);
    // hasil nya kita ubah jadi array objek/objek biar bisa dipanggil pake panah parameter kedua json_decode nya ga diperluin
    // kalau mau pake yang asosiatif kaya gini ['atribut'], tambah parameter json decodenya true
    curl_close($curl); //tutup setelah ksekusi

    if($error_curl){
        return false;
    }else{
        if(isset($respon->rajaongkir->status)){ // cek hasil responnya kalau ada rajaongkir>status
            if($respon->rajaongkir->status->code==200){
                return $respon->rajaongkir->results; // kalau hasilnya bener sesuai atruan raja ongkirnya.
            }else{
                return null; // kosong
            }
        }else{
            return false; // bearti ada yang salah pas tembah api raja ongkir, nanti di kustom sendiri aja gimana bentuknya
        }
        /*"rajaongkir": {
        "query": [],
        "status": {
            "code": 200,
            "description": "OK"
        },
        "results": [
         */
    }
}



/// method get itu defaultnya untuk type nya
function rajaongkir_point_post($end_point,$method="POST",$body=[]){
    $curl = curl_init();

    /// untuk cek kalau end point kosong
    if(empty($end_point)){
        return false; // kaya untuk tandain enpoint ga boleh kosong
    }

    if(str_starts_with($end_point,'/')){
        // untuk misal kalau ada slashnya itu ada lagi di belakangnya end point
        // biar clean endpointnya misal ga jadi kaya gini //starter/province
        $end_point=substr($end_point,1); // diabmbilnya jadi gini /starter/province misal kalau awalnya ke dobel
        // jadi nanti itu bisa pake awalan / atau engga ada / ga masalah.
    }

    $api_key="65b86474176cb3ac970e11dd36052aa4";
    $rajaongkir_api = "http://api.rajaongkir.com/starter/"; // url dsar api nya lupa apa nanti coba isi    // body curl dasar


    // biar bisa dinamis
    $method_curl = is_array($method) ? 'POST' : $method;
    $method_curl = strtolower($method_curl);

    $curl_body = [
        CURLOPT_URL => $rajaongkir_api.$end_point,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => strtoupper($method_curl),
        CURLOPT_HTTPHEADER => [
            "key: $api_key"
        ]
    ];

    if($method_curl!='get'){ //misal kalau post dll. selain get lah pokonya
        if($body!=null && is_array($body) && count($body)>0){
            /// kalauselain get perlu ditambah curl body post
            $curl_body[CURLOPT_POSTFIELDS] = json_encode($body);
            //karna post field isinya json kita tambah content type di headernya
            // $curl_body[CURLOPT_HTTPHEADER][] = "Content-Type: application/json";
             $curl_body[CURLOPT_HTTPHEADER][] = "Content-Type: application/object";

        }
        // misal kalau ada paramnya ambil url/enpoint dasarnya
        $fix_endpoint = explode("?",$curl_body[CURLOPT_URL]);
        $curl_body[CURLOPT_URL] = $fix_endpoint[0]; // tanpa ada params end point (?)
    }else{
        $param = null; // kalau get jadinya params url/end point
        $field = count($body)>0 ? $body : $method ; // inipake parameter functionnya jadi untuk get bisa langsung endpoint nya sama param tanpa di isi parameter method itu jadi get

        if($field!=null && is_array($field) && count($field)>0){
            $param = implode("&",$field); // jadi simethod ini bisa string atau array
            // dd($param);
            // kalau misal parameter mehtod itu array maka jadinya itu curl get, selain itu method sesuai dengan tipe nyakaya post dll.
        }
        $curl_body[CURLOPT_URL] = $curl_body[CURLOPT_URL]."?".$param; // karna get itu param diawalinnya pake tanda ?
    }

    curl_setopt_array($curl,$curl_body); //final curl nya
    $respon = curl_exec($curl);
    $respon = json_decode($respon);
    $error_curl = curl_error($curl);
    // hasil nya kita ubah jadi array objek/objek biar bisa dipanggil pake panah parameter kedua json_decode nya ga diperluin
    // kalau mau pake yang asosiatif kaya gini ['atribut'], tambah parameter json decodenya true
    curl_close($curl); //tutup setelah ksekusi

    if($error_curl){
        return false;
    }else{
        if(isset($respon->rajaongkir->status)){ // cek hasil responnya kalau ada rajaongkir>status
            if($respon->rajaongkir->status->code==200){
                return $respon->rajaongkir->results; // kalau hasilnya bener sesuai atruan raja ongkirnya.
            }else{
                return null; // kosong
            }
        }else{
            return false; // bearti ada yang salah pas tembah api raja ongkir, nanti di kustom sendiri aja gimana bentuknya
        }
        /*"rajaongkir": {
        "query": [],
        "status": {
            "code": 200,
            "description": "OK"
        },
        "results": [
         */
    }
}