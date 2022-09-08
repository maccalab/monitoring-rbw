<?php
require "vendor/autoload.php";
const URL = 'https://data-gambar-55c91-default-rtdb.firebaseio.com/';
const TOKEN = 'rwtWUV8iNbyHZD8CcjyvD53jpH8up3Kq3R6PNJ4s';
const PATH = '/data_walet';

use Firebase\FirebaseLib;

$firebase = new FirebaseLib(URL, TOKEN);

if(isset($_GET['data_walet'])){
    $dataWalet = $_GET['data_walet'];
    urldecode($dataWalet);
    str_split($dataWalet);
    $dataMasuk = [];
    $dataKeluar = [];
    $dataPopulasi = [];
    $pos = -1;
    for ($i = 0; $i < strlen($dataWalet); $i++){
        if($dataWalet[$i] != '#'){
            if($pos == 0){
                array_push($dataMasuk, $dataWalet[$i]);
            } else if($pos == 1){
                array_push($dataKeluar, $dataWalet[$i]);
            } else if($pos == 2){
                array_push($dataPopulasi, $dataWalet[$i]);
            }
        } else {
            $pos++;
            continue;
        }
    }
// send calibrate command
$firebase->set(PATH . '/keluar', implode($dataKeluar));
$firebase->set(PATH . '/masuk', implode($dataMasuk));
$firebase->set(PATH . '/total', implode($dataPopulasi));
}
?>