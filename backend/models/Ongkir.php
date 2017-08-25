<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace backend\models;

use yii\base\ErrorException;

/**
 * Description of Ongkir
 *
 * @author LordXxX
 */
class Ongkir extends \yii\db\ActiveRecord{

    //put your code here
    public $city_id;
    public $city_name;
    public $dest_id;
    public $dest_name;
    public $province_id;
    public $province_name;
    public $dest_province_id;
    public $dest_province_name;
    public $courier_id;
    public $courier_name;
    public $postal_code;
    public $dest_postal_code;
    public $weight;
    public $service;
    public $price;
    
    public function attributeLabels()
    {
        return [
            'city_name' => 'City Name',
            'dest_name' => 'Destination Name',
            'province_name' => 'Province',
            'dest_province_name' => 'Destination Province',
            'courier_name' => 'Courier',
            'postal_code' => 'Postal Code',
            'dest_postal_code' => 'Destination Postal Code',
            'weight' => 'Weight',
            'service' => 'Courier Service',
            'price' => 'Price',
        ];
    }

    public function getAllCity() {
        $array = array();
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/city",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 927b0f5015eb8f83bc8822ab4034815c"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            $response = 'err';
            echo "cURL Error #:" . $err;
        } else {
            try {
                $response = json_decode($response, TRUE);
                $response = $response['rajaongkir']['results'];

                $dataTotal = Count($response);
                for ($i = 0; $i < $dataTotal; $i++) {
                    $model = new Ongkir();
                    $model->city_id = $response[$i]['city_id'];
                    $model->city_name = $response[$i]['city_name'];
                    $model->province_id = $response[$i]['province_id'];
                    $model->province_name = $response[$i]['province'];
                    $model->postal_code = $response[$i]['postal_code'];
                    $array[] = $model;
                }
            } catch (ErrorException $ex) {
                $array = array();
            }
        }

        return $array;
    }

    public function getPrice($city_id_from, $city_id_to, $courier, $weight = 1000) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => "origin=" . $city_id_from
            . "&destination=" . $city_id_to
            . "&weight=" . $weight
            . "&courier=" . $courier,
            CURLOPT_HTTPHEADER => array(
                "content-type: application/x-www-form-urlencoded",
                "key: 927b0f5015eb8f83bc8822ab4034815c"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        
        if ($err) {
            $response = 'err';
            echo "cURL Error #:" . $err;
        } else {
            try {
                $response = json_decode($response, TRUE);
                $results = $response['rajaongkir']["results"];
                $costs = $results[0]['costs'];
                $origin_details = $response['rajaongkir']["origin_details"];
                $destination_details = $response['rajaongkir']["destination_details"];

                $array = array();
                $dataTotal = Count($costs);
                for ($i = 0; $i < $dataTotal; $i++) {
                    $model = new Ongkir();
                    $model->city_id = $origin_details["city_id"];
                    $model->city_name = $origin_details["city_name"];
                    $model->dest_id = $destination_details["city_id"];
                    $model->dest_name = $destination_details["city_name"];
                    $model->province_id = $origin_details["province_id"];
                    $model->province_name = $origin_details["province"];
                    $model->dest_province_id = $destination_details["province_id"];
                    $model->dest_province_name = $destination_details["province"];
                    $model->postal_code = $origin_details["postal_code"];
                    $model->dest_postal_code = $destination_details["postal_code"];
                    $model->courier_id = $results[0]["code"];
                    $model->courier_name = $results[0]["name"];
                    $model->service = $costs[$i]["service"];
                    $model->price = $costs[$i]["cost"][0]["value"];
                    $model->weight = $weight;
                    $array[] = $model;
                }
                return $array;
            } catch (ErrorException $ex) {
                
            }
        }
        return null;
    }

}
