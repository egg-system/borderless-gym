@extends('templates.app')
@push('script')
<link href="{{ asset('/css/pages/users/edit.css') }}" rel="stylesheet">
@endpush

@section('content')
<div class="users-edit-page">
    @can('trainer')
    <div class="header">
        <h1>トレーナー編集</h1>
    </div>
    @elsecan('gym')
    <div class="header">
        <h1>ジムオーナー編集</h1>
    </div>
    @endcan
    
    @can('trainer')
    <form method="POST" action="{{ route('trainers.update', [$user->id]) }}">
    @elsecan('gym')
    <form method="POST" action="{{ route('gyms.update', $user->id) }}">
    @endcan

        <div class="header__aside">
            <button type="submit">保存</button>
        </div>

        <div class="body">
            @method('PUT')
            @csrf

            <input-form
                label="氏名"
                name="name"
                id="name"
                type="text"
                value="{{ optional(Auth::user())->name ?? old('name') }}"
                autocomplete="name"
                autofocus
                error="{{ $errors->first('name') }}"
            ></input-form>

            <?php
                // componentのpropsに合わせて変換
                $formattedOccupations = collect($occupations)->map(function ($occupation) {
                    return collect([ 'name' => $occupation->name, 'value' => $occupation->id ]);
                });
                $formattedOccupations->prepend(collect([ 'name' => '-- 選択してください --', 'value' => '' ]));
            ?>
            <select-form
                label="業種"
                sublabel="業種"
                name="occupation_id"
                id="occupation"
                :options="{{ json_encode($formattedOccupations) }}"
                selected="{{ isset($matchingCondition->occupation_id) ? (string)$matchingCondition->occupation_id : old('occupation_id') }}"
                error="{{ $errors->first('occupation_id') }}"
            ></select-form>

            <?php
                // componentのpropsに合わせて変換
                $formattedAreas = collect($areas)->map(function ($area) {
                    return collect([ 'name' => $area->name, 'value' => $area->id ]);
                });
                $formattedAreas->prepend(collect([ 'name' => '', 'value' => '' ]));
            ?>
            <select-form
                label="現在の勤務地エリア"
                sublabel="エリア"
                name="area_id"
                id="area"
                :options="{{ json_encode($formattedAreas) }}"
                selected="{{ isset($matchingCondition->area_id) ? (string)$matchingCondition->area_id : old('area_id') }}"
                error="{{ $errors->first('area_id') }}"
            ></select-form>

            @can('trainer')
            <input-form
                label="電話番号"
                name="tel"
                id="tel"
                type="tel"
                value="{{ $user->tel ?? old('tel') }}"
                autocomplete="tel"
                error="{{ $errors->first('tel') }}"
            ></input-form>
            
            <text-area-form
                label="自己紹介"
                name="pr_comment"
                id="pr_comment"
                value="{{ $user->pr_comment ?? old('pr_comment') }}"
                placeholder="自己紹介を入れて企業にアピールしよう"
                error="{{ $errors->first('pr_comment') }}"
            ></text-area-form>

            @elsecan('gym')
            <input-form
                label="代表者名"
                name="president_name"
                id="president_name"
                type="text"
                value="{{ old('president_name',$user->president_name) }}"
                error="{{ $errors->first('president_name') }}"
            ></input-form>

            <input-form
                label="電話番号"
                name="tel"
                id="tel"
                type="tel"
                value="{{ old('tel', $user->tel) }}"
                autocomplete="tel"
                error="{{ $errors->first('tel') }}"
            ></input-form>

            <input-form
                label="スタッフ数"
                name="staff_count"
                id="staff_count"
                type="number"
                value="{{ old('staff_count', $user->staff_count) }}"
                error="{{ $errors->first('staff_count') }}"
            ></input-form>

            <input-form
                label="顧客数"
                name="customer_count"
                id="customer_count"
                type="number"
                value="{{ old('customer_count',$user->customer_count) }}"
                error="{{ $errors->first('customer_count') }}"
            ></input-form>

            <input-form
                label="募集人数"
                name="requirements[number]"
                id="requirements"
                type="number"
                value="{{ old('requirements.number',$user->requirements['number'] ?? '') }}"
                error="{{ $errors->first('requirements.number') }}"
            ></input-form>

            <input-form
                label="募集スキル"
                name="requirements[skill]"
                id="requirements"
                type="text"
                value="{{ old('requirements.skill',$user->requirements['skill'] ?? '') }}"
                error="{{ $errors->first('requirements.skill') }}"
            ></input-form>
            @endcan

            <range-input-form
                label="希望単価"
                from-id="price_min"
                from-name="price[min]"
                from-type="number"
                from-value="{{ isset($matchingCondition->price['min']) ? $matchingCondition->price['min'] : old('price.min') }}"
                from-error="{{ $errors->first('price.min') }}"
                to-name="price[max]"
                to-id="price_max"
                to-type="number"
                to-value="{{ isset($matchingCondition->price['max']) ? $matchingCondition->price['max'] : old('price.max') }}"
                to-error="{{ $errors->first('price.max') }}"
            ></range-input-form>

            <?php
                // componentのpropsに合わせて変換
                $dayOfWeek = trans('search.day_of_week');
                $formattedDayOfWeek = collect($dayOfWeek)->map(function ($item) {
                    return collect([ 'name' => $item, 'value' => $item ]);
                });
                $formattedDayOfWeek->prepend(collect([ 'name' => '', 'value' => '' ]));
            ?>
            <select-form
                label="希望曜日"
                name="work_time[week]"
                id="work_time_week"
                :options="{{ json_encode($formattedDayOfWeek) }}"
                selected="{{ isset($matchingCondition->work_time['week']) ? $matchingCondition->work_time['week'] : old('work_time.week') }}"
                error="{{ $errors->first('work_time.week') }}"
            ></select-form>

            <input-form
                label="希望時間帯"
                name="work_time[time]"
                id="work_time_time"
                type="time"
                value="{{ isset($matchingCondition->work_time['time']) ? $matchingCondition->work_time['time'] : old('work_time.time') }}"
                error="{{ $errors->first('work_time.time') }}"
            ></input-form>

            <select-form
                label="希望エリア"
                sublabel="希望エリア"
                name="preferred_area_id"
                id="preferred_area"
                :options="{{ json_encode($formattedAreas) }}"
                selected="{{ isset($matchingCondition->preferred_area_id) ? (string)$matchingCondition->preferred_area_id : old('preferred_area_id') }}"
                error="{{ $errors->first('preferred_area_id') }}"
            ></select-form>

            {{ $errors->first('is_available_holiday') }}
            <div class="checkbox-form-container">
                <div class="checkbox-form-container__form">
                    <checkbox-form
                        label="休日勤務可能"
                        name="is_available_holiday"
                        id="is_available_holiday"
                        checked="{{ isset($matchingCondition->is_available_holiday) ? !!$matchingCondition->is_available_holiday : old('is_available_holiday') }}"
                    ></checkbox-form>
                </div>

                <div class="checkbox-form-container__form">
                    <checkbox-form
                        label="平日勤務可能"
                        name="is_available_weekday"
                        id="is_available_weekday"
                        checked="{{ isset($matchingCondition->is_available_weekday) ? !!$matchingCondition->is_available_weekday : old('is_available_weekday') }}"
                    ></checkbox-form>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
