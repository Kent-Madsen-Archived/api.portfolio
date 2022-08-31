<?php
    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    use Illuminate\Foundation\Auth\User
        as Authenticatable;

    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;


    class User
        extends Authenticatable
    {
        use HasApiTokens,
            HasFactory,
            Notifiable;


        protected $fillable =
        [
            'identity',

            'username',
            'email_identity',
            'password',
            'remember_token',

            'email_verified_at',
            'created_at',
            'updated_at'
        ];


        protected $hidden =
        [
            'email_identity',

            'password',
            'remember_token',

            'email_verified_at',

            'remember_token'
        ];


        protected $casts =
        [
            'identity' => 'integer',
            'username' => 'string',
            'password' => 'string',

            'email_identity' => 'integer',
            'remember_token' => 'string',

            'email_verified_at' => 'datetime',
            'created_at'        => 'datetime',
            'updated_at'        => 'datetime',
        ];
    }
?>