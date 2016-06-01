<!DOCTYPE html>
<html> 
<link rel="stylesheet" href="templatemo_style.css" /> 

         

 <head>
    
    
        <title>RMgX</title>
    </head>
    <body>
   <?php    
 include_once"test.php";

 require_once 'Twig/Autoloader.php';
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);


	
 $sql = 'SELECT * FROM interns';
   $retval = mysql_query( $sql );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   echo $twig->render('kolo.twig');
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

echo $twig->render('kolo1.twig', 
    array('navigation' => array(
'na' => $row['names'] 
    )
    ));  
	$as['aa']=$row['names']; 
  
  }
   ?>
        </body>
</html>