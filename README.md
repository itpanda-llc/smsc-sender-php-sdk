# SMSC-Sender-PHP-SDK

Библиотека для интеграции c сервисом ["СМСЦентр"](https://smsc.ru)

[![GitHub license](https://img.shields.io/badge/license-MIT-blue)](LICENSE)

## Ссылки

* [Разработка](https://github.com/itpanda-llc)
* [О проекте (СМСЦентр)](https://smsc.ru)
* [О проекте (Notyfy Mail)](https://notify.mail.ru/)
* [Документация](https://smsc.ru/api/http/send)
* [Библиотеки и примеры кода](https://smsc.ru/api/code/libraries/http_smtp/php/)

## Возможности

* Формирование и отправка сообщений
* Получение информации о статусах сообщений

## Требования

* PHP >= 7.2
* cURL

## Установка

```shell script
php composer.phar require "itpanda-llc/smsc-sender-php-sdk"
```

или

```shell script
git clone https://github.com/itpanda-llc/smsc-sender-php-sdk
```

## Примеры пользования

Подключение

```php
require_once 'vendor/autoload.php';
```
или

```php
require_once 'smsc-sender-php-sdk/autoload.php';
```

Импорт

```php
use Panda\SMSC\SenderSDK\All;
use Panda\SMSC\SenderSDK\Charset;
use Panda\SMSC\SenderSDK\Format;
use Panda\SMSC\SenderSDK\Message;
use Panda\SMSC\SenderSDK\Sender;
use Panda\SMSC\SenderSDK\Soc;
use Panda\SMSC\SenderSDK\Status;
use Panda\SMSC\SenderSDK\Time;
use Panda\SMSC\SenderSDK\Timezone;
use Panda\SMSC\SenderSDK\Valid;
use Panda\SMSC\SenderSDK\Exception\ClientException;
```

Создание сервиса и аутентификация

```php
/*
 * Обязательные параметры: "Логин", "Пароль"
 * Необязательный параметр: "Формат ответа"
 * Возможно использование функционала класса "Format" в качестве параметра
 */
$sender = new Sender('support@smsc.ru', sha1('Ou9488LdHisd'), Format::JSON);
```

Создание сообщения

```php
/*
 * Обязательные параметры: "Имя отправителя", "Текст сообщения"
 * Необязательный параметр: "Номер получателя"
 */
$message = new Message('SENDER', 'Все начинается с сообщения!', '79995550011');
```

Формирование параметров отправки

```php
/*
 * Добавление номеров получателей
 * Обязательный параметр: "Номер телефона"
 */
$message->addPhone('79995550011')
    ->addPhone('79995550012')

    /*
     * Установка идентификатора сообщения
     * Обязательный параметр: "Идентификатор"
     */
    ->setId('20036577');

    try {
        /*
         * Установка времени отправки сообщения
         * Обязательный параметр: "Время отправки"
         * Возможно использование функционала класса "Time" в качестве параметра
         */
        $message->setTime(Time::get(2019, 5, 17, 12, 55));
    } catch (ClientException $e) {
        echo $e->getMessage();
    }
    
    /*
     * Установка часового пояса для времени отправки сообщения
     * Обязательный параметр: "Часовой пояс"
     * Возможно использование функционала класса "Timezone" в качестве параметра
     */
    $message->setTimeZone(Timezone::YEKT)

    /*
     * Установка признака soc-сообщения
     * Необязательный параметр: "Признак soc-сообщения"
     * Возможно использование функционала класса "Soc" в качестве параметра
     */
    ->setSoc(Soc::YES)

    /*
     * Установка "срока" жизни сообщения
     * Обязательный параметр: "Срок "жизни""
     * Возможно использование функционала класса "Valid" в качестве параметра
     */
    ->setValid(Valid::min(75))

    /*
     * Установка кодировки сообщения
     * Обязательный параметр: "Кодировка"
     * Возможно использование функционала класса "Charset" в качестве параметра
     */
    ->setCharset(Charset::UTF_8)

    /*
     * Установка формата ответа
     * Обязательный параметр: "Формат"
     * Возможно использование функционала класса "Format" в качестве параметра
     */
    ->setFormat(Format::XML);
```

Отправка сообщения

```php
try {
    // Обязательный параметр: "Сообщение"
    print_r($sender->request($message));
} catch (ClientException $e) {
    echo $e->getMessage();
}
```

Создание запроса статуса сообщений

```php
// Необязательные параметры: "Идентификатор сообщения", "Номер телефона"
$status = new Status('20036577', '79995550011');
```

Формирование параметров запроса статуса сообщений

```php
/*
 * Добавление сообщений
 * Обязательные параметры: "Идентификатор", "Номер телефона"
 */
$status->addMessage('20036577', '79995550011')
    ->addMessage('20036578', '79995550012')

    /*
     * Установка варанта ответа
     * Обязательный параметр: "Вариант"
     */
    ->setAll(All::ADD)

    /*
     * Установка кодировки ответа
     * Обязательный параметр: "Кодировка"
     * Возможно использование функционала класса "Charset" в качестве параметра
     */
    ->setCharset(Charset::WINDOWS_1251)

    /*
     * Установка формата ответа
     * Обязательный параметр: "Формат"
     * Возможно использование функционала класса "Format" в качестве параметра
     */
    ->setFormat(Format::NUMBERS);
```

Запроса статуса ссообщений

```php
try {
    // Обязательный параметр: "Запрос статуса"
    print_r($sender->request($status));
} catch (ClientException $e) {
    echo $e->getMessage();
}
```
