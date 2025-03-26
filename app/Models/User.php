<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    const STATUS_VERIFIED = 'Verified';
    const STATUS_REJECTED = 'Rejected';
    const STATUS_PENDING = 'Pending';

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;
    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'image'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public static function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return self::create($data);
    }

    public static function getUserList()
    {
        return self::all();
    }

    public static function getUserDetail($id)
    {
        return self::find($id);
    }

    public function getNameStatusAttribute()
    {
        switch ($this->status) {
            case 1:
                return User::STATUS_VERIFIED;
            case 0:
                return User::STATUS_REJECTED;
            default:
                return User::STATUS_PENDING;
        }
    }

    public static function deleteUser($id)
    {
        $user = self::find($id);
        return $user->delete();
    }
}
