 
 <section class="footer" id="">

 <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
            <x-link href="https://www.facebook.com/basbwhlyqh/" class="logo d-flex align-items-center"></x-link>
          <p>
         {{__('messages.communication')}}
          </p>
          <p>
            
            {{__('messages.technical')}}
          </p>
          
          <div class="social-links d-flex mt-4">
            <x-link href="https://www.facebook.com/basbwhlyqh/"><i class="bi bi-facebook"></i></x-link>
            <x-link href=""><i class="bi bi-instagram"></i></x-link>
            <x-link href="https://github.com/DeveloperLaravel"><i class="bi bi-github"></i></x-link>
            <x-link href=""><i class="bi bi-twitter"></i></x-link>
          <!-- Uncomment the line below if you also wish to use an image logo -->
           <i  class="logo d-flex align-items-center">
            <x-image src="{{asset('assets/vendor/images/abbes.png')}}" alt="شعار الموقع" class="img-fluid" />

</i>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4> 
            {{__('messages.web')}}
          </h4>
            <x-ul>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/">{{ __('messages.Home')}}</x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.Portfolio Manager')}}</x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.Daily blog')}} </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.content')}} </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/">{{__('messages.Work team')}} </x-link></li>
            </x-ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>
            {{__('messages.services')}}
          </h4>
            <x-ul>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.website')}} </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.development')}} </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.UI')}} </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.State')}} </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> {{__('messages.Clean')}} </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> PHP  Json </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> PHP  Data Mysql </x-link></li>
              <li><x-link href="https://www.facebook.com/basbwhlyqh/"> Flutter  Data Firebase</x-link></li>
            </x-ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>
          {{__('messages.Contact')}}  
        </h4>
          <p>
            {{__('messages.Libya')}}
          </p>
          <p>            {{__('messages.The city')}}
 :             {{__('messages.Gallo')}}
</p>
          <p>
             {{__('messages.address')}} : 
 {{__('messages.Behind')}}          </p>
          <p class="mt-4"><strong>{{__('messages.phone')}} :</strong> <span>4890054 93 218+</span></p>
          <p><strong>
   {{__('messages.Email')}}            :</strong> <span> hnarfr20063@example.com</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Impact</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

 </section>
