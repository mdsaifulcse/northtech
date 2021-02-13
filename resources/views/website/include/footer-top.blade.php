
@if(Session::has('subscription'))
<h5 class="text-center text-success"><i class="fa fa-check-circle-o"></i> Thank you very much for stay with us</h5>
@endif
<div class="newsletter-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-12">
                <div class="newsletter-content">
                    <h3>SUBSCRIBE</h3><h2>TO OUR NEWSLETTER</h2>
                </div>
            </div>
            <div class="col-md-7 col-sm-12">
                <div class="newsletter-form">
                    <!-- MailChimp for WordPress v4.2.4 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                        {!! Form::open(['url'=>'subscribe','method'=>'POST','class'=>'mc4wp-form mc4wp-form-131']) !!}
                        <div class="mc4wp-form-fields">
                            <div class="subscribe-form">
                                {{Form::email('email',$value=old('email'),['placeholder'=>'Enter your email address...','required'=>true])}}
                                <button type="submit">
                                    SUBSCRIBE
                                </button>
                            </div>
                        </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-widget-area">
    <div class="container">
        <div class="row">

            <div class="col-md-6 col-lg-3">
                <div id="educat_description_widget-2" class="single-footer-widget widget widget_educat_description_widget">
                    <div class="company-description-area">
                        <div class="footer-logo">
                            <a href="../educat_13.html" class="logo-footer"><img src="{{asset($info->logo)}}" alt="Footer logo"></a>
                        </div>
                        <div class="footer-brief">
                           <?php

                            $description= explode(" ",$info->description);
                            echo(implode(' ',array_slice($description, 0, 40)));
                            ?>
                            <a href="{{URL::to('/about-us.html')}}" style="color: #86bc42"> Read more</a>

                        </div>
                        <div class="social-icons">


                            {{--@if(count($socialIcons)>0)--}}
                                {{--@foreach($socialIcons as $icon)--}}
                                    {{--<a class="facebook" href="{{url($icon->url)}}" title="Facebook "><i class="{{$icon->icon_name}}"></i></a>--}}
                                {{--@endforeach--}}
                            {{--@else--}}
                                {{--<span>No Social Icon</span>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 ">
                <div id="custom_html-2" class="widget_text single-footer-widget widget widget_custom_html">
                    <h3 class="footer-widget-title">
                        GET IN TOUCH</h3>
                    <div class="textwidget custom-html-widget">
                        <span><i class="fa fa-phone"></i> {{$info->mobile_no}}</span>
                        <span><i class="fa fa-envelope"></i><a href="{{URL::to('/contact-us.html#contact-us')}}">{{$info->email}} </a></span>
                        <span><i class="fa fa-globe"></i><a href="http://northtech.io" target="_blank">www.northtech.io</a></span>
                        <span><i class="fa fa-map-marker"></i> <?php echo nl2br($info->address);?> </span>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-lg-5">
                <div id="null-instagram-feed-2" class="single-footer-widget widget null-instagram-feed">
                    <h3 class="footer-widget-title">Social Media</h3>
                    <ul class="instagram-pics instagram-size-thumbnail">

                        @if(count($socialIcons)>0)
                            @foreach($socialIcons as $icon)
                                <li class="">
                                    <a href="{{url($icon->url)}}" target="_blank"  class="">  {{$icon->name}}
                                        <span class="footer-social">
                                            <i class=" {{$icon->icon_name}} "></i>
                                        </span>
                                    </a>
                                </li>

                            @endforeach
                        @else
                            <span>No Social Icon</span>
                        @endif
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>
<!--End of Footer Widget Area-->

<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <div class="copyright-text">
                    Copyright &copy; {{date('Y')}}  <a href="http://northtech.io" target="_blank">&nbsp; North Tech &nbsp; </a> All Rights Reserved.
                    <a href="{{URL::to('/login')}}" class="pull-right">Admin</a>
                </div>
            </div>
        </div>
    </div>
</div>