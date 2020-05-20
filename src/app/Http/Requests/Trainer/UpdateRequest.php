<?php

namespace App\Http\Requests\Trainer;

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
        $day_of_week_role = join(',', trans('search.day_of_week'));

        return [
            'name' => 'required',
            'tel' => 'nullable',
            'occupation_id' => 'required|exists:occupations,id',
            'area_id' => 'required|exists:areas,id',
            'pr_comment' => 'nullable|string',
            'price' => 'nullable|array',
            'price.min' => 'nullable|integer|lt:price.max',
            'price.max' => 'nullable|integer',
            'work_time' => 'nullable|array',
            'work_time.week' => "nullable|in:{$day_of_week_role}",
            'work_time.time' => 'nullable|date_format:H:i',
        ];
    }

    public function attributes()
    {
        return [
            'name' => '氏名',
            'tel' => '電話番号',
            'occupation_id' => '種類',
            'area_id' => '場所／エリア',
            'pr_comment' => 'PRのコメント',
            'price' => '支払い単価',
            'work_time' => '希望する曜日や時間帯',
        ];
    }

    public function getTrainerValidated()
    {
        $validated = $this->validated();
        return array_filter($validated, function($key) {
            return in_array($key, ['name', 'tel', 'pr_comment']);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function getMatchingConditionValidated()
    {
        $validated = $this->validated();
        return array_filter($validated, function($key) {
            return in_array($key, ['occupation_id', 'area_id', 'price', 'work_time']);
        }, ARRAY_FILTER_USE_KEY);
    }
}
