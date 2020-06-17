<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Format
 * @package Panda\SMSC\SenderSDK
 * Формат ответа
 */
class Format
{
    /**
     * Строка
     * @link https://smsc.ru/api/http/
     */
    public const STRING = '0';

    /**
     * Числа
     * @link https://smsc.ru/api/http/
     */
    public const NUMBERS = '1';

    /**
     * XML
     * @link https://smsc.ru/api/http/
     */
    public const XML = '2';

    /**
     * JSON
     * @link https://smsc.ru/api/http/
     */
    public const JSON = '3';
}
