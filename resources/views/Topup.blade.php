<!DOCTYPE html>
<html lang="en">
<head>
    @include('head');
</head>
<body>

@include('header');
<div class="container flex-column ">
    @if($success = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $success }}
    </div>
    @endif
<!--    <a href="/api/wallet">Tạo wallet</a>-->

    @if(!empty($wallet))
    <p>Số tiền trong vi : {{$wallet->balance}}</p>
    @endif

    <div class="walletTransaction d-flex">
        <div class="col-md-6">
            <form action="/topup/plus" method="POST">
                @csrf
                <input type="text" name="balance" id="">
                <input type="submit" value="Nạp">
            </form>
        </div>
        <div class="col-md-6">
            <p>Rút Tiền</p>
            <form action="/topup/withdraw" method="POST">
                @csrf
                <input type="text" name="balance" id="">
                <input type="submit" value="Nạp">
            </form>
        </div>

    </div>


    <div class="wallet  pt-5">

        <div class="col-md-6">
            <p>
                Lịch sữ nạp của ví :
            </p>

            @foreach($walletTransaction as $walletMessage)
            <p>
                {{$walletMessage->message}}
            </p>

            @endforeach

        </div>


    </div>


</div>


</body>
</html>
