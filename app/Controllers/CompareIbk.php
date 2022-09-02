<?php

namespace App\Controllers;

class CompareIbk extends BaseController
{
    public function compare()
    {
        $lampiran = $this->request->getPost();
        $post = '{
            "nik": "' . $this->request->getVar('nikCompare') . '",
            "npwp": "' . $this->request->getVar('npwpCompare') . '",
            "shortName": "' . $this->request->getVar('nasabahCompare') . '",
            "birthDate": "' . $this->request->getVar('tanggalLahirCompare') . '",
            "startDate": "' . $this->request->getVar('periodeFromCompare') . '",
            "endDate": "' . $this->request->getVar('periodeUntilCompare') . '"
        }';

        // "birthPlace": "' . $lampiran['tempatLahirCompare'] . '",

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => URL_API_DEV . 'procurement/inquiry-customer-info',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => $post,
            CURLOPT_HTTPHEADER => array(
                POST_ID_DEV,
                POST_KEY_DEV,
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        // $response = $post;

        // SPMID'.$id.'

        curl_close($curl);

        $resp = json_encode($response);
        return $resp;
    }
}
