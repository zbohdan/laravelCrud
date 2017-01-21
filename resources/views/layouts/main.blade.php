<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>@yield('title') - UserChart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

@section('nav')
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNav">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#" class="navbar-brand">User Chart</a>
            </div>
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('users') }}">Home</a></li>
                    <li><a href="{{ url('users/create') }}">Add User</a></li>
                </ul>
            </div>
        </div>
    </nav>
@show

<div class="jumbotron">
    @yield('content')
</div>

@section('footer')
    <footer class="text-center">This is the best site for creating new users &copy; All Right Reserved 2017.</footer>
@show

</body>
</html>