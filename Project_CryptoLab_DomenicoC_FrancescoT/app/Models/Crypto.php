<?php

namespace App\Models;

use App\Models\Crypto;
use App\Models\Wallet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Crypto extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'img'
    ];
    public function wallets(): BelongsToMany
    {
        return $this->belongsToMany(Wallet::class);
    }
}
