<x-layout>
    @push('style')
<link rel="stylesheet" href="{{asset('css.css')}}">
<i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    @endpush
    <section>
<div class="wrapper">
        <div class="logo">
            <img src="{{asset('logo/icons8-libya-48.png')}}" alt="">
        </div>
        <div class="text-center mt-4 name">
            {{__('messages.up')}}
        </div>
        <form class="p-3 mt-3" method="POST" action="{{ route('register') }}">
                    @csrf
            <div class="form-field d-flex align-items-center">
                <span class="fa-solid fa-user p-2"></span>
                <input type="text" name="name" id="userName" placeholder="{{__('messages.Username')}}" required>
            </div>
               <div class="form-field d-flex align-items-center">
                <span class="fa-solid fa-envelope p-2"></span>
                <input type="text" name="email" id="email" placeholder="{{__('messages.email')}}" required>
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key p-2"></span>
                <input type="password" name="password" id="pwd" placeholder="{{__('messages.password')}}" required>
            </div>
             <div class="form-field d-flex align-items-center">
                <span class="fas fa-key p-2"></span>
                <input type="password" name="Confirm password" id="pwd" placeholder="{{__('messages.Confirm')}}">
            </div>
            <button type="submit" class="btn mt-3">{{__('messages.save')}}</button>
        </form>
    </div>
</section>

</x-layout>