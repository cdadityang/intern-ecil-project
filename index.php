<!DOCTYPE html>
<html>
<head>
	<title>Home Automation Embedded Project</title>
	<style type="text/css">
		.low{
			opacity: 0.3;
		}
		.high{
			opacity: 1;
		}
	</style>
</head>
<body>
	<a><img src="./images/bulb.png" class="low" id="bulb" onclick='bulbfn();' height='300px' width="300px"></a>

	<a><img src="./images/fan.png" class="low" id="fan" onclick='fanfn();' height='300px' width="300px"></a>

	<a><img src="./images/tv.jpg" class="low" id="tv" onclick='tvfn();' height='300px' width="300px"></a>

	<a><img src="./images/ac.png" class="low" id="ac" onclick='acfn();' height='300px' width="300px"></a>

	<script type="text/javascript" src="./js/jquery.js"></script>
	<script type="text/javascript">
		var bulbfn = function(){
			var bulb = document.getElementById('bulb');
			var bulb_binary = "0001";
			localStorage.setItem('onName', bulb_binary);
			$('#bulb').toggleClass("high");
			$.ajax({
				type: "GET",
				url: 'bulb.php',
				data:{action:'call_this'}
			});
		};
		var fanfn = function(){
			var fan = document.getElementById('fan');
			var fan_binary = "0010";
			localStorage.setItem('onName', fan_binary);
			$('#fan').toggleClass("high");
			$.ajax({
				type: "GET",
				url: 'fan.php',
				data:{action:'call_this'}
			});
		};
		var tvfn = function(){
			var tv = document.getElementById('tv');
			var tv_binary = "0100";
			localStorage.setItem('onName', tv_binary);
			$('#tv').toggleClass("high");
			$.ajax({
				type: "GET",
				url: 'tv.php',
				data:{action:'call_this'}
			});
		};
		var acfn = function(){
			var ac = document.getElementById('ac');
			var ac_binary = "1000";
			localStorage.setItem('onName', ac_binary);
			$('#ac').toggleClass("high");
			$.ajax({
				type: "GET",
				url: 'ac.php',
				data:{action:'call_this'}
			});
		};
	</script>
</body>
</html>
