<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\User;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\User
 * Работа с субклиентами
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Логин субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const USER = 'user';

    /**
     * Текущий пароль субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const PSWC = 'pswc';

    /**
     * Новый пароль субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const PASSWORD = 'password';

    /**
     * Сумма, перечисляемая клиенту с главного аккаунта в валюте главного аккаунта
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const SUM = 'sum';

    /**
     * ID сайта, которому будет принадлежать создаваемый субклиент
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const SITE_ID = 'site_id';

    /**
     * Новый логин субклиента при изменении
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const NEW_LOGIN = 'new_login';

    /**
     * Тип учетной записи
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const TYPE = 'type';

    /**
     * Основной адрес электронной почты
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const EMAIL = 'email';

    /**
     * Альтернативный адрес электронной почты для пересылки входящих SMS
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const EMAIL2 = 'email2';

    /**
     * Основной номер телефона
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const PHONE = 'phone';

    /**
     * Альтернативный номер телефона для пересылки входящих SMS
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const PHONE2 = 'phone2';

    /**
     * Начальная дата в периоде, за который запрашивается статистика
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const START = 'start';

    /**
     * Конечная дата в периоде. Если не указана, то возвращаются данные с начальной даты
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const END = 'end';

    /**
     * Идентификатор субклиента, назначаемый сервером автоматически при создании
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const USER_ID = 'user_id';

    /**
     * Типы субклиентов
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const RESELLER = 'reseller';

    /**
     * Скрыть статистику по удаленным субклиентам
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const HIDE_DELETED = 'hide_deleted';

    /**
     * Инициалы (фамилия, имя, отчество) или название компании
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const FIO = 'fio';

    /**
     * Реквизиты компании субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const PROPS = 'props';

    /**
     * Номер договора
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const CNTR = 'cntr';

    /**
     * Текущий тарифный план
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const TARIFF = 'tariff';

    /**
     * Минимальный тариф
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const MINTRF = 'mintrf';

    /**
     * Валюта расчетов субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const CURR = 'curr';

    /**
     * Часовой пояс
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const TZ = 'tz';

    /**
     * Имя отправителя (Sender ID) по умолчанию
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const SENDER = 'sender';

    /**
     * Резервное имя отправителя
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const SENDER2 = 'sender2';

    /**
     * Баланс для уведомлений
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const NB = 'nb';

    /**
     * Данный параметр устанавливает количество дней для хранения отправленных сообщений, по истечении которых SMS-сообщения будут автоматически удаляться из истории
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const KTM = 'ktm';

    /**
     * Список телефонных кодов, на которые разрешена отправка сообщений
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const FMTS = 'fmts';

    /**
     * Комментарии главного аккаунта
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const NOTES = 'notes';

    /**
     * Список телефонов или номеров групп через запятую для выполнения рассылок по SMS-командам
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const PH = 'ph';

    /**
     * Общий лимит SMS за день. Определяет максимальное количество отправляемых за сутки сообщений
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const DLIM = 'dlim';

    /**
     * Лимит на один номер. Устанавливает максимальное количество отправляемых за сутки сообщений на один номер телефона
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const PLIM = 'plim';

    /**
     * Лимит на номер и текст. Устанавливает максимальное количество отправляемых за сутки сообщений с одним текстом на один номер телефона
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const TLIM = 'tlim';

    /**
     * Лимит с одного IP-адреса. Задает максимальное количество отправляемых за сутки сообщений с одного IP-адреса
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const ILIM = 'ilim';

    /**
     * Диапазон времени в часах h1-h2, в который разрешено отправлять сообщения
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const TMLIM = 'tmlim';

    /**
     * Максимальный срок доставки сообщений временно недоступным абонентам (мин.)
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const VLD = 'vld';

    /**
     * http-адрес (URL) скрипта для обработки статусов доставки SMS-сообщений и (или) входящих SMS-сообщений на стороне субклиента
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const URL = 'url';

    /**
     * Разделенный запятой список номеров телефонов, на которые будут отправляться сообщения
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const MPH = 'mph';

    /**
     * Начальное значение диапазона времени для отправки входящих писем
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const MH1 = 'mh1';

    /**
     * Конечное значение диапазона времени для отправки входящих писем
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const MH2 = 'mh2';

    /**
     * Максимальная длина сообщения, до которой обрезается входящее письмо при отправке в виде SMS-сообщения
     * @link https://smsc.ru/api/http/users/subclients/
     */
    private const MLEN = 'mlen';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/users/subclients/
     */
    protected $url = MessengerSdk\Url::USERS;

    /**
     * @param string $flag Флаг
     * @return $this
     */
    public function addFlag(string $flag): self
    {
        $this->task += [$flag => '1'];

        return $this;
    }

    /**
     * @param string $user Логин субклиента
     * @return $this
     */
    public function setUser(string $user): self
    {
        $this->task[self::USER] = $user;

        return $this;
    }

    /**
     * @param string $pswc Текущий пароль субклиента
     * @return $this
     */
    public function setPswc(string $pswc): self
    {
        $this->task[self::PSWC] = $pswc;

        return $this;
    }

    /**
     * @param string $password Новый пароль субклиента
     * @return $this
     */
    public function setPassword(string $password): self
    {
        $this->task[self::PASSWORD] = $password;

        return $this;
    }

    /**
     * @param string $sum Сумма, перечисляемая клиенту с главного аккаунта в валюте главного аккаунта
     * @return $this
     */
    public function setSum(string $sum): self
    {
        $this->task[self::SUM] = $sum;

        return $this;
    }

    /**
     * @param string $siteId ID сайта, которому будет принадлежать создаваемый субклиент
     * @return $this
     */
    public function setSiteId(string $siteId): self
    {
        $this->task[self::SITE_ID] = $siteId;

        return $this;
    }

    /**
     * @param string $newLogin Новый логин субклиента при изменении
     * @return $this
     */
    public function setNewLogin(string $newLogin): self
    {
        $this->task[self::NEW_LOGIN] = $newLogin;

        return $this;
    }

    /**
     * @param string $type Тип учетной записи
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->task[self::TYPE] = $type;

        return $this;
    }

    /**
     * @param string $email Основной адрес электронной почты
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->task[self::EMAIL] = $email;

        return $this;
    }

    /**
     * @param string $email2 Альтернативный адрес электронной почты для пересылки входящих SMS
     * @return $this
     */
    public function setEmail2(string $email2): self
    {
        $this->task[self::EMAIL2] = $email2;

        return $this;
    }

    /**
     * @param string $phone Основной номер телефона
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->task[self::PHONE] = $phone;

        return $this;
    }

    /**
     * @param string $phone2 Альтернативный номер телефона для пересылки входящих SMS
     * @return $this
     */
    public function setPhone2(string $phone2): self
    {
        $this->task[self::PHONE2] = $phone2;

        return $this;
    }

    /**
     * @param string $start Начальная дата в периоде, за который запрашивается статистика
     * @return $this
     */
    public function setStart(string $start): self
    {
        $this->task[self::START] = $start;

        return $this;
    }

    /**
     * @param string $end Конечная дата в периоде. Если не указана, то возвращаются данные с начальной даты
     * @return $this
     */
    public function setEnd(string $end): self
    {
        $this->task[self::END] = $end;

        return $this;
    }

    /**
     * @param string $reseller Типы субклиентов
     * @return $this
     */
    public function setReseller(string $reseller): self
    {
        $this->task[self::RESELLER] = $reseller;

        return $this;
    }

    /**
     * @param string $hideDeleted Скрыть статистику по удаленным субклиентам
     * @return $this
     */
    public function setHideDeleted(string $hideDeleted): self
    {
        $this->task[self::HIDE_DELETED] = $hideDeleted;

        return $this;
    }

    /**
     * @param string $fio Инициалы (фамилия, имя, отчество) или название компании
     * @return $this
     */
    public function setFio(string $fio): self
    {
        $this->task[self::FIO] = $fio;

        return $this;
    }

    /**
     * @param string $props Реквизиты компании субклиента
     * @return $this
     */
    public function setProps(string $props): self
    {
        $this->task[self::PROPS] = $props;

        return $this;
    }

    /**
     * @param string $cntr Номер договора
     * @return $this
     */
    public function setCntr(string $cntr): self
    {
        $this->task[self::CNTR] = $cntr;

        return $this;
    }

    /**
     * @param string $tariff Текущий тарифный план
     * @return $this
     */
    public function setTariff(string $tariff): self
    {
        $this->task[self::TARIFF] = $tariff;

        return $this;
    }

    /**
     * @param string $minTrf Минимальный тариф
     * @return $this
     */
    public function setMinTrf(string $minTrf): self
    {
        $this->task[self::MINTRF] = $minTrf;

        return $this;
    }

    /**
     * @param string $curr Валюта расчетов субклиента
     * @return $this
     */
    public function setCurr(string $curr): self
    {
        $this->task[self::CURR] = $curr;

        return $this;
    }

    /**
     * @param string $tz Часовой пояс
     * @return $this
     */
    public function setTz(string $tz): self
    {
        $this->task[self::TZ] = $tz;

        return $this;
    }

    /**
     * @param string $sender Имя отправителя (Sender ID) по умолчанию
     * @return $this
     */
    public function setSender(string $sender): self
    {
        $this->task[self::SENDER] = $sender;

        return $this;
    }

    /**
     * @param string $sender2 Резервное имя отправителя
     * @return $this
     */
    public function setSender2(string $sender2): self
    {
        $this->task[self::SENDER2] = $sender2;

        return $this;
    }

    /**
     * @param string $nb Баланс для уведомлений
     * @return $this
     */
    public function setNb(string $nb): self
    {
        $this->task[self::NB] = $nb;

        return $this;
    }

    /**
     * @param string $ktm Данный параметр устанавливает количество дней для хранения отправленных сообщений, по истечении которых SMS-сообщения будут автоматически удаляться из истории
     * @return $this
     */
    public function setKtm(string $ktm): self
    {
        $this->task[self::KTM] = $ktm;

        return $this;
    }

    /**
     * @param string $fmts Список телефонных кодов, на которые разрешена отправка сообщений
     * @return $this
     */
    public function setFmts(string $fmts): self
    {
        $this->task[self::FMTS] = $fmts;

        return $this;
    }

    /**
     * @param string $notes Комментарии главного аккаунта
     * @return $this
     */
    public function setNotes(string $notes): self
    {
        $this->task[self::NOTES] = $notes;

        return $this;
    }

    /**
     * @param string $ph Список телефонов или номеров групп через запятую для выполнения рассылок по SMS-командам
     * @return $this
     */
    public function setPh(string $ph): self
    {
        $this->task[self::PH] = $ph;

        return $this;
    }

    /**
     * @param string $dlim Общий лимит SMS за день. Определяет максимальное количество отправляемых за сутки сообщений
     * @return $this
     */
    public function setDlim(string $dlim): self
    {
        $this->task[self::DLIM] = $dlim;

        return $this;
    }

    /**
     * @param string $plim Лимит на один номер. Устанавливает максимальное количество отправляемых за сутки сообщений на один номер телефона
     * @return $this
     */
    public function setPlim(string $plim): self
    {
        $this->task[self::PLIM] = $plim;

        return $this;
    }

    /**
     * @param string $tlim Лимит на номер и текст. Устанавливает максимальное количество отправляемых за сутки сообщений с одним текстом на один номер телефона
     * @return $this
     */
    public function setTlim(string $tlim): self
    {
        $this->task[self::TLIM] = $tlim;

        return $this;
    }

    /**
     * @param string $ilim Лимит с одного IP-адреса. Задает максимальное количество отправляемых за сутки сообщений с одного IP-адреса
     * @return $this
     */
    public function setIlim(string $ilim): self
    {
        $this->task[self::ILIM] = $ilim;

        return $this;
    }

    /**
     * @param string $tmlim Диапазон времени в часах h1-h2, в который разрешено отправлять сообщения
     * @return $this
     */
    public function setTmlim(string $tmlim): self
    {
        $this->task[self::TMLIM] = $tmlim;

        return $this;
    }

    /**
     * @param string $vld Максимальный срок доставки сообщений временно недоступным абонентам (мин.)
     * @return $this
     */
    public function setVld(string $vld): self
    {
        $this->task[self::VLD] = $vld;

        return $this;
    }

    /**
     * @param string $url http-адрес (URL) скрипта для обработки статусов доставки SMS-сообщений и (или) входящих SMS-сообщений на стороне субклиента
     * @return $this
     */
    public function setUrl(string $url): self
    {
        $this->task[self::URL] = $url;

        return $this;
    }

    /**
     * @param string $mph Разделенный запятой список номеров телефонов, на которые будут отправляться сообщения
     * @return $this
     */
    public function setMph(string $mph): self
    {
        $this->task[self::MPH] = $mph;

        return $this;
    }

    /**
     * @param string $mh1 Начальное значение диапазона времени для отправки входящих писем
     * @return $this
     */
    public function setMh1(string $mh1): self
    {
        $this->task[self::MH1] = $mh1;

        return $this;
    }

    /**
     * @param string $mh2 Конечное значение диапазона времени для отправки входящих писем
     * @return $this
     */
    public function setMh2(string $mh2): self
    {
        $this->task[self::MH2] = $mh2;

        return $this;
    }

    /**
     * @param string $mlen Максимальная длина сообщения, до которой обрезается входящее письмо при отправке в виде SMS-сообщения
     * @return $this
     */
    public function setMlen(string $mlen): self
    {
        $this->task[self::MLEN] = $mlen;

        return $this;
    }
}
