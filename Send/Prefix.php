<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

/**
 * Class Prefix
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Специальные префиксы
 */
class Prefix
{
    /**
     * Отправка голосового сообщения (звонка)
     * @link https://smsc.ru/api/http/send/
     */
    public const CALL = '__CALL__';

    /**
     * Отправка сообщения пользователям мессенджера Viber
     * @link https://smsc.ru/api/http/send/
     */
    public const VIBER = '__VIBER__';

    /**
     * Отправка сообщения пользователям социальных сетей "Одноклассники", "ВКонтакте" или пользователям "Mail.Ru Агент"
     * @link https://smsc.ru/api/http/send/
     */
    public const SOC = '__SOC__';

    /**
     * Отправка специального SMS, не отображаемого в телефоне, для проверки номеров на доступность в реальном времени по статусу доставки
     * @link https://smsc.ru/api/http/send/
     */
    public const PING = '__PING__';

    /**
     * Признак HLR-запроса для получения информации о номере из базы оператора без отправки реального SMS
     * @link https://smsc.ru/api/http/send/
     */
    public const HLR = '__HLR__';
}
