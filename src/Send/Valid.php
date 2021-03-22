<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Valid
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Срок "жизни" сообщения
 */
class Valid
{
    /**
     * @param int $time Срок "жизни" сообщения
     * @return string Срок "жизни" сообщения
     */
    public static function hour(int $time): string
    {
        if ($time < 1) $time = 1;
        if ($time > 24) $time = 24;

        return (string) $time;
    }

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
