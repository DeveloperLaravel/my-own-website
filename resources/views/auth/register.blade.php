<x-layout>
    @push('style')
<link rel="stylesheet" href="{{asset('css.css')}}">
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    @endpush
    <section>
<div class="wrapper">
        <div class="logo">
          <x-image  src="{{ asset('assets/vendor/images/logo/icons8-libya-48.png') }}" class="img-fluid" alt="شعار الموقع" />
        </div>
        <div class="text-center mt-4 name">
            {{__('messages.up')}}
        </div>
        <x-form method="POST" action="{{ route('register') }}" class="p-3 mt-3">
    <x-input
        type="text"
        name="name"
        icon="fas fa-user"
        placeholder="{{ __('messages.Username') }}"
        required
        autocomplete="name"
    />
    @error('name')
        <div class="invalid-feedback d-block mb-4">
            {{ $message }}
        </div>
    @enderror
    <x-input
        type="email"
        name="email"
        icon="far fa-envelope"
        placeholder="{{ __('messages.email') }}"
        required
        autocomplete="email"
    />
     @error('email')
        <div class="invalid-feedback d-block mb-4">
            {{ $message }}
        </div>
    @enderror

    <x-input
        type="password"
        name="password"
        icon="fas fa-lock"
        placeholder="{{ __('messages.password') }}"
        required
        autocomplete="new-password"
    />
      @error('password')
        <div class="invalid-feedback d-block  mb-4 ">
            {{ $message }}
        </div>
    @enderror

    <x-input
        type="password"
        name="password_confirmation"
        icon="fas fa-lock"
        placeholder="{{ __('messages.Confirm') }}"
        required
        autocomplete="new-password"
    />
     @error('password_confirmation')
        <div class="invalid-feedback d-block  mb-4">
            {{ $message }}
        </div>
    @enderror
    <x-button>
        {{ __('messages.register') }}
    </x-button>
</x-form>
    </div>
</section>

</x-layout>