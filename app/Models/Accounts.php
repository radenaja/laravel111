<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Change this line
use Illuminate\Notifications\Notifiable;

class Accounts extends Authenticatable // Change this line
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'google_id', // Add google_id to make sure it's fillable
    ];

    // Optionally, you can specify the table name if it's not 'accounts'
    protected $table = 'accounts';
}
