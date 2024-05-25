<?php

namespace App\Http\Controllers;

use App\Models\UsersRequests;
use Illuminate\Http\Request;

class InitMailController extends Controller
{
    protected $adminMail = 'jbiurai@yandex.ru';
    public function initMail()
    {
        $request = UsersRequests::query()->latest()->get();

        $subj = '<p>Заявка #'.$request['id'].'</p>';
        $text =
            '
            <h3>Заявка #'.$request['id'].'</h3>
            <br>
            <p>Поступила новая заявка от пользователя: '.$request['name'].' </p>
            <br>
            <p>&#171;'.$request['message'].'&#187;</p>
            <br>
            <h3>Контактная информация</h3>
            <ul>
            <li>Номер телефона: '.$request['phone'].'</li>
            <li>Email: '.$request['email'].'</li>
            </ul>
            ';
    }
}
