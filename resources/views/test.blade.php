@extends('layouts.layout')

@section('content')
    @section('title','Тест по дисциплине')
    <body>
        <header class="name"><h1>Тест по дисциплине "Теория вероятностей и математическая статистика"</h1></header>
        <form method="POST" action="/test" id = "TestForm">
            @csrf
            <h3><label for="full-name">Введите ФИО:</label></h3>
            <input type="text" id="full-name" name="full-name" placeholder="Напишите текст..." required>
            {!! isset($errors_data) && $errors_data['full-name'] ? '<span>' . $errors_data['full-name'] . '</span>' : '' !!}

            {{-- <input class="radio" type="checkbox" id="fname" name="fname" value="fname"/>
            <label for="fname">Нет отчества</label> --}}

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
                {!! isset($errors_data) && $errors_data['group'] ? '<span>' . $errors_data['group'] . '</span>' : '' !!}
            </div>

            <div>
                <h4><label>1.Что есть математическое ожидание квадрата отклонения случайной величины от её математического ожидания? </label></h4>
                <TEXTAREA id="Question1" NAME="Question1" rows=1 cols="17" placeholder="Напишите текст...">{!! isset($user_answers) ? $user_answers['Question1']  : '' !!}</TEXTAREA>
                <div class="result-hint">
                    @if(isset($results))
                        @if($results['Question1'])
                            <div class='good'>
                            Верно
                            </div>
                        @else
                            <div class='bad'>
                            Неверно <br>
                            Правильный ответ: {{ $answers['Question1'] }}
                            </div>
                        @endif
                    @endif
                    {!! isset($errors_data) && $errors_data['Question1'] ? '<span>' . $errors_data['Question1'] . '</span>' : '' !!}
                </div> 
            </div>

            <div>
                <h4><label for="Question2">2.Что есть математическое ожидание квадрата отклонения случайной величины от её математического ожидания? </h4>
                {{-- <h4><legend>2.Что есть математическое ожидание квадрата отклонения случайной величины от её математического ожидания? </legend></h4> --}}
                <input type="radio" id="answ1" name="Question2" value="false"/>
                <label for="answ1">Математическое ожидание</label>
                <input type="radio" id="answ2" name="Question2" value="false"/>
                <label for="answ2">Математическая статистика</label>
                <input type="radio" id="answ3" name="Question2" value="Дисперсия"/>
                <label for="answ3">Дисперсия</label>
                <input type="radio" id="answ4" name="Question2" value="false"/>
                <label for="answ4">Случайная величина</label>
                <div class="result-hint">
                    @if(isset($results))
                        @if($results['Question2'])
                            <div class='good'>
                            Верно
                            </div>
                        @else
                            <div class='bad'>
                            Неверно <br>
                            Правильный ответ: {{ $answers['Question2'] }}
                            </div>
                        @endif
                    @endif
                </div>
                {!! isset($errors_data) && $errors_data['Question2'] ? '<span>' . $errors_data['Question2'] . '</span>' : '' !!}
            </div>

            <div>
                <p>
                    <h4><label for="Question3">
                        3.
                        <select name="Question3" id="Question3">
                            <option value=""></option>
                            <option value="false">Депрессия</option>
                            <option value="Дисперсия">Дисперсия</option>
                        </select> 
                        - есть математическое ожидание квадрата отклонения случайной величины от её математического ожидания.
                    </label></h4>
                    <div class="result-hint">
                      @if(isset($results))
                          @if($results['Question3'])
                              <div class='good'>
                                Верно
                              </div>
                          @else
                              <div class='bad'>
                                Неверно <br>
                                Правильный ответ: {{ $answers['Question3'] }}
                              </div>
                          @endif
                      @endif
                    </div>
                    {!! isset($errors_data) && $errors_data['Question3'] ? '<span>' . $errors_data['Question3'] . '</span>' : '' !!}
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