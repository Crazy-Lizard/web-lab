@extends('layouts.layout')

@section('content')
    <head>
        <title>Учёба</title>
    </head>
    <body>
        <header>
            <menu class = "menu">
                <p>
                    <a href="{{ route('main') }}">Главная</a>
                    <a href="{{ route('about') }}">Обо мне</a>
                    <a href="{{ route('interests') }}">Интересы</a>
                    <a href="{{ route('album') }}">Фотоальбом</a>
                    <a href="{{ route('contact') }}">Контакт</a>
                    <a href="{{ route('test') }}">Тест</a>
                    <a href="{{ route('history') }}">История</a>
                    <a href="{{ route('admin') }}">Администратор</a>
                </p>
            </menu>
        </header>
        <div class="university">
            <div><h3>Севастопольский государственный университет</h3></div>
            <div><h5>Кафедра "Информационные системы"</h5></div>
        </div>
        <table class="study" border=1>
            <tr>
                <td rowspan="3">№</td>
                <th rowspan="3">Дисциплина</th>
                <th colspan="12"><p>Часов в неделю</p><p>(Лекций, Лаб.раб, Практ. раб)</p></th>
            </tr>
            <tr>
                <th colspan="6">1 курс</th>
                <th colspan="6">2 курс</th>
            </tr>
            <tr>
                <th colspan="3">1 сем</th>
                <th colspan="3">2 сем</th>
                <th colspan="3">3 сем</th>
                <th colspan="3">4 сем</th>
            </tr>
            <tr>
                <td class="disc-num">1</td>
                <td class="discipline">Алгоритмизация и программирование</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">2</td>
                <td class="discipline">Высшая математика</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>3</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">3</td>
                <td class="discipline">Философия</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">4</td>
                <td class="discipline">Введение в современные цифровые технологии</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">5</td>
                <td class="discipline">Технологии личностного развития</td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">6</td>
                <td class="discipline">Элективные курсы по физической культуре</td>
                <td>1</td>
                <td>0</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
            </tr>
            <tr>
                <td class="disc-num">7</td>
                <td class="discipline">Иностранный язык</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
                <td>0</td>
                <td>0</td>
                <td>3</td>
            </tr>
            <tr>
                <td class="disc-num">8</td>
                <td class="discipline">Дискретная математика для программистов</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">9</td>
                <td class="discipline">История</td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">10</td>
                <td class="discipline">Основы проектной деятельности</td>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">11</td>
                <td class="discipline">Основы цифрового проектирования</td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">12</td>
                <td class="discipline">Физика</td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">13</td>
                <td class="discipline">Компьютерная графика</td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">14</td>
                <td class="discipline">Объектно-ориентированное программирование</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="disc-num">15</td>
                <td class="discipline">Операционные системы и среды</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">16</td>
                <td class="discipline">Правоведение</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">17</td>
                <td class="discipline">Экономика и организация IT предприятия</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>0</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">18</td>
                <td class="discipline">Безопасность жизнедеятельности</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td class="disc-num">19</td>
                <td class="discipline">Компьтерная схемотехника</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
            </tr>
            <tr>
                <td class="disc-num">20</td>
                <td class="discipline">Теория алгоритмов</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>0</td>
            </tr>
            <tr>
                <td class="disc-num">21</td>
                <td class="discipline">Теория вероятностей и математическая статистика</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="disc-num">22</td>
                <td class="discipline">Технология создания программных продуктов</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="disc-num">23</td>
                <td class="discipline">Технология проектной деятельности</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="disc-num">24</td>
                <td class="discipline">Русский язык делового общения</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
            </tr>
            <tr>
                <td class="disc-num">25</td>
                <td class="discipline">Управление данными</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>1</td>
                <td>0</td>
                <td>1</td>
            </tr>
        </table>
        <script src = "{{ asset('js/history.js') }}"></script>
        <script src = "{{ asset('js/localHistory.js') }}"></script>
    </body>
@endsection