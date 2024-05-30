<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminKantin extends Model
{
    use HasFactory;

    protected $table = 'm_admin_kantin';

    protected $fillable = [
        'username',
        'password',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
