<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Contact;

/**
 * Class Action
 * @package Panda\SmsCenter\MessengerSdk\Contact
 * Действие / Команда
 */
class Action
{
    /**
     * Создание контакта
     * @link https://smsc.ru/api/http/contact/
     */
    public const ADD_1 = ['add' => '1'];

    /**
     * Создание новой группы
     * @link https://smsc.ru/api/http/contact/
     */
    public const ADD_GROUP_1 = ['add_group' => '1'];

    /**
     * Изменение номера телефона в контакте
     * @link https://smsc.ru/api/http/contact/
     */
    public const CHG_1 = ['chg' => '1'];

    /**
     * Изменение названия группы
     * @link https://smsc.ru/api/http/contact/
     */
    public const CHG_GROUP_1 = ['chg_group' => '1'];

    /**
     * Перенос контакта в новую группу
     * @link https://smsc.ru/api/http/contact/
     */
    public const MOVE_GROUP_1 = ['move_group' => '1'];

    /**
     * Добавление новой группы к контакту
     * @link https://smsc.ru/api/http/contact/
     */
    public const MOVE_GROUP_2 = ['move_group' => '2'];

    /**
     * Удаление контакта из группы
     * @link https://smsc.ru/api/http/contact/
     */
    public const MOVE_GROUP_3 = ['move_group' => '3'];

    /**
     * Удаление контакта
     * @link https://smsc.ru/api/http/contact/
     */
    public const DEL_1 = ['del' => '1'];

    /**
     * Удаление группы
     * @link https://smsc.ru/api/http/contact/
     */
    public const DEL_GROUP_1 = ['del_group' => '1'];

    /**
     * Вывод списка контактов
     * @link https://smsc.ru/api/http/contact/
     */
    public const GET_1 = ['get' => '1'];

    /**
     * Вывод списка групп
     * @link https://smsc.ru/api/http/contact/
     */
    public const GET_GROUP_1 = ['get_group' => '1'];

    /**
     * Добавление телефона в "черный" список
     * @link https://smsc.ru/api/http/contact/
     */
    public const ADD_BLACK_1 = ['add_black' => '1'];

    /**
     * Удаление телефона из "черного" списка
     * @link https://smsc.ru/api/http/contact/
     */
    public const DEL_BLACK_1 = ['del_black' => '1'];
}
