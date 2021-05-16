<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk;

/**
 * Class Request
 * @package Panda\SmsCenter\MessengerSdk
 * Web-запрос
 */
class Request
{
    /**
     * @param string $url URL-адрес
     * @param string|null $data Параметры
     * @param array $attachments Вложения / Документы
     * @return string Результат
     */
    protected function send(string $url,
                            ?string $data,
                            array $attachments): string
    {
        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        if ($attachments !== [])
            foreach ($attachments as $attachment)
                $files[] = new \CURLFile(realpath($attachment));

        if (!is_null($files ?? $data))
            curl_setopt($ch, CURLOPT_POSTFIELDS, $files ?? $data);

        if (($response = curl_exec($ch)) === false)
            throw new Exception\ClientException(curl_error($ch));

        curl_close($ch);

        return $response;
    }
}
