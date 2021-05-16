<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Contact;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Contact
 * Управение контактами
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Название контакта или группы"
     * @link https://smsc.ru/api/http/contact/
     */
    private const NAME = 'name';

    /**
     * Наименование параметра "Идентификатор группы, которой принадлежит создаваемый контакт"
     * @link https://smsc.ru/api/http/contact/
     */
    private const GRP = 'grp';

    /**
     * Наименование параметра "Номер группы для рассылок сообщений"
     * @link https://smsc.ru/api/http/contact/
     */
    private const NUM = 'num';

    /**
     * Наименование параметра "Список номеров телефонов через любой разделитель"
     * @link https://smsc.ru/api/http/contact/
     */
    private const PHONE = 'phone';

    /**
     * Наименование параметра "Список e-mail адресов через любой разделитель"
     * @link https://smsc.ru/api/http/contact/
     */
    private const MAIL = 'mail';

    /**
     * Наименование параметра "Новый список номеров телефонов через любой разделитель"
     * @link https://smsc.ru/api/http/contact/
     */
    private const NEW_PHONE = 'new_phone';

    /**
     * Наименование параметра "Новый список e-mail адресов через любой разделитель"
     * @link https://smsc.ru/api/http/contact/
     */
    private const NEW_MAIL = 'new_mail';

    /**
     * Наименование параметра "Фамилия"
     * @link https://smsc.ru/api/http/contact/
     */
    private const LNM = 'lnm';

    /**
     * Наименование параметра "Имя"
     * @link https://smsc.ru/api/http/contact/
     */
    private const FNM = 'fnm';

    /**
     * Наименование параметра "Отчество"
     * @link https://smsc.ru/api/http/contact/
     */
    private const MNM = 'mnm';

    /**
     * Наименование параметра "ФИО контакта"
     * @link https://smsc.ru/api/http/contact/
     */
    private const FIO = 'fio';

    /**
     * Наименование параметра "Выборка контактов"
     * @link https://smsc.ru/api/http/contact/
     */
    private const SEARCH = 'search';

    /**
     * Наименование параметра "Идентификатор контакта (int_id), начиная с которого необходимо вернуть список контактов"
     * @link https://smsc.ru/api/http/contact/
     */
    private const AFTER_ID = 'after_id';

    /**
     * Наименование параметра "Дата рождения"
     * @link https://smsc.ru/api/http/contact/
     */
    private const BD = 'bd';

    /**
     * Наименование параметра "ID контакта, назначенный Клиентом"
     * @link https://smsc.ru/api/http/contact/
     */
    private const MYID = 'myid';

    /**
     * Наименование параметра "Комментарии"
     * @link https://smsc.ru/api/http/contact/
     */
    private const CMT = 'cmt';

    /**
     * Наименование параметра "Теги (метки)"
     * @link https://smsc.ru/api/http/contact/
     */
    private const TAGS = 'tags';

    /**
     * Наименование параметра "Другие номера телефонов"
     * @link https://smsc.ru/api/http/contact/
     */
    private const PHO = 'pho';

    /**
     * Наименование параметра "Тип блокировки, либо тип группы"
     * @link https://smsc.ru/api/http/contact/
     */
    private const TYPE = 'type';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/contact/
     */
    protected $url = MessengerSdk\Url::PHONES;

    /**
     * @param string $name Название контакта или группы
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->task[self::NAME] = $name;

        return $this;
    }

    /**
     * @param string $grp Идентификатор группы, которой принадлежит создаваемый контакт
     * @return $this
     */
    public function setGrp(string $grp): self
    {
        $this->task[self::GRP] = $grp;

        return $this;
    }

    /**
     * @param string $num Номер группы для рассылок сообщений
     * @return $this
     */
    public function setNum(string $num): self
    {
        $this->task[self::NUM] = $num;

        return $this;
    }

    /**
     * @param string $phone Список номеров телефонов через любой разделитель
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->task[self::PHONE] = $phone;

        return $this;
    }

    /**
     * @param string $mail Список e-mail адресов через любой разделитель
     * @return $this
     */
    public function setMail(string $mail): self
    {
        $this->task[self::MAIL] = $mail;

        return $this;
    }

    /**
     * @param string $newPhone Новый список номеров телефонов через любой разделитель
     * @return $this
     */
    public function setNewPhone(string $newPhone): self
    {
        $this->task[self::NEW_PHONE] = $newPhone;

        return $this;
    }

    /**
     * @param string $newMail Новый список e-mail адресов через любой разделитель
     * @return $this
     */
    public function setNewMail(string $newMail): self
    {
        $this->task[self::NEW_MAIL] = $newMail;

        return $this;
    }

    /**
     * @param string $lnm Фамилия
     * @return $this
     */
    public function setLnm(string $lnm): self
    {
        $this->task[self::LNM] = $lnm;

        return $this;
    }

    /**
     * @param string $fnm Имя
     * @return $this
     */
    public function setFnm(string $fnm): self
    {
        $this->task[self::FNM] = $fnm;

        return $this;
    }

    /**
     * @param string $mnm Отчество
     * @return $this
     */
    public function setMnm(string $mnm): self
    {
        $this->task[self::MNM] = $mnm;

        return $this;
    }

    /**
     * @param string $fio ФИО Контакта
     * @return $this
     */
    public function setFio(string $fio): self
    {
        $this->task[self::FIO] = $fio;

        return $this;
    }

    /**
     * @param string $search Выборка контактов
     * @return $this
     */
    public function setSearch(string $search): self
    {
        $this->task[self::SEARCH] = $search;

        return $this;
    }

    /**
     * @param string $afterId Идентификатор контакта (int_id), начиная с которого необходимо вернуть список контактов
     * @return $this
     */
    public function setAfterId(string $afterId): self
    {
        $this->task[self::AFTER_ID] = $afterId;

        return $this;
    }

    /**
     * @param string $bd Дата рождения
     * @return $this
     */
    public function setBd(string $bd): self
    {
        $this->task[self::BD] = $bd;

        return $this;
    }

    /**
     * @param string $myId ID контакта, назначенный Клиентом
     * @return $this
     */
    public function setMyId(string $myId): self
    {
        $this->task[self::MYID] = $myId;

        return $this;
    }

    /**
     * @param string $cmt Комментарии
     * @return $this
     */
    public function setCmt(string $cmt): self
    {
        $this->task[self::CMT] = $cmt;

        return $this;
    }

    /**
     * @param string $tags Теги (метки)
     * @return $this
     */
    public function setTags(string $tags): self
    {
        $this->task[self::TAGS] = $tags;

        return $this;
    }

    /**
     * @param string $pho Другие номера телефонов
     * @return $this
     */
    public function setPho(string $pho): self
    {
        $this->task[self::PHO] = $pho;

        return $this;
    }

    /**
     * @param string $type Тип блокировки, либо тип группы
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->task[self::TYPE] = $type;

        return $this;
    }
}
