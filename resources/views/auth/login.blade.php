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
            {{__('messages.Login')}}
                 @if ($errors->any())
    <div style="color:red">@foreach ($errors->all() as $e)<p>{{ $e }}</p>@endforeach</div>
@endif
        </div>
        <form method="post" action="{{route('login')}}" class="p-3 mt-3">
                    @csrf
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user p-2"></span>
                <input type="text" name="email" id="userName" placeholder="{{__('messages.email')}}">
           
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key p-2"></span>
                <input type="password" name="password" id="pwd" placeholder="{{__('messages.password')}}">
            </div>
            <button type="submit" class="btn mt-3">{{__('messages.save')}}</button>
        </form>
        <div class="text-center fs-6">
            <a href="#">{{__('messages.Forgotpassword')}}</a>{{__('messages.or')}}<a href="{{route('register.index')}}">{{__('messages.Signup')}}</a>
        </div>
         @if(session('errors'))
      <div>{{ session('errors')->first() }}</div>
    @endif
    </div>
    </section>

</x-layout>