<!DOCTYPE html>
<html>

<!-- Mirrored from jltoken.justlabtech.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 07:10:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv=Content-Type content="text/html; charset=UTF-8">
<meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta http-equiv=X-UA-Compatible content="IE=edge">
<meta name=msapplication-tap-highlight content=no>
<title>Queue Management System</title>
<link rel=icon href="{{asset('frontend/assets/favicon.ico')}}">
<link href="{{asset('frontend/assets/css%2c_materialize.min.css%2bcss%2c_style.min.css%2bcss%2c_layouts%2c_page-center.css%2bjs%2c_plugins%2c_prism%2c_prism.css%2bjs%2c_plugins%2c_perfect-scrollbar%2c_perfect-scrollbar.css.pagespeed.cc.q4m5GI8jBK.css')}}" type="text/css" rel=stylesheet media="screen,projection"/>

</head>
<body class=teal>
<div id=loader-wrapper>
<div id=loader></div>
<div class="loader-section section-left"></div>
<div class="loader-section section-right"></div>
</div>
@include('layouts.partial.msg')
</br>
<div id=login-page class=row>
<div class="col s12 z-depth-4 card-panel">
<form class=login-form method="post" action="{{route('queue.reserve')}}">
	@csrf
<div class=row>
<div class="input-field col s12 center">
<p class="center login-form-text" style="font-size:23px;margin-top:5px"><b>Q M S</b></p>
<p class="center login-form-text" style=letter-spacing:1px>Take Service</p>
</div>
</div>
<div class="row margin">
<div class="input-field col s12">
<i class="mdi-action-account-box prefix"></i>
<input id=username type=text name=name placeholder=customername value="" autofocus>
<label for=username class=active>Customer Name</label>
</div>
</div>

<div class="row margin">
<div class="input-field col s12">
<i class="mdi-action-assignment prefix"></i>
<input id=username type=text name=service placeholder=servicename value="" autofocus>
<label for=username class=active>Service Name</label>
</div>
</div>
<div class=row>
<div class="input-field col s12">
<button type=submit class="btn waves-effect waves-light col s12">Submit</button>
</div>
</div>
</form>
</div>
<div class="row center-align white-text" style=margin-bottom:0>
<span>Developed by <a href="http://www.justlabtech.com/" target=_blank style="color:#ccc">Remon Hasan</a></span>
</div>
</div>
<script src="{{asset('frontend/assets/js/plugins/jquery-1.11.2.min.js.pagespeed.jm.J-8M9bCq0j.js')}}"></script>
<script src="{{asset('frontend/assets/js/materialize.min.js.pagespeed.ce.iYJ7cbN9Ev.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins/prism/prism.js')}}"></script>
<script src="{{asset('frontend/assets/js/plugins%2c_perfect-scrollbar%2c_perfect-scrollbar.min.js%2bplugins.min.js.pagespeed.jc.v_7n8RyfbT.js')}}"></script>


<script>eval(mod_pagespeed_a5mfZXeHps);</script>
<script>eval(mod_pagespeed_sSsjFjS4KJ);</script>
<script>function load(){$('body').removeClass('loaded');return true;}</script>
</body>

<!-- Mirrored from jltoken.justlabtech.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 01 Jan 2020 07:11:00 GMT -->
</html>
