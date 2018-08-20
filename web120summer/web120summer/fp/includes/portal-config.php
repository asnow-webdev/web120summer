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
        $title = "Andrew's Final Project";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'buyers.php':
        $title = "Buyers Information";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'sellers.php':
        $title = "Sellers Information";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'area_info.php':
        $title = "Area Info";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'careers.php':
        $title = "Work with Cantu Group";
        $logo = 'fa-home';
        $PageID = 'Welcome';
    break;
        
    case 'contact.php':
        $title = "FP Contact Page";
        $logo = 'fa-pencil-square-o';
        $PageID = 'Contact Cantu Group';
    break;
        
    default:
        $title = THIS_PAGE;
        $logo = 'fa-home';
        $PageID = 'Welcome';
}

$nav['contact.php'] = 'Contact Cantu Group';
$nav['careers.php'] = 'Careers';
$nav['area_info.php'] = 'Area Info';
$nav['sellers.php'] = 'Sellers Info';
$nav['buyers.php'] = 'Buyers Info';
$nav['index.php'] = 'Welcome';


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







