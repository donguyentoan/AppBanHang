<!DOCTYPE html>
<html lang="en">
<head>
@include('head')
</head>
<body>
@include('header')

<div class="container">
    <div class="row">
        <div class="col-sm-3">

        </div>
        <div class="col-sm-6">
           
            <div class="titles">
                        <div class="button_close">
                            <button class="btn btn-danger"><a href="/close"> X</a></button>
                        </div>
               
                <p>Cảm ơn Quý khách hàng đã chọn mua hàng tại Electro. Trong 15 phút, Electro sẽ SMS hoặc gọi để xác nhận đơn hàng.</p>
                        <h5 class="title_center">ĐẶT HÀNG THÀNH CÔNG</h5>
                     
                        
                        
                       
                         <div  class="product-widget">
                                @foreach(session('carts') as $key => $value)
                                <div class="product-img">
                                    <img class="card-img-top mb-5 mb-md-0" src="/productsphotos/{{$value['photo']}}" alt="...">
                                                                
                                </div>
                                <div class="product-body">
                                                                    
                                        <h3 class="product-name"><a href="#">{{$value['name']}}</a></h3>
                                            <b class="product-price"> Giá : {{$value['price']}} Đồng</b>
                                            <p> Số Lượng : {{$value['quantity']}}  </p>
                                        
                                            
                                 </div>
                      
                            @endforeach
                            <h3>Tổng Tiền :  234324$</h3>

                              <div class="buttom_submit">
                                <button class="ktra" type="submit"> <a href="/addtocart">Kiểm Tra Đơn Hàng </a> </button>
                                <button class="tieptuc" type="submit"> <a href="/">Tiếp Tục Mua Hàng</a>  </button>
                            </div>

               
             
                 
                        </div>

                       
                    </div>
                                </div>
</div>
</div>

    
</body>
</html>
<style>
.titles
 {
    background: #d4edda;
    padding: 20px;
    margin: 10px;
    border: 1px solid;
    border-radius: 10px;
    position: relative;

 }
 .button_close .btn {
    position: absolute;
    right: -6px;
    top: -11px;
    background: red;
    width: 30px;
    padding-left: 10px;
    border-radius: 50%;
    height: 30px;
    padding-top: 2px;
}
 .buttom_submit 
 {
    display: flex;
    justify-content: space-around;

 }  
 button[type = submit]
 {
    background: #ff000096;
    /* color: white; */
    border-radius: 10px;
    height: 43px;

 }
 button[type = submit] a 
 {
    color:  white;
    list-style: none;
    text-decoration:  none;
 }
 .product-img img 
 {
    width: 35%;
 }
</style>