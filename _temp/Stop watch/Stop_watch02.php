<html>
<head> 
<link href="Stop_watch02.css" type="text/css" rel="stylesheet" />

</head>
<body>

<center><h1>Counting your work time</h1></center>
<div class="container">
	<!-- time to add the controls -->
	<input id="start" name="controls" type="radio" />
	<input id="stop" name="controls" type="radio" />
	<input id="reset" name="controls" type="radio" />
	<div class="timer">
		<div class="cell">
			<div class="numbers tenhour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hour moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tenminute movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers minute moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers tensecond movesix">0 1 2 3 4 5 6</div>
		</div>
		<div class="cell">
			<div class="numbers second moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell divider"><div class="numbers">:</div></div>
		<div class="cell">
			<div class="numbers milisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers tenmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
		<div class="cell">
			<div class="numbers hundredmilisecond moveten">0 1 2 3 4 5 6 7 8 9</div>
		</div>
	</div>
	<!-- Lables for the controls -->
	<div id="timer_controls">
		<label for="start">Start</label>
		<label for="stop">Stop</label>
		<label for="reset">Reset</label>
	</div>
</div>

</body>
</html>