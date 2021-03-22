<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Contact;

/**
 * Class Type
 * @package Panda\SmsCenter\MessengerSdk\Contact
 * Тип блокировки/группы
 */
class Type
{
    /**
     * Тип блокировки: Все сообщения
     * Тип группы: Группа для номеров телефонов
     * @link https://smsc.ru/api/http/contact/
     */
    public const ALL_MESSAGES_PHONES_GROUP = '0';

    /**
     * Тип блокировки: Массовые рассылки
     * Тип группы: Группа для e-mail адресов
     * @link https://smsc.ru/api/http/contact/
     */
    public const MASS_MESSAGES_EMAIL_GROUP = '1';

    /**
     * Тип блокировки: Одиночные сообщения
     * @link https://smsc.ru/api/http/contact/
     */
    public const SINGLE_MESSAGES = '2';
}
