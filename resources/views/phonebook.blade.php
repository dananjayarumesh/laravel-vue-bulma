<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	</head>
	<body>

		<input type="hidden" value="{{ url('/') }}" v-model="baseUrl" />

		<div id="app">
     
      <Myheader></Myheader>
      <div class="container">
      <router-view></router-view>
     
    </div>
      <Myfooter></Myfooter>
		</div>
	
	<script src="{{asset('js/app.js')}}"></script>
	</body>
	</html>	