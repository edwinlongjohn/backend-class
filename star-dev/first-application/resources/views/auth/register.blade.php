<x-guest-layout>

    <section class="line-bg bg-white">
        <div class="newsletter-block border-bottom">
            <div class="container">
                <div class="row gy-5 align-items-center justify-content-center text-center text-md-start">
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-10">
                        <div class="pe-0 pe-xl-4">
                            <h2 class="mb-3 lh-sm">Register Your account</h2>
                            <p class="mb-0">already have an account <a href="{{route('login')}}">Login</a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-6">
                        <div class="ps-0 ps-xl-4">
                            <div id="mc_embed_signup">
                                <form action="{{route('register')}}" method="post" > @csrf
                                    <div id="mc_embed_signup_scroll" class="input-group">
                                        @foreach ($errors->all() as $error)
                                            <p class="text-danger">{{$error}}</p>
                                        @endforeach
                                        @foreach ($errors->all() as $error)
                                            <p class="text-danger alert alert-danger">{{$error}}</p>
                                        @endforeach
                                        <input type="text" name="name"   class="form-control w-100"
                                            placeholder="enter user name" aria-label="Name" required>
                                        <input type="email" name="email"  class="form-control w-100" placeholder="Email"
                                            aria-label="Name" required>

                                        <input type="password" name="password" class="form-control w-100 required email"
                                            placeholder="enter your password" aria-label="Subscription"
                                            autocomplete="new-email" >
                                        <input type="password" name="password_confirmation"
                                            class="form-control w-100  email" placeholder="confirm password"
                                            aria-label="Subscription" autocomplete="new-email">


                                        <div class="input-group-append w-100">
                                            <button type="submit" name="subscribe" id="mc-embedded-subscribe"
                                                class="input-group-text w-100 mb-0" aria-label="Subscription Button">
                                                Register Now <i class="ti ti-arrow-up-right ms-auto"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
            autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
            autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <!-- Password -->
    <div class="mt-4">
        <x-input-label for="password" :value="__('Password')" />

        <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
            autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

        <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
            required autocomplete="new-password" />

        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
            href="{{ route('login') }}">
            {{ __('Already registered?') }}
        </a>

        <x-primary-button class="ms-4">
            {{ __('Register') }}
        </x-primary-button>
    </div>
    </form> --}}
</x-guest-layout>
