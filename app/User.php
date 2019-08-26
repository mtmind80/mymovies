<?php

namespace App;
use App\Traits\HashData;
use App\Traits\Encryptable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use HashData;
    use Encryptable;

    public static function boot()
    {

        static::creating(function($model) {
            $model->password = $model->data_hash($model->password);
        });
        static::updating(function($model) {
            if ($model->isDirty('passEncryptableword')) {
                $model->password = $model->data_hash($model->password);
            }
        });

        parent::boot();
    }


    protected $encryptable = [
        'name',
    ];


    protected $appends = ['full_name'];


    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token', 'is_admin',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /** Methods */

    public function isAdmin()
    {
        return $this->is_admin;
    }

    /** Mutators */



    /* Accessors */

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        return "{$this->name}";
    }
}
