@extends('layouts.layout')

@section('content')
    
    @section('title','Администратор')

    <body>
        <div class="Information"> 
            <div class = "header"> 
                <h1 id="Name"> Администратор </h1>
            </div>

            <section>
                <h2>Пользователи</h2>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Имя</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Иван</td>
                            <td>ivan@example.com</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Анна</td>
                            <td>anna@example.com</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Петр</td>
                            <td>petr@example.com</td>
                        </tr>
                    </tbody>
                </table>
            </section>
                
            <section>
                <h2>Статистика</h2>
                <h4>История за все время</h4>
                <table id="allTimeHistoryTable">
                    <thead>
                        <tr>
                            <th>Страница</th>
                            <th>Количество просмотров</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </section>
            
            <section>
                <h2>Настройки</h2>
                <form>
                    <label for="siteName">Название сайта:</label>
                    <input type="text" id="siteName" name="siteName" placeholder="Введите название сайта">
                    
                    <label for="logo">Логотип:</label>
                    <input type="file" id="logo" name="logo">
                    
                    <button type="submit">Сохранить</button>
                </form>
            </section>
        </div>
        
        <script src = "{{ asset('js/history.js') }}"></script>
        <script src = "{{ asset('js/localHistory.js') }}"></script>
    </body>
@endsection