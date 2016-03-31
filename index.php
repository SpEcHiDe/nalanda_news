<?php
echo "<!--";
$myfile = fopen("api/contents.txt", "r") or die("Unable to open file!");
echo "opened file for reading\n";
$contents = fread($myfile,filesize("api/contents.txt"));
$feeds = array_filter(explode("\r\n\r\n\r\n",$contents));
echo "obtained contents inside file\n";
fclose($myfile);
echo "-->";
?>

<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">

		<title>Presentation</title>

		<meta name="description" content="an interface to store and display top news items">
	  <meta name="author" content="NALANDA Admin Team">

		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">

		<link rel="stylesheet" href="css/reveal.css">
		<link rel="stylesheet" href="css/theme/black.css" id="theme">

		<!-- Code syntax highlighting -->
		<link rel="stylesheet" href="lib/css/zenburn.css">

		<!-- Printing and PDF exports -->
		<script>
			var link = document.createElement( 'link' );
			link.rel = 'stylesheet';
			link.type = 'text/css';
			link.href = window.location.search.match( /print-pdf/gi ) ? 'css/print/pdf.css' : 'css/print/paper.css';
			document.getElementsByTagName( 'head' )[0].appendChild( link );
		</script>

		<!--[if lt IE 9]>
		<script src="lib/js/html5shiv.js"></script>
		<![endif]-->

		<link rel="shortcut icon" type="image/png" href="img/logo.png" />
		
		<style>
img{
  height: 100vh;
}
		</style>
		
	</head>

	<body>

		<div class="reveal">

			<!-- Any section element inside of this container is displayed as a slide -->
			<div class="slides">

				<?php
					foreach($feeds as $feed){
						echo "<section><h1>" . $feed . "</h1></section>";
					}
				?>

<?php
$filenames = array("http://192.168.240.11/hdd1/NPTEL/Phase1_Video/102102033",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/102105034",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105101082",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105101084",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105101086",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105102088",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105103094",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105103096",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105104099",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105104101",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105104103",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105105",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105106",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105107",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105105108",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105106116",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105106118",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105106119",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105107120",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105107121",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/105107123",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106101060",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106101061",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102062",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102064",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102065",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106102067",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106104074",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105077",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105079",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105081",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105082",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105083",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105084",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106105085",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106090",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106092",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106093",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106106094",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/106108102",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108101037",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108101038",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102042",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102043",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102045",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102047",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108102080",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108104049",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108104052",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105054",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105055",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105056",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105058",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105059",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105060",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105062",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105064",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105065",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108105067",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106068",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106069",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106073",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108106075",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108108076",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/108108077",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112101095",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112101097",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112101099",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112102101",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112102106",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112103108",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112103112",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112104114",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112104115",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112104121",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105123",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105124",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105126",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112105128",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106130",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106131",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106134",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106135",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106138",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112106140",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112107143",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112107145",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/112107147",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/113105057",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/114105029",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/114105030",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/114105031",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117101050",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117101051",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117101053",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117101056",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117102059",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117102060",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117102062",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117103063",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117104074",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105075",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105078",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105079",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105080",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105081",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105082",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105084",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117105085",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106086",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106087",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106088",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106089",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106091",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106092",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/117106093",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102004",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102007",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102008",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122102009",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122104015",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122104016",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122104017",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105020",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105021",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105022",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105023",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122105024",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106025",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106027",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106028",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106033",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122106034",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122107036",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122107037",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/122108038",
"http://192.168.240.11/hdd1/NPTEL/Phase1_Video/123105001");
$req_format = implode(",",$filenames);
?>
<section data-background-video="<?php echo $req_format; ?>" data-background-video-loop>
</section>

			</div>

		</div>

		<script src="lib/js/head.min.js"></script>
		<script src="js/reveal.js"></script>

		<script>

			// Full list of configuration options available at:
			// https://github.com/hakimel/reveal.js#configuration
			Reveal.initialize({
				controls: true,
				progress: true,
				history: true,
				center: true,
				loop: true,

				// Number of milliseconds between automatically proceeding to the
				// next slide, disabled when set to 0, this value can be overwritten
				// by using a data-autoslide attribute on your slides
				autoSlide: 60000,
				
				transition: 'slide', // none/fade/slide/convex/concave/zoom

				// Optional reveal.js plugins
				dependencies: [
					{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
					{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
					{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
					{ src: 'plugin/zoom-js/zoom.js', async: true },
					{ src: 'plugin/notes/notes.js', async: true }
				]
			});

		</script>

	</body>
</html>
