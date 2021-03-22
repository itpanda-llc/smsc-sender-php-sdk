<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Template;

/**
 * Class Format
 * @package Panda\SmsCenter\MessengerSdk\Template
 * Формат сообщения
 */
class Format
{
    /**
     * Не задан
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const NOT_SET = '';

    /**
     * SMS-сообщение
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const SMS = 'sms';

    /**
     * Flash-SMS
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const FLASH = 'flash';

    /**
     * Бинарное SMS
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const BIN = 'bin';

    /**
     * Wap-push
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const PUSH = 'push';

    /**
     * MMS
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const MMS = 'mms';

    /**
     * Звонок
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const CALL = 'call';

    /**
     * E-mail
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const MAIL = 'mail';

    /**
     * Viber
     * @link https://smsc.ru/api/http/send/templates/
     */
    public const VIBER = 'viber';
}
