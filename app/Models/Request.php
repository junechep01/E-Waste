<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Request extends Model
{
    use HasFactory;
    protected $table = 'requests';


    protected $fillable = [
        'message','user_id', 'date', 'time', 'image'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
