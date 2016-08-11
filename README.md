# Описание

Данное приложение представляет сосбой систему управления и вывода новостей.

Система реализована на Codeigniter 3 и Smarty, оформление Bootstrap.

Данная система содержит раздел администратора, с помощью которого можно добавлять, редактировать и удалять новости. Для входа в раздел администратора введите site.com/admin (где site.com - адрес главной страницы сайта). Потребуется ввести логин / пароль ( по умолчанию admin / admin).

Главная страница содержит 5 (по умолчанию) новостей, кроме заголовка и изображения (если загрузили) имеется сокращенный текст новости (по умолчанию 300 символов). Имеется постраничная навигация.

Каждая новость относится к одной из четырех категорий: "Политика", "Финансы", "Криминал", "Прочее".

На главной странице можно выбрать категории какой-либо конкретной новости.


# Установка приложения

## Файлы проекта

git clone https://github.com/nikit-ac/news_codeigniter.git

## Установить базу

Необходимо использовать БД Mysql 5.0.11

### Дамп БД

Дамп БД ./application/news.sql. Для быстрого запуска приложения загрузите его в ваш SQL менеджер.

Содержание файла news.sql:

1) Дамп структуры базы данных 'news' (Создает БД 'news', можно изменить название (вручную))

2) Дамп структуры для таблица 'news' (Создает таблицу в БД, изменение названия таблицы не предусмотрено)

3) Дамп данных таблицы 'news' 8 rows (Для тестирования приложения). Содержит:
 * две новости категории "Политика"
 * одна из них с картинкой
 * 6 новостей категории "криминал" (по умолчанию выводим 5 новостей на странице, автоматически включается постраничная навигация для любой категории)


### Создать базу и пользователя

Задать необходимые настройки:
Название БД:      (по умолчанию news)
Имя пользователя: (по умолчанию root)
Пароль:           ввести пароль для доступа к БД

##Конфигурация проекта

Файлы конфигурации находятся по адресу
./application/config

### Настройки подключения к БД

Открыть файл database.php

Отредактировать следующие параметры (параметры должны быть такие же как и заданные при настройке БД):
```
$db['default'] = array(
  'hostname' => 'localhost',  // Имя хоста, на котором установлена БД
  'username' => 'root',       // Имя пользователя БД
  'password' => '',           // Пароль пользователя БД
  'database' => 'news',       // Название БД
```

### Домашняя страница проекта

Открыть файл config.php

Задать адрес домашней главной страницы проекта:
$config['base_url'] = 'http://codeigniter_news.com/';

## Другие настройки

### Раздел администратора
Для входа в раздел администратора введите *site.com/admin (*где site.com - адрес главной страницы сайта).
Для изменения логина и пароля отредактируйте в файле строки

./application/models/admin_model.php 

    const LOGIN = "admin";
    const PASSWORD = "admin";

### Количество новостей на странице
Можно изменять количество новостей на главной странице (по умолчанию выводится до 5 новостей), для этого отредактируйте в файле строку

./application/models/news_model.php

    const NEWS_ON_PAGE = 5;


### Длина текста новостей на главной странице
Можно изменить длину начала статьи, которое отображается на главной странице (по умолчанию 300 символов), для этого отредактируйте в файле строку

./application/models/news_model.php

    const SHORT_CONTENT = 300;


