<?php

/**
 * Файл из репозитория SMSC-Sender-PHP-SDK
 * @link https://github.com/itpanda-llc
 */

namespace Panda\SMSC\SenderSDK;

use Panda\SMSC\SenderSDK\Exception\ClientException;

/**
 * Class Time
 * @package Panda\SMSC\SenderSDK
 * Время отправки сообщения
 */
class Time
{
    /**
     * @param int $year Год
     * @param int $month Месяц
     * @param int $day День
     * @param int $hour Час
     * @param int $minute Минута
     * @return string Дата / Время
     */
    public static function get(int $year,
                               int $month,
                               int $day,
                               int $hour,
                               int $minute = 0): string
    {
        try {
            $dateTime = new \DateTime(
                sprintf("%d-%02d-%02d %02d:%02d:00",
                    $year,
                    $month,
                    $day,
                    $hour,
                    $minute));
        } catch (\Exception $e) {
            throw new ClientException($e->getMessage());
        }

        return $dateTime->format('dmyHi');
    }
}
