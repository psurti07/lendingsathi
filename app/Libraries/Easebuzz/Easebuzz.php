<?php

namespace App\Libraries\Easebuzz;

class Easebuzz
{
    /* ===============================
        INITIATE PAYMENT
    =============================== */
    public function initiate_payment($params, $merchant_key, $salt, $env)
    {
        $result = $this->_payment($params, $merchant_key, $salt, $env);
        return $this->_paymentResponse((object)$result);
    }

    protected function _payment($params, $merchant_key, $salt, $env)
    {
        $params['key'] = $merchant_key;

        $posted = $this->preparePostArray($params);
        $this->emptyValidation($posted, $salt);

        $posted['amount'] = number_format((float)$posted['amount'], 2, '.', '');

        $posted['hash'] = $this->generateHash($posted, $salt);

        $url = strtoupper($env) === 'PROD'
            ? 'https://pay.easebuzz.in/'
            : 'https://testpay.easebuzz.in/';

        return $this->pay($posted, $url);
    }

    protected function preparePostArray($params)
    {
        return [
            'key'         => trim($params['key']),
            'txnid'       => trim($params['txnid']),
            'amount'      => trim($params['amount']),
            'firstname'   => trim($params['firstname']),
            'email'       => trim($params['email']),
            'phone'       => trim($params['phone']),
            'productinfo' => trim($params['productinfo']),
            'surl'        => trim($params['surl']),
            'furl'        => trim($params['furl']),
        ];
    }

    protected function emptyValidation($params, $salt)
    {
        foreach ($params as $key => $value) {
            if (empty($value)) {
                die("{$key} cannot be empty");
            }
        }
        if (empty($salt)) {
            die("Salt key missing");
        }
    }

    protected function generateHash($data, $salt)
    {
        $sequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
        $hashString = '';

        foreach (explode('|', $sequence) as $field) {
            $hashString .= ($data[$field] ?? '') . '|';
        }

        return strtolower(hash('sha512', $hashString . $salt));
    }

    protected function pay($params, $url)
    {
        $ch = curl_init();
        curl_setopt_array($ch, [
            CURLOPT_URL => $url . 'payment/initiateLink',
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($params),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 0,
            CURLOPT_SSL_VERIFYPEER => 0,
        ]);

        $response = curl_exec($ch);
        curl_close($ch);

        return json_decode($response, true);
    }

    protected function _paymentResponse($result)
    {
        if ($result->status == 1) {
            return [
                'status' => 1,
                'payment_url' => $this->getRedirectUrl($result->data)
            ];
        } else {
            return [
                'status' => 0,
                'message' => $result
            ];
        }
    }

    protected function getRedirectUrl($accessKey)
    {
        return 'https://pay.easebuzz.in/pay/' . $accessKey;
    }

    /* ===============================
        RESPONSE VERIFY
    =============================== */
    public function response($response, $salt)
    {
        $generatedHash = $this->reverseHash($response, $salt);

        if ($generatedHash !== $response['hash']) {
            return ['status' => 0, 'message' => 'Hash mismatch'];
        }

        return ['status' => 1, 'data' => $response];
    }

    protected function reverseHash($response, $salt)
    {
        $sequence = [
            'udf10','udf9','udf8','udf7','udf6',
            'udf5','udf4','udf3','udf2','udf1',
            'email','firstname','productinfo',
            'amount','txnid','key'
        ];

        $hashString = $salt . '|' . $response['status'];

        foreach ($sequence as $field) {
            $hashString .= '|' . ($response[$field] ?? '');
        }

        return strtolower(hash('sha512', $hashString));
    }
}
