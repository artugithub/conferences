@extends('layouts.app')

@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="w-50">
            <h1 id="conference-title" class="display-2 text-center text-white">{{ __('Conference Application') }}</h1>
            <div class="mt-3 text-center">
                <div class="form-group">
                    @if(session()->get('locale') == 'lt')
                        <h1>{{ __('Welcome') }}</h1>
                        <a href="{{ route('list') }}" class="btn btn-primary">{{ __('Continue as guest') }}</a>
                        <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Admin login') }}</a>
                        <a href="{{ route('lang.switch', ['locale' => 'en']) }}?previousUrl={{ urlencode(Request::fullUrl()) }}" class="btn btn-primary">{{ __('Switch to English') }}</a>
                        {{--<p>Current locale: {{ app()->getLocale() }}</p>
                        <p>Session locale: {{ session()->get('locale') }}</p>--}}
                    @else
                        <h1>{{ __('Welcome') }}</h1>
                        <a href="{{ route('list') }}" class="btn btn-primary">{{ __('Continue as guest') }}</a>
                        <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Admin login') }}</a>
                        <a href="{{ route('lang.switch', ['locale' => 'lt']) }}?previousUrl={{ urlencode(Request::fullUrl()) }}" class="btn btn-primary">{{ __('Switch to Lithuanian') }}</a>
                        {{--<p>Current locale: {{ app()->getLocale() }}</p>
                        <p>Session locale: {{ session()->get('locale') }}</p>--}}
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script>
        $(function() {
            $('#conference-title').text('Conference Application');
        });
    </script>
@endsection
