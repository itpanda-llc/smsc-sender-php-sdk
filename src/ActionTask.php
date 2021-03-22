<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk;

/**
 * Class ActionTask
 * @package Panda\SmsCenter\MessengerSdk
 * Задача / Запрос
 */
class ActionTask extends Task
{
    /**
     * @var array Действие / Команда
     */
    protected $action = [];

    /**
     * ActionTask constructor.
     * @param $action array|null Действие / Команда
     */
    public function __construct(array $action = null)
    {
        $this->action = $action ?? [];
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
                http_build_query($this->action + $this->task));
    }

    /**
     * @return string|null Парметры задачи/запроса
     */
    public function getParam(): ?string
    {
        return ($this->attachments === [])
            ? http_build_query($this->action + $this->task)
            : null;
    }

    /**
     * @param array $action Действие / Команда
     * @return $this
     */
    public function setAction(array $action): self
    {
        $this->action = $action;

        return $this;
    }
}
