<?php

namespace App\Libraries;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class LibOnApi
{
    protected $url;
    protected $version;
    public function __construct()
    {
        $this->url = config('libonapi.url');
        $this->version = config('libonapi.version');
    }

    protected function getApi($uri, $params = [], $method = '')
    {
        try {
            $client = new Client(['verify' => false]);
            // Get url
            $apiUrl = $this->url . '/' . $this->version . $uri;

            switch ($method) {
                case 'post':
                    $res = $client->post($apiUrl, array(
                        'form_params' => $params,
                        'headers' => [
                            'Expect' => ''
                        ],
                        'timeout' => 20,
                        'connect_timeout' => 20,
                    ));
                    break;
                case 'get':
                    $res = $client->get($apiUrl, array('form_params' => $params));
                    break;
                default:
                    break;
            }

            if (isset($res)) {
                return $res;
            } else {
                return false;
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return false;
        }
    }

    protected function getApiData($uri, $params = array(), $method = 'post')
    {
        try {
            $res = $this->getApi($uri, $params, $method);

            if ($res) {
                $result = $res->getBody()->getContents();
                $result = json_decode($result);
                if ($result->result < 1) {
                    return array();
                } else {
                    return $result->data;
                }
            } else {
                return array();
            }
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return array();
        }
    }

    public function getProductAll($params = array())
    {
        $result = $this->getApiData('/book', $params);
        return $result;
    }

    public function getBookDetail($params = array())
    {
        $result = $this->getApiData('/book/detail', $params);
        return $result;
    }

    public function createBorrowOrder($params = [])
    {
        $result = $this->getApiData('/order/createBorrowOrder', $params);
        return $result;
    }
}
