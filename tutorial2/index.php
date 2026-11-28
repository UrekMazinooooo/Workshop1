<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Week 2 - Advanced PHP</title> </head> <body> <h1>Week 2 - Advanced PHP</h1> <p>Full Stack Web Development - Week 2 Tutorial</p> 
<?php 
	$categories = ["Laptops", "Phones", "Accessories", "Audio"];
	echo"<h2>Exercise 1: Categories</h2>";
	echo"<ul>";
	foreach ($categories as $category){
	     echo "li>$category</ul>"
		}

	echo "</ul>";

?> 
</body> </html>