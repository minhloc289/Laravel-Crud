<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts';
    protected $primaryKey = 'id';
    public $incrementing = false; // Tắt tự động tăng ID để sử dụng ID tuỳ chỉnh
    protected $keyType = 'string';

    protected $fillable = [
        'email',
        'password',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Tạo ID có định dạng "ACC" + số thứ tự
            $lastAccount = Account::orderBy('id', 'desc')->first();
            $nextId = $lastAccount ? ((int)substr($lastAccount->id, 3)) + 1 : 1;
            $model->id = 'ACC' . str_pad($nextId, 3, '0', STR_PAD_LEFT);
        });
    }
}
