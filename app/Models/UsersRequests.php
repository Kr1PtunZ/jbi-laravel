<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersRequests extends Model
{
    use HasFactory;

    public string $name;
    public string $phone;
    public string $email;
    public string $message;
    public string $date;

    protected $table = 'users_requests';
    protected $fillable = ['name', 'email', 'phone', 'message', 'date'];
//    protected $hidden = ['phone', 'email'];

    /**
     * Get the formatted created at attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getCreatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    }

    /**
     * Get the formatted updated at attribute.
     *
     * @param  string  $value
     * @return string
     */
    public function getUpdatedAtAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    }
}
