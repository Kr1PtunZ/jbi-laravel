<?php

namespace App\Service;

class SendMail
{
    protected string $adminEmail = 'jbiurai@yandex.ru';
    public string $subj = 'Доступна новая заявка';
    public function send($name, $number, $email, $message) : void
    {

        if (empty($name)){
            $name = 'Не указано';
        }
        if (empty($email)){
            $email = 'Не указан';
        }

        $text = "
        <p>Доступна новая заявка</p>
        <ul>
        <li>$name</li>
        <li>$number</li>
        <li>$email</li>
        </ul>
        <p>$message</p>
        ";

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        mail($this->adminEmail, $this->subj, $text, $headers);
    }
}
