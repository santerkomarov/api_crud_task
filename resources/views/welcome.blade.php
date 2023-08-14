<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>API_task</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
            
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="container">
            <div class="alert alert-warning  my-3" role="alert">
               
                    Разработчик: <strong> Александр Комаров</strong> &nbsp; &nbsp; тел: <strong> 8 951 212-44-67</strong> &nbsp; &nbsp; email: <strong> santer.komarov@gmail.ru</strong> 
                
            </div>
            <div>
                <h2>
                    Тестовое задание
                </h2>
                <div>
                    <p>На языке php (допустимо использование популярных фреймворков) реализовать REST API в соответствии со следующими требованиями:</p>
                    <ul>
                        <li>Создать 4 модели. Одна из моделей должна быть «Пользователь». Остальные модели на усмотрение разработчика. </li>
                        <li>Должны быть реализованы связи 1:1, 1:M, M:M.</li>
                        <li>Реализовать валидацию полей в каждой модели.</li>
                        <li>Вызов API-методов должен быть доступен только авторизованным пользователям.</li>
                        <li>Реализовать CRUD-операции для каждой из моделей.</li>
                        <li>Реализовать возможность расширения модели дополнительными параметрами в GET-запросах.</li>
                        <li>Реализовать возможность получения связей моделей.</li>
                        <li>Реализовать права доступа. Например, создание модели A доступно всем пользователям, кроме заблокированных, при этом получение доступно абсолютно всем пользователям. Управление моделями B и C доступно только пользователям, с ролью (либо правом) администратора.
                        </li>
                        <li>Реализовать сортировки и фильтры для каждой из моделей.</li>
                        <li>Приложить инструкцию по разворачиванию проекта.</li>
                    </ul>
                </div>
            </div>
            <div>
                <h4>
                    Установка 
                </h4>
                <div>
                    <code>
                        
                    </code>
                </div>
            </div>
            <div class="mb-5">
                <div>
                    <p>
                        Просмотр кода доступно на 
                        <a class="btn btn-warning" href="https://github.com/santerkomarov">
                            <img src="{{ asset('assets/img/github.png')}}" alt="github">
                        </a> 
                    </p>

                    <div>
                        Модель <span class="badge bg-secondary">User</span> Совместно с Profile реализует 1 : 1. Удаление Юзера удалит и его Профиль.
                    </div>
                    <div>
                        Модель <span class="badge bg-secondary">Profile</span>
                    </div>
                    <div>
                        Модель <span class="badge bg-secondary">Post</span> Совместно с User реализует 1 : М. Удаление Юзера удалит и все его Посты.
                    </div>
                    <div>
                        Модель <span class="badge bg-secondary">Category</span> Совместно с Post реализует М : М. Удаление Категории будет и в Постах.
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <div class="alert alert-secondary d-flex gap-5" role="alert">
                    <div>
                        <strong>POST</strong> /api/register 
                    </div>
                    <div class="">
                        Регистрация Юзера
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <h5 class="mb-3">
                    Тестировка в Postman
                </h5>
                <p>
                    После регистрации получите токен.
                </p>
                <img class="border mb-3" src="{{ asset('assets/img/postman_1.jpg')}}" alt="postman_1">
                <p>
                    Не забудьте ввести его чтоб апи роуты были доступны.
                </p>
                <img class="border" src="{{ asset('assets/img/postman_2.jpg')}}" alt="postman_2">
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-5" role="alert">
                <div>
                    <strong>POST</strong> /api/login 
                </div>
                <div class="">
                    Вход Юзера
                </div>
            </div>
            <h5>CRUD профиля Юзера</h5>
            <div class="alert alert-light d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>GET</strong> /api/profile
                </div>
                <div class="">
                    Просмотр своего профиля
                </div>
            </div>
            <div class="alert alert-light d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>POST</strong> /api/profile/create
                </div>
                <div class="">
                    Создание своего профиля
                </div>
            </div>
            <div class="alert alert-light d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>POST</strong> /api/profile/update
                </div>
                <div class="">
                    Обновление профиля
                </div>
            </div>
            <div class="alert alert-light d-flex gap-5 mb-5" role="alert">
                <div>
                    <strong>POST</strong> /api/profile/delete
                </div>
                <div class="">
                    Удаление профиля
                </div>
            </div>
            <h5>CRUD постов Юзера</h5>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>GET</strong> /api/posts
                </div>
                <div class="">
                    Просмотр постов
                </div>
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>GET</strong> /api/post/{id}
                </div>
                <div class="">
                    Просмотр одного поста
                </div>
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>POST</strong> /api/post/create
                </div>
                <div class="">
                    Создание поста
                </div>
            </div>
            <p>При создании или редактировании важно указать в теле запроса параметр <strong>categories[]</strong> c id категории</p>
            <img src="{{ asset('assets/img/postman_category.jpg')}}" class="border mb-3" alt="postman_categories">
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>POST</strong> /api/post/update
                </div>
                <div class="">
                    Обновление поста
                </div>
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-5" role="alert">
                <div>
                    <strong>POST</strong> /api/post/delete
                </div>
                <div class="">
                    Удаление поста
                </div>
            </div>

            <h5>CRUD категорий</h5>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>GET</strong> /api/category
                </div>
                <div class="">
                    Просмотр категории
                </div>
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>GET</strong> /api/category/{id}
                </div>
                <div class="">
                    Просмотр одной категории
                </div>
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>POST</strong> /api/category/create
                </div>
                <div class="">
                    Создание категори
                </div>
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>POST</strong> /api/category/update
                </div>
                <div class="">
                    Обновление категории
                </div>
            </div>
            <div class="alert alert-secondary d-flex gap-5 mb-3" role="alert">
                <div>
                    <strong>POST</strong> /api/category/delete
                </div>
                <div class="">
                    Удаление категории
                </div>
            </div>
            
        </div>
        <div style="min-height: 300px;"></div>
    </body>
</html>
