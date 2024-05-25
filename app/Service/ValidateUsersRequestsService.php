<?php

namespace App\Service;
use App\Service\Interfaces\ValidateUsersRequestsServiceInterface;

class ValidateUsersRequestsService implements ValidateUsersRequestsServiceInterface
{
    public $errors = [];
    public function action()
    {

    }
    function validateUserInput($name, $number, $email) : array
    {
        $this->errors = array();

        // Validate name
        if (!preg_match('/^[а-яё]+$/iu', $name)) {
            $this->errors[] = 'Имя введено некорректно';
        }

        // Validate number
        $number = preg_replace('/[^0-9]/', '', $number); // remove any non-numeric characters
        if (empty($number)) {
            $this->errors[] .= 'Укажите номер телефона';
        }

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->errors[] .= 'Некорректный адрес электронной почты';
        }

        return $this->errors;
    }
}
