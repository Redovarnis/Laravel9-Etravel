@extends('layouts.frontbase')

@section('title', 'User Registration Page ')
@section('content')
    <div id="content">
        <div class="container background-white">
            <ul class="list-inline" style="margin-top: 50px">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li>></li>
                <li><a href="">User Register</a></li>
            </ul>
        </div>
    </div>
    <div id="content">
        <div class="container background-white">
            <div class="row margin-vert-30">
                <div class="col-md-12">
                    <div id="content">
                        <div class="container background-white">
                            <div class="row margin-vert-30">
                                <!-- Register Box -->
                                <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                    <form class="signup-page" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="signup-header">
                                            <h2>Register a new account</h2>
                                            <p>Already a member? Click
                                                <a href="/loginuser">HERE </a>to login to your account.</p>
                                        </div>
                                        <x-jet-label for="name" value="{{ __('Name') }}" />
                                        <x-jet-input id="name" class="form-control margin-bottom-20 block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                        <x-jet-label for="email" value="{{ __('Email') }}" />
                                        <x-jet-input id="email" class="form-control margin-bottom-20 block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="mt-4">
                                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                                    <x-jet-input id="password" class="form-control margin-bottom-20 block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="mt-4">
                                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                                    <x-jet-input id="password_confirmation" class="form-control margin-bottom-20 block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <label class="checkbox">
                                                    <input type="checkbox">I read the
                                                    <a href="#">Terms and Conditions</a>
                                                </label>
                                                <!--
                                                @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                                    <div class="mt-4">
                                                        <x-jet-label for="terms">
                                                            <div class="flex items-center">
                                                                <x-jet-checkbox name="terms" id="terms"/>
                                                                <div class="ml-2">
                                                                    {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                                            'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                                            'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                                                    ]) !!}
                                                                </div>
                                                            </div>
                                                        </x-jet-label>
                                                    </div>
                                                @endif
                                                -->
                                            </div>
                                            <div class="flex items-center justify-end mt-4">
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                                    {{ __('Already registered?') }}
                                                </a>

                                                <x-jet-button class="btn btn-primary text-right">
                                                    {{ __('Register') }}
                                                </x-jet-button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End Register Box -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

