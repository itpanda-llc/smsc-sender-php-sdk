<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\User;

/**
 * Class Flag
 * @package Panda\SmsCenter\MessengerSdk\User
 * Флаг
 */
class Flag
{
    /**
     * Возможность использования электронного баланса для зачислений, списаний и получения статистики по сообщениям
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const BALANCE2 = 'balance2';

    /**
     * Возможность пересылки входящих SMS на e-mail
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_9 = 'fl[9]';

    /**
     * Возможность пересылки входящих SMS на телефон
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_8 = 'fl[8]';

    /**
     * Выводить статистику в валюте главного аккаунта
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MYCURR = 'mycurr';

    /**
     * Возможность использования списка отправителей Клиента (главного аккаунта)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_29 = 'fl[29]';

    /**
     * Использование более дорогих маршрутов для гарантированной доставки сообщений
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_9 = 'fl2[9]';

    /**
     * Отправлять сначала через дешевые маршруты, при недоставке повторять через дорогие (кроме массовых рассылок)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_24 = 'fl2[24]';

    /**
     * Запрещает отправку сообщений с автоматической заменой имени отправителя
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_12 = 'fl2[12]';

    /**
     * Отключает добавление имени отправителя в текст сообщений без удорожания в случае автозамены
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_13 = 'fl2[13]';

    /**
     * Запрет массовых и рекламных рассылок
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_23 = 'fl2[23]';

    /**
     * Разрешение использования списка контактов главного аккаунта
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_26 = 'fl[26]';

    /**
     * Расширенный режим личного кабинета
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_8 = 'fl2[8]';

    /**
     * Распознавание автоответчиков при звонках
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_16 = 'fl[16]';

    /**
     * Отключить подтверждение доступа с новых IP-адресов при входе
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL3_20 = 'fl3[20]';

    /**
     * Запретить изменения настроек субклиентом
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_27 = 'fl[27]';

    /**
     * Запретить оплаты субаккаунтом
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_28 = 'fl[28]';

    /**
     * Запретить рассылки
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_6 = 'fl[6]';

    /**
     * Скрыть сообщения для субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_1 = 'fl2[1]';

    /**
     * Заблокировать субаккаунт
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_10 = 'fl2[10]';

    /**
     * Запретить отправку в другое время, кроме указанного в параметре tmlim, вместо переноса на следующий день
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_15 = 'fl2[15]';

    /**
     * При использовании параметра tmlim учитывать часовой пояс абонентов
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_16 = 'fl2[16]';

    /**
     * Автоответ на входящие SMS
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const ANSW = 'answ';

    /**
     * Автоответ на входящие звонки
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const ANSW_CALL = 'answ_call';

    /**
     * Отключить пересылку звонков (на e-mail, телефон и обработчик)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_4 = 'fl2[4]';

    /**
     * Включение пересылки статусов сообщений на http-адрес, указанный в параметре url
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_10 = 'fl[10]';

    /**
     * Включение пересылки входящих SMS-сообщений на http-адрес, установленный в параметре url
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_11 = 'fl[11]';

    /**
     * Включить SMPP-доступ (предварительно необходимо зарегистрировать IP-адрес через ONLINE-поддержку)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_2 = 'fl[2]';

    /**
     * Передавать входящие SMS по SMPP-подключению
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_1 = 'fl[1]';

    /**
     * Отслеживать статусы отдельных SMS-частей
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_23 = 'fl[23]';

    /**
     * Режим тестирования (виртуальная отправка без оплаты)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL2_27 = 'fl2[27]';

    /**
     * Включить контроль за доставкой сообщений
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_5 = 'fl[5]';

    /**
     * Включение лога API. Позволяет просматривать 20 последних http-запросов. Хранится 10 минут после последнего запроса
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const FL_30 = 'fl[30]';

    /**
     * Отключить функцию e-mail2sms
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MFL_0 = 'mfl[0]';

    /**
     * Возможность указания списка телефонов в теле письма
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MFL_5 = 'mfl[5]';

    /**
     * Возможность указания списка телефонов в адресе письма
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MFL_6 = 'mfl[6]';

    /**
     * Пересылка письма без темы
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MFL_1 = 'mfl[1]';

    /**
     * Пересылка письма без текста
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MFL_2 = 'mfl[2]';

    /**
     * Пересылка письма без обратного адреса (от кого)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MFL_3 = 'mfl[3]';

    /**
     * Перевод текста письма в транслит
     * @link https://smsc.ru/api/http/users/subclients/
     */
    public const MFL_4 = 'mfl[4]';
}
