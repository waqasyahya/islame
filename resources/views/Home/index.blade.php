@extends('layouts.app-public')

@section('title') Home @endsection



@section('content')



        <div class="row px-5 pt-5 text-center">
            <div class="col-lg-6 px-5 pt-5 my-auto">
                <h1>
                    Buy, rent, or sell your property easily
                </h1>
                <p>A great platform to buy, sell, or even rent your properties without any commisions.</p>
                <div class="row px-5 text-center">
                    <div class="col-sm-6 ">
                        <p style="color:#EC1B43;font-size:40px"><b>50k+</b></p>
                        <p>renters</p>
                    </div>
                    <div class="col-sm-6">
                        <p style="color:#EC1B43;font-size:40px"> <b>10k+</b></p>
                        <p>properties</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-6   pt-5">
                <img src="/theme/img/Image1.png" style="width:90%" alt="">
            </div>
        </div>
        <div class="row px-5  text-center ">
            <div class="col-lg-6  text-center order-lg-1 order-2">
                <img src="/theme/img/Mask Group.png" style="border-radius:15px;width:90%" alt="">
            </div>
            <div class="col-lg-6  order-lg-2 order-1 my-auto">
                <h1 style="">
                    Buy, rent, or sell your property easily
                </h1>
                <p>A great platform to buy, sell, or even rent your properties without any commisions.</p>
                <div class="row px-5 mx-5">
                    <div class="col-lg-6">
                        <p style="color:#EC1B43;font-size:40px"><b>50k+</b></p>
                        <p>renters</p>
                    </div>
                    <div class="col-lg-6">
                        <p style="color:#EC1B43;font-size:40px"> <b>10k+</b></p>
                        <p>properties</p>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h2>How To Start Bidding</h2>
                <p>The bidding process has never been easier and more transparent.</p>
            </div>
            <div class="col-12">
                <section class="section section-lg bg-default">
                    <div class="container">
                        <div class="row row-30 text-center">
                            <div class="col-lg-3">
                                <!-- Box Modern-->
                                <article class="box-modern"><img src="/theme/img/f1.png" alt="">
                                    <div class="box-modern-main">
                                        <p class="box-modern-title"> <b>Start Exploring</b></h4>
                                        <p>You can search for properties at any time – you can start right now!
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <!-- Box Modern-->
                                <article class="box-modern"><img src="/theme/img/f2.png" alt=""></span>
                                    <div class="box-modern-main">
                                        <p class="box-modern-title"> <b>Get Registered</b></h4>
                                        <p>When you find the property you want, complete the registration process.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <!-- Box Modern-->
                                <article class="box-modern"><img src="/theme/img/f3.png" alt="">
                                    <div class="box-modern-main">
                                        <p class="box-modern-title"><b>You're Approved!</b></h4>
                                        <p>The selling agent will notify you once you're approved – now you're ready to go.</p>
                                    </div>
                                </article>
                            </div>
                            <div class="col-lg-3">
                                <!-- Box Modern-->
                                <article class="box-modern"><img src="/theme/img/f4.png" alt="">
                                    <div class="box-modern-main">
                                        <p class="box-modern-title"><b>Offer 24/7</b></h4>
                                        <p>You can now make offers on the property you want –whenever you want.</p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

        <div class="row px-5">
            <div class="col-12">
                <h2>Featured Locations</h2>
                <p>Some of our picked properties</p>
            </div>
            <style>
            .table tr {
                background: #F4F4F4;
                border-bottom: 1px solid #DBDBDB;
            }
            </style>
            <div class="col-12">
                <div class=" ">
                    <div class="row" style="background:#fff">
                        <div class="col-2">Place</div>
                        <div class="col-6">Selling</div>
                        <div class="col-1"> Price</div>
                        <div class="col-2">Location</div>
                    </div>
                    @foreach($property_list as $i)
                    <div class="row ">
                        <div class="col-lg-2 col-12 "><img src="{{$i->gallery[0]->path}}" alt="" style="height:150px;width:100%;border-radius:5px"></div>
                        <div class="col-lg-6 col-12">
                            <p style="color:#EC1B43;font-size:18px"> <b>{{$i->title}}</b></p>
                            <p><b>Transaction(s): </b> 820 <b>Quantity: </b>19</p>
                        </div>
                        <div class="col-lg-1 col-6 ">
                            <p style="color:#1E2329"><b>Price: </b> <b>{{$i->price}} </b></p>
                        </div>
                        <div class="col-lg-1 col-6">
                            <p><b>Location: </b>{{$i->location->title}}</p>
                        </div>
                        <div class="col-lg-2 col-12 py-3">
                            <button class="btn btn-md btn-primary btn-block" style="width:100%">BUY</button>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-3 text-center ">
                <img src="/theme/img/email.png" alt="">
                <p><b>Email us</b></p>
                <p>Email us for general queries, including marketing and partnership opportunities.</p>
                <p>hello@helpcenter.com</p>
            </div>

            <div class="col-lg-3 text-center">
                <img src="/theme/img/call.png" alt="">
                <p><b>Call us</b></p>
                <p>Call us to speak to a member of our team. We are always happy to help.</p>
                <p>+1 (646) 786-5060</p>
            </div>
            <div class="col-lg-3"></div>

        </div>

        <div class="row " style="height:462px;background-color:#EC1B43">
            <div class="col-6 text-center pt-5 mx-auto">
                <h2 style="color:#fff" class="pt-5">Are you a landlord?</h2>
                <p style="color:#D3D5DA">Discover ways to increase your home's value and get listed. No Spam.</p>
                <div class="row bg-light  py-3" style="    background: #fff;align-items: center;padding:10px;border-radius: 5px;">
                    <div class="col-lg-9">
                        <input type="text" placeholder="Enter your eamil" style="    border: none;padding: 15px;font-size:18px; " />
                    </div>
                    <div class="col-lg-3">
                        <input type="submit" style="background: #EC1B43;border: none;color:#fff;width:100px;border-radius: 5px;padding: 10px;font-size:18px">
                    </div>
                </div>
                <p style="color:#D3D5DA">Join 10,000+ other landlords in our estatery community.</p>


            </div>
        </div>
@endsection
        