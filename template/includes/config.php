<?php

// this helps eliminate PHP date errors
// date_default_timezone_set('America/Los Angeles');

// this constant allows a page to know it's own url/name
define ('THIS_PAGE', basename($_SERVER['PHP_SELF']));

// this allows us to dynamically change certain elements based on the page we are on
switch(THIS_PAGE)
{
    case 'template.php':
        $title = 'Night Owl Mercantile - Home';
        $logo = 'fa fa-fw fa-home'; //change to this font awesome icon
        $PageID = 'Catalog';
        break;
    case 'orderform.php':
        $title = 'Custom Order Form';
        $logo = 'fa fa-fw fa-cube';
        $PageID = 'Custom Order Form';
        break;
    case 'about.php':
        $title = 'About Us';
        $logo = 'fa fa-fw fa-camera-retro';
        $PageID = 'Who We Are';
        break;
    case 'contact.php':
        $title = 'Contact Us';
        $logo = 'fa fa-fw fa-calendar';
        $PageID = 'Contact Us';
        break;
    case 'cart.php':
        $title = 'Shopping Cart';
        $logo = 'fa fa-fw fa-map-o';
        $PageID = 'Shopping Cart';
        break;
    case 'thanks.php':
        $title = 'Thank You!';
        $logo = 'fab fa-youtube';
        $PageID = 'Thanks You!';
        break;
    default:
        $title = THIS_PAGE;
        $logo = '';
        $PageID = '';
}

?>