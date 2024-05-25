<?php

namespace App\Http\Controllers;

use App\Models\UsersRequests;
use App\Service\Interfaces\ValidateUsersRequestsServiceInterface;
use App\Service\SendMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CreateRequestByUserController extends Controller
{
    private ValidateUsersRequestsServiceInterface $service;

    public function __construct(ValidateUsersRequestsServiceInterface $service)
    {
        $this->service = $service;
    }

    protected function index(Request $request) : RedirectResponse
    {
        $input = $request->input();
        $name = $input['requestUsername'];
        $number = $input['requestPhoneNumber'];
        $email = $input['requestEmail'];
        $message = $input['requestText'];
        $date = date('d.m.Y');
        $this->service->validateUserInput($name, $number, $email);
        //TODO: Убрать

        if ($this->service->errors){
                return redirect('/'.'#form')->with(['errors' => $this->service->errors]);
        }

        UsersRequests::query()->insert([
            'name'=>$name, 'email'=>"$email", 'number'=>$number,
            'message'=>$message, 'date'=>"$date"
        ]);
        $send = new SendMail();

        $send -> send($name, $number, $email, $message);
//        $request = new UsersRequests();
//        $request->name = $name;
//        $request->email = $email;
//        $request->number = $number;
//        $request->message = $message;
//        $request -> date = $date;
//
//        $request->save();

        return redirect('/success');
    }
}
