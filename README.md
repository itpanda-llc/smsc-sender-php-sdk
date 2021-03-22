# SMSCenter-Sender-PHP-SDK

Библиотека для интеграции c сервисом рассылки сообщений ["СМСЦентр"](https://smsc.ru)

[![Packagist Downloads](https://img.shields.io/packagist/dt/itpanda-llc/smscenter-messenger-sdk)](https://packagist.org/packages/itpanda-llc/smscenter-messenger-sdk/stats)
![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/itpanda-llc/smscenter-messenger-sdk)
![GitHub](https://img.shields.io/github/license/itpanda-llc/smscenter-messenger-php-sdk)

## Ссылки

* [Разработка](https://github.com/itpanda-llc)
* [О проекте (СМСЦентр)](https://smsc.ru)
* [Документация (API СМСЦентр)](https://smsc.ru/api/http/)

## Возможности

* Отправка сообщений
* Управление шаблонами сообщений
* Управление шаблонами операторов
* Уведомления о событиях
* Управление рассылками
* Проверка статуса
* Проверка состояния баланса
* Управление контактами
* Управление клиентами
* Создание и выгрузка счетов и актов
* Управление именами отправителей
* Получение истории отправленных сообщений
* Получение входящих сообщений
* Получение статистики
* Получение статистики по оператору Мегафон
* Запрос тарифов
* Получение информации об операторе
* Получение данных о короткой ссылке
* Подключение выделенных номеров для приема сообщений
* Подтверждение номера телефона с помощью звонка

## Требования

* PHP >= 7.2
* cURL

## Установка

```shell script
composer require itpanda-llc/smscenter-messenger-sdk
```

## Подключение

```php
require_once 'vendor/autoload.php';
```

## Использование

### Создание сервиса / Аутентификация

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Логин
 * Пароль
 * Кодировка
 * Формат ответа сервера
 */
$center = new MessengerSdk\Center('support@smsc.ru',
    sha1('password'),
    MessengerSdk\Charset::UTF_8,
    MessengerSdk\Fmt::JSON);
```

### Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$center->setCharset(MessengerSdk\Charset::WINDOWS_1251)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::XML);
```

### Отправка сообщений

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Текст
 * Номер / Список номеров
 * Имя отправителя
 */
$task = new MessengerSdk\Send\Task('Начнем!', '79995550011', 'SMSCenter');
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Вложение / Документ
    ->addAttachment('attachment.file')

    // Флаг
    ->addFlag(MessengerSdk\Send\Flag::NL)

    // Номер / Список номеров
    ->setPhones('79995550011')

    // Текст
    ->setMes('..Продолжим!')

    // Идентификатор
    ->setId('id')

    // Имя отправителя
    ->setSender('SMSCenter')

    // Перевод в транслит
    ->setTranslit(MessengerSdk\Send\Translit::TRANSLIT)

    // Сокращение ссылок
    ->setTinyUrl(MessengerSdk\Send\TinyUrl::YES)

    // Время отправки
    ->setTime('DDMMYYhhmm')

    // Часовой пояс
    ->setTz(MessengerSdk\Send\Tz::YEKT)

    // Промежуток времени
    ->setPeriod('period')

    // Интервал / Частота
    ->setFreq('freq')

    // Flash-сообщение
    ->setFlash(MessengerSdk\Send\Flash::YES)

    // Бинарное сообщение
    ->setBin(MessengerSdk\Send\Bin::HEX)

    // Push-сообщение
    ->setPush(MessengerSdk\Send\Push::YES)

    // HLR-запрос
    ->setHlr(MessengerSdk\Send\Hlr::YES)

    // Ping-сообщение
    ->setPing(MessengerSdk\Send\Ping::YES)

    // MMS-сообщение
    ->setMms(MessengerSdk\Send\Mms::YES)

    // E-Mail-сообщение
    ->setMail(MessengerSdk\Send\Mail::YES)

    // Soc-сообщение
    ->setSoc(MessengerSdk\Send\Soc::YES)

    // Viber-сообщение
    ->setViber(MessengerSdk\Send\Viber::YES)

    // HTTP-адрес файла для загрузки
    ->setFileUrl('fileUrl')

    // Голосовое сообщение
    ->setCall(MessengerSdk\Send\Call::YES)

    // Голос озвучивания текста
    ->setVoice(MessengerSdk\Send\Voice::W2)

    /*
     * Время ожидания (Параметры голосового сообщения)
     * Интервал повтора (Параметры голосового сообщения)
     * Общее количество попыток (Параметры голосового сообщения)
     */
    ->setParam(MessengerSdk\Send\Call::getParam(10, 10, 1))

    // Тема MMS или E-Mail сообщения
    ->setSubj('subj')

    // Стоимость рассылки
    ->setCost(MessengerSdk\Send\Cost::YES)

    // Список номеров телефонов/сообщений
    ->setList('mes:79995550011')

    // Срок "жизни" сообщения
    ->setValid(MessengerSdk\Send\Valid::min(5))

    // Максимальное количество сообщений при разбиении
    ->setMaxSms(3)

    // Буквенно-цифровой код
    ->setImgCode('imgCode')

    // IP-адрес
    ->setUserIp('userIp')

    // Добавление в ответ сервера списка ошибочных номеров
    ->setErr(MessengerSdk\Send\Err::YES)

    // Добавление в ответ сервера информации по каждому номеру
    ->setOp(MessengerSdk\Send\Op::YES)

    // Привязка клиента в качестве реферала
    ->setPp('pp');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->sendSms('Начнем!', '79995550011', 'SMSCenter'));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Управление шаблонами сообщений

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Template\Task(MessengerSdk\Template\Action::GET_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Template\Action::ADD_1)

    // Флаг
    ->addFlag(MessengerSdk\Template\Flag::FL_1)

    // Название шаблона
    ->setName('name')

    // Текст сообщения
    ->setMsg('msg')

    // Формат сообщения
    ->setFormat(MessengerSdk\Template\Format::SMS)

    // Имя отправителя
    ->setSender('sender');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Управление шаблонами операторов

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Действие / Команда
 * Имя отправителя
 * Текст шаблона
 */
$task = new MessengerSdk\OperatorTemplate\Task(MessengerSdk\OperatorTemplate\Action::GET_1, 'SMSCenter', 'msg');
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::NUMBERS)

    // Действие / Команда
    ->setAction(MessengerSdk\OperatorTemplate\Action::ADD_1)

    // Флаг
    ->addFlag(MessengerSdk\OperatorTemplate\Flag::MTS_SRV)
    ->addFlag(MessengerSdk\OperatorTemplate\Flag::MEGA_SRV)

    // Имя отправителя
    ->setSender('SMSCenter')

    // Текст шаблона
    ->setMsg('msg');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Уведомления о событиях

Создание макросов

* Создание

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Название правила или сервера в задании
 * Адрес или IP проверяемого сервера
 * Дополнительная информация о событии
 */
$macros = new MessengerSdk\Notification\Macros('name', 'host', 'info');

// или

/*
 * Название правила или сервера в задании
 * Адрес или IP проверяемого сервера
 * Дополнительная информация о событии
 */
$macros = MessengerSdk\Notification\Task::newMacros('name', 'host', 'info');

// или

/*
 * Название правила или сервера в задании
 * Адрес или IP проверяемого сервера
 * Дополнительная информация о событии
 */
$macros = $acquirer->newMacros('name', 'host', 'info');
```

* Установка параметров

```php

// Название правила или сервера в задании
$macros->setName('name')

    // Адрес или IP проверяемого сервера
    ->setHost('host')

    // Дополнительная информация о событии
    ->setInfo('info');
```

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Идентификатор группы заданий
 * Использование шаблона
 * Макросы
 */
$task = new MessengerSdk\Notification\Task('id', MessengerSdk\Notification\Ok::AFTER_FAIL, $macros);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Идентификатор группы заданий
    ->setId('id')

    // Адрес или IP проверяемого сервера
    ->setHost('host')

    // Дополнительная информация о событии
    ->setInfo('info')

    // Использование шаблона
    ->setOk(MessengerSdk\Notification\Ok::FAIL);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    /*
     * Идентификатор группы заданий
     * Использование шаблона
     * Макросы
     */
    print_r($center->newNotification('id', MessengerSdk\Notification\Ok::FAIL, $macros));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Управление рассылками

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Job\Task(MessengerSdk\Job\Action::GET_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Формат ответа сервера
    ->setAction(MessengerSdk\Job\Action::ADD_1)

    // Вложение / Документ
    ->addAttachment('attachment.file')

    // Флаг
    ->addFlag(MessengerSdk\Job\Flag::FL_5)

    // Название рассылки
    ->setName('name')

    // Номер / Список номеров
    ->setPhones('79995550011')

    // Текст
    ->setMes('..Продолжим!')

    // Имя отправителя
    ->setSender('SMSCenter')

    // Имя отправителя
    ->setSender2('SMSC')

    // Перевод в транслит
    ->setTranslit(MessengerSdk\Job\Translit::TRANSLIT)

    // Сокращение ссылок
    ->setTinyUrl(MessengerSdk\Job\TinyUrl::YES)

    // Время отправки
    ->setTime('DDMMYYhhmm')

    // Периодичность отправки вновь создаваемой рассылки
    ->setRpt(MessengerSdk\Job\Rpt::WEEKENDLY)

    // Максимальное количество повторов для отложенной периодической рассылки
    ->setRptn(2)

    // Часовой пояс
    ->setTz(MessengerSdk\Job\Tz::YEKT)

    // Промежуток времени
    ->setPeriod('period')

    // Интервал / Частота
    ->setFreq('freq')

    // Flash-сообщение
    ->setFlash(MessengerSdk\Job\Flash::YES)

    // Бинарное сообщение
    ->setBin(MessengerSdk\Job\Bin::HEX)

    // Push-сообщение
    ->setPush(MessengerSdk\Job\Push::YES)

    // HLR-запрос
    ->setHlr(MessengerSdk\Job\Hlr::YES)

    // Ping-сообщение
    ->setPing(MessengerSdk\Job\Ping::YES)

    // MMS-сообщение
    ->setMms(MessengerSdk\Job\Mms::YES)

    // E-Mail-сообщение
    ->setMail(MessengerSdk\Job\Mail::YES)

    // Soc-сообщение
    ->setSoc(MessengerSdk\Job\Soc::YES)

    // Viber-сообщение
    ->setViber(MessengerSdk\Job\Viber::YES)

    // HTTP-адрес файла для загрузки
    ->setFileUrl('fileUrl')

    // Вариант сообщения для пересылки по SMS
    ->setMes2('mes2')

    // Голосовое сообщение
    ->setCall(MessengerSdk\Job\Call::YES)

    // Голос озвучивания текста
    ->setVoice(MessengerSdk\Job\Voice::W2)

    /*
     * Время ожидания (Параметры голосового сообщения)
     * Интервал повтора (Параметры голосового сообщения)
     * Общее количество попыток (Параметры голосового сообщения)
     */
    ->setParam(MessengerSdk\Job\Call::getParam(10, 10, 1))

    // Тема MMS или E-Mail сообщения
    ->setSubj('subj')

    // Стоимость рассылки
    ->setCost(MessengerSdk\Job\Cost::YES)

    // Список номеров телефонов/сообщений
    ->setList('mes:79995550011')

    // ID шаблона, который будет использован в качестве текста сообщения
    ->setTpl('tpl')

    // Срок "жизни" сообщения
    ->setValid(MessengerSdk\Job\Valid::min(5))

    // Идентификатор
    ->setId('id')

    // Дата, с которой требуется получить список рассылок
    ->setStart(3)

    // Дата, до которой требуется получить список рассылок
    ->setEnd('imgCode');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Проверка статуса

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Идентификатор сообщения или список идентификаторов через запятую
 * Номер телефона или список номеров через запятую
 * Вариант ответа
 */
$task = new MessengerSdk\Status\Task('id', '79995550011', MessengerSdk\Status\All::FULL);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::JSON)

    // Действие / Команда
    ->setAction(MessengerSdk\Status\Action::DEL_1)

    // Вариант ответа
    ->setAll(MessengerSdk\Status\All::ADDITIONAL);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    /*
     * Идентификатор сообщения или список идентификаторов через запятую
     * Номер телефона или список номеров через запятую
     * Вариант ответа
     */
    print_r($center->checkStatus('id', '79995550011', MessengerSdk\Status\All::FULL));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Проверка состояния баланса

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Флаг
$task = new MessengerSdk\Balance\Task(MessengerSdk\Balance\Flag::CUR);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Флаг
    ->addFlag(MessengerSdk\Balance\Flag::CUR);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    // Флаг
    print_r($center->getBalance(MessengerSdk\Balance\Flag::CUR));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Управление контактами

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Contact\Task(MessengerSdk\Contact\Action::GET_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::KOI8_R)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие команда
    ->setAction(MessengerSdk\Contact\Action::CHG_1)

    // Название контакта или группы
    ->setName('name')

    // Идентификатор группы, которой принадлежит создаваемый контакт
    ->setGrp('grp')

    // Номер группы для рассылок сообщений
    ->setNum('num')

    // Список номеров телефонов через любой разделитель
    ->setPhone('phone')

    // Список e-mail адресов через любой разделитель
    ->setMail('mail')

    // Новый список номеров телефонов через любой разделитель
    ->setNewPhone('newPhone')

    // Новый список e-mail адресов через любой разделитель
    ->setNewMail('newMail')

    // Фамилия
    ->setLnm('Lnm')

    // Имя
    ->setFnm('Fnm')

    // Отчество
    ->setMnm('Mnm')

    // ФИО Контакта
    ->setFio('Fio')

    // Выборка контактов
    ->setSearch('search')

    // Идентификатор контакта (int_id), начиная с которого необходимо вернуть список контактов
    ->setAfterId('afterId')
    
    // Дата рождения
    ->setBd('bd')

    // ID контакта, назначенный Клиентом
    ->setMyId('myId')

    // Комментарии
    ->setCmt('cmt')

    // Теги (метки)
    ->setTags('tags')

    // Другие номера телефонов
    ->setPho('pho')

    // Тип блокировки, либо тип группы
    ->setType(MessengerSdk\Contact\Type::ALL_MESSAGES_PHONES_GROUP);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Управление клиентами

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\User\Task(MessengerSdk\User\Action::GET_STAT_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::KOI8_R)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\User\Action::ADD_1)

    // Флаг
    ->addFlag(MessengerSdk\User\Flag::ANSW)
    ->addFlag(MessengerSdk\User\Flag::ANSW_CALL)

    // Логин субклиента
    ->setUser('name')

    // Текущий пароль субклиента
    ->setPswc('grp')

    // Новый пароль субклиента
    ->setPassword('num')

    // Сумма, перечисляемая клиенту с главного аккаунта в валюте главного аккаунта
    ->setSum('phone')

    // ID сайта, которому будет принадлежать создаваемый субклиент
    ->setSiteId('mail')

    // Новый логин субклиента при изменении
    ->setNewLogin('newPhone')

    // Тип учетной записи
    ->setType(MessengerSdk\User\Type::MAIN_ACCOUNT_BALANCE_INDEPENDENT_TARIFF)

    // Основной адрес электронной почты
    ->setEmail('Lnm')

    // Альтернативный адрес электронной почты для пересылки входящих SMS
    ->setEmail2('Fnm')

    // Основной номер телефона
    ->setPhone('Mnm')

    // Альтернативный номер телефона для пересылки входящих SMS
    ->setPhone2('Fio')

    // Начальная дата в периоде, за который запрашивается статистика
    ->setStart('search')

    // Конечная дата в периоде. Если не указана, то возвращаются данные с начальной даты
    ->setEnd('afterId')
    
    // Идентификатор субклиента, назначаемый сервером автоматически при создании
    ->setUserId('bd')

    // Типы субклиентов
    ->setReseller(MessengerSdk\User\Reseller::SUBCLIENTS_BALANCE_MAIN_ACCOUNT)

    // Скрыть статистику по удаленным субклиентам
    ->setHideDeleted(MessengerSdk\User\HideDeleted::HIDE_STAT_ALL_SUBCLIENTS)

    // Инициалы (фамилия, имя, отчество) или название компании
    ->setFio('tags')

    // Реквизиты компании субклиента
    ->setProps('pho')

    // Номер договора
    ->setCntr()

    // Текущий тарифный план
    ->setTariff(MessengerSdk\User\Tariff::NO_6)

    // Минимальный тариф
    ->setMinTrf('myId')

    // Валюта расчетов субклиента
    ->setCurr(MessengerSdk\User\Curr::RUB)

    // Часовой пояс
    ->setTz(MessengerSdk\User\Tz::GMT_M5)

    // Имя отправителя (Sender ID) по умолчанию
    ->setSender('pho')

    // Резервное имя отправителя
    ->setSender2()

    // Баланс для уведомлений
    ->setNb('Fio')

    // Данный параметр устанавливает количество дней для хранения отправленных сообщений, по истечении которых SMS-сообщения будут автоматически удаляться из истории
    ->setKtm('search')

    // Список телефонных кодов, на которые разрешена отправка сообщений
    ->setFmts('afterId')
    
    // Комментарии главного аккаунта
    ->setNotes('bd')

    // Список телефонов или номеров групп через запятую для выполнения рассылок по SMS-командам
    ->setPh('myId')

    // Общий лимит SMS за день
    ->setDlim('cmt')

    // Лимит на один номер
    ->setPlim('tags')

    // Лимит на номер и текст
    ->setTlim('pho')

    // Лимит с одного IP-адреса
    ->setIlim('ilim')

    // Диапазон времени в часах h1-h2
    ->setTmlim('bd')

    // Максимальный срок доставки сообщений временно недоступным абонентам (мин.)
    ->setVld('myId')

    // http-адрес (URL) скрипта для обработки статусов доставки SMS-сообщений и (или) входящих SMS-сообщений на стороне субклиента
    ->setUrl('cmt')

    // Разделенный запятой список номеров телефонов, на которые будут отправляться сообщения
    ->setMph('tags')

    // Начальное значение диапазона времени для отправки входящих писем
    ->setMh1('pho')

    // Конечное значение диапазона времени для отправки входящих писем
    ->setMh2('mh2')

    // Максимальная длина сообщения, до которой обрезается входящее письмо при отправке в виде SMS-сообщения
    ->setMlen(12);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Создание и выгрузка счетов и актов

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Document\Task(MessengerSdk\Document\Action::GET_ACCOUNT_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Document\Action::GET_ACT_1)

    // Логин субклиента
    ->setUser('user')

    // Идентификатор субклиента
    ->setUserId('userId')

    // Сумма, на которую необходимо создать счет в валюте Клиента
    ->setSum('sum')

    // Название услуги, указываемой при создании счета
    ->setService('service')

    // Идентификатор запрашиваемого счета или акта
    ->setId('id')

    // Номер запрашиваемого акта
    ->setNum('num');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Управление именами отправителей

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Sender\Task(MessengerSdk\Sender\Action::GET_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Sender\Action::ADD_1)

    // Документ / Вложение
    ->addAttachment('attachment.file')

    // Флаг
    ->addFlag(MessengerSdk\Sender\Flag::TELE2)
    ->addFlag(MessengerSdk\Sender\Flag::TELE2_STEP)

    // Получение списка активированных имен
    ->setAll('user')

    // Создаваемое или удаляемое имя отправителя
    ->setSender('userId')

    // Юридическое название организации (ООО/СПД)
    ->setFio('sum')

    // ЕДРПОУ/ИНН
    ->setInn('service')

    // Адрес сайта (необязательный параметр)
    ->setSite('id')

    // E-mail для связи
    ->setEmail('num')

    // Фактический адрес
    ->setAddress('user')

    // Описание услуг, предоставляемых отправителем
    ->setDesc('userId')

    // Тема (цель информирования)
    ->setSubj('sum')

    // Идентификатор имени отправителя, назначаемый Сервером автоматически при создании нового имени
    ->setId('service')

    // Комментарий, указываемый при создании имени отправителя
    ->setCmt('id')

    // Добавить e-mail адрес отправителя
    ->setMail('num1111')

    // Комментарий, связанный с параметром mail (обычно имя владельца e-mail адреса)
    ->setName('user')

    // Код для подтверждения цифрового имени отправителя
    ->setCode('userId')

    // Адрес сайта, указываемый в тексте сообщения с кодом подтверждения
    ->setSiteName('sum')

    // Логин субклиента, к которому применяется указанная команда
    ->setUser('service')

    // Добавить в ответ код статуса имени отправителя у оператора
    ->setOperators('id')

    // Выбрать имена отправителей начиная с указанной даты, для которых был изменен статус имени у любого из операторов
    ->setFromDate('num')

    // Уникальный идентификатор имени отправителя, назначаемый Сервером автоматически при создании имени
    ->setPrevId('user')

    // Количество имен отправителей возвращаемых при запросе списка имен
    ->setCnt('userId')

    // Описание к переданному файлу
    ->setDocInfo('sum');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Получение истории отправленных сообщений

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Outbox\Task(MessengerSdk\Outbox\Action::GET_MESSAGES_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Outbox\Action::GET_MESSAGES_1)

    // Начальная дата в периоде, за который запрашивается история
    ->setStart('дд.мм.гггг')

    // Конечная дата в периоде
    ->setEnd('дд.мм.гггг')

    // Номер телефона Клиента, на который получены входящие сообщения
    ->setPhone('79995550011')

    // Номер телефона Клиента, на который получены входящие сообщения
    ->setEmail('support@smsc.ru')

    // Признак запроса e-mail сообщений
    ->setFormat(MessengerSdk\Outbox\Format::SMS)

    // Количество возвращаемых в ответе сообщений
    ->setCnt(100)

    // Глобальный идентификатор сообщения
    ->setPrevId('prevId');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Получение входящих сообщений

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Inbox\Task(MessengerSdk\Inbox\Action::GET_ANSWERS_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Inbox\Action::GET_ANSWERS_1)

    // Период в часах, за который необходимо запросить входящие сообщения
    ->setHour(2)

    // Идентификатор сообщения, начиная с которого необходимо вернуть входящие сообщения
    ->setAfterId('afterId')

    // Номер телефона Клиента, на который получены входящие сообщения
    ->setToPhone('79995550011');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Получение статистики

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Действие / Команда
 * Начальная дата в периоде, за который запрашивается статистика
 * Конечная дата в периоде
 */
$task = new MessengerSdk\Statistic\Task(MessengerSdk\Statistic\Action::GET_STAT_1, 'дд.мм.гггг', 'дд.мм.гггг');
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Statistic\Action::GET_STAT_1)

    // Флаг
    ->addFlag(MessengerSdk\Statistic\Flag::MYCUR)
    ->addFlag(MessengerSdk\Statistic\Flag::BALANCE2)
    
    // Начальная дата в периоде, за который запрашивается статистика
    ->setStart('дд.мм.гггг')

    // Конечная дата в периоде
    ->setEnd('дд.мм.гггг');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    /*
     * Начальная дата в периоде, за который запрашивается статистика
     * Конечная дата в периоде
     */
    print_r($center->getStatistic('дд.мм.гггг', 'дд.мм.гггг'));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Получение статистики по оператору Мегафон

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Действие / Команда
 * Номер лицевого счета у оператора Мегафон
 */
$task = new MessengerSdk\MegafonStatistic\Task(MessengerSdk\MegafonStatistic\Action::GET_MEGA_ACCOUNTS_1, 'account');
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\MegafonStatistic\Action::GET_MEGA_ACCOUNTS_1);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    // Номер лицевого счета у оператора Мегафон
    print_r($center->getMegafonStatistic('account'));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Запрос тарифов

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Действие / Команда
$task = new MessengerSdk\Tariff\Task(MessengerSdk\Tariff\Action::GET_PRICE_1);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Tariff\Action::GET_PRICE_1);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->getTariff());
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Получение информации об операторе

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Действие / Команда
 * Номер телефона абонента или список номеров через запятую
 */
$task = new MessengerSdk\Operator\Task(MessengerSdk\Operator\Action::GET_OPERATOR_1, '79995550011');
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Operator\Action::GET_OPERATOR_1)

    // Номер телефона абонента или список номеров через запятую
    ->setPhone('79995550011');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    // Номер телефона абонента или список номеров через запятую
    print_r($center->getOperator('79995550011'));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Получение данных о короткой ссылке

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Действие / Команда
 * Исходная полная ссылка
 */
$task = new MessengerSdk\TinyUrl\Task(MessengerSdk\TinyUrl\Action::GET_1, 'link');

// или

/*
 * Действие / Команда
 * Исходная полная ссылка
 */
$task = MessengerSdk\TinyUrl\Task::byLink(MessengerSdk\TinyUrl\Action::GET_1, 'link');

// или

/*
 * Действие / Команда
 * Идентификатор короткой ссылки
 */
$task = MessengerSdk\TinyUrl\Task::byId(MessengerSdk\TinyUrl\Action::GET_1, 'id');
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\TinyUrl\Action::GET_1)

    // Исходная полная ссылка
    ->setlink('link')

    // Идентификатор короткой ссылки
    ->setId('id');
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    // Исходная полная ссылка
    print_r($center->getTinyUrl('link'));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Подключение выделенных номеров для приема сообщений

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

/*
 * Действие / Команда
 * Подключаемый номер
 * Продление выделенного номера
 */
$task = new MessengerSdk\Receive\Task(MessengerSdk\Receive\Action::GET_1, '79995550011', MessengerSdk\Receive\NoProlong::YES);
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING)

    // Действие / Команда
    ->setAction(MessengerSdk\Receive\Action::CHG_1)

    // Продление выделенного номера
    ->setNoProlong(MessengerSdk\Receive\NoProlong::NO);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

### Подтверждение номера телефона с помощью звонка

Способ №1

* Создание запроса

```php
use Panda\SmsCenter\MessengerSdk;

// Номер телефона абонента
$task = new MessengerSdk\WaitCall\Task('79995550011');
```

* Установка параметров

```php
use Panda\SmsCenter\MessengerSdk;

// Кодировка
$task->setCharset(MessengerSdk\Charset::UTF_8)

    // Формат ответа сервера
    ->setFmt(MessengerSdk\Fmt::STRING);
```

* Выполнение запроса

```php
use Panda\SmsCenter\MessengerSdk;

try {
    print_r($center->request($task));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```

Способ №2

```php
use Panda\SmsCenter\MessengerSdk;

try {
    // Номер телефона абонента
    print_r($center->waitCall('79995550011'));
} catch (MessengerSdk\Exception\ClientException $e) {
    echo $e->getMessage();
}
```
