<html>
 	<head>
  		<title>DWA15 Assignment 1</title>
        <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
 	</head>
 	<body>
        <div class="centered">
            <h2>Scott Ouellette</h2>
            <img class="img-main" src="assets/img/me.png"/>
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
                    "'PHP is a minor evil perpetrated and created by incompetent amateurs, whereas Perl is a great and insidious evil, perpetrated by skilled but perverted professionals.' - Jon Ribbens");
                $rand_key = array_rand($input, 1);
                echo '<h3>'.$input[$rand_key[0]].'</h3>';
            ?>
            
        </div>
	</body>
</html>
