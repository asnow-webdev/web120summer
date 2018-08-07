<?php
/*
portal-config.php

Used to store all of our WEB120 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;

switch(THIS_PAGE) {
    
    case 'index.php':
        $title = "Andrew's WEB120 Main Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'big/index.php':
        $title = "Andrew's WEB120 Big Project";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'aia.php':
        $title = "Andrew's WEB120 AIA Page";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'flowchart.php':
        $title = "Andrew's WEB120 Flowchart";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'fp/index.php':
        $title = "Andrew's WEB120 Final Project";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'contactme.php':
        $title = "Andrew's WEB120 Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Andrew';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

$nav['index.php'] = 'Welcome';
$nav['big/index.php'] = 'Big';
$nav['aia.php'] = 'AIA';
$nav['flowchart.php'] = 'Flowchart';
$nav['fp/index.php'] = 'Final Project';
$nav['contactme.php'] = 'Contact Andrew';


/*Here we're creating a function to generate links and keep the highlight on the current page



<li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
      <li><a href="aia.php">AIA</a></li>
      <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Andrew</a></li>
      
*/


function makeLinks($nav)
{
    $myReturn = '';
    foreach($nav as $url => $text){
        
        if($url == THIS_PAGE){
           $myReturn .= "<li><a class=\"selected\" href=\"$url\">$text</a></li>"; 
        }else{
            $myReturn .= "<li><a href=\"$url\">$text</a></li>";
        }
        
        
        
        
    }
    
    return $myReturn;
}
?>







