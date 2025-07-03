 
 <section class="footer" id="">

 <footer id="footer" class="footer accent-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
          </a>
          <p>
         {{__('messages.communication')}}
          </p>
          <p>
            
            {{__('messages.technical')}}
          </p>
          
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-github"></i></a>
            <a href=""><i class="bi bi-twitter-x"></i></a>
          <!-- Uncomment the line below if you also wish to use an image logo -->
           <i  class="logo d-flex align-items-center">
             <img src="{{asset('abbes.png')}}"  alt="">
</i>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4> 
            {{__('messages.web')}}
          </h4>
          <ul>
            <li><a href="{{url('/')}}">{{ __('messages.Home')}}</a></li>
            <li><a href="{{url('portfolio')}}"> {{__('messages.Portfolio Manager')}}</a></li>
            <li><a href="{{url('blog')}}"> {{__('messages.Daily blog')}}</a></li>
            <li><a href="#">  {{__('messages.content')}} </a></li>
            <li><a href="{{url('about')}}">{{__('messages.Work team')}}</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>
            {{__('messages.services')}}
          </h4>
          <ul>
            <li><a href="#">
            {{__('messages.website')}}  
            </a></li>
            <li><a href="#">
                        {{__('messages.development')}}  </a></li>
            <li><a href="#">
             {{__('messages.UI')}} 
            </a></li>
            <li><a href="#">


            {{__('messages.State')}} 
            </a></li>
            <li><a href="#">
                        {{__('messages.Clean')}} 

            </a></li>
            <li><a href="#">PHP  Json

            </a></li>
            <li><a href="#">PHP  Data Mysql


            </a></li>
            <li><a href="#">Flutter  Data Firebase

            </a></li>
          </ul>
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
