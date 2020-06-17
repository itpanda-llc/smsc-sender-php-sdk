<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class All
 * @package Panda\SMSC\SenderSDK
 * Вариант ответа
 */
class All
{
    /**
     * Обычный формат (По умолчанию)
     * @link https://smsc.ru/api/http/status_messages/
     */
    public const DEFAULT = '0';

    /**
     * Полная информация
     * @link https://smsc.ru/api/http/status_messages/
     */
    public const FULL = '1';

    /**
     * Дополнительная информация
     * @link https://smsc.ru/api/http/status_messages/
     */
    public const ADD = '2';
}
