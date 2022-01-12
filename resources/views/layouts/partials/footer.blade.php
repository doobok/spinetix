<footer id="footer" class="relative z-10 footer-area bg-gray-100 pt-120">
    <div class="footer-bg" style="background-image: url(/assets/wave-bottom.svg);"></div>
    <div class="container">
        <div v-animate="'fade-up'" class="px-6 pt-10 pb-20 mb-12 bg-white rounded-lg shadow-xl md:px-12 subscribe-area wow fadeIn" data-wow-duration="1s" data-wow-delay="0.5s">
            <div class="row">
                <div class="w-full lg:w-1/2">
                    <div class="lg:mt-12 subscribe-content text-black">
                        <h2 class="text-2xl font-bold sm:text-4xl subscribe-title">
                            Subscribe Our Newsletter
                            <span class="block font-normal">get reguler updates</span>
                        </h2>
                    </div>
                </div>
                <div class="w-full lg:w-1/2">
                    <div class="mt-12 subscribe-form">
                        <form action="#" class="relative focus:outline-none">
                            <input type="email" placeholder="Enter eamil" class="w-full py-4 pl-6 pr-40 duration-300 border-2 rounded focus:border-theme-color focus:outline-none bg-gray-50">
                            <button class="main-btn gradient-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- subscribe area -->
        <div class="footer-widget pb-120">
            <div class="row">
                <div class="w-4/5 md:w-3/5 lg:w-2/6">
                    <div class="mt-12 footer-about wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                        <a href="/" v-animate="'fade-l'" class="text-2xl md:text-3xl text-white font-bold mr-4 mb-6 navbar-brand flex flex-nowrap">
                            <svg viewBox="0 0 166 178.225" class="h-8 md:h-10 mr-2" xmlns="http://www.w3.org/2000/svg" version="1.0">
                                <path d="M30.8 1.4c-7 2.5-8.9 4.3-8.4 7.9.3 1.8.8 5.9 1.2 9.2 1.2 12.1 8 29.1 15.8 39.9 4.6 6.5 11.9 13.9 18.2 18.7 16.8 12.7 50.5 21.1 90.7 22.6l17.7.6V20.4l-2.6-5.2c-1.4-2.9-4.4-6.7-6.6-8.6C149.1-.1 149.6 0 89.1 0 46.2.1 33.7.4 30.8 1.4zM0 84.5v44.6l3.1-1.8c8.1-4.8 17.5-14.3 22.4-22.7 3.6-6.2 5.8-15.9 5-22.1-1.3-10.8-10-24.3-23-35.9L0 39.8v44.7zm90.5 31.1c-28.5 2.1-54.8 10.5-79.7 25.3L0 147.3v5.3c0 10.5 8.1 20.6 19.2 23.9 7.7 2.3 119.9 2.3 127.6 0 7.1-2.1 13.1-7 16.4-13.4 2.8-5.4 2.8-5.5 2.6-22.5l-.3-17.1-12.5-2.2c-24.9-4.3-49.9-6.6-62.5-5.7z" fill="currentColor"/>
                            </svg>
                            SpinetiX
                        </a>
                        <p v-animate="'fade-l'" class="pb-10 pr-10 leading-snug text-white">Lorem ipsum dolor sit amet consetetur sadipscing elitr, sederfs diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam.</p>
                        <ul class="flex footer-social">
                            <li><a href="#"><i class="lni lni-facebook-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-twitter-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-instagram-filled"></i></a></li>
                            <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                        </ul>
                    </div> <!-- footer about -->
                </div>
                <div class="w-4/5 sm:w-2/3 md:w-3/5 lg:w-2/6">
                    <div class="row">
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                            <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                                <div class="footer-title">
                                    <h4 class="mb-8 text-2xl font-bold text-white">{{__('site.quick-links')}}</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="{{route('page', 'mediaplayers')}}">{{__('site.mediaplayers')}}</a></li>
                                    <li><a href="{{route('page', 'software')}}">{{__('site.software')}}</a></li>
                                  </ul>
                            </div> <!-- footer wrapper -->
                        </div>
                        <div class="w-full sm:w-1/2 md:w-1/2 lg:w-1/2">
                            <div class="mt-12 link-wrapper wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                                <div class="footer-title">
                                    <h4 class="mb-8 text-2xl font-bold text-white">{{__('site.resources')}}</h4>
                                </div>
                                <ul class="link">
                                    <li><a href="#">Home</a></li>
                                </ul>
                            </div> <!-- footer wrapper -->
                        </div>
                    </div>
                </div>
                <div class="w-4/5 sm:w-1/3 md:w-2/5 lg:w-2/6">
                    <div class="mt-12 footer-contact wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                        <div class="footer-title">
                            <h4 class="mb-8 text-2xl font-bold text-white">{{__('site.contacts')}}</h4>
                        </div>
                        <ul class="contact">
                            <li><a href="tel:+38{{preg_replace("/[^0-9]/", '', setting('site.phone'))}}">{{setting('site.phone')}}</a></li>
                            <li>info@gmail.com</li>
                            <li>123 Stree New York City , United <br> States Of America 750.</li>
                        </ul>
                    </div> <!-- footer contact -->
                </div>
            </div> <!-- row -->
        </div> <!-- footer widget -->
        <div class="py-8 border-t border-gray-200 footer-copyright">
            <p class="text-white text-sm text-center sm:text-left">© 2021-{{date("Y")}} Copyright —
                {{config('app.name')}}
            </p>
        </div> <!-- footer copyright -->
    </div> <!-- container -->
    <div id="particles-2" class="particles"></div>
</footer>

<a href="#" v-scroll-to="'#header'" class="back-to-top opacity-40 text-white">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor"><path d="M0 16.67l2.829 2.83 9.175-9.339 9.167 9.339 2.829-2.83-11.996-12.17z"/></svg>
</a>
