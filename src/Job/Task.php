<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

namespace Panda\SmsCenter\MessengerSdk\Job;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\Job
 * Управление рассылками
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Название рассылки"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const NAME = 'name';

    /**
     * Наименование параметра "Номер или разделенный запятой или точкой с запятой список номеров мобильных телефонов"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const PHONES = 'phones';

    /**
     * Наименование параметра "Текст отправляемого сообщения"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const MES = 'mes';

    /**
     * Наименование параметра "Имя отправителя, отображаемое в телефоне получателя"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const SENDER = 'sender';

    /**
     * Наименование параметра "Данный параметр используется в качестве имени отправителя при автоповторе"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const SENDER2 = 'sender2';

    /**
     * Наименование параметра "Перевод в транслит"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const TRANSLIT = 'translit';

    /**
     * Наименование параметра "Сокращение ссылок"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const TINYURL = 'tinyurl';

    /**
     * Наименование параметра "Время отправки"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const TIME = 'time';

    /**
     * Наименование параметра "Периодичность отправки вновь создаваемой рассылки"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const RPT = 'rpt';

    /**
     * Наименование параметра "Максимальное количество повторов для отложенной периодической рассылки"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const RPTN = 'rptn';

    /**
     * Наименование параметра "Часовой пояс"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const TZ = 'tz';

    /**
     * Наименование параметра "Промежуток времени"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const PERIOD = 'period';

    /**
     * Наименование параметра "Интервал / Частота"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const FREQ = 'freq';

    /**
     * Наименование параметра "Flash-сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const FLASH = 'flash';

    /**
     * Наименование параметра "Бинарное сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const BIN = 'bin';

    /**
     * Наименование параметра "WAP-PUSH-сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const PUSH = 'push';

    /**
     * Наименование параметра "HLR-запрос"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const HLR = 'hlr';

    /**
     * Наименование параметра "Ping-сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const PING = 'ping';

    /**
     * Наименование параметра "MMS-сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const MMS = 'mms';

    /**
     * Наименование параметра "E-Mail-сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const MAIL = 'mail';

    /**
     * Наименование параметра "Soc-сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const SOC = 'soc';

    /**
     * Наименование параметра "Viber-сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const VIBER = 'viber';

    /**
     * Наименование параметра "HTTP-адрес файла для загрузки"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const FILEURL = 'fileurl';

    /**
     * Наименование параметра "Вариант сообщения для пересылки по SMS"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const MES2 = 'mes2';

    /**
     * Наименование параметра "Голосовое сообщение"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const CALL = 'call';

    /**
     * Наименование параметра "Голос озвучивания текста"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const VOICE = 'voice';

    /**
     * Наименование параметра "Параметры голосового сообщения"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const PARAM = 'param';

    /**
     * Наименование параметра "Тема MMS или E-Mail сообщений"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const SUBJ = 'subj';

    /**
     * Наименование параметра "Стоимость рассылки"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const COST = 'cost';

    /**
     * Наименование параметра "Список номеров телефонов/сообщений"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const LIST = 'list';

    /**
     * Наименование параметра "ID шаблона, который будет использован в качестве текста сообщения"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const TPL = 'tpl';

    /**
     * Наименование параметра "Срок "жизни" сообщения"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const VALID = 'valid';

    /**
     * Наименование параметра "Идентификатор рассылки"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const ID = 'id';

    /**
     * Наименование параметра "Дата, с которой требуется получить список рассылок"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const START = 'start';

    /**
     * Наименование параметра "Дата, до которой требуется получить список рассылок"
     * @link https://smsc.ru/api/http/jobs/
     */
    private const END = 'end';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/jobs/
     */
    protected $url = MessengerSdk\Url::JOBS;

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
     * @param string $name
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->task[self::NAME] = $name;

        return $this;
    }

    /**
     * @param string $phone Номер / Список номеров
     * @return $this
     */
    public function setPhone(string $phone): self
    {
        $this->task[self::PHONES] = $phone;

        return $this;
    }

    /**
     * @param string $mes Текст
     * @return $this
     */
    public function setMes(string $mes): self
    {
        $this->task[self::LIST] = null;
        $this->task[self::TPL] = null;
        $this->task[self::MES] = $mes;

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
     * @param string $sender2
     * @return $this
     */
    public function setSender2(string $sender2): self
    {
        $this->task[self::SENDER2] = $sender2;

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
     * @param string $rpt
     * @return $this
     */
    public function setRpt(string $rpt): self
    {
        $this->task[self::RPT] = $rpt;

        return $this;
    }

    /**
     * @param string $rptn
     * @return $this
     */
    public function setRptN(string $rptn): self
    {
        $this->task[self::RPTN] = $rptn;

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
     * @param string $mes2
     * @return $this
     */
    public function setMes2(string $mes2): self
    {
        $this->task[self::MES2] = $mes2;

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
        $this->task[self::MES] = null;
        $this->task[self::TPL] = null;
        $this->task[self::LIST] = $list;

        return $this;
    }

    /**
     * @param string $tpl
     * @return $this
     */
    public function setTpl(string $tpl): self
    {
        $this->task[self::MES] = null;
        $this->task[self::LIST] = null;
        $this->task[self::TPL] = $tpl;

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
     * @param string $id Идентификатор
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->task[self::ID] = $id;

        return $this;
    }

    /**
     * @param string $start
     * @return $this
     */
    public function setStart(string $start): self
    {
        $this->task[self::START] = $start;

        return $this;
    }

    /**
     * @param string $end
     * @return $this
     */
    public function setEnd(string $end): self
    {
        $this->task[self::END] = $end;

        return $this;
    }
}
