

<section id="contact" class="contact-us ptb-90">
    <div class="contact-us-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-heading">
                        <h3>Contact with us</h3>
                        <p>Development Center InfoGrains Software Solutions Pvt. Ltd.</p>
                    </div>
                    <div class="footer-address">

                        <p>407, Atulya IT Park, Bhawarkua Main Rd, Indore, Madhya Pradesh 452010</p>
                        <ul>
                            <li><i class="fa fa-phone"></i> <span>Phone: +91 9770477239 , +91 9713406272</span></li>
                            <li><i class="fa fa-envelope-o"></i> <span>Email : <a href="javascript:;">vipin@infograins.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <form action="{{ route('contact_form') }}" method="POST"  class="contact-us-form" id="contact-us-form">
                        @csrf
                        <h6>Reach us quickly</h6>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter name"  value="{{ old('name') }}">
                                </div>
                                @if ($errors->has('name'))
                                <span class="error">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}">
                                </div>
                                @if ($errors->has('email'))
                                <span class="error">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="contactNumber"  class="form-control" id="phone" placeholder="Your Phone" value="{{ old('contactNumber') }}">
                                </div>
                                @if ($errors->has('contactNumber'))
                                <span class="error">{{ $errors->first('contactNumber') }}</span>
                                @endif
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="company"  size="40" class="form-control" id="company" placeholder="Your Company" value="{{ old('company') }}">
                                </div>
                                @if ($errors->has('company'))
                                <span class="error">{{ $errors->first('company') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <textarea type="text" name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message" value="{{ old('message') }}"></textarea>
                                </div>
                                @if ($errors->has('message'))
                                <span class="error">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-20">
                                <button type="submit" class="btn softo-solid-btn pull-right" id="btnContactUs">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
            
            <div class="row pt-70">
                <div class="col-md-4">
                    <div class="footer-address bg-secondary">
                       <div class="address_space">
                            <h4>UK</h4>
                            <p>Apartment 4105, 25 Arena Tower Crossharbour Plaza, London E14 9YF</p>
                            <ul>
                                <li><i class="fa fa-phone"></i><span>Phone: +447459271405</span></li>
                            </ul>
                       </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-address bg-secondary">
                        <div class="address_space">
                            <h4>USA</h4>
                            <p>135, 447 Broadway, 2nd Floor, New York, NY 10013, USA</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> <span>Phone: +12025196167</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-address bg-secondary">
                        <div class="address_space">
                            <h4>UAE</h4>
                            <p>FDRK3822 Compass Building, Al Shohada Road, AL Hamra Industrial Zone-FZ, Ras Al Khaimah, United Arab Emirates</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> <span>Phone: 
                                +971585596272</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

 <!--start footer section-->
 <footer class="footer-section bg-secondary ptb-60">
    <div class="footer-wrap">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="footer-single-col text-center">
                        <img src="{{ asset('public/assets/img/logo-color.png') }}" alt="footer logo">
                        <div class="footer-social-list">
                            <ul class="list-inline">
                                <li><a href="javascript:;"> <i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:;"> <i class="fa fa-twitter"></i></a></li>
                                <li><a href="javascript:;"> <i class="fa fa-linkedin"></i></a></li>
                                <li><a href="javascript:;"> <i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:;"> <i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        <div class="copyright-text">
                            <p>&copy; copyright <a href="javascript:;">Top Mobile Apps Development</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--end footer section-->

</div>
<!--end main content inner-->
</div>
<!--end main container -->


<!--=========== all js file link ==============-->

<!-- main jQuery -->
<script src="{{ asset('public/assets/js/jquery-3.3.1.min.js') }}"></script>

<!-- bootstrap core js -->
<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>

<!-- smothscroll -->
<script src="{{ asset('public/assets/js/jquery.easeScroll.min.js') }}"></script>

<!--owl carousel-->
<script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>

<!-- scrolling nav -->
<script src="{{ asset('public/assets/js/jquery.easing.min.js') }}"></script>

<!--fullscreen background video js-->
<script src="{{ asset('public/assets/js/jquery.mb.ytplayer.min.js') }}"></script>

<!--typed js -->
<script src="{{ asset('public/assets/js/typed.min.js') }}"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js">
</script>


<!--magnific popup js-->
<script src="{{ asset('public/assets/js/magnific-popup.min.js') }}"></script>

<!-- custom script -->
<script src="{{ asset('public/assets/js/scripts.js') }}"></script>

<script src="{{ asset('public/plugins/jquery-validation/jquery.validate.min.js') }}"></script>

<script src="{{ asset('public/plugins/jquery-validation/additional-methods.min.js') }}"></script>

<script src="{{ asset('public/dist/js/validation.js') }}"></script>
<script>
    @if (session('error'))
     var msg = "{{ session('error') }}"
        toastr["error"](msg);
    @endif

    @if (session('success'))
     var msg = "{{ session('success') }}"
        toastr["success"](msg);
    @endif

</script>
<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                autoplay:true,
                responsive: {
                  0: {
                    items: 1,
                    nav: true
                  },
                  600: {
                    items: 1,
                    nav: false
                  },
                  1000: {
                    items: 1,
                    nav: true,
                    loop: false,
                    margin: 20
                  }
                }
              })
            })
    </script>
<script>
$('.carousel[data-type="multi"] .item').each(function(){
  var next = $(this).next();
  if (!next.length) {
    next = $(this).siblings(':first');
  }
  next.children(':first-child').clone().appendTo($(this));

  for (var i=0;i<4;i++) {
    next=next.next();
    if (!next.length) {
    	next = $(this).siblings(':first');
  	}
    
    next.children(':first-child').clone().appendTo($(this));
  }
});
</script>
</body>

<!-- Mirrored from cssmaterial.com/apetech/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Sep 2021 07:23:43 GMT -->

</html>
