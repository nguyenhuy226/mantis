<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
class PersonalAccessToken extends Model
{
    protected $table = 'personal_access_tokens';

    protected $fillable = [
        'tokenable_type',
        'tokenable_id',
        'name',
        'token',
        'abilities',
        'expires_at',
    ];

    /**
     * Mối quan hệ tokenable (morphTo).
     * Liên kết token với model người dùng (User hoặc Customer).
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function tokenable(): MorphTo
    {
        return $this->morphTo();
    }

    // /**
    //  * Kiểm tra quyền hạn của token.
    //  *
    //  * @param string $ability
    //  * @return bool
    //  */
    // public function can(string $ability): bool
    // {
    //     $abilities = json_decode($this->abilities, true);
    //     return in_array('*', $abilities) || in_array($ability, $abilities);
    // }

    // /**
    //  * Kiểm tra nếu token không có quyền hạn.
    //  *
    //  * @param string $ability
    //  * @return bool
    //  */
    // public function cant(string $ability): bool
    // {
    //     return !$this->can($ability);
    // }
}
