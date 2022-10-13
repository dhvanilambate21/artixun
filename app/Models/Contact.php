<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    // protected $table = "contacts";
    protected $fillable = [
        'username',
        'email',
        'project_description',
        'doc_file',
        'intrest',
        'budget',
    ];
}
