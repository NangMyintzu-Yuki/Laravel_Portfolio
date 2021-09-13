{{--  <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

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

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>  --}}


<x-guest-layout>
    <style>
        .container-fluid{
            height: 100vh;
            width: 100%;
            background-color:#171923;
            display: block;
            padding-top: 10%;
            align-items: center;
            justify-content: center;
        }
        .card{
            border: 1px solid #ff2d20;
        }
        .card-header{
            background-color: #13151E;
            font-weight: 700;
            color: #ff2d20;
        }
        .card-body{
            background-color:rgb(53, 52, 52);
        }
        .card-body label{
            font-size: 16px;
            padding-top: 10px;
            float: right;
            color: #13151E;
        }
        .card-body input:focus{
            background-color: #171923cc;
            color: white;
        }
        .card-body ::placeholder{
            font-size: 14px;
        }
        .card-body input{
            background-color: #13151f;
            color: #ff2d20;
        }
        .btn-sign{
            float: right;
            background-color: #13151E;
            font-size: 14px;
            padding: 5px 20px;
            color: white;
            border: 1px solid #13151E;
        }
        .btn-sign:hover{
            color: white;
        }
        @media only screen and (max-width: 909px) {
            .card{
                background-color: #13151f;
                color: #ff2d20;
            }
            .card-body{
                padding: 20px 0px;
            }
            .card-body label{
                font-size: 16px;
                padding-top: 10px;
                float: left;
                margin-bottom: 10px;
                color: #13151E;
            }
        }
        @media only screen and (max-width: 767px) {
            .card-body label{
                font-size: 16px;
                padding-top: 10px;
                float: left;
                margin-bottom: 10px;
                color: #13151E;
            }

        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 mx-auto col-lg-6 col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h5 class="px-5">Register</h5>
                    </div>
                    <div class="card-body">
                        <x-jet-validation-errors class="mb-4" />
                        <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3 px-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="name">Name:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="name" class="form-control" placeholder="Enter your name:" :value="name" required autofocus autocomplete="name">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 px-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="email">Email:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="email" class="form-control" placeholder="Enter your email:" name="email" :value="email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 px-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="password">Password:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" name="password" class="form-control" placeholder="********" required autocomplete="current-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 px-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="confirm_password" style="font-size: 14px">Confirm Password:</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="password_confirmation" placeholder="Confirm Password:" required autocomplete="new-password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3 px-5">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for=""></label>
                                </div>
                                <div class="col-md-7">
                                    <input type="submit" class="btn btn-sign" value="Register" name="register">
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
