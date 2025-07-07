<x-layout>
    @push('style')
        <link rel="stylesheet" href="{{ asset('css.css') }}">
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    @endpush

    <section>
        <div class="wrapper">
            <div class="logo">
          <x-image  src="{{ asset('assets/vendor/images/logo/icons8-libya-48.png') }}" class="img-fluid" alt="شعار الموقع" />
            </div>

            <div class="text-center mt-4 name">
                {{ __('messages.Login') }}
            </div>

            <!-- {{-- ✅ عرض أخطاء التحقق --}} -->
        @if ($errors->has('login_error'))
            <div class="alert alert-danger text-center mb-3">
        {{ $errors->first('login_error') }}
    </div>
@endif

          
            <!-- {{-- ✅ نموذج تسجيل الدخول --}} -->
                <x-form method="POST" action="{{ route('login') }}" class="p-3 mt-3">
                    <x-input
                    type="email"
                    name="email"
                    icon="far fa-user"
                    placeholder="{{ __('messages.email') }}"
                    required
                    autocomplete="email"
                />
          

                 <x-input
                    type="password"
                    name="password"
                    icon="fas fa-key"
                    placeholder="{{ __('messages.password') }}"
                    required
                    autocomplete="current-password"
                />
  
                <x-button>
                    {{ __('messages.save') }}
                </x-button>
            </x-form>
                <div class="text-center fs-6 mt-3">
                <x-link  href="#" >{{ __('messages.Forgotpassword') }} </x-link>
                {{ __('messages.or') }} <x-link  href="{{ route('register.index') }}" >{{ __('messages.Signup') }}</x-link>
            </div>

            
        </div>
    </section>
</x-layout>
