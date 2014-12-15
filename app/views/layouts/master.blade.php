<html>
<head>
<title>My Aplication</title>
<link rel="stylesheet" href="{{asset('/assets//css/bootstrap.min.css')}}">
</head>
<body>
<div class="container">
@section('navbar')
@show

@yield('content')

</div>
</body>
</html>