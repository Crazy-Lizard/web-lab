<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuestBook;

class GuestBookController extends Controller
{
    //
    public function action_index()
    {
        //$messages = GuestBook::orderBy('created_at', 'desc')->get();
        // Чтение данных из файла messages.inc
        $fileContents = file_get_contents(public_path('messages.inc'));
// Преобразование данных в массив (если они в формате JSON, например)
        $messages = json_decode($fileContents, true);
        return view('guestbook', ['messages' => $messages]);
    }

    public function store(Request $request)
    {
        // Чтение данных из файла messages.inc (если они уже есть)
        $fileContents = file_get_contents(public_path('messages.inc'));
        // Преобразование данных в массив (если они в формате JSON, например)
        $messages = json_decode($fileContents, true) ?? [];

        // Создание нового сообщения
        $newMessage = [
            'created_at' => date('d.m.y'),
            'surname' => $request->surname,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        // Добавление нового сообщения в существующий массив
        $messages[] = $newMessage;

        // Преобразование массива обратно в строку (если данные должны быть в формате JSON)
        $updatedContents = json_encode($messages);

        // Запись данных обратно в файл messages.inc
        file_put_contents(public_path('messages.inc'), $updatedContents);

        return redirect('/guestbook');
    }
}
