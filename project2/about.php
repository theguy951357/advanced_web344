<!--about.shtml-->
<!DOCTYPE html>
<html lang = "en-US">
	
	<head>
	<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include("common/headdoc.html");
        ?>
	</head>
	
	<body class = "bg1" onload = "init()">
	
	<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        include("common/header.html");
        ?>
	<h1 class = "title">About</h1>
	
	<div class = "aboutbox">
		<p>
			
			A lot of things can change in twelve years, Admiral.
			 and attack the Romulans. And blowing into maximum warp speed,
			  you appeared for an instant to be in two places at once.
			   I'll be sure to note that in my log. My oath is between Captain
			    Kargan and myself. Your only concern is with how you obey my orders. 
			    Or do you prefer the rank of prisoner to that of lieutenant? 
			    We could cause a diplomatic crisis. Take the ship into the 
			    Neutral Zone Fate protects fools, little children and ships 
			    named Enterprise. You did exactly what you had to do. You 
			    considered all your options, you tried every alternative and then 
			    you made the hard choice. In all trust, there is the possibility 
			    for betrayal. Congratulations - you just destroyed the Enterprise. 
			    Flair is what marks the difference between artistry and mere competence. 
			    But the probability of making a six is no greater than that of rolling 
			    a seven. Some days you get the bear, and some days the bear gets you. 
			    Maybe if we felt any human loss as keenly as we feel one of those close 
			    to us, human history would be far less bloody. Commander William Riker of 
			    the Starship Enterprise. Some days you get the bear, and some days the 
			    bear gets you. Besides, you look good in a dress. A surprise party? 
			    Mr. Worf, I hate surprise parties. I would *never* do that to you. 
			    You bet I'm agitated! I may be surrounded by insanity, but I am not 
			    insane. For an android with no feelings, he sure managed to evoke them 
			    in others. I recommend you don't fire until you're within 40,000 kilometers. 
			    I will obey your orders. I will serve this ship as First Officer. 
			    And in an attack against the Enterprise, I will die with this crew. 
			    But I will not break my oath of loyalty to Starfleet. 
			    Earl Grey tea, watercress sandwiches... and Bularian canapes? 
			    Are you up for promotion? The look in your eyes, I recognize it. 
			    You used to have it for me. How long can two people talk about nothing
		
		</p>
	
	</div>
	
	
	<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        
        $date = date("l, F jS");
        
        echo "<td>The date is $date</td>";
        include("common/footer.html");
        ?>
	
	</body>
</html>