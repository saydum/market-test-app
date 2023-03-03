1.


---
# Время
- Прогнозируемое время: `6 часов`
- Фактические заьраченное время: `???`

# Задача

## 1. Создание системы регистрации и авторизации покупателей и продавцов

### 1.1 Роли

#### 1.1.1 customer
- Добалять запросы
- Все запросы

#### 1.1.2 seller
- Добавить товар
- Все товары
- Запросы клиентов соответсвующие критериям его товаров

### 1.2 Регистрация
- name
- email
- pass
- repeat_pass
- role (customer, seller)

### 1.3 Вход
- email
- pass


## 2. DB

### 2.1 customer_request
- name
- price_from
- price_up_to
- product_condition

### 2.2 product_seller
- name
- price
- product_condition


