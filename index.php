<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
 	<head>
        <meta charset="utf-8"/>
  		<title>DWA15 Assignment 1</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
 	</head>
 	<body>
        <div class="container">
            <h1>Scott Ouellette</h1>
            <a href="http://scott-ouellette.com"><img class="img-main" src="assets/img/me.png" alt="Me"/></a>
            <p class="para">
                I currently work as a Back-End web dev at Harvard Medical School. I've recently graduated from Wentworth Institute of Technology w/ a Comp Sci degree.

                Python has a special place in my heart, but I'm looking forward to what PHP has to offer!
            </p>

            <?php
                $input = array(
                    "'Always code as if the guy who ends up maintaining your code will be a violent psychopath who knows where you live.' - Martin Golding", 
                    "'Most good programmers do programming not because they expect to get paid or get adulation by the public, but because it is fun to program.' - Linus Torvalds", 
                    "'Most software today is very much like an Egyptian pyramid with millions of bricks piled on top of each other, with no structural integrity, but just done by brute force and thousands of slaves.' - Alan Kay", 
                    "'Measuring programming progress by lines of code is like measuring aircraft building progress by weight.' - Bill Gates", 
                    "'Talk is cheap, show me the code!' - Linus Torvalds");
                $rand_key = array_rand($input, 1);
                echo '<h3 class="quote">'.$input[$rand_key].'</h3>';
            ?>
            
        </div>
	</body>
</html>
