<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Charset
 * @package Panda\SMSC\SenderSDK
 * Кодировка сообщения и ответа
 */
class Charset
{
    /**
     * Windows-1251
     * @link https://smsc.ru/api/http/
     */
    public const WINDOWS_1251 = 'windows-1251';

    /**
     * UTF-8
     * @link https://smsc.ru/api/http/
     */
    public const UTF_8 = 'utf-8';

    /**
     * KOIR-8
     * @link https://smsc.ru/api/http/
     */
    public const KOIR_8 = 'koir-8';
}
