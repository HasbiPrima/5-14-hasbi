<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
   protected $table = 'contacts';
   protected $primaykey = 'id';
   protected $fillable = ['id', 'nama', 'email', 'pesan'];
}
