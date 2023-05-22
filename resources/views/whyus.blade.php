<html>
    <style>
    html { height: 100%; }
body { background: #FFF; font: 400 1.5em/1.5 "Droid Serif", serif; color: #111; text-align: center; height: 100%; }

h1 { font: 700 2.8em/1.2 "Droid Sans", sans-serif; }
h2 { font: 700 1.5em/1.5 "Droid Sans", sans-serif; margin: 1em 0; }

#banner { background: url(https://i.ibb.co/3SNpSdc/IMG-1489.jpg) no-repeat fixed 100% 100%; background-size: cover; color: #fff; height: 100%; width: 100%; }

#bannertext { width: 24em; position: fixed; top: 20%; left: 50%; border: .5em solid #fff; margin-left: -12em; padding: 2em 0; }

#content { max-width: 28em; text-align: justify; margin: 0 auto; padding: 2em; }

#content p { margin: 0 0 2em; }</style>
<link href='https://fonts.googleapis.com/css?family=Droid+Sans:700|Droid+Serif' rel='stylesheet' type='text/css'>
<body>
<div id="banner">
	<div id="bannertext">
		<h1>PARAL &amp; LAX</h1>
		<p>Finest webdesign since 1870</p>
	</div>
</div>

<div id="content">
	<h2>About us</h2>
	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin pellentesque, est ut venenatis aliquam, lorem quam porttitor ligula, eget ultrices velit dui sed quam. Praesent vehicula placerat lectus. Nulla pede. Quisque a nulla quis massa pulvinar sagittis. Pellentesque neque massa, mattis vulputate, pellentesque nec, vehicula volutpat, purus. Proin pretium dui et nulla cursus eleifend. Aenean aliquam urna eget urna. Vestibulum euismod elit. Donec eget augue sit amet neque elementum pretium. Proin posuere lacus id lacus. Duis vel justo suscipit neque ornare iaculis.</p>
	<p>Ut urna urna, rhoncus eget, vestibulum tempus, venenatis non, nunc. Nunc consequat quam in nulla. Praesent feugiat posuere orci. Sed ac ante. Mauris pellentesque massa vitae ante mattis bibendum. Quisque dapibus lectus eu eros. Nulla facilisi. Praesent hendrerit egestas erat. Suspendisse at velit. Quisque mollis feugiat est. Curabitur ut leo. Cras auctor semper augue. Pellentesque leo pede, tempus sed, ornare in, venenatis sed, nisl. Quisque est velit, eleifend vitae, mollis ac, adipiscing at, eros. Mauris velit. Etiam nec lorem. Vestibulum pellentesque ligula a velit. Maecenas felis metus, suscipit et, eleifend vel, accumsan vitae, magna. Phasellus ut justo vel magna congue laoreet.</p>
</div>
<script>
    function EasyPeasyParallax() {
	scrollPos = $(this).scrollTop();
	$('#banner').css({
		'background-position' : '50% ' + (-scrollPos/4)+"px"
	});
	$('#bannertext').css({
		'margin-top': (scrollPos/4)+"px",
		'opacity': 1-(scrollPos/250)
	});
}
$(document).ready(function(){
	$(window).scroll(function() {
		EasyPeasyParallax();
	});
});
    </script>
</body>

</html>