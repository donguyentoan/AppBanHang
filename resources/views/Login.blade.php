
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | Login Page</title>


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">

<link rel="stylesheet" href="../../dist/css/adminlte.min.css?v=3.2.0">
<script nonce="420215bc-482a-467a-95ba-17b8e8a8b417">(function(w,d){!function(dK,dL,dM,dN){dK[dM]=dK[dM]||{};dK[dM].executed=[];dK.zaraz={deferred:[],listeners:[]};dK.zaraz.q=[];dK.zaraz._f=function(dO){return function(){var dP=Array.prototype.slice.call(arguments);dK.zaraz.q.push({m:dO,a:dP})}};for(const dQ of["track","set","debug"])dK.zaraz[dQ]=dK.zaraz._f(dQ);dK.zaraz.init=()=>{var dR=dL.getElementsByTagName(dN)[0],dS=dL.createElement(dN),dT=dL.getElementsByTagName("title")[0];dT&&(dK[dM].t=dL.getElementsByTagName("title")[0].text);dK[dM].x=Math.random();dK[dM].w=dK.screen.width;dK[dM].h=dK.screen.height;dK[dM].j=dK.innerHeight;dK[dM].e=dK.innerWidth;dK[dM].l=dK.location.href;dK[dM].r=dL.referrer;dK[dM].k=dK.screen.colorDepth;dK[dM].n=dL.characterSet;dK[dM].o=(new Date).getTimezoneOffset();if(dK.dataLayer)for(const dX of Object.entries(Object.entries(dataLayer).reduce(((dY,dZ)=>({...dY[1],...dZ[1]})),{})))zaraz.set(dX[0],dX[1],{scope:"page"});dK[dM].q=[];for(;dK.zaraz.q.length;){const d_=dK.zaraz.q.shift();dK[dM].q.push(d_)}dS.defer=!0;for(const ea of[localStorage,sessionStorage])Object.keys(ea||{}).filter((ec=>ec.startsWith("_zaraz_"))).forEach((eb=>{try{dK[dM]["z_"+eb.slice(7)]=JSON.parse(ea.getItem(eb))}catch{dK[dM]["z_"+eb.slice(7)]=ea.getItem(eb)}}));dS.referrerPolicy="origin";dS.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(dK[dM])));dR.parentNode.insertBefore(dS,dR)};["complete","interactive"].includes(dL.readyState)?zaraz.init():dK.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>

<body class="hold-transition login-page">
<div class="login-box">
<div class="login-logo">
<a href="../../index2.html"><b>Admin</b>LTE</a>
</div>

<div class="card">
<div class="card-body login-card-body">
<p class="login-box-msg">Sign in to start your session</p>

<form action="{{ route('login') }}" method="post">
@csrf
<div class="input-group mb-3">
<input type="email" name="email" class="form-control" placeholder="Email">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>
</div>
<div class="input-group mb-3">
<input type="password" name="password" class="form-control" placeholder="Password">
<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
</div>
@if ($errors->has('message'))
        <div class="erro_red" >{{ $errors->first('message') }}</div>
    @endif
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">
<button type="submit" class="btn btn-primary btn-block">Sign In</button>
</div>

</div>
</form>
<div class="social-auth-links text-center mb-3">
<p>- OR -</p>
<a href="#" class="btn btn-block btn-primary">
<i class="fab fa-facebook mr-2"></i> Sign in using Facebook
</a>
<a href="#" class="btn btn-block btn-danger">
<i class="fab fa-google-plus mr-2"></i> Sign in using Google+
</a>
</div>


<p class="mb-0">
<a href="/register" class="text-center">Register a new membership</a>
</p>
</div>

</div>
</div>


<script src="../../plugins/jquery/jquery.min.js"></script>

<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
</body>
</html>
<style>
.erro_red
{
    color:red;
}
</style>
