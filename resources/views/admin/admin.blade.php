<html>
	<head>
		<title>Laravel</title>

        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
		<div class="container">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Адмінка</a>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ action('Admin\EventsController@index') }}">Головна</a></li>
                            <li><a href="{{ action('Admin\GroupsController@index') }}">Групи</a></li>
                            <li><a href="{{ action('Admin\AuditoriesController@index') }}">Аудиторії</a></li>
                            <li><a href="{{ action('Admin\TeachersController@index') }}">Викладачі</a></li>
                            <li><a href="{{ action('Admin\SubjectsController@index') }}">Предмети</a></li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ url('/') }}">На сайт</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

			<div class="content">

			    @yield('content')
			</div>
		</div>

        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	</body>
</html>
