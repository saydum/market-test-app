# Тестовое задание на php-программиста
Задача бэк-энд php программист laravel
Предварительно, до начала работ, зафиксировать "прогнозируемое" время на выполнение работы, по результату выполнения, зафиксировать фактически затраченное время.  !!!Не корректируйте данные, эта информация существенно не влияет на принятие решения по кандидату, но необходима для выстраивания рабочих взаимоотношений!!!
1. Создание системы регистрации и авторизации покупателей и продавцов
2. Создание необходимых таблиц, которые будут хранить информацию о том, какие
   запросы оставили пользователи, и у каких продавцов есть подходящие товары,
3. При создании запроса пользователь указывает
   наименование товара,
   цену от,
   цену до,
   Тип: новый / б/у;

Принцип работы:
1. При авторизации/регистрации покупатель вводит запросы, заполняя указаны в пункте 3 данные.
2. Покупатель видит историю своих запросов.
3. Продавец видит список всех запросов покупателей, соответствующие критериям его товаров.

## Стек
- Laravel 10+
- Php 8.2
- PostgreSQL

## Время
- Прогнозируемое время: `6 часов`
- Фактические затраченное время: `8 часов 36 минут`

## Запуск

### Необходимо иметь на компьютере
- php8.2
- composer
- docker
- docker-compose

#### 1. Клонируем репозиторию 
```bash
git clone https://github.com/saydum/market-test-app.git
```
#### 2. Переходим и запускаем скрит
`cd market-test-app`

```bash
sh start.sh
```

#### 3. Открываем
[http://127.0.0.1:8000/](http://127.0.0.1:8000/)
