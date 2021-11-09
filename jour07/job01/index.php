<?php
			session_start();
			if(isset($_SESSION['nbvisites']))
			{
				$_SESSION['nbvisites']++;
			}
			if(isset($_POST['oui'])  )
			{	
				$_SESSION['nbvisites'] = 0;
			}
			
				

			echo "il y'a eu ".$_SESSION['nbvisites']." visites";
?>
<html>
    <form  method="post" action="index.php">

    <input type="submit" value="--Reset--" class="button" name="oui">
    </form>


</html>