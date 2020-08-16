@extends('templates.landing-page')

@section('content')
    <!-- TODO: デバッグ用の処理なのであとで消す -->
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input class="form-control form-control-lg" name="email" type="email"
                    placeholder="Enter your email...">
            </div>
            <div class="col-12 col-md-3">
                <button class="btn btn-primary btn-block btn-lg" type="submit">{{ __('Register') }}</button>
            </div>
        </div>
        @error('email')
        <div class="form-row">
            <div class="col-12 col-md-9 mb-2 mb-md-0" style="color:red">
                <strong>{{ $message }}</strong>
            </div>
            <div class="col-12 col-md-3">
            </div>
        </div>
        @enderror
    </form>
    <landing-page-first-view></landing-page-first-view>
    <landing-page-descriptions></landing-page-descriptions>
    <landing-page-questions></landing-page-questions>
    <landing-page-conversion></landing-page-conversion>
@endsection

@push('scripts')
    {{-- Twitterのシェアボタンに必要になる --}}
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
@endpush
