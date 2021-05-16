<?php

/**
 * Файл из репозитория SMSCenter-Messenger-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk
 * Задача / Запрос
 */
class Task
{
    /**
     * Наименование параметра "Кодировка"
     * @link https://smsc.ru/api/http/
     */
    protected const CHARSET = 'charset';

    /**
     * Наименование параметра "Формат ответа сервера"
     * @link https://smsc.ru/api/http/
     */
    protected const FMT = 'fmt';

    /**
     * @var string|null URL-адрес
     * @link https://smsc.ru/api/http/
     */
    protected $url;

    /**
     * @var array Параметры задачи/запроса
     */
    protected $task = [];

    /**
     * @var array Вложения / Документы
     * @link https://smsc.ru/api/http/
     */
    public $attachments = [];

    /**
     * @param array $param Параметры задачи/запроса
     */
    public function addParam(array $param): void
    {
        $this->task += $param;
    }

    /**
     * @return string Парметры задачи/запроса
     */
    public function getUrl(): string
    {
        return ($this->attachments === [])
            ? $this->url
            : sprintf("%s?%s",
                $this->url,
                http_build_query($this->task));
    }

    /**
     * @return string|null Парметры задачи/запроса
     */
    public function getParam(): ?string
    {
        return ($this->attachments === [])
            ? http_build_query($this->task)
            : null;
    }

    /**
     * @param string $charset Кодировка
     * @return $this
     */
    public function setCharset(string $charset): self
    {
        $this->task[self::CHARSET] = $charset;

        return $this;
    }

    /**
     * @param string $fmt Формат ответа сервера
     * @return $this
     */
    public function setFmt(string $fmt): self
    {
        $this->task[self::FMT] = $fmt;

        return $this;
    }
}
