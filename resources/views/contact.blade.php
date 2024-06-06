@extends('layouts.layout')

@section('content')
    <head>
        <title> Contact </title>
        <link rel="stylesheet" href="{{ asset('css/contact.css?v=') . time() }}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
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
                    <a href="{{ route('test') }}">Тест</a>
                    <a href="{{ route('history') }}">История</a>
                    <a href="{{ route('admin') }}">Администратор</a>
                </p>
            </menu>
        </header>
        <div class = "header"> 
            <h1> Контакт </h1>
        </div>
        <form class="contactForm" action="/contact/validate" style="margin-bottom: 10%">
            @csrf
            <div class="form-block">
                <label for="fullname" class="form-block-label">ФИО</label>
                <input type="text" id="fullname" name="fullname" placeholder="Введите ваше имя" value="{{ old('fullname') }}">
                {!! isset($errors_data) && $errors_data['fullname'] ? '<span>' . $errors_data['fullname'] . '</span>' : '' !!}
            </div>

            <div class="form-block">
                <label for="birthday" class="form-block-label">Дата рождения</label>
                <input id="birthday" name="birthday" type="date" value="{{ old('birthday') }}">
                {!! isset($errors_data) && $errors_data['birthday'] ? '<span>' . $errors_data['birthday'] . '</span>' : '' !!}
            </div>

            <div class="form-block">
                <label for="phone" class="form-block-label">Телефон</label>
                <input type="tel" id="phone" name="phone" placeholder="Введите телефон" value="{{ old('phone') }}">
                {!! isset($errors_data) && $errors_data['phone'] ? '<span>' . $errors_data['phone'] . '</span>' : '' !!}
            </div>
            
            <div class="form-block">
                <label for="gender" class="form-block-label">Пол</label>
                <input name="gender" type="radio" value="" style="display:none;" checked>
                <label class="radio-style"><input type="radio" name="gender" value="Мужской">Мужской</label>
                <label class="radio-style"><input type="radio" name="gender" value="Женский">Женский</label>
                {!! isset($errors_data) && $errors_data['gender'] ? '<span>' . $errors_data['gender'] . '</span>' : '' !!}
            </div>

            <div class="form-block">
                <label for="age" class="form-block-label">Возраст</label>
                <select id="age" name="age" value="{{ old('age') }}">
                    <option value="">Не выбрано</option>
                    <option value="14-17">14-17</option>
                    <option value="18-24">18-24</option>
                    <option value="25-40">25-40</option>
                    <option value="40+">40+</option>
                </select>
                {!! isset($errors_data) && $errors_data['age'] ? '<span>' . $errors_data['age'] . '</span>' : '' !!}
            </div>
            
            <div class="form-block">
                <label for="email" class="form-block-label">Почта</label>
                <input type="email" id="email" name="email" placeholder="Введите почту" value="{{ old('email') }}">
                {!! isset($errors_data) && $errors_data['email'] ? '<span>' . $errors_data['email'] . '</span>' : '' !!}
            </div>

            <div class="form-block">
                <label for="message" class="form-block-label">Сообщение</label>
                <textarea id="message" name="message" rows="4" cols="80" placeholder="Введите текст...">{{ old('message') }}</textarea>
                {!! isset($errors_data) && $errors_data['message'] ? '<span>' . $errors_data['message'] . '</span>' : '' !!}
            </div>

            {{-- <input type="submit" value="Отправить" id="submit">
            <input type="reset" value="Очистить"> --}}

            <button type="submit" id="submit">Отправить</button>
            <button type="reset">Очистить</button>
  
            <div class="errors">
                {!! $error_list ?? '' !!}
            </div>
        </form>
        {{-- <form id = "contactForm" action="mailto:zhenyaivanov.7791@gmail.com">
            <p>
                <label for="full-name">Фамилия Имя Отчество:</label>
                <input type="text" id="full-name" name="full-name" required>
            </p>
            <p>
                <label for="phone">Телефон:</label>
                <input type="text" id="phone" name="phone" required>
            </p>
            <p>
                <label>Пол:</label>
                <label for="male">
                    <input type="radio" id="male" name="gender" value="male" required> Мужской
                </label>
                <label for="female">
                    <input type="radio" id="female" name="gender" value="female" required> Женский
                </label>
            </p>
            <p>
                <label for="age">Возраст:</label>
                <select id="age" name="age" required>
                    <option value=""></option>
                    <option value="a10">10</option> 
                    <option value="a11">11</option> 
                    <option value="a12">12</option> 
                    <option value="a13">13</option> 
                    <option value="a14">14</option> 
                    <option value="a15">15</option> 
                    <option value="a16">16</option> 
                    <option value="a17">17</option> 
                    <option value="a18">18</option> 
                    <option value="a19">19</option> 
                    <option value="a20">20</option> 
                    <option value="a21">21</option> 
                    <option value="a22">22</option> 
                    <option value="a23">23</option> 
                    <option value="a24">24</option> 
                    <option value="a25">25</option> 
                    <option value="a26">26</option> 
                    <option value="a27">27</option> 
                    <option value="a28">28</option> 
                    <option value="a29">29</option> 
                    <option value="a30">30</option>
                    <option value="a31">31</option>
                    <option value="a32">32</option>
                    <option value="a33">33</option>
                    <option value="a34">34</option>
                    <option value="a35">35</option>
                    <option value="a36">36</option>
                    <option value="a37">37</option>
                    <option value="a38">38</option>
                    <option value="a39">39</option>
                    <option value="a40">40</option>
                    <option value="a41">41</option>
                    <option value="a42">42</option>
                    <option value="a43">43</option>
                    <option value="a44">44</option>
                    <option value="a45">45</option>
                    <option value="a46">46</option>
                    <option value="a47">47</option>
                    <option value="a48">48</option>
                    <option value="a49">49</option>
                </select>
            </p>
            <p>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </p>
            <p>
                <label for="birthdate">Дата рождения:</label>
                <input type="text" id="birthdateInput" name="birthdate" required>
                <div id="calendarPopup" class="calendar-popup">
                    <div class="calendar-header">
                        <select id="monthSelect"></select>
                        <select id="yearSelect"></select>
                    </div>
                    <div id="calendarDays" class="calendar-days"></div>
                </div>
            </p>
            <p>
                <label for="Message">Сообщение:</label>
                <textarea id="message" name="message" rows="5" required></textarea>
            </p>
            <p>
                <button type="submit" id="submitButton">Отправить</button>
                <button type="reset" id="clear-button">Очистить</button>
            </p>
            <div id="modalOverlay">
                <div id="modalWindow">
                <p>Вы действительно хотите отправить сообщение?</p>
                <div id="modalButtons">
                    <button id="modalYes">Да</button>
                    <button id="modalNo">Нет</button>
                </div>
                </div>
            </div>
        </form> --}}

        <script src = "{{ asset('js/PopOvers.js') }}"></script>
        <script src = "{{ asset('js/modalOverlays.js') }}"></script>
        {{-- <script src = "{{ asset('js/SubmitButton.js') }}"></script>
        <script src = "{{ asset('js/contact.js') }}"></script>
        <script src = "{{ asset('js/contactValidate.js') }}"></script> --}}
        <script src = "{{ asset('js/history.js') }}"></script>
        <script src = "{{ asset('js/localHistory.js') }}"></script>
    </body>
@endsection
