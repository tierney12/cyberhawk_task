<html>
<head>
<body>

<!--Simple text field and button that loads the contents of the logic into the text fiedl when clicked-->

<div id="dtext">
  <h2>Click to retrieve the lastest update from the wind turbine inspection. </h2>
  <button type="button" onclick="loadResults()">Get Results!</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
<!--Contains the logic that implements a solution to the problem statement, and passes back HTML into the webpage for display-->
function loadResults() {
    var content = "<?php
    
            $string = "";
					
			for ($x = 1; $x <= 100; $x++){
				if ($x % 5 == 0 && $x % 3 == 0){
					$string = $string . "<p style='color:red'> Lightning Strike and Coating Damage </p>";
				}
				elseif ($x % 3 == 0){
					$string = $string . "<p style='color:orange'> Coating Damage </p>";
				}
				elseif ($x % 5 == 0){
					$string = $string . "<p style='color:blue'> Lightning Strike </p>";
				}
				else {$string = $string . "<p> {$x} </p>";}
			}
			
			echo "{$string}";

	?>";
		
   $("#dtext").html(content);
}

</script>

</body>
</head?
</html>