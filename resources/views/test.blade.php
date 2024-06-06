@extends('layouts.layout')

@section('content')
    <head>
        <title>Тест по дисциплине</title>
    </head>
    <body>
        <header>
            <menu class = "menu">
                <p>
                    <a href="{{ route('main') }}">Главная</a>
                    <a href="{{ route('about') }}">Обо мне</a>
                    <a href="{{ route('interests') }}">Интересы</a>
                    <a href="{{ route('study') }}">Учёба</a>
                    <a href="{{ route('album') }}">Фотоальбом</a>
                    <a href="{{ route('contact') }}">Контакт</a>
                    <a href="{{ route('history') }}">История</a>
                    <a href="{{ route('admin') }}">Администратор</a>
                </p>
            </menu>
        </header>
        <header class="name"><h1>Тест по дисциплине "Теория вероятностей и математическая статистика"</h1></header>
        <form action="mailto:zhenyaivanov.7791@gmail.com" id = "TestForm">
            <h3><label for="full-name">Введите ФИО:</label></h3>
            <input type="text" id="full-name" name="full-name" required>

            <input class="radio" type="checkbox" id="fname" name="fname" value="fname"/>
            <label for="fname">Нет отчества</label>

            <div class="form-group"> 
                <h3><label for="group">Выберите свою группу:</label></h3>
                <select name="group" id="group"> 
                    <option value=""></option>
                    <optgroup label="1 курс"> 
                        <option value="r1">ИТ/б-23-1-о</option> 
                        <option value="r2">ИТ/б-23-2-о</option> 
                        <option value="r3">ИТ/б-23-3-о</option> 
                        <option value="r3">ИТ/б-23-4-о</option> 
                    </optgroup> 
                    <optgroup label="2 курс"> 
                        <option value="r1">ИТ/б-22-1-о</option> 
                        <option value="r2">ИТ/б-22-2-о</option> 
                        <option value="r3">ИТ/б-22-3-о</option> 
                        <option value="r3">ИТ/б-23-4-о</option> 
                    </optgroup> 
                    <optgroup label="3 курс"> 
                        <option value="r1">ИС/б-21-1-о</option> 
                        <option value="r2">ИС/б-21-2-о</option> 
                        <option value="r3">ИС/б-21-3-о</option> 
                        <option value="r3">ПИ/б-21-1-о</option> 
                    </optgroup> 
                    <optgroup label="4 курс"> 
                        <option value="r1">ИС/б-20-1-о</option> 
                        <option value="r2">ИС/б-20-2-о</option> 
                        <option value="r3">ИС/б-20-3-о</option> 
                        <option value="r3">ПИ/б-20-1-о</option> 
                    </optgroup> 
                </select> 
            </div>

            <div>
                <h4><label>1.Что есть математическое ожидание квадрата отклонения случайной величины от её математического ожидания? </label></h4>
                <TEXTAREA id="Question1" NAME="IS" rows=1 cols="10"></TEXTAREA> 
            </div>

            <div>
                <h4><legend>2.Что есть математическое ожидание квадрата отклонения случайной величины от её математического ожидания? </legend></h4>
                <input type="radio" id="answ1" name="answer" value="false"/>
                <label for="answ1">Математическое ожидание</label>
                <input type="radio" id="answ2" name="answer" value="false"/>
                <label for="answ2">Математическая статистика</label>
                <input type="radio" id="answ3" name="answer" value="true"/>
                <label for="answ3">Дисперсия</label>
                <input type="radio" id="answ4" name="answer" value="false"/>
                <label for="answ4">Случайная величина</label>
            </div>
            
            <div>
                <p>
                    <h4><label for="answ">
                        3.
                        <select name="answ3" id="answ">
                            <option value=""></option>
                            <option value="false">Депрессия</option>
                            <option value="true">Дисперсия</option>
                        </select> 
                        - есть математическое ожидание квадрата отклонения случайной величины от её математического ожидания.
                    </label></h4>
                </p>
            </div>

            <p>
                <button type="submit">Отправить</button>
                <button type="reset" id="clear-button">Очистить</button>
            </p>

            <div class='result-block'>
                <?php 
                    if (isset($data['errors'])) {
                        foreach ($data['errors'] as $key => $item) {
                            echo "<p class='result-block__item error'>$item</p>";
                        }
                    } elseif (isset($data['result'])) {
                        $result = $data['result'];
                        $color = $data['result'] > 2 ? 'success' : 'error';
                        echo "<p class='result-block__item $color'>Вы ответили верно на $result из 3 вопросов!</p>";
                    }
                ?>
            </div>
            
        </form>
        
        <script src="{{ asset('js/test.js') }}"></script>
        <script src="{{ asset('js/SubmitButton.js') }}"></script>
        <script src = "{{ asset('js/history.js') }}"></script>
        <script src = "{{ asset('js/localHistory.js') }}"></script>
    </body>
@endsection