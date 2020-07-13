<?php

namespace App\Models;

use App\Notifications\VerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class Login extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $table = 'login';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
        'password',
        'email_verified_at',
        'name',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification()
    {
        // メールを送信
        $this->notify(new VerifyEmail);
    }

    public function user()
    {
        return $this->morphTo('user');
    }

    /**
     * パスワードのハッシュ化
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::needsRehash($password) ? bcrypt($password) : $password;
    }

    /**
     * 更新するカラムで属性を上書きしたモデルを取得
     * @param array $updateColumns = []
     * @return \App\Modes\Login
     */
    public function fillUpdateColumns(array $updateColumns = [])
    {
        $attr = array_merge($this->getAttributes(), $updateColumns);
        return $this->fill($attr);
    }

    /**
     * 自分が送ったオファー
     */
    public function fromOffers()
    {
        return $this->hasMany(Offer::class, 'offer_from_id', 'id');
    }

    /**
     * 自分に来たオファー
     */
    public function toOffers()
    {
        return $this->hasMany(Offer::class, 'offer_to_id', 'id');
    }

    /**
     * トレーナーだけに限定するクエリスコープ
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOnlyTrainer(Builder $query)
    {
        return $query->where('user_type', Trainer::class);
    }

    /**
     * 本登録済み
     */
    public function isRegisteredDefinitive()
    {
        return $this->email_verified_at !== null;
    }
}
