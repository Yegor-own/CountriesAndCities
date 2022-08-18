Реализация данного ТЗ
```
Создать CRUD API приложение "Страны и города". 
Исходники вылодить в GitHub или Bitbucket.
Исползовать Laravel версии 8 или 9. В качетсве БД исползовать Mysql.
Будет плюсом если приложение собрано в Docker (можно использовать готовые решения типа laradock).

Суть приложения:
Создать API для отображения, добавления, редактиривония и удаления сущностей.
Требования:
Прилодение должно уметь создавать страны и города, как по отдельности так и в связке. (Создать страну Россия -> город Москва, получится что город Москва привязан к России),
Реадктировать названия городов и стран а так же менять привязку города к другой стране.
Удалять страны и города. При удалении страны так же должны удаляться связанные с ней города.
Выводить список стран и городов постарнничном. (Внутри страны должны через связь подгружаться все подвязаннеые города)

А так же:
1) Должны быть прописаны все необходимы миграции.
2) Создать фабрики для заполнения таблиц исходными данными. Использовать для этого Factory.
3) У каждого города должна быть своя страна.
4) Между городами и странами реализовать связи как на уровне БД, так и на уровне моделей.

```

Требования ``` PHP8, MySQL```

В MySQL создать таблицу ``countries_and_cities`` аутентификация в MySQL без пароля пользователь root

Запускается через ``` php artisan serve ```

Ссылка на Pstman
