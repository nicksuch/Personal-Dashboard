<!DOCTYPE html> 
<html lang="en">
<head>
<title>Nick Such's Personal Dashboard</title>
<link rel="stylesheet" href="./style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" href="./style.css" type="text/css" media="handheld" /> 
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" /> 
<link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./csspopup.js"></script>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script src="AC_RunActiveContent.js" language="javascript"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-10921055-7']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>

<body>

<!-- blanket -->
	<div id="blanket" style="display:none;"></div>
<!-- blanket -->
<!-- popups -->
	<div class="popUpDiv" id="NickSuch" style="display:none;">
		<p><a href="./index.php#" onclick="popup(&#39;NickSuch&#39;)">Click Me To Close</a></p>
		<br />
		<img src="./images/tenants/logos/awesometouch.jpg" alt="AwesomeTouch logo" class="company_logo" />
		<br />
		<img src="./images/tenants/people/nick_such.jpg" alt="Pic of Nick" class="face" />
		<ul>
			<li>Name: Nick Such</li>
			<li>Company: AwesomeTouch</li>
			<li>Title: CEO</li>
			<li>E-mail: nick@awesometouch.org</li>
			<li>Phone: (859) 472-4219</li>
		</ul>
	</div>	
	<div class="popUpDiv" id="nextington" style="display:none;">
		<p><a href="./index.php#" onclick="popup(&#39;nextington&#39;)">Click Me To Close</a></p>
		<br />
		<img src="./images/initiatives/nextington.png" alt="Nextington logo" class="company_logo" />
		<ul>
			<li>Name: Nextington</li>
			<li>Description: People &amp; projects that represent “What’s next in Lex”</li>
			<li>E-mail: founders@awesomeinc.org</li>
		</ul>
	</div>
<!-- popups -->

<!-- header -->
<div id="header">
	<div id="welcome">
	<h1>Nick Such's Personal Dashboard</h1>
	<!--<img src="./images/awesome_inc.png" /> -->
	</div>
	<div>
	<p><a href="http://nicksuch.wordpress.com/2011/06/03/adventures-in-self-tracking-my-quest-to-export-data-from-myfitnesspal-quantifiedself/" target="_blank">how i made this dashboard</a></p>
	<p><a href="https://spreadsheets.google.com/spreadsheet/ccc?hl=en_US&key=tFdrh93iyZ14UU4DqC5vkKQ&hl=en_US#gid=5" target="_blank">view source data</a></p>
	</div>
</div>
<!-- header -->
<!-- main -->
<div id="main">

<!-- left -->
			<div id="left_column" class="column_wrapper">
				<div id="sleep" class="content_header">
					<h2>Sleep</h2>
				</div>
				<div id="sleep_last" class="content_box">
					<img src="http://dl.dropbox.com/u/1700083/sleepgraph/sleepgraph_<?php $yesterday = time() - (24*60*60); echo date('ymd', $yesterday); ?>.jpg" alt="Nick's Sleepgraph for <?php echo date('l jS \of F Y', $yesterday); ?>" width="318px" />
					<p>
						<?php
							$cell = date('z') + 230;
							$feed_base = "https://spreadsheets.google.com/feeds/cells/0Atv7Kh0l7ItmdEZkcmg5M2l5WjE0VVU0RHFDNXZrS1E/oda/public/basic?hl=en_US&range=G";
							$feed_src = "$feed_base$cell";
							$feed = simplexml_load_file($feed_src);
							$feed->registerXPathNamespace('f', 'http://www.w3.org/2005/Atom');
							foreach ($feed->xpath('//f:content') as $hours) {
									$hoursRounded = round($hours, 2);
	    							echo("I slept for " . "$hoursRounded" . " hours yesterday.");
	    					};
	    					if (strlen($hours) == 0) {
								echo("I haven't updated my sleep log recently.");
	    					};
						?>
					</p>
				</div>
				<div id="sleep_graph" class="content_box">
								<script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//spreadsheets4.google.com/spreadsheet/tq?key=0Atv7Kh0l7ItmdEZkcmg5M2l5WjE0VVU0RHFDNXZrS1E&transpose=0&headers=1&merge=COLS&range=A450%3AA498%2CG450%3AG498%2CK450%3AK498%2CL450%3AL498&gid=4&pub=1","options":{"vAxes":[{"min":null,"title":null,"max":null}],"series":[{"type":"bars"}],"title":"Sleep","backgroundColor":"#ffffff","legend":"right","colors":["#3366CC","#DC3912","#FF9900","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395"],"type":"line","logScale":false,"hAxis":{"maxAlternation":1},"hasLabelsColumn":true,"vAxis":{"format":"#,##0.00"},"width":318,"height":276},"state":{},"chartType":"ComboChart","chartName":"Chart 5"} </script>
				</div>
			</div>
<!-- left -->
<!-- center -->
		<div id="center_column" class="column_wrapper">
				<div id="food" class="content_header">
					<h2>Food</h2>
				</div>
				
				<div id="food_sugar" class="content_box">
					<script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//spreadsheets8.google.com/tq?key=0Atv7Kh0l7ItmdEZkcmg5M2l5WjE0VVU0RHFDNXZrS1E&transpose=0&headers=1&merge=COLS&range=A400%3AA500%2CH400%3AH500%2CK400%3AK500&gid=5&pub=1","options":{"reverseCategories":false,"fontColor":"#fff","midColor":"#777","backgroundColor":"#fff","pointSize":0,"headerColor":"#fff","vAxis":{"format":"#0.###############"},"headerHeight":40,"is3D":false,"logScale":false,"hAxis":{"maxAlternation":1},"wmode":"opaque","title":"Daily Intake of Total Carbs, Sugars","isStackedBarChart":false,"isStackedColumnChart":false,"isStackedAreaChart":false,"mapType":"hybrid","isStacked":false,"showTip":true,"displayAnnotations":true,"titleY":"Intake (g)","dataMode":"markers","colors":["#3366CC","#DC3912","#FF9900","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395"],"smoothLine":false,"maxColor":"#222","lineWidth":2,"labelPosition":"right","fontSize":"14px","hasLabelsColumn":true,"maxDepth":2,"legend":"right","allowCollapse":true,"minColor":"#ccc","reverseAxis":false,"width":318,"height":276},"state":{},"chartType":"AreaChart","chartName":"Chart 4"} </script>
				</div> 
				<div id="food_all" class="content_box">
			<script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//spreadsheets8.google.com/tq?key=0Atv7Kh0l7ItmdEZkcmg5M2l5WjE0VVU0RHFDNXZrS1E&transpose=0&headers=-1&range=A400%3AI500&gid=5&pub=1","options":{"reverseCategories":false,"fontColor":"#fff","midColor":"#777","backgroundColor":"#fff","pointSize":0,"headerColor":"#fff","vAxis":{"format":"#0.###############", "textPosition": "none"},"headerHeight":40,"is3D":false,"logScale":false,"wmode":"opaque","hAxis":{"maxAlternation":1},"title":"Food stats","height":276,"isStackedBarChart":true,"isStackedColumnChart":true,"isStackedAreaChart":true,"isStacked":true,"mapType":"hybrid","showTip":true,"displayAnnotations":true,"dataMode":"markers","colors":["#3366CC","#DC3912","#FF9900","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395"],"smoothLine":false,"width":318,"maxColor":"#222","lineWidth":2,"labelPosition":"right","fontSize":"14px","hasLabelsColumn":true,"maxDepth":2,"legend":"right","allowCollapse":true,"minColor":"#ccc","reverseAxis":false},"state":{},"chartType":"ColumnChart","chartName":"Chart 2"} 
			</script>
				</div>
		</div>
<!-- center -->
<!-- right -->
		<div id="right_column" class="column_wrapper">
				<div id="running" class="content_header">
					<h2>Other</h2>
				</div>
				<div id="running_log" class="content_box">
					<script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//spreadsheets2.google.com/spreadsheet/tq?key=0Atv7Kh0l7ItmdEZkcmg5M2l5WjE0VVU0RHFDNXZrS1E&transpose=0&headers=1&merge=COLS&range=A1%3AA40%2CK1%3AK40%2CD1%3AD40%2CM1%3AM40&gid=11&pub=1","options":{"reverseCategories":false,"series":[{"type":"area"},{"type":"area"}],"fontColor":"#fff","midColor":"#36c","pointSize":0,"backgroundColor":"#FFFFFF","headerColor":"#3d85c6","headerHeight":40,"is3D":false,"type":"line","logScale":false,"wmode":"opaque","hAxis":{"maxAlternation":1},"title":"Running","isStackedBarChart":false,"isStackedColumnChart":false,"isStackedAreaChart":false,"mapType":"hybrid","showTip":true,"displayAnnotations":true,"nonGeoMapColors":["#3366CC","#e69138","#0000ff","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395"],"titleY":"Pace (min/mi), Distance (mi)","dataMode":"markers","colors":["#3366CC","#e69138","#0000ff","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395"],"smoothLine":false,"lineWidth":2,"maxColor":"#222","labelPosition":"right","fontSize":"14px","hasLabelsColumn":true,"seriesCoreChart":[{"type":"area"},{"type":"area"}],"maxDepth":2,"interpolateNulls":false,"legend":"right","allowCollapse":true,"minColor":"#ccc","reverseAxis":false,"width":318,"height":276},"state":{},"packages":["corechart"],"chartType":"CoreChart","chartName":"Chart 1"} </script>
				</div>
				<div id="vitals_internal" class="content_box">
					<script type="text/javascript" src="//ajax.googleapis.com/ajax/static/modules/gviz/1.0/chart.js"> {"dataSourceUrl":"//spreadsheets8.google.com/tq?key=0Atv7Kh0l7ItmdEZkcmg5M2l5WjE0VVU0RHFDNXZrS1E&transpose=0&headers=1&range=A1%3AE21&gid=0&pub=1","options":{"reverseCategories":false,"fontColor":"#fff","midColor":"#777","backgroundColor":"#fff","pointSize":"5","headerColor":"#fff","vAxis":{"format":"#0.###############"},"headerHeight":40,"is3D":false,"logScale":false,"displayRangeSelector":true,"wmode":"opaque","hAxis":{"maxAlternation":1},"title":"Nick's Vitals - as measured by KYBC","height":276,"isStackedBarChart":false,"isStackedColumnChart":false,"isStackedAreaChart":false,"pointSizeOther":"5","isStacked":false,"mapType":"hybrid","showTip":true,"displayAnnotations":true,"titleY":"","dataMode":"markers","titleX":"Date of donation at Kentucky Blood Center","maxAlternation":1,"colors":["#3366CC","#DC3912","#FF9900","#109618","#990099","#0099C6","#DD4477","#66AA00","#B82E2E","#316395"],"smoothLine":false,"width":318,"lineWidth":2,"maxColor":"#222","labelPosition":"right","fontSize":"14px","hasLabelsColumn":true,"maxDepth":2,"legend":"right","allowCollapse":true,"minColor":"#ccc","reverseAxis":false,"displayZoomButtons":true},"state":{},"chartType":"AreaChart","chartName":"Chart 1"} 
		</script>
				</div>
		</div>
<!-- right -->
</div>
<!-- main -->
</body>
</html>