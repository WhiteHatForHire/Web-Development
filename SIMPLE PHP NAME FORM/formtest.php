<?php  // formtest.php
if (isset($_POST['name'])) $name = $_POST['name'];
else $name = "(not entered)";

echo <<<_END
    <HTML>
        <head> 
            <title>Form Test</title>
        </head>
        <body>  
        Your name is: $name<br>
        <form method="post" action="formtest.php">  
        What is your name?
        <input type="text" name="name">
        <input type="submit">   
        </form>
        </body>
    </HTML>
_END;

