<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

use Panda\SMSC\SenderSDK\Exception\ClientException;

/**
 * Class Request
 * @package Panda\SMSC\SenderSDK
 * Web-запрос
 */
class Request
{
    /**
     * @param string $url URL-адрес
     * @param string $fields Параметры
     * @return string Результат
     */
    protected function send(string $url, string $fields): string
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);

        if (($response = curl_exec($ch)) === false)
            throw new ClientException(curl_error($ch));

        curl_close($ch);

        return $response;
    }
}
