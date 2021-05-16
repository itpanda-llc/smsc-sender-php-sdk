<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class MMS
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Признак/параметры голосового сообщения
 */
class Call
{
    /**
     * Обычное сообщение (По умолчанию)
     * @link https://smsc.ru/api/http/send/
     */
    public const NO = '0';

    /**
     * Голосовое сообщение
     * @link https://smsc.ru/api/http/send/
     */
    public const YES = '1';

    /**
     * @param int $w Время ожидания
     * @param int $i Интервал повтора
     * @param int $n Общее количество попыток
     * @return string Параметры голосового сообщения
     */
    public static function getParam(int $w,
                                    int $i,
                                    int $n): string
    {
        if ($w < 0) $w = 0;
        if ($w > 99) $w = 99;
        if ($i < 10) $i = 10;
        if ($i > 3600) $i = 3600;
        if ($n < 0) $n = 0;
        if ($n > 9) $n = 9;

        return sprintf("%d,%d,%d", $w, $i, $n);
    }
}
