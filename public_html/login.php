<!DOCTYPE html>
<html lang="en">



<?php
 /* require ("includes/connection/connection.php");*/
?>

<?php
  include_once("includes/pages/head.php");
?>

  <body>




    <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="b" data-role="header">
                
                	  <!-- logo -->
                
                
                <?php
				  include_once("includes/pages/logo.php");
				?>
      				  <!-- Menu -->
      			<?php
				  include_once("includes/pages/menu.php");
				?>
      			    <!-- Searchfield -->
				<?php
				  include_once("includes/pages/search-field.php");
				?>
      
                <div class="ui-grid-a">
                    <div class="ui-block-a">
                    </div>
                    <div class="ui-block-b">
                    </div>
                </div>
      
            </div>
            <div data-role="content" id="content">
            <h3>Logga in för att kunna se på videor</h3>	
            	
            <?php
	//echo $_REQUEST['attempt'];
	if(isset($_SESSION["username"])) {
		header("Location: logout.php");
	}
	if(isset($_POST['submit']))
	
	{
		$user = mysql_real_escape_string($_POST['username']);
		$password = sha1(mysql_real_escape_string($_POST['password']));	
		$link = mysql_connect("localhost", "root", "m@rio")or die(mysql_error());;
		$db = mysql_select_db('kristentro');
		$query = mysql_query("
		SELECT username 
		FROM user
		WHERE username = '$user'
		AND password = '$password'
		") or die(mysql_error());
		$total =  mysql_num_rows($query);
	
		if($total > 0)
		{
				session_start();
				$_SESSION['username'] = $user;
				header('location: logout.php');
		}
		else 
		{
			echo"<p style='color:red;'>Fel användarnamn eller lösenord</p>";
		}
		
		 
	
	}
	 
?>	
             <form action="login.php" method="POST">
            <fieldset>
            
            <asp:Literal runat="server" ID="litMessage"></asp:Literal>

            <label for="username">Username:</label>
			<input type="text" name="username" id="username" value="" placeholder="Användarnamn"/>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" value="" placeholder="Lösenord" />

                <input id="Submit1" type="submit" name="submit" value="Login" data-role="button" data-inline="true" data-theme="b" />

            <hr />
            </fieldset>
        </form>	
            	             
            </div>
               
            <div data-theme="a" data-role="footer" data-position="fixed">
                <h3>
                    Design by Mario &amp; Sylvain
                </h3>
            </div>
        </div>
   </body>
</html>

