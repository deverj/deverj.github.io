<html lang='ko' oncontextmenu='return false' onselectstart='return false' ondragstart="return false">
<head>
	<meta charset="utf-8" />
	<title>메이플스토리 2 레벨별 필요 경험치 출력 도구 | Harim</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body align="center">
	<a href="http://www.dever.kr/" target="_parent"><img src="http://www.dever.kr/img/logo.png" /></a><br /><br /><br />
	<div class = "white">
	<?php
		$exp = 0;
		if($level == 2)
			$exp = 100;
		else if($level == 3)
			$exp = 256;
		else if($level == 4)
			$exp = 462;
		else if($level == 5)
			$exp = 859;
		else if($level == 6)
			$exp = 1323;
		else if($level == 7)
			$exp = 1583;
		else if($level == 8)
			$exp = 2174;
		else if($level == 9)
			$exp = 2802;
		else if($level == 10)
			$exp = 3860;
		else if($level == 11)
			$exp = 5966;
		else if($level == 12)
			$exp = 7129;
		else if($level == 13)
			$exp = 11582;
		else if($level == 14)
			$exp = 18779;
		else if($level == 15)
			$exp = 30051;
		else if($level == 16)
			$exp = 45549;
		else if($level == 17)
			$exp = 57784;
		else if($level == 18)
			$exp = 73410;
		else if($level == 19)
			$exp = 92993;
		else if($level == 20)
			$exp = 117510;
		else if($level == 21)
			$exp = 150375;
		else if($level == 22)
			$exp = 193026;
		else if($level == 23)
			$exp = 246151;
		else if($level == 24)
			$exp = 313454;
		else if($level == 25)
			$exp = 406460;
		else if($level == 26)
			$exp = 529076;
		else if($level == 27)
			$exp = 691386;
		else if($level == 28)
			$exp = 907122;
		else if($level == 29)
			$exp = 1183535;
		else if($level == 30)
			$exp = 1558208;
		else if($level == 31)
			$exp = 2079638;
		else if($level == 32)
			$exp = 2336151;
		else if($level == 33)
			$exp = 3124082;
		else if($level == 34)
			$exp = 4195753;
		else if($level == 35)
			$exp = 5659450;
		else if($level == 36)
			$exp = 7131984;
		else if($level == 37)
			$exp = 9167126;
		else if($level == 38)
			$exp = 11560885;
		else if($level == 39)
			$exp = 14577792;
		else if($level == 40)
			$exp = 18380073;
		else if($level == 41)
			$exp = 23172258;
		else if($level == 42)
			$exp = 27629512;
		else if($level == 43)
			$exp = 33215771;
		else if($level == 44)
			$exp = 41797070;
		else if($level == 45)
			$exp = 52595403;
		else if($level == 46)
			$exp = 64880483;
		else if($level == 47)
			$exp = 82454631;
		else if($level == 48)
			$exp = 107875752;
		else if($level == 49)
			$exp = 145171865;
		else if($level == 50)
			$exp = 204866155;
		if($level >= 1 && $level <= 50)
		{
			echo "레벨 ";
			echo($_POST['level']-1)."부터 레벨 ";
			echo($_POST['level'])."을(를) 달성하기 위해 필요한 경험치는 ";
			echo $exp. "입니다. <br />";
		}
		else
			echo "잘못 입력하셨습니다. <br />";
	?>
	</div>
	<form action="/tool/maple2/exp/" method="post">
		<p><input type = "submit" value = "이전" /></p>
	</form>
	<hr />
		&copy; Dever
</body>
</html>