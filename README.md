# Тестовое задание

## Установка

Запустить проект командой:
```
docker compose up -d
```

Переименовать файл <b>.env.example2</b> в <b>.env</b>,
Он содержит все необходимые настройки.

Войти в консоль example_app настроек:
```
docker exec -it example_app  bash
```
и вести следующие команды:
```
// установить зависимости composer
composer update

// При необходимости сгенерировать ключ. 
// (Если возникнет ошибка No application encryption key has been specified.)
php artisan key:generate

// Запустить миграции и заполнить таблицы
php artisan migrate --seed
```

Проверить роботоспособность в браузере или postman введя http://localhost:8876 (появится страница фреймворка по умолчанию)

Вслучае возникновении ошибки "The stream or file "/var/www/storage/logs/laravel.log" could not be opened in append mode: Failed to open stream: Permission denied", предоставить доступ для записи в папке, например
```
sudo chmod -R 777 ./
```

## Описание
Для проекта используется следующая модель бд:
![Screenshot 2024-10-21 004316](https://github.com/user-attachments/assets/31eec534-01d5-46fc-b99f-864d6bf7168e)

Маршрут имеет поле direction которое содержит информацию о направлении движения(forward/backward).
За порядок прохождения остановок у маршрута отвечает поле order в таблице route_stops.
Параметр order начальной остановки не может быть больше чем у конечной остановки.
Пример: Автобус 95 идущий от отсановки 1 до остановки 16 проходит по остановкам 1->3->5->8->12->14->16.
Соответственно свойство order этих остановок будет 1-2-3-4-5-6-7.

Время прибытия маршрута на остановку добавляется в таблицу route_arrivals и не зависит от таблицы route_stops.

### Доступ к бд
Доступ к бд можно осуществить через по http://localhost:8080/ через Adminer.

Логин: postgres2 <br>
Пароль: root 

В папке проекта хранится дам базы данных <b>shuttle_bus.sql</b>

## Поиск маршрутов

Поиск нужных маршрутов осуществляется по api http://localhost:8876/api/find-bus
За поиск нужных маршрутов отвечает \App\Http\Controllers\Api\Bus\FindController.


Пример использования:
![Screenshot 2024-10-20 232040](https://github.com/user-attachments/assets/104526a9-0598-49bb-817e-700550eb2656)

## Обновление маршрутов

Для обновления маршрута используется api http://localhost:8876/api/route/2/change-stops
Входные параметры: id маршрута и обновлённый массив с id всех остановок.
Расчёт на то что пользователь в форме основляет добавляя или удаля ужные остановки,
и отправляет новый массив с id который будет использован для записи в бд.

За обновление данных о маршруте отвечает \App\Http\Controllers\Api\Stops\ChangeStopsController

![Screenshot 2024-10-21 002236](https://github.com/user-attachments/assets/bcbb93c5-6147-4194-8f68-89d51155a12c)
