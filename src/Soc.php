<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Soc
 * @package Panda\SMSC\SenderSDK
 * Soc-сообщение
 */
class Soc
{
    /**
     * Обычное сообщение
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Soc-сообщение (Социальные сети)
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';
}
