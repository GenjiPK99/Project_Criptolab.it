<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function cryptos(): BelongsToMany
    {
        return $this->belongsToMany(Crypto::class);
    }
}
