<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

/**
 * Class Valid
 * @package Panda\SMSC\SenderSDK
 * Срок "жизни" сообщения
 */
class Valid
{
    /**
     * @param int $time Срок "жизни" сообщения
     * @return string Срок "жизни" сообщения
     */
    public static function min(int $time): string
    {
        if ($time < 1) $time = 1;
        if ($time > 1440) $time = 1440;

        return sprintf("%02d:%02d",
            intdiv($time, 60),
            $time % 60);
    }
}
