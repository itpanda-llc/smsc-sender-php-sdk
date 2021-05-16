<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Send;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Send
 * Отправка сообщений
 */
class Task extends MessengerSdk\Task
{
    /**
     * Наименование параметра "Номер / Список номеров"
     * @link https://smsc.ru/api/http/send/
     */
    private const PHONES = 'phones';

    /**
     * Наименование параметра "Текст"
     * @link https://smsc.ru/api/http/send/
     */
    private const MES = 'mes';

    /**
     * Наименование параметра "Идентификатор"
     * @link https://smsc.ru/api/http/send/
     */
    private const ID = 'id';

    /**
     * Наименование параметра "Имя отправителя"
     * @link https://smsc.ru/api/http/send/
     */
    private const SENDER = 'sender';

    /**
     * Наименование параметра "Перевод в транслит"
     * @link https://smsc.ru/api/http/send/
     */
    private const TRANSLIT = 'translit';

    /**
     * Наименование параметра "Сокращение ссылок"
     * @link https://smsc.ru/api/http/send/
     */
    private const TINYURL = 'tinyurl';

    /**
     * Наименование параметра "Время отправки"
     * @link https://smsc.ru/api/http/send/
     */
    private const TIME = 'time';

    /**
     * Наименование параметра "Часовой пояс"
     * @link https://smsc.ru/api/http/send/
     */
    private const TZ = 'tz';

    /**
     * Наименование параметра "Промежуток времени"
     * @link https://smsc.ru/api/http/send/
     */
    private const PERIOD = 'period';

    /**
     * Наименование параметра "Интервал / Частота"
     * @link https://smsc.ru/api/http/send/
     */
    private const FREQ = 'freq';

    /**
     * Наименование параметра "Flash-сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const FLASH = 'flash';

    /**
     * Наименование параметра "Бинарное сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const BIN = 'bin';

    /**
     * Наименование параметра "WAP-PUSH-сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const PUSH = 'push';

    /**
     * Наименование параметра "HLR-запрос"
     * @link https://smsc.ru/api/http/send/
     */
    private const HLR = 'hlr';

    /**
     * Наименование параметра "Ping-сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const PING = 'ping';

    /**
     * Наименование параметра "MMS-сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const MMS = 'mms';

    /**
     * Наименование параметра "E-Mail-сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const MAIL = 'mail';

    /**
     * Наименование параметра "Soc-сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const SOC = 'soc';

    /**
     * Наименование параметра "Viber-сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const VIBER = 'viber';

    /**
     * Наименование параметра "HTTP-адрес файла для загрузки"
     * @link https://smsc.ru/api/http/send/
     */
    private const FILEURL = 'fileurl';

    /**
     * Наименование параметра "Голосовое сообщение"
     * @link https://smsc.ru/api/http/send/
     */
    private const CALL = 'call';

    /**
     * Наименование параметра "Голос озвучивания текста"
     * @link https://smsc.ru/api/http/send/
     */
    private const VOICE = 'voice';

    /**
     * Наименование параметра "Параметры голосового сообщения"
     * @link https://smsc.ru/api/http/send/
     */
    private const PARAM = 'param';

    /**
     * Наименование параметра "Тема MMS или E-Mail сообщений"
     * @link https://smsc.ru/api/http/send/
     */
    private const SUBJ = 'subj';

    /**
     * Наименование параметра "Стоимость рассылки"
     * @link https://smsc.ru/api/http/send/
     */
    private const COST = 'cost';

    /**
     * Наименование параметра "Список номеров телефонов/сообщений"
     * @link https://smsc.ru/api/http/send/
     */
    private const LIST = 'list';

    /**
     * Наименование параметра "Срок "жизни" сообщения"
     * @link https://smsc.ru/api/http/send/
     */
    private const VALID = 'valid';

    /**
     * Наименование параметра "Максимальное количество сообщений при разбиении"
     * @link https://smsc.ru/api/http/send/
     */
    private const MAXSMS = 'maxsms';

    /**
     * Наименование параметра "Буквенно-цифровой код"
     * @link https://smsc.ru/api/http/send/
     */
    private const IMGCODE = 'imgcode';

    /**
     * Наименование параметра "IP-адрес"
     * @link https://smsc.ru/api/http/send/
     */
    private const USERIP = 'userip';

    /**
     * Наименование параметра "Добавление в ответ сервера списка ошибочных номеров"
     * @link https://smsc.ru/api/http/send/
     */
    private const ERR = 'err';

    /**
     * Наименование параметра "Добавление в ответ сервера информации по каждому номеру"
     * @link https://smsc.ru/api/http/send/
     */
    private const OP = 'op';

    /**
     * Наименование параметра "Привязка клиента в качестве реферала"
     * @link https://smsc.ru/api/http/send/
     */
    private const PP = 'pp';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/send/
     */
    protected $url = MessengerSdk\Url::SEND;

    /**
     * Task constructor.
     * @param string|null $phones Номер / Список номеров
     * @param string|null $mes Текст
     * @param string|null $sender Имя отправителя
     */
    public function __construct(string $phones = null,
                                string $mes = null,
                                string $sender = null)
    {
        $this->task[self::PHONES] = $phones;
        $this->task[self::MES] = $mes;
        $this->task[self::SENDER] = $sender;
    }

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
     * @param string $phones Номер / Список номеров
     * @return $this
     */
    public function setPhones(string $phones): self
    {
        $this->task[self::LIST] = null;
        $this->task[self::PHONES] = $phones;

        return $this;
    }

    /**
     * @param string $mes Текст
     * @return $this
     */
    public function setMes(string $mes): self
    {
        $this->task[self::LIST] = null;
        $this->task[self::MES] = $mes;

        return $this;
    }

    /**
     * @param string $id Идентификатор
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->task[self::ID] = $id;

        return $this;
    }

    /**
     * @param string $sender Имя отправителя
     * @return $this
     */
    public function setSender(string $sender): self
    {
        $this->task[self::SENDER] = $sender;

        return $this;
    }

    /**
     * @param string $translit Перевод в транслит
     * @return $this
     */
    public function setTranslit(string $translit): self
    {
        $this->task[self::TRANSLIT] = $translit;

        return $this;
    }

    /**
     * @param string $tinyUrl Сокращение ссылок
     * @return $this
     */
    public function setTinyUrl(string $tinyUrl): self
    {
        $this->task[self::TINYURL] = $tinyUrl;

        return $this;
    }

    /**
     * @param string $time Время отправки
     * @return $this
     */
    public function setTime(string $time): self
    {
        $this->task[self::TIME] = $time;

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
     * @param string $period Промежуток времени
     * @return $this
     */
    public function setPeriod(string $period): self
    {
        $this->task[self::PERIOD] = $period;

        return $this;
    }

    /**
     * @param string $freq Интервал / Частота
     * @return $this
     */
    public function setFreq(string $freq): self
    {
        $this->task[self::FREQ] = $freq;

        return $this;
    }

    /**
     * @param string $flash Flash-сообщение
     * @return $this
     */
    public function setFlash(string $flash): self
    {
        $this->task[self::FLASH] = $flash;

        return $this;
    }

    /**
     * @param string $bin Бинарное сообщение
     * @return $this
     */
    public function setBin(string $bin): self
    {
        $this->task[self::BIN] = $bin;

        return $this;
    }

    /**
     * @param string $push Push-сообщение
     * @return $this
     */
    public function setPush(string $push): self
    {
        $this->task[self::PUSH] = $push;

        return $this;
    }

    /**
     * @param string $hlr HLR-запрос
     * @return $this
     */
    public function setHlr(string $hlr): self
    {
        $this->task[self::HLR] = $hlr;

        return $this;
    }

    /**
     * @param string $ping Ping-сообщение
     * @return $this
     */
    public function setPing(string $ping): self
    {
        $this->task[self::PING] = $ping;

        return $this;
    }

    /**
     * @param string $mms MMS-сообщение
     * @return $this
     */
    public function setMms(string $mms): self
    {
        $this->task[self::MMS] = $mms;

        return $this;
    }

    /**
     * @param string $mail E-Mail-сообщение
     * @return $this
     */
    public function setMail(string $mail): self
    {
        $this->task[self::MAIL] = $mail;

        return $this;
    }

    /**
     * @param string $soc Soc-сообщение
     * @return $this
     */
    public function setSoc(string $soc): self
    {
        $this->task[self::SOC] = $soc;

        return $this;
    }

    /**
     * @param string $viber Viber-сообщение
     * @return $this
     */
    public function setViber(string $viber): self
    {
        $this->task[self::VIBER] = $viber;

        return $this;
    }

    /**
     * @param string $fileUrl HTTP-адрес файла для загрузки
     * @return $this
     */
    public function setFileUrl(string $fileUrl): self
    {
        $this->task[self::FILEURL] = $fileUrl;

        return $this;
    }

    /**
     * @param string $call Голосовое сообщение
     * @return $this
     */
    public function setCall(string $call): self
    {
        $this->task[self::CALL] = $call;

        return $this;
    }

    /**
     * @param string $voice Голос озвучивания текста
     * @return $this
     */
    public function setVoice(string $voice): self
    {
        $this->task[self::VOICE] = $voice;

        return $this;
    }

    /**
     * @param string $param Параметры голосового сообщения
     * @return $this
     */
    public function setParam(string $param): self
    {
        $this->task[self::PARAM] = $param;

        return $this;
    }

    /**
     * @param string $subj Тема MMS или E-Mail сообщения
     * @return $this
     */
    public function setSubj(string $subj): self
    {
        $this->task[self::SUBJ] = $subj;

        return $this;
    }

    /**
     * @param string $cost Стоимость рассылки
     * @return $this
     */
    public function setCost(string $cost): self
    {
        $this->task[self::COST] = $cost;

        return $this;
    }

    /**
     * @param string $list Список номеров телефонов/сообщений
     * @return $this
     */
    public function setList(string $list): self
    {
        $this->task[self::PHONES] = null;
        $this->task[self::MES] = null;
        $this->task[self::LIST] = $list;

        return $this;
    }

    /**
     * @param string $valid Срок "жизни" сообщения
     * @return $this
     */
    public function setValid(string $valid): self
    {
        $this->task[self::VALID] = $valid;

        return $this;
    }

    /**
     * @param int $maxSms Максимальное количество сообщений при разбиении
     * @return $this
     */
    public function setMaxSms(int $maxSms): self
    {
        $this->task[self::MAXSMS] = $maxSms;

        return $this;
    }

    /**
     * @param string $imgCode Буквенно-цифровой код
     * @return $this
     */
    public function setImgCode(string $imgCode): self
    {
        $this->task[self::IMGCODE] = $imgCode;

        return $this;
    }

    /**
     * @param string $userIp IP-адрес
     * @return $this
     */
    public function setUserIp(string $userIp): self
    {
        $this->task[self::USERIP] = $userIp;

        return $this;
    }

    /**
     * @param string $err Добавление в ответ сервера списка ошибочных номеров
     * @return $this
     */
    public function setErr(string $err): self
    {
        $this->task[self::ERR] = $err;

        return $this;
    }

    /**
     * @param string $op Добавление в ответ сервера информации по каждому номеру
     * @return $this
     */
    public function setOp(string $op): self
    {
        $this->task[self::OP] = $op;

        return $this;
    }

    /**
     * @param string $pp Привязка клиента в качестве реферала
     * @return $this
     */
    public function setPp(string $pp): self
    {
        $this->task[self::PP] = $pp;

        return $this;
    }
}
