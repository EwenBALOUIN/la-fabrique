<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'contact_firstname', 'contact_name', 'contact_email', 'contact_message', 'contact_object', 'contact_response'
    ];

}
