<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Sender;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Sender
 * Управление именами отправителей (Sender ID)
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Получение списка активированных имен
     * @link https://smsc.ru/api/http/senders/
     */
    public const ALL = 'all';

    /**
     * Создаваемое или удаляемое имя отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const SENDER = 'sender';

    /**
     * Юридическое название организации (ООО/СПД)
     * @link https://smsc.ru/api/http/senders/
     */
    public const FIO = 'fio';

    /**
     * ЕДРПОУ/ИНН
     * @link https://smsc.ru/api/http/senders/
     */
    public const INN = 'inn';

    /**
     * Адрес сайта (необязательный параметр)
     * @link https://smsc.ru/api/http/senders/
     */
    public const SITE = 'site';

    /**
     * E-mail для связи
     * @link https://smsc.ru/api/http/senders/
     */
    public const EMAIL = 'email';

    /**
     * Фактический адрес
     * @link https://smsc.ru/api/http/senders/
     */
    public const ADDRESS = 'address';

    /**
     * Описание услуг, предоставляемых отправителем
     * @link https://smsc.ru/api/http/senders/
     */
    public const DESC = 'desc';

    /**
     * Тема (цель информирования)
     * @link https://smsc.ru/api/http/senders/
     */
    public const SUBJ = 'subj';

    /**
     * Идентификатор имени отправителя, назначаемый Сервером автоматически при создании нового имени
     * @link https://smsc.ru/api/http/senders/
     */
    public const ID = 'id';

    /**
     * Комментарий, указываемый при создании имени отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const CMT = 'cmt';

    /**
     * Добавить e-mail адрес отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const MAIL = 'mail';

    /**
     * Комментарий, связанный с параметром mail (обычно имя владельца e-mail адреса)
     * @link https://smsc.ru/api/http/senders/
     */
    public const NAME = 'name';

    /**
     * Код для подтверждения цифрового имени отправителя
     * @link https://smsc.ru/api/http/senders/
     */
    public const CODE = 'code';

    /**
     * Адрес сайта, указываемый в тексте сообщения с кодом подтверждения
     * @link https://smsc.ru/api/http/senders/
     */
    public const SITE_NAME = 'site_name';

    /**
     * Логин субклиента, к которому применяется указанная команда
     * @link https://smsc.ru/api/http/senders/
     */
    public const USER = 'user';

    /**
     * Добавить в ответ код статуса имени отправителя у оператора
     * @link https://smsc.ru/api/http/senders/
     */
    public const OPERATORS = 'operators';

    /**
     * Выбрать имена отправителей начиная с указанной даты, для которых был изменен статус имени у любого из операторов
     * @link https://smsc.ru/api/http/senders/
     */
    public const FROM_DATE = 'from_date';

    /**
     * Уникальный идентификатор имени отправителя, назначаемый Сервером автоматически при создании имени
     * @link https://smsc.ru/api/http/senders/
     */
    public const PREV_ID = 'prev_id';

    /**
     * Количество имен отправителей возвращаемых при запросе списка имен
     * @link https://smsc.ru/api/http/senders/
     */
    public const CNT = 'cnt';

    /**
     * Описание к переданному файлу
     * @link https://smsc.ru/api/http/senders/
     */
    public const DOC_INFO = 'doc_info';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/senders/
     */
    protected $url = MessengerSdk\Url::SENDERS;

    /**
     * @param string $attachment Вложение / Документ
     * @return $this
     */
    public function addAttachment(string $attachment): self
    {
        $this->attachments[] = $attachment;

        return $this;
    }

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
     * @param string $all Получение списка активированных имен
     * @return $this
     */
    public function setAll(string $all): self
    {
        $this->task[self::ALL] = $all;

        return $this;
    }

    /**
     * @param string $sender Создаваемое или удаляемое имя отправителя
     * @return $this
     */
    public function setSender(string $sender): self
    {
        $this->task[self::SENDER] = $sender;

        return $this;
    }

    /**
     * @param string $fio Создаваемое или удаляемое имя отправителя
     * @return $this
     */
    public function setFio(string $fio): self
    {
        $this->task[self::FIO] = $fio;

        return $this;
    }

    /**
     * @param string $inn ЕДРПОУ/ИНН
     * @return $this
     */
    public function setInn(string $inn): self
    {
        $this->task[self::INN] = $inn;

        return $this;
    }

    /**
     * @param string $site Адрес сайта (необязательный параметр)
     * @return $this
     */
    public function setSite(string $site): self
    {
        $this->task[self::SITE] = $site;

        return $this;
    }

    /**
     * @param string $email E-mail для связи
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->task[self::EMAIL] = $email;

        return $this;
    }

    /**
     * @param string $address Фактический адрес
     * @return $this
     */
    public function setAddress(string $address): self
    {
        $this->task[self::ADDRESS] = $address;

        return $this;
    }

    /**
     * @param string $desc Описание услуг, предоставляемых отправителем
     * @return $this
     */
    public function setDesc(string $desc): self
    {
        $this->task[self::DESC] = $desc;

        return $this;
    }

    /**
     * @param string $subj Тема (цель информирования)
     * @return $this
     */
    public function setSubj(string $subj): self
    {
        $this->task[self::SUBJ] = $subj;

        return $this;
    }

    /**
     * @param string $id Идентификатор имени отправителя, назначаемый Сервером автоматически при создании нового имени
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->task[self::ID] = $id;

        return $this;
    }

    /**
     * @param string $cmt Комментарий, указываемый при создании имени отправителя
     * @return $this
     */
    public function setCmt(string $cmt): self
    {
        $this->task[self::CMT] = $cmt;

        return $this;
    }

    /**
     * @param string $mail Добавить e-mail адрес отправителя
     * @return $this
     */
    public function setMail(string $mail): self
    {
        $this->task[self::MAIL] = $mail;

        return $this;
    }

    /**
     * @param string $name Комментарий, связанный с параметром mail (обычно имя владельца e-mail адреса)
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->task[self::NAME] = $name;

        return $this;
    }

    /**
     * @param string $code Код для подтверждения цифрового имени отправителя
     * @return $this
     */
    public function setCode(string $code): self
    {
        $this->task[self::CODE] = $code;

        return $this;
    }

    /**
     * @param string $siteName Адрес сайта, указываемый в тексте сообщения с кодом подтверждения
     * @return $this
     */
    public function setSiteName(string $siteName): self
    {
        $this->task[self::SITE_NAME] = $siteName;

        return $this;
    }

    /**
     * @param string $user Логин субклиента, к которому применяется указанная команда
     * @return $this
     */
    public function setUser(string $user): self
    {
        $this->task[self::USER] = $user;

        return $this;
    }

    /**
     * @param string $operators Добавить в ответ код статуса имени отправителя у оператора
     * @return $this
     */
    public function setOperators(string $operators): self
    {
        $this->task[self::OPERATORS] = $operators;

        return $this;
    }

    /**
     * @param string $fromDate Выбрать имена отправителей начиная с указанной даты, для которых был изменен статус имени у любого из операторов
     * @return $this
     */
    public function setFromDate(string $fromDate): self
    {
        $this->task[self::FROM_DATE] = $fromDate;

        return $this;
    }

    /**
     * @param string $prevId Уникальный идентификатор имени отправителя, назначаемый Сервером автоматически при создании имени
     * @return $this
     */
    public function setPrevId(string $prevId): self
    {
        $this->task[self::PREV_ID] = $prevId;

        return $this;
    }

    /**
     * @param string $cnt Количество имен отправителей возвращаемых при запросе списка имен
     * @return $this
     */
    public function setCnt(string $cnt): self
    {
        $this->task[self::CNT] = $cnt;

        return $this;
    }

    /**
     * @param string $docInfo Описание к переданному файлу
     * @return $this
     */
    public function setDocInfo(string $docInfo): self
    {
        $this->task[self::DOC_INFO] = $docInfo;

        return $this;
    }
}
