<?php

/**
 * Файл из репозитория SMSCenter-Messenger-PHP-SDK
 * @link https://github.com/itpanda-llc/smscenter-messenger-php-sdk
 */

declare(strict_types=1);

namespace Panda\SmsCenter\MessengerSdk\TinyUrl;

use Panda\SmsCenter\MessengerSdk;

/**
 * Class Task
 * @package Panda\SmsCenter\MessengerSdk\TinyUrl
 * Получение данных о короткой ссылке
 */
class Task extends MessengerSdk\ActionTask
{
    /**
     * Наименование параметра "Исходная полная ссылка"
     * @link https://smsc.ru/api/http/get_data/tinyurl/
     */
    private const LINK = 'link';

    /**
     * Наименование параметра "Идентификатор короткой ссылки"
     * @link https://smsc.ru/api/http/get_data/tinyurl/
     */
    private const ID = 'id';

    /**
     * @var string URL-адрес
     * @link https://smsc.ru/api/http/get_data/tinyurl/
     */
    protected $url = MessengerSdk\Url::TINY_URLS;

    /**
     * Task constructor.
     * @param array $action Действие / Команда
     * @param string|null $link Исходная полная ссылка
     */
    public function __construct(array $action,
                                string $link = null)
    {
        parent::__construct($action);

        $this->task[self::LINK] = $link;
    }

    /**
     * @param string $link Исходная полная ссылка
     * @return $this
     */
    public function setLink(string $link): self
    {
        $this->task[self::LINK] = $link;

        return $this;
    }

    /**
     * @param string $id Идентификатор короткой ссылки
     * @return $this
     */
    public function setId(string $id): self
    {
        $this->task[self::ID] = $id;

        return $this;
    }

    /**
     * @param array $action Действие / Команда
     * @param string $link Исходная полная ссылка
     * @return static
     */
    public static function byLink(array $action,
                                  string $link): self
    {
        return new self($action, $link);
    }

    /**
     * @param array $action Действие / Команда
     * @param string $id Идентификатор короткой ссылки
     * @return static
     */
    public static function byId(array $action,
                                string $id): self
    {
        return (new self($action))->setId($id);
    }
}
