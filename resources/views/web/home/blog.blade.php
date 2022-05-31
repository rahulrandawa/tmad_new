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


            <section class="latest_blog">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>LATEST UPDATES</h2>
                        </div>

                       <div class="col-md-12">
                            <div class="owl-carousel owl-theme">
                               
                       
                            @foreach($latest_blogs as $blog)
                           
                                <div class="item">
                                    <div class="row">
                                            <div class="col-md-6">
                                                <figure class="item_img">
                                                    <img src="{{asset('public/storage/'.$blog->image)}}">
                                                </figure>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="latest_textarea">
                                                    <p><button type="button" class="btn btn-success btn-sm">{{$blog->title}}</button></p>

                                                    <h5>{{strip_tags(html_entity_decode($blog->heading))}}</h5>
                                                     <p class="descriptionText">{{ strip_tags(html_entity_decode($blog->description)) }}</p>

                                                    <a href="{{ route('blog_details', $blog )}}">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                  
                             @endforeach  
                         
                             </div>
                        </div>
                    </div>

                    <div class="row trend_sec">
                        <div class="col-md-3">
                            <div class="tred_tit">
                                <h3>Trending<br> Services</h3>
                            </div>
                        </div>
                        <div class="col-md-9 tred_tit_li">
                            <marquee scrolldelay="90" scrollamount="8" onmouseover="stop()" onmouseout="start()">
                                <ul>
                                    <li><a href="https://www.blockchainappfactory.com/nft-development-services">NFT Development</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/decentralized-finance-defi-development">DeFi Development</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/polkadot-development-services">Polkadot Development</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/binance-smart-chain-development-services">Binance Smart Chain</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/blockchain-development-company">Blockchain Development</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/cryptocurrency-exchange-software">Cryptocurrency Exchange</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/real-estate-tokenization">Real estate Tokenization</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/ico-marketing-services">ICO Marketing Service</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/cryptocurrency-development">Cryptocurrency Development</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/cryptocurrency-wallet-development">Crypto Wallet Development</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/peer-to-peer-lending-software ">P2P Lending Software</a></li>
                                    <li><a href="https://www.blockchainappfactory.com/initial-dex-offering-service">IDO Development</a></li>
                                </ul>
                            </marquee>
                        </div>
                    </div>
                    <br><br>
                   
                    <div class="row">
                    @foreach($blogs as $blog)
                    <div class="col-md-4">
                            <div class="thumbnail">
                                <figure class="thumnail_img">
                                    <img src="{{asset('public/storage/'.$blog->image)}}">
                                </figure>
                                <div class="caption">
                                    <h5>{{strip_tags(html_entity_decode($blog->heading))}}</h5>
                                    <p class="descriptionText">{{ strip_tags(html_entity_decode($blog->description)) }}</p><br>
                                    <p><a href="{{ route('blog_details',$blog)}}">Read More</a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     </div>
                    
                    <br>
                     
                </div>
            </section>


   @stop