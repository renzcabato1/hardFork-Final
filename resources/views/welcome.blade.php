@extends('layouts.app')
@section('header')
<!-- Header section -->
<header class="header-section clearfix">
    <div class="container-fluid">
        <a href="index.html" class="site-logo">
            <img src="{{asset('img/hardfork.png')}}" alt="">
        </a>
        <div class="responsive-bar"><i class="fa fa-bars"></i></div>
        <a href="" class="user"><i class="fa fa-user"></i></a>
     
      
        <span class="site-btn">
            <a href='{{url('login')}}' class='text-white '>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                </svg>
            </a>
            <a href='{{url('login')}}' class='ml-3 text-white'>
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                </svg>
            </a>
        </span>
        <i class="bi bi-wallet"></i>
        <nav class="main-menu">
            <ul class="menu-list">
                <li><a href="">Explore</a></li>
                <li><a href="">Marketplace</a></li>
                <li><a href="">Following</a></li>
                <li><a href="">Activity</a></li>
                <li><a href="">How It Works</a></li>
                <li><a href="">Community</a></li>
            </ul>
        </nav>
    </div>
</header>
@endsection
@section('content')



<!-- Header section end -->


<!-- Hero section -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-md-12 hero-text text-center mb-">
                <span class='text-white' style='font-size:129px;'>Collect Whiskey</span><br>
                <span class='text-white' style='font-size:27px;'>Buy and sell Whiskey NFTs</span>
                
                
            </div>
            <div class="col-md-12 text-center">
                <img class="card-img w-100 h-100" src="{{asset('img/images.png')}}" style='height:100%'   alt="Card image">
                
            </div>
        </div>
    </div>
</section>
<!-- Hero section end -->



<!-- About section -->
<section class="about-section spad">
    <div class="container text-white">
        <div class="row">
            <div class="col-lg-12 offset-lg-12">
                <strong><span class='text-white' style='font-size:46px;'> Live Auctions</span></strong>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-4">
                <figure class="figure">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="{{asset('img/product2.png')}}" alt="Card image">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class="mt-auto text-center w-100 radius" style="font-size:27px;background-color: rgba(66, 66, 66, 100);">Whiskey</div>
                            <div class='row m-0' style='background-color: rgba(66, 66, 66, 100);'>
                                <div class="col-lg-3 col-3 "></div>
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="hours"></span></b> <span class='text-dark rounded' style='font-size:10px;'>hr</span> </div>
                               
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="minutes"></span></b> <span class='text-dark rounded' style='font-size:10px;'>mi</span> </div>
                              
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="seconds"></span> </b><span class='text-dark rounded' style='font-size:10px;'>sec</span>  </div>
                                <div class="col-lg-3 col-3 "></div>
                            </div>
                            <div class='row m-0' style='background-color: rgba(66, 66, 66, 100);'>
                                <div class="col-lg-12 col-12 text-center " style="font-size:27px;">Current Bid : $ 0.00</div>
                            </div>
                            
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-lg-4 col-4">
                <figure class="figure">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="{{asset('img/product2.png')}}" alt="Card image">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class="mt-auto text-center w-100 radius" style="font-size:27px;background-color: rgba(66, 66, 66, 100);">Whiskey</div>
                            <div class='row m-0' style='background-color: rgba(66, 66, 66, 100);'>
                                <div class="col-lg-3 col-3 "></div>
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="hours1"></span></b> <span class='text-dark rounded' style='font-size:10px;'>hr</span> </div>
                               
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="minutes1"></span></b> <span class='text-dark rounded' style='font-size:10px;'>mi</span> </div>
                              
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="seconds1"></span></b> <span class='text-dark rounded' style='font-size:10px;'>sec</span>  </div>
                                <div class="col-lg-3 col-3 "></div>
                            </div>
                            <div class='row m-0' style='background-color: rgba(66, 66, 66, 100);'>
                                <div class="col-lg-12 col-12 text-center " style="font-size:27px;">Current Bid : $ 0.00</div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-lg-4 col-4">
                <figure class="figure">
                    <div class="card bg-dark text-white">
                        <img class="card-img" src="{{asset('img/product2.png')}}" alt="Card image">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class="mt-auto text-center w-100 radius" style="font-size:27px;background-color: rgba(66, 66, 66, 100);">Whiskey</div>
                            <div class='row m-0' style='background-color: rgba(66, 66, 66, 100);'>
                                <div class="col-lg-3 col-3 "></div>
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="hours2"></span></b> <span class='text-dark rounded' style='font-size:10px;'>hr</span> </div>
                               
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="minutes2"></span></b> <span class='text-dark rounded' style='font-size:10px;'>mi</span> </div>
                              
                                <div class="col-lg-2 col-2 text-center bg-white text-dark rounded m-1 p-0"><b><span class='bg-white text-dark rounded' style='font-size:24px;' id="seconds2"></span></b> <span class='text-dark rounded' style='font-size:10px;'>sec</span>  </div>
                                <div class="col-lg-3 col-3 "></div>
                            </div>
                            <div class='row m-0' style='background-color: rgba(66, 66, 66, 100);'>
                                <div class="col-lg-12 col-12 text-center " style="font-size:27px;">Current Bid : $ 0.00</div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
       
            
        </div>
    </div>
</section>
<section class="about-section spad">
    <div class="container text-white">
        <div class="row mb-5">
            <div class="col-lg-12 offset-lg-12">
                <strong><span class='text-white' style='font-size:46px;'> Top collections over last 7 days</span></strong>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-4">
                <figure class="figure">
                    <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="{{asset('img/product2.png')}}" alt="Card image">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-3 col-3" style="font-size:27px;"><img src="{{asset('img/renz.png')}}" class="rounded-circle" style="width: 150px;" alt="Avatar" /></div>
                                <div class="col-lg-6 col-6" style="font-size:15px;">Renz Cabato <svg class='text-primary' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                  </svg>
                                <br>
                                <small>1 in the stock</small>
                                </div>
                                <div class="col-lg-3 col-3" style="font-size:10px;">Highest Bid<br>
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH</div>
                            </div>
                            
                            
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-lg-4 col-4 border-right">
                <figure class="figure">
                    <div class="card bg-dark text-white border-0">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                    <div class="col-lg-5 col-5 " style="font-size:27px;"><img src="{{asset('img/product2.png')}}" class="border-rounded" style="width: 150px;border-radius: 20px;" alt="Avatar" />
                                    </div>
                                        <div class="col-lg-7 col-7" style="font-size:15px;"> 
                                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                                <div class="col-lg-12 col-12 text-left pb-2" > Whiskey</div>
                                            </div>
                                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                                <div class="col-lg-6 col-6 text-left" ><img src="{{asset('img/renz.png')}}" class="rounded-circle" style="width: 300px;" alt="Avatar" /></div>
                                            
                                                <div class="col-lg-6 col-6  center " style="font-size:10px;text-align: center;">
                                                    
                                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH
                                                </div>
                                            </div>
                                    </div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                    <div class="col-lg-5 col-5 " style="font-size:27px;"><img src="{{asset('img/product2.png')}}" class="border-rounded" style="width: 150px;border-radius: 20px;" alt="Avatar" />
                                    </div>
                                        <div class="col-lg-7 col-7" style="font-size:15px;"> 
                                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                                <div class="col-lg-12 col-12 text-left pb-2" > Whiskey</div>
                                            </div>
                                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                                <div class="col-lg-6 col-6 text-left" ><img src="{{asset('img/renz.png')}}" class="rounded-circle" style="width: 300px;" alt="Avatar" /></div>
                                            
                                                <div class="col-lg-6 col-6  center " style="font-size:10px;text-align: center;">
                                                    
                                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH
                                                </div>
                                            </div>
                                    </div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                    <div class="col-lg-5 col-5 " style="font-size:27px;"><img src="{{asset('img/product2.png')}}" class="border-rounded" style="width: 150px;border-radius: 20px;" alt="Avatar" />
                                    </div>
                                        <div class="col-lg-7 col-7" style="font-size:15px;"> 
                                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                                <div class="col-lg-12 col-12 text-left pb-2" > Whiskey</div>
                                            </div>
                                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                                <div class="col-lg-6 col-6 text-left" ><img src="{{asset('img/renz.png')}}" class="rounded-circle" style="width: 300px;" alt="Avatar" /></div>
                                            
                                                <div class="col-lg-6 col-6  center " style="font-size:10px;text-align: center;">
                                                    
                                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH
                                                </div>
                                            </div>
                                    </div>
                            </div>
                         
                            
                            
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-lg-4 col-4">
                <figure class="figure">
                    <div class="card bg-dark text-white border-0">
                        <div class=" d-flex flex-column" style='background-color: rgba(0, 0, 0, 100);' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class="row mb-2">
                                <div class="col-lg-12 offset-lg-12">
                                    <strong><span class='text-white' style='font-size:20px;'> Top collections over</span></strong>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-lg-12 offset-lg-12">
                                    <strong><span class='text-white' style='font-size:16px;'> Last 7 days</span></strong>
                                </div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-2 col-2 align-middle center" > <span class='align-middle center'>1.</span></div>
                              
                                <div class="col-lg-4 col-4" style="font-size:27px;"><img src="{{asset('img/barrel.png')}}" class="rounded" style="width: 100px;" alt="Avatar" /></div>
                              
                                <div class="col-lg-6 col-6" style="font-size:10px;">Highest Bid<br>
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH</div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-2 col-2 center" >2.</div>
                              
                                <div class="col-lg-4 col-4" style="font-size:27px;"><img src="{{asset('img/barrel.png')}}" class="rounded" style="width: 100px;" alt="Avatar" /></div>
                              
                                <div class="col-lg-6 col-6" style="font-size:10px;">Highest Bid<br>
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH</div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-2 col-2 center" > 3.</div>
                              
                                <div class="col-lg-4 col-4" style="font-size:27px;"><img src="{{asset('img/barrel.png')}}" class="rounded" style="width: 100px;" alt="Avatar" /></div>
                              
                                <div class="col-lg-6 col-6" style="font-size:10px;">Highest Bid<br>
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH</div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-2 col-2 center" >4.</div>
                              
                                <div class="col-lg-4 col-4" style="font-size:27px;"><img src="{{asset('img/barrel.png')}}" class="rounded" style="width: 100px;" alt="Avatar" /></div>
                              
                                <div class="col-lg-6 col-6" style="font-size:10px;">Highest Bid<br>
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH</div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-2 col-2 center" >5.</div>
                              
                                <div class="col-lg-4 col-4" style="font-size:27px;"><img src="{{asset('img/barrel.png')}}" class="rounded" style="width: 100px;" alt="Avatar" /></div>
                              
                                <div class="col-lg-6 col-6" style="font-size:10px;">Highest Bid<br>
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH</div>
                            </div>
                            <div class='row m-0 pb-2' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-2 col-2 center" >6.</div>
                              
                                <div class="col-lg-4 col-4" style="font-size:27px;"><img src="{{asset('img/barrel.png')}}" class="rounded" style="width: 100px;" alt="Avatar" /></div>
                              
                                <div class="col-lg-6 col-6" style="font-size:10px;">Highest Bid<br>
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 10px;" /> &nbsp; 0.25 ETH</div>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
            
       
            
        </div>
    </div>
</section>
<section class="about-section spad">
    <div class="container text-white">
        <div class="row mb-4">
            <div class="col-lg-12 offset-lg-12">
                <strong><span class='text-white' style='font-size:46px;'> Buy and sell your NFTs</span></strong>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-wallet" viewBox="0 0 16 16">
                    <path d="M0 3a2 2 0 0 1 2-2h13.5a.5.5 0 0 1 0 1H15v2a1 1 0 0 1 1 1v8.5a1.5 1.5 0 0 1-1.5 1.5h-12A2.5 2.5 0 0 1 0 12.5V3zm1 1.732V12.5A1.5 1.5 0 0 0 2.5 14h12a.5.5 0 0 0 .5-.5V5H2a1.99 1.99 0 0 1-1-.268zM1 3a1 1 0 0 0 1 1h12V2H2a1 1 0 0 0-1 1z"/>
                  </svg>
                  <br>
                    <strong><span class='text-white' style='font-size:16px;'> Set up your wallet</span></strong>  <br>
                        <br>
                        <span class='text-white' style='font-size:16px;'> Once you’ve set up your wallet of choice, connect it to OpenSea by clicking the wallet icon in the top right corner. Learn about the wallets we support.</span>
            </div>
            <div class="col-lg-3 col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-square" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                  </svg>
                  <br>
                    <strong><span class='text-white' style='font-size:16px;'> Select your collection</span></strong>  <br>
                        <br>
                        <span class='text-white' style='font-size:16px;'> Click My Collections and set up your collection. Add social links, a description, profile & banner images, and set a secondary sales fee.</span>
            </div>
            <div class="col-lg-3 col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                    <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1V2zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5H2zm13-3H1v2h14V2zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                  </svg>
                  <br>
                    <strong><span class='text-white' style='font-size:16px;'> Buy NFT Whiskey</span></strong>  <br>
                    <br>
                    <span class='text-white' style='font-size:16px;'> Each NFT corresponds to a physical bottle. Consumers have the ability to exchange the digital version for the physical version. </span>
            </div>
            <div class="col-lg-3 col-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-stopwatch" viewBox="0 0 16 16">
                    <path d="M8.5 5.6a.5.5 0 1 0-1 0v2.9h-3a.5.5 0 0 0 0 1H8a.5.5 0 0 0 .5-.5V5.6z"/>
                    <path d="M6.5 1A.5.5 0 0 1 7 .5h2a.5.5 0 0 1 0 1v.57c1.36.196 2.594.78 3.584 1.64a.715.715 0 0 1 .012-.013l.354-.354-.354-.353a.5.5 0 0 1 .707-.708l1.414 1.415a.5.5 0 1 1-.707.707l-.353-.354-.354.354a.512.512 0 0 1-.013.012A7 7 0 1 1 7 2.071V1.5a.5.5 0 0 1-.5-.5zM8 3a6 6 0 1 0 .001 12A6 6 0 0 0 8 3z"/>
                  </svg>
                  <br>
                    <strong><span class='text-white' style='font-size:16px;'> List them for sale</span></strong>  <br>
                    <br>
                    <span class='text-white' style='font-size:16px;'> Choose between auctions, fixed-price listings, and declining-price listings. You choose how you want to sell your NFTs, and we help you sell them!</span>
            </div>
           
        </div>
    </div>
</section>
<section class="about-section spad">
    <div class="container text-white">
        <div class="row mb-4">
            <div class="col-lg-12 offset-lg-12">
                <strong><span class='text-white' style='font-size:46px;'> Marketplace</span></strong>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-3 border mr-1">
                <figure class="figure">
                    <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="{{asset('img/product2.png')}}" alt="Card image">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-3 col-3" style="font-size:20px;"><img src="{{asset('img/renz.png')}}" class="rounded-circle" style="width: 150px;" alt="Avatar" /></div>
                                <div class="col-lg-6 col-6" style="font-size:10px;">Renz Cabato <svg class='text-primary' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                  </svg>
                                <br>
                                </div>
                                <div class="col-lg-3 col-3" style="font-size:10px;">
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 8px;" /> &nbsp; 0.25</div>
                            </div>
                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-12 col-12 text-right"><button type="button" class="btn btn-secondary  btn-sm">Buy Now</button></div>
                               
                            </div>
                            
                            
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-lg-3 col-3 border mr-1">
                <figure class="figure">
                    <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="{{asset('img/product2.png')}}" alt="Card image">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-3 col-3" style="font-size:20px;"><img src="{{asset('img/renz.png')}}" class="rounded-circle" style="width: 150px;" alt="Avatar" /></div>
                                <div class="col-lg-6 col-6" style="font-size:10px;">Renz Cabato <svg class='text-primary' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                  </svg>
                                <br>
                                </div>
                                <div class="col-lg-3 col-3" style="font-size:10px;">
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 8px;" /> &nbsp; 0.25</div>
                            </div>
                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-12 col-12 text-right"><button type="button" class="btn btn-secondary  btn-sm">Buy Now</button></div>
                               
                            </div>
                            
                            
                        </div>
                    </div>
                </figure>
            </div>
            <div class="col-lg-3 col-3 border mr-1">
                <figure class="figure">
                    <div class="card bg-dark text-white border-0">
                        <img class="card-img" src="{{asset('img/product2.png')}}" alt="Card image">
                        <div class=" d-flex flex-column" style='padding:0px;' >
                            {{-- <h5 class="card-title">Title</h5> --}}
                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-3 col-3" style="font-size:20px;"><img src="{{asset('img/renz.png')}}" class="rounded-circle" style="width: 150px;" alt="Avatar" /></div>
                                <div class="col-lg-6 col-6" style="font-size:10px;">Renz Cabato <svg class='text-primary' xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"></path>
                                  </svg>
                                <br>
                                </div>
                                <div class="col-lg-3 col-3" style="font-size:10px;">
                                    
                                    <img src = "{{asset('img/eth.png')}}" alt="ETH" style="width: 8px;" /> &nbsp; 0.25</div>
                            </div>
                            <div class='row m-0' style='background-color: rgba(0, 0, 0, 100);'>
                                <div class="col-lg-12 col-12 text-right"><button type="button" class="btn btn-secondary  btn-sm">Buy Now</button></div>
                               
                            </div>
                            
                            
                        </div>
                    </div>
                </figure>
            </div>
            
           
        </div>
    </div>
</section>
<!-- About section end -->


<!-- Blog section -->
<section class="about-section spad">
    <div class="container">
        <div class="section-title">
            <strong><span class='text-white' style='font-size:46px;'> Marketplace</span></strong>
            <p class='text-white' >Bitcoin is the simplest way to exchange money at very low cost.</p>
        </div>
        <div class="row">
            <!-- blog item -->
            <div class="col-md-4">
                <div class="blog-item">
                    <figure class="blog-thumb">
                        <img src="img/blog/1.jpg" alt="">
                    </figure>
                    <div class="blog-text">
                        <div class="post-date">03 jan 2018</div>
                        <h4 class="blog-title"><a href="">Coinbase to Reopen the GDAX Bitcoin Cash-Euro Order Book</a></h4>
                        <div class="post-meta">
                            <a href=""><span>by</span> Admin</a>
                            <a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
                            <a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog item -->
            <div class="col-md-4">
                <div class="blog-item">
                    <figure class="blog-thumb">
                        <img src="img/blog/2.jpg" alt="">
                    </figure>
                    <div class="blog-text">
                        <div class="post-date">28 dec 2018</div>
                        <h4 class="blog-title"><a href="">Blockchain Rolls Out Trading Feature for 22 States in the U.S</a></h4>
                        <div class="post-meta">
                            <a href=""><span>by</span> Admin</a>
                            <a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
                            <a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- blog item -->
            <div class="col-md-4">
                <div class="blog-item">
                    <figure class="blog-thumb">
                        <img src="img/blog/3.jpg" alt="">
                    </figure>
                    <div class="blog-text">
                        <div class="post-date">28 aug 2018</div>
                        <h4 class="blog-title"><a href="">This Week in Bitcoin: Up, Down and Sideways</a></h4>
                        <div class="post-meta">
                            <a href=""><span>by</span> Admin</a>
                            <a href=""><i class="fa fa-heart-o"></i> 234 Likes</a>
                            <a href=""><i class="fa fa-comments-o"></i> 08 comments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog section end -->


<!-- Footer section -->
<footer class="footer-section">
    <div class="container">
        <div class="row spad">
            <div class="col-md-12 col-lg-12 footer-widget text-center">
                <strong><span  style='font-size:46px;color:black'> Join HardFork Community</span></strong>
                
            </div>
            <div class="col-md-12 col-lg-12 footer-widget text-center pl-lg-12 pl-12">
                <div class="social">
                    <a href="" class="bg-dark"><i class="fa fa-facebook text-white "></i></a>
                    <a href="" class="bg-dark"><i class="fa fa-google-plus text-white"></i></a>
                    <a href="" class="bg-dark"><i class="fa fa-instagram text-white"></i></a>
                    <a href="" class="bg-dark"><i class="fa fa-twitter text-white"></i></a>
                </div>
            </div>
        </div>
        <div class="row ">
         
            <div class="col-md-3 col-lg-3  footer-widget">
                <h5 class="widget-title " style='color:black;'>Resources</h5>
                <ul>
                    <li><a href="#">Explore</a></li>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Become a partner</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3 footer-widget">
                <h5 class="widget-title" style='color:black;'>The loop</h5>
                <ul>
                    <li><a href="#">HardFork Token</a></li>
                    <li><a href="#">Suggest feature</a></li>
                    <li><a href="#">HardFork protocol</a></li>
                    <li><a href="#">Subscribe</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3  footer-widget">
                <h5 class="widget-title" style='color:black;'>My Account</h5>
                <ul>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#">Favorites</a></li>
                    <li><a href="#">Watchlist</a></li>
                    <li><a href="#">My Collections</a></li>
                    <li><a href="#">Settings</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-lg-3  footer-widget">
                <h5 class="widget-title" style='color:black;'>Company</h5>
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="row">
                <div class="col-lg-4 store-links text-center text-lg-left pb-3 pb-lg-0">
                    &#169; {{date('Y')}} HardFork
                </div>
            </div>
        </div>
    </div>
</footer>
<script>

(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "09/30/",
      birthday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > birthday) {
    birthday = dayMonth + nextYear;
  }
  //end
  
  
  const countDown = new Date(birthday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;
             const hour_a = Math.floor((distance % (day)) / (hour));
             const   minute_a = Math.floor((distance % (hour)) / (minute));
             const   second_a = Math.floor((distance % (minute)) / (second));

        // document.getElementById("days").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = (hour_a < 10) ? ('0' + hour_a) : hour_a,
          document.getElementById("hours1").innerText = (hour_a < 10) ? ('0' + hour_a) : hour_a,
          document.getElementById("hours2").innerText = (hour_a < 10) ? ('0' + hour_a) : hour_a,
          document.getElementById("minutes").innerText = (minute_a < 10) ? ('0' + minute_a) : minute_a,
          document.getElementById("minutes1").innerText =(minute_a < 10) ? ('0' + minute_a) : minute_a,
          document.getElementById("minutes2").innerText = (minute_a < 10) ? ('0' + minute_a) : minute_a,
          document.getElementById("seconds").innerText = (second_a < 10) ? ('0' + second_a) : second_a;
          document.getElementById("seconds1").innerText =(second_a < 10) ? ('0' + second_a) : second_a;
          document.getElementById("seconds2").innerText = (second_a < 10) ? ('0' + second_a) : second_a;

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "It's my birthday!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
</script>
@endsection