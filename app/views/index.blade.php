<!doctype html>

<!-- IMPORTANT: Declare your Angular App -->
<html lang="en" ng-app="korra">
<head>
	<meta charset="UTF-8">
	<title>Korra - Earth | Fire | Air | Water</title>
    <base href="Korra/">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    {{ HTML::style('Korra/libraries/loading-bar.min.css') }}
    {{ HTML::style('Korra/css/app.css') }}

    <script>
        var csrf_token = "{{ csrf_token() }}";
    </script>
</head>
<body>

<header class="navbar navbar-inverse navbar-static-top" id="top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a ui-sref="home.index" class="navbar-brand">Korra</a>
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
                <li ui-sref-active="active">
                    <a ui-sref="home.index">Home</a>
                </li>
                <li ui-sref-active="active">
                    <a ui-sref="posts.index">Posts</a>
                </li>
                <li ui-sref-active="active">
                    <a ui-sref="categories.index">Categories</a>
                </li>
                <li ui-sref-active="active">
                    <a ui-sref="tags.index">Tags</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<!-- IMPORTANT: Main Content View used by AngularJS ui-router --->
<div class="Main" ui-view="main"></div>

<footer>
    <div class="container">
        Korra created by <a href="http://www.twitter.com/pathsofdesign">@pathsofdesign</a>
    </div>
</footer>

<!-- IMPORTANT: Load all the Angular Magic -->
<script type="text/javascript" src="//cdn.jsdelivr.net/angular.all/1.3.0-beta.14/angular-all.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/restangular/latest/restangular.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/angular.ui-router/0.2.10/angular-ui-router.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/lodash/2.1.0/lodash.compat.min.js"></script>
{{ HTML::script('Korra/libraries/loading-bar.min.js') }}

<!-- IMPORTANT: Load your Angular App -->
{{ HTML::script('Korra/Angular/app.js') }}

<!-- Post Files -->
{{ HTML::script('Korra/Angular/Controllers/PostListCtrl.js') }}
{{ HTML::script('Korra/Angular/Controllers/PostFormCtrl.js') }}
{{ HTML::script('Korra/Angular/Controllers/PostDetailCtrl.js') }}

{{ HTML::script('Korra/Angular/Services/PostService.js') }}

<!-- Tag Files -->
{{ HTML::script('Korra/Angular/Controllers/TagListCtrl.js') }}

{{ HTML::script('Korra/Angular/Controllers/TagFormCtrl.js') }}

{{ HTML::script('Korra/Angular/Services/TagService.js') }}

<!-- Category Files -->
{{ HTML::script('Korra/Angular/Controllers/CategoryListCtrl.js') }}

{{ HTML::script('Korra/Angular/Controllers/CategoryFormCtrl.js') }}

{{ HTML::script('Korra/Angular/Services/CategoryService.js') }}

</body>
</html>
