<html>
<head>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>@yield('title')</title>
    <style>
    body {font-size:16pt; color:999; margin: 5px;}
    h1 { font-size:50pt; text-align:right; 
        margin:-20px 0px -30px 0px; letter-spacing:-4pt;}
    ul { font-size:12pt; }
    hr { margin: 25px 100px; border-top: 1px dashed #ddd; }
    .menutitle {font-size:14pt; font-weight:bold; margin: 0px; }
    .content {margin: 10px;}
    .footer {text-align:right; font-size:10pt; margin:10px;
        border-bottom:solid 1px #ccc; color:#ccc}
    th {background:#999; color:#fff; padding:5px 10px;}
    tr {border: solid 1px #aaa; color:#999; padding:5px 10px;}
    </style>
</head>
<body>
	<nav class="navbar nabvar-extend-lg navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/items') }}">
				Danshary
			</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
			</button>
		</div>
	</nav>

	<div class="container">
    <div class="content py-4">
        @yield('content')
    </div>
	</div>

    <div class="footer">
        @yield('footer')
	</div>
</body>
</html>
