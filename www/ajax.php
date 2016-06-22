<?php

require_once('CASSA/pagefunctions.inc.php');

require_once 'CASSA/CASSA.class.php';

$CASSA = new CASSA($ldap);

switch($_POST['ajax'])
{
    case "checkusername":
        $username = trim(htmlentities($_POST['uid']));
        if($username){
            if (strlen($username) < 3)
            {
                echo "<span style='color:#f00'>Username too short</span>";
                break;
            }
            if(! $CASSA->check_username_available($username))
            {
                echo "<span style='color:#0c0'>Username $username is available</span>";
            }else{
                echo "<span style='color:#f00'>Username $username is not available</span>";
            }
        }
        break;
}

?>
