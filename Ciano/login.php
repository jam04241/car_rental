<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <title>Car Rental Business</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    
    <div class="main">
        <div class="bgvideo">
            <video autoplay muted loop playsinline id="video">
                <source src="/CACA/Car_Rental(CCE104L_3239)/Html/bg_video/video_bg(1).webm">
            </video>
        </div>
        <div class="bg-overlay"></div>

        <div class="log-box">
            <div class="logo-wrapper">
                <img id="car_logo" src="/CACA/Car_Rental(CCE104L_3239)/Html/Photos/Car Logo/Ruben_Car_Rental(7).png">
            </div>
            <section>
                <form action="db_login.php" method="POST">
                    <input type="email" id="email" name="email" placeholder="Enter Email" autocomplete="off" required>
                    <input type="password" id="password" name="password" placeholder="Enter Password" autocomplete="off" required>  
                     
            <div class="checkbox">  
                <p id="remember"><input type="checkbox" id="checkbox"> <label type="text" id="check_btn">Remember me</label>
                </p>
            </div>
                <p id="login-container">
                    <button id="btn" type="submit" name="login" id="login">Login</button>    
                </p>
                </form>
                
                <a href="#" id="forget">Forgot Password?</a>
                <p id="dont">
                    Don't have an account?
                    <a href="/CACA/Car_Rental(CCE104L_3239)/Html/MAIN_EXE/signUp.html">Sign in</a>
                </p>
            </section> 
        </div>
    </div>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
