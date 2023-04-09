@extends('layouts.app')
@section('content')
    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
        <div class="w-50">
            <h1 class="display-2 text-center text-white">Conference Application</h1>
            <div class="mt-3 text-center">
                <div class="form-group">
                    <a href="{{ route('list') }}" class="btn btn-primary">{{ __('Continue as guest') }}</a>
                    <a href="{{ route('login') }}" class="btn btn-primary">{{ __('Admin login') }}</a>
                </div>
            </div>
        </div>
    </div>
@endsection
