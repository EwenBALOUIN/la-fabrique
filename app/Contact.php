<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $firstname = 'firstname';
    protected $name = 'name';
    protected $email = 'email';
    protected $message = 'message';
    protected $fillable = [
        'firstname', 'name', 'email', 'message',
    ];

}
