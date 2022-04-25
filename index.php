<?php
$pages = ['home'=>'Home Page', 'links'=>'Links Page', 'about'=> 'About Page', 'Store'=>'Content about Store'];
?>
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="utf-8" />
                <meta name="viewport" content="width=device-width, initial-scale=1" />
                <meta name="description" content="www web www" />
                <link href="styles/style.css" rel="stylesheet" />
                <title>Akira White</title>
        </head>
        <body>
		<header class="header">
			<?php foreach ($pages as $key => $value){ 
				echo '<a href="?page='.$key.'">'.ucfirst($key).'</a>';
				} 
			 ?>
		</header> 
		
		<main class="main" align="center">
			<h2> List Sites .onion </h2>

			<section>
				<h3>
					<?php$page=(isset($_GET['page'])?$_GET['page']:'home');

					if(!array_key_exists($page, $pages)){
						$page = 'home'
					}
				
					echo ucfirst($page);

					?>
				</h3>
				<p>
					<!--?php echo $pages[$page];  ?-->
					Cotent dinamic	
				</p>	
			</section>

			<ul align="center">
				<li><a href="#">Test 1</a></li>
				<li><a href="#">Test 2</a></li>
				<li><a href="#">Test 3</a></li>
				<li><a href="#">Test 4</a></li>
				<li><a href="#">Test 5</a></li>
				<li><a href="#">Test 6</a></li>
				<li><a href="#">Test 7</a></li>
			</ul>
		</main>

		<footer class="footer">
			<div class="Logo"><img src="./images/logo.png" width="150px" /></div>
			<div class="Central"><h2>Thanks for visit me</h2></div>
			<div class="DuckGo"><a href="#"><img src="./images/duckGo.png" width="150px" alt="Image Duck Duck Go" /></a></div>
		</footer>
                <script src="scripts/script.js" type="text/javascript"></script>
        </body>
</html>

