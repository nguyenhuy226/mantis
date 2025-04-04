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
        'image',
        'birthday'
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

    /**
     * Get orders that owns the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\Hasmany
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasPermission($permission)
    {
        $jsonEmptyArray = json_encode([]);
        // dd(in_array($permission, json_decode($this->role->permissions ?? $jsonEmptyArray, true)));
        return in_array($permission, json_decode($this->role->permissions ?? $jsonEmptyArray, true));
    }

    /**
     * Create a new user.
     *
     * @param array $data The data for the product to be created.
     * @return \App\Models\User The newly created user instance.
     */
    public static function createUser(array $data)
    {
        $data['password'] = Hash::make($data['password']);
        return self::create($data);
    }

    /**
     * Get a list of users.
     *
     * @param mixed $status The status filter for the users (optional).
     * @return \Illuminate\Database\Eloquent\Collection|\App\Models\User[] A collection of user instances.
     */
    public static function getUserList()
    {
        return self::all();
    }

    /**
     * Get the details of a user by their ID.
     *
     * @param int $id The ID of the user to retrieve.
     * @return \App\Models\User|null The user instance if found, null otherwise.
     */
    public static function getUserDetail($id)
    {
        return self::find($id);
    }

    /**
     * Get the name of the status based on the user's status code.
     *
     * @return string The name of the status (verified, rejected, or pending).
     */
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

    /**
     * Delete a user by their ID.
     *
     * @param int $id The ID of the user to delete.
     * @return bool True if the user was deleted successfully, false otherwise.
     */
    public static function deleteUser($id)
    {
        $user = self::find($id);
        return $user->delete();
    }

    /**
     * Update a user's information by their ID.
     *
     * @param array $data The data to update the user with.
     * @param int $id The ID of the user to update.
     * @return bool True if the user was updated successfully, false otherwise.
     */
    public static function updateUser($data, $id)
    {
        $user = self::findOrFail($id);
        return $user->update($data);
    }
}
