<?php

namespace App\Http\Requests;

use App\Services\Search\SearchInterface;
use App\Models\Gym;
use Illuminate\Foundation\Http\FormRequest;

class GymSearchRequest extends FormRequest implements SearchInterface
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'nullable|exists:matching_conditions,user_id',
            'occupation_id' => 'nullable|integer|exists:occupations,id',
            'area_id' => 'nullable|integer|exists:areas,id',
            'can_work_holiday' => 'nullable|boolean',
            'can_work_weekday' => 'nullable|boolean',
            'can_adjust' => 'nullable|boolean',
        ];
    }

    public function attributes()
    {
        return [
            'user_id' => 'ユーザID',
            'occupation_id' => '職種',
            'area_id' => 'エリア',
            'can_work_holiday' => '平日夜勤務',
            'can_work_weekday' => '休日勤務',
            'can_adjust' => 'トレーナーに合わせて調整可',
        ];
    }

    /**
     * 検証済みの検索項目を返却.
     */
    public function searchParameters()
    {
        return array_merge($this->validated(), [
            'user_type' => Gym::class
        ]);
    }
}
