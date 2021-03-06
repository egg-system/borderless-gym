<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required',
            'display_name' => 'required',
            'occupation_ids' => 'required|exists:occupations,id',
            'now_work_area_id' => 'nullable|exists:areas,id',
            'weekly_worktime' => 'nullable|integer',
            'area_id' => 'nullable|exists:areas,id',
            'can_work_holiday' => 'nullable|boolean',
            'can_work_weekday' => 'nullable|boolean',
            'can_adjust' => 'nullable|boolean',
            'is_considering_change_job' => 'nullable|boolean',
            'career' => 'nullable|json'
        ];
    }

    public function attributes()
    {
        return [
            'name' => '氏名',
            'display_name' => 'ニックネーム',
            'occupation_ids' => '職種',
            'now_work_area_id' => '現在の勤務地',
            'weekly_worktime' => '1週間の稼働時間',
            'area_id' => '希望エリア',
            'can_work_holiday' => '休日稼働可能',
            'can_work_weekday' => '平日夜稼働可能',
            'can_adjust' => '条件に合わせて調整',
            'is_considering_change_job' => '転職検討中',
            'career' => 'キャリア',
        ];
    }
}
