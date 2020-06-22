
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Teste Back-End 2020 | Laravel API</title>
    <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/20.png" >
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/uikit.js"></script>
</head>
<body>

<header>
    <div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
    <nav class="uk-navbar-container">
        <div class="uk-container">
        <div data-uk-navbar>
            <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo uk-visible@m" href="index.html">TESTE BACK-END</a>
            <span>LARAVEL API</span>
            <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-docs" data-uk-toggle><span
                data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Teste Back-End 2020<br>Laravel API</span></a>
            <!--<ul class="uk-navbar-nav uk-visible@m">
                <li ><a href="index.html">Home</a></li>
                <li class="uk-active"><a href="doc.html">Docs</a></li>
                <li ><a href="blog.html">Blog</a></li>
                <li >
                <a href="#">Changelogs</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="changelog-timeline.html">Timeline Style</a></li>
                    <li><a href="changelog-posts.html">Post Style</a></li>
                    </ul>
                </div>            
                </li>
            </ul>-->
            </div>
            <div class="uk-navbar-center uk-hidden@m">
            <a class="uk-navbar-item uk-logo" href="index.html">Teste Back-End 2020</a>
            </div>
            <div class="uk-navbar-right">
            <!--<div>
                <a id="search-navbar-toggle" class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
                <div class="uk-background-default uk-border-rounded"
                data-uk-drop="mode: click; pos: left-center; offset: 0">
                <form class="uk-search uk-search-navbar uk-width-1-1" onsubmit="return false;">
                    <input id="search-navbar" class="uk-search-input" type="search" placeholder="Search for answers"
                    autofocus autocomplete="off" data-minchars="1" data-maxitems="30">
                </form>
                </div>
            </div>-->
            <ul class="uk-navbar-nav uk-visible@m">
                <li>
                <div class="uk-navbar-item">
                    <a class="uk-button uk-button-primary-outline" href="https://documenter.getpostman.com/view/9123887/SzzoZuxn?version=latest" target="_blank"><span class="iconify" data-icon="simple-icons:postman" data-inline="false"></span> See on Postman</a>
                </div>
                </li>
                <li>
                <div class="uk-navbar-item">
                    <a class="uk-button uk-button-success" href="https://github.com/erickfirmo/teste-back-end-2020" target="_blank"><i class="fab fa-github"></i> See on Github</a>
                </div>
                </li>
            </ul>
            <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
                data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></a>
            </div>
        </div>
        </div>
    </nav>
    </div>
	<div class="uk-section section-hero uk-position-relative" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
		<div class="uk-container uk-container-small">
			<!--<p class="hero-image uk-text-center"><img src="img/logo.png" alt="Logo Mini Rest API Laravel"></p>-->
            <br>
			<h1 class="uk-heading-medium uk-text-center uk-margin-remove-top">TESTE BACK-END</h1>
			<p class="uk-text-lead uk-text-center">Mini Rest API using the Laravel framework and PHP, JWT as authentication and a simple CRUD.</p>
		</div>
	</div>
</header>


<footer class="uk-section uk-text-center uk-text-muted">
	<div class="uk-container uk-container-small">
        
		<div class="uk-margin-medium">
			<div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
				<div>
					<a href="https://www.linkedin.com/in/%C3%A9rick-firmo-24615b166/" data-uk-icon="icon: linkedin" class="uk-icon-link uk-icon"
						target="_blank"></a>
				</div
                ><div>
					<a href="https://www.facebook.com/erickfirmo.dev" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
						target="_blank"></a>
				</div>
				<div>
					<a href="https://www.instagram.com/erick.firmo" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
						target="_blank"></a>
				</div>
			</div>
		</div>
		<div class="uk-margin-medium uk-text-small copyright link-secondary">Developed by <a
				href="https://github.com/erickfirmo">Érick Firmo</a>.</div>
	</div>
</footer>

<script src="js/awesomplete.js"></script>
<script src="js/custom.js"></script>


</body>

</html>