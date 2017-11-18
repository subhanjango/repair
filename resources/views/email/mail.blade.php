<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- If you delete this meta tag, Half Life 3 will never be released. -->
<meta name="viewport" content="width=device-width" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>{{ $data['company_name']  }}</title>

<link rel="stylesheet" type="text/css" href="{{asset('stylesheets/email.css')}}" />

</head>

<body bgcolor="#FFFFFF" style="-webkit-font-smoothing:antialiased; 
	-webkit-text-size-adjust:none; 
	width: 100%!important; 
	height: 100%;">

<!-- HEADER -->
<table class="head-wrap">
<tr>
<td></td>
<td class="header container" >

<div class="content">
<table>
<tr>
<td><img style="width:50%;" src="{{$data['logo']}}" /></td>
</tr>
</table>
</div>

</td>
<td></td>
</tr>
</table><!-- /HEADER -->


<!-- BODY -->
<table class="body-wrap">
<tr>
<td></td>
<td class="container" bgcolor="#FFFFFF">

<div class="content">
<table>
<tr>
<td>
<h3>Hi, {{ $data['email'] }}</h3>
<p style="padding:15px;
	background-color:#ECF8FF;
	margin-bottom: 15px;" class="lead">{{ $data['message'] }}</p>
			

<!-- social & contact -->
<table class="social" width="100%">
<tr>
<td>

<!-- column 1 -->
<table align="left" class="column">
<tr>
<td>				

<h5 class="">Connect with Us:</h5>
<p style="font-weight:bold;
	color: #2BA6CB;padding:15px;
	background-color:#ECF8FF;
	margin-bottom: 15px;" class=""><a style="color: #2BA6CB; text-decoration:none;
	color: #FFF;
	background-color: #666;
	padding:10px 16px;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;padding: 3px 7px;
	font-size:12px;
	margin-bottom:10px;
	text-decoration:none;
	color: #FFF;font-weight:bold;
	display:block;
	text-align:center;background-color: #3B5998!important;display:block;
	width:100%;" href="{!!  $data['facebook']  !!}" class="soc-btn fb">Facebook</a> <a style="color: #2BA6CB;text-decoration:none;
	color: #FFF;
	background-color: #666;
	padding:10px 16px;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;padding: 3px 7px;
	font-size:12px;
	margin-bottom:10px;
	text-decoration:none;
	color: #FFF;font-weight:bold;
	display:block;
	text-align:center;background-color: #1daced!important;display:block;
	width:100%;" href="{!! $data['twitter'] !!}" class="soc-btn tw">Twitter</a> <a style="color: #2BA6CB;text-decoration:none;
	color: #FFF;
	background-color: #666;
	padding:10px 16px;
	font-weight:bold;
	margin-right:10px;
	text-align:center;
	cursor:pointer;
	display: inline-block;padding: 3px 7px;
	font-size:12px;
	margin-bottom:10px;
	text-decoration:none;
	color: #FFF;font-weight:bold;
	display:block;
	text-align:center;background-color: #DB4A39!important;display:block;
	width:100%;" href="{!! $data['twitter'] !!}" class="soc-btn gp">Google+</a></p>


</td>
</tr>
</table><!-- /column 1 -->	

<!-- column 2 -->
<table align="left" class="column">
<tr>
<td>				

<h5 class="">Contact Info:</h5>												
<p style="font-weight:bold;
	color: #2BA6CB;padding:15px;
	background-color:#ECF8FF;
	margin-bottom: 15px;">Phone: <strong>{{ $data['company_mobile'] }}</strong><br/>
<p style="font-weight:bold;
	color: #2BA6CB;padding:15px;
	background-color:#ECF8FF;
	margin-bottom: 15px;">Address: <strong>{{ $data['address'] }}</strong><br/>
Email: <strong><a style="color: #2BA6CB;" href="emailto:{{ $data['company_email'] }}">{{ $data['company_email'] }}</a></strong></p>

</td>
</tr>
</table><!-- /column 2 -->

<span class="clear"></span>	

</td>
</tr>
</table><!-- /social & contact -->

</td>
</tr>
</table>
</div><!-- /content -->

</td>
<td></td>
</tr>
</table><!-- /BODY -->


</body>
</html>