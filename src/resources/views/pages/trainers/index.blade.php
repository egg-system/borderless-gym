@extends('templates.app')

@push('styles')
    <link href="{{ mix('css/pages/trainers/index.css') }}" rel="stylesheet">
@endpush

@section('content')
<div id="trainerList">
    <div class="wrapper">
        <div class="bg">
            @foreach ($macthingConditions as $matchingCondition)
                @php
                    $trainer = $matchingCondition->user;
                @endphp
                <div class="trainerBox">
                    <a href="{{ route('home.trainers.show', [
                        'trainer' => $trainer->id
                    ]) }}">
                        <div class="trainerProfile">
                            <div class="trainerItem">
                                <div class="icon">
                                    <img src="/images/trainers/trainer-icon.png" alt='トレイナーのアイコン'>
                                </div>
                                <div class="name">
                                    {{ $trainer->display_name }}
                                </div>
                                <div class="job">
                                    {{ $matchingCondition->occupations->first()->name }}
                                    @if(isset($trainer->carrers))
                                        / {{ $trainer->lastCarrerName }}
                                    @endif
                                </div>
                                <div class="workstyle">
                                    週{{ $matchingCondition->weekly_worktime }}日
                                </div>
                            </div>

                            <div class="trainerHistoryBOX">
                                <h2>経歴</h2>
                                <div class="trainerHistory">
                                    @php
                                        $carrers = $trainer->sortedCarrers
                                    @endphp
                                    @foreach ($carrers as $carrer)
                                        {{ $carrer['gym_name'] }}<br>
                                        @if($loop->index === 2 && $carrers->count() > 3)
                                            他{{ $carrers->count() }}社
                                            @break
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
