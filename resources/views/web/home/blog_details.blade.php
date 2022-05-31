@extends('web.layouts.default')
@section('content')

<!--start hero section-->
            <section id="hero" class="section-lg section-hero section-circle">
                <!--background circle shape-->
                <div class="shape shape-style-1 shape-primary">
                    <span class="circle-150"></span>
                    <span class="circle-50"></span>
                    <span class="circle-50"></span>
                    <span class="circle-75"></span>
                    <span class="circle-100"></span>
                    <span class="circle-75"></span>
                    <span class="circle-50"></span>
                    <span class="circle-100"></span>
                    <span class="circle-50"></span>
                    <span class="circle-100"></span>
                </div>
                <!--background circle shape-->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading_blog">
                            <h1>Blog</h1>
                        </div>
                    </div>
                </div>
                <div class="section-shape">
                    <img src="{{url('public/assets/img/waves-shape.svg')}}" alt="shape image">
                </div>
            </section>
            <!--end hero section-->
           <section class="blog-detail">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail">
                                <figure class="details_img">
                                    <img src="{{asset('public/storage/'.$blog->image)}}">
                                </figure>
                                <div class="caption">
                                <h5>{{strip_tags(html_entity_decode($blog->heading))}}</h5>
                                <p>{{ strip_tags(html_entity_decode($blog->description)) }}</p><br>
                                 </div>
                            </div>
                        </div>
                     </div>
                 </div>
            </section>

@stop