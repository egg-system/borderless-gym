<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Offer extends Model
{
    use Notifiable;

    protected $fillable = [
        'gym_login_id',
        'trainer_login_id',
        'offer_state_id',
    ];

    protected $with = ['gymLogin.user', 'trainerLogin.user', 'state'];

    public function state()
    {
        return $this->hasOne(OfferState::class, 'id', 'offer_state_id');
    }

    /**
     * ジム側のユーザー情報
     */
    public function gymLogin()
    {
        return $this->belongsTo(Login::class, 'gym_login_id', 'id');
    }

    /**
     * トレーナー側のユーザー情報
     */
    public function trainerLogin()
    {
        return $this->belongsTo(Login::class, 'trainer_login_id', 'id');
    }

    /**
     * @param Builder $query
     * @param Login $user
     * @return Builder
     */
    public function scopeWhereUser(Builder $query, Login $user)
    {
        $searchColumn = $user->isGym ? 'gym_login_id' : 'trainer_login_id';
        return $query->where($searchColumn, $user->id);
    }

    /**
     * @param Builder $query
     * @return Builder
     */
    public function scopeGetMatchingLatestIds(Builder $query)
    {
        return $query
            ->selectRaw('max(id) as id')
            ->groupBy('gym_login_id', 'trainer_login_id');
    }

    /**
     * @param Builder $query
     * @param int $gymLoginId
     * @param int $trainerLoginId
     * @return Builder
     */
    public function scopeGetMostRecentOffer(Builder $query, int $gymLoginId, int $trainerLoginId)
    {
        return $query
            ->where('gym_login_id', $gymLoginId)
            ->where('trainer_login_id', $trainerLoginId)
            ->orderBy('created_at', 'desc');
    }

    public function updateState(int $state)
    {
        return $this->update(['offer_state_id' => $state]);
    }

    /**
     * 現在のオファー状態を元にメール送信先を取得
     * @return array
     */
    public function getSendMailUsers()
    {
        $result = [];
        if ($this->state->should_notice_trainer) {
            $result[] = $this->trainerLogin;
        }
        if ($this->state->should_notice_gym) {
            $result[] = $this->gymLogin;
        }
        return $result;
    }

    /**
     * メールタイトル取得
     * @param Login $type
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    public function getMailSubjectByUser(Login $type)
    {
        switch ($this->offer_state_id) {
            case OfferState::ENTRY:
                return config('mail.subject.offers.entry.' . $type->user_type);
            case OfferState::OFFER:
                return config('mail.subject.offers.offer.' . $type->user_type);
            default:
                throw app(\Exception::class, ['message' => 'invalid offer state']);
        }
    }

    /**
     * メールテンプレート取得
     * @return string
     */
    public function getMailTemplate()
    {
        switch ($this->offer_state_id) {
            case OfferState::ENTRY:
                return 'mails.offers.entry';
            case OfferState::OFFER:
                return 'mails.offers.offer';
            default:
                throw app(\Exception::class, ['message' => 'invalid offer state']);
        }
    }

    /**
     * @return mixed
     */
    public function getGymNameAttribute()
    {
        return $this->gymLogin->name;
    }

    /**
     * @return mixed
     */
    public function getTrainerNameAttribute()
    {
        return $this->trainerLogin->user->display_name;
    }
}
