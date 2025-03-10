<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="machine vision,halcon,vision,opencv,視覺檢測,光學, AOI, @WinervaCo, vision inspection">
    <meta name="description" content="We provide the best vision solution.">
    <meta name="author" content="fluber">
	<title>鴻博資訊有限公司</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-dialog.css">
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-dialog.js"></script>
    @yield('head')
</head>
<body>
<div class="container">
	<header>
		<nav class="navbar navbar-default" role="navigation">
            <div class="containter">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		          </button>
		          <a class="navbar-brand" href="/">
                  鴻博資訊有限公司</a>
		        </div>

		        <!-- Collect the nav links, forms, and other content for toggling -->
		        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		          <ul class="nav navbar-nav navbar-right">
	    					<li><a href="https://surfshark.club/friend/fm5Dsxtu"><img src="images/Surfshark-logo.png" width="30" height="30"></a></li>
		        			<li><a href="/">首頁</a></li>
		        			<li><a href="https://blog.winerva.com/">Blog</a></li>
		        			<li><a href="https://github.com/fluber/">GitHub</a></li>
		        			<li><a href="https://hub.docker.com/repositories/winerva">Docker Hub</a></li>
		        			<li><a href="/about">關於鴻博</a></li>
		        			<li><a href="/portfolio">客戶案例分享</a></li>
		        			<li><a href="/service">我們所提供的服務</a></li>
		        			<li><a href="/contact">聯絡我們</a></li>
		          </ul>
		        </div><!-- /.navbar-collapse -->
            </div>
		</nav>	
	</header>
	@yield('content')
    <div id="footer">
            <div class="row">

            <div class="pull-left" style="color: #3c763d;">
            <p>&copy;鴻博資訊有限公司</p>
            <p><a href="mailto:fluber@winerva.com">E-MAIL: fluber@winerva.com</a></p>
            <p>702 台南市南區健民街35號</p>
            <p>TEL: 0927-377-741</p>
            </div>
            
            <div class="pull-right" style="color: #3c763d;">
                <p><a href="/privacy">隱私權</a></p>
            </div>
            </div>

    </div>
</div>
</body>

</html>
