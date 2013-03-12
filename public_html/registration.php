<!DOCTYPE html>
<html lang="en">

<?php
 require ("includes/connection/connection.php");
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
             	<form action="process.cfm" method="post">
 
<fieldset data-role="fieldcontain">
<label for="username">Username:</label>
<input type="text" name="username" id="username">
</fieldset>
 
<fieldset data-role="fieldcontain">
<label for="password">Password:</label>
<input type="password" name="password" id="password">
</fieldset>
 
<fieldset data-role="fieldcontain">
<label for="password2">Confirm Password:</label>
<input type="password" name="password2" id="password2">
</fieldset>
 
<fieldset data-role="fieldcontain">
<label for="email">Email:</label>
<input type="email" name="email" id="email">
</fieldset>
 


<input type="submit" value="Register">
 
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

