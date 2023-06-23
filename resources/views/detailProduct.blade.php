<!DOCTYPE html>
<html lang="en">
<head>
   @include('head')
</head>
<body>


@include('header')


<link rel="stylesheet" href="/css/detail.style.css">
<section class="py-5">


            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    
                    
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="/productsphotos/{{$product->photo}}" alt="..."></div>
                    <div class="col-md-6">
                        
                        <h1 class="display-5 fw-bolder">{{$product->name}}</h1>
                        <div class="fs-5 mb-5">
                            <span class="text-decoration">{{$product->price}} Đồng</span>
                            
                        </div>
                        <p class="lead">{{$product->description }}</p>
                        <div class="d-flex">
                            
                            <!-- <input class=" text-center me-3" id="inputQuantity" type="number"  value="1"> -->
                           
                  
                              

                                <div class="read_bt"> <a href="/addtocart/{{$product->id}}"> <i class="bi-cart-fill me-1"></i>Add to cart</a></div>
                          
                        
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Related products</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($product4 as $sp1)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                           
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="...">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$sp1->name}}</h5>
                                    <!-- Product price-->
                                    {{$sp1->price}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('products.show', $sp1->id) }}">Read More</a></div>
                            </div>
                        </div>
                    </div>

                @endforeach
                    
                </div>
            </div>
        </section>


       

        @include('footer')
    
</body>
</html>

