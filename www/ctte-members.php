<?php

$ACCESS_LEVEL = 'committee';
$TOPLEVEL = 'ctte';
$PAGETITLE = ' - Membership List';
$TITLE = 'Membership List';

require_once('./CASSA/session.inc.php');
    
    $CASSA = new CASSA($ldap);
    
    $smarty->assign('currentusers', $CASSA->get_current_members());
    $smarty->assign('pendingusers', $CASSA->get_pending_members());
    if($_GET['expiredmembers'])
    {
        $smarty->assign('expiredusers', $CASSA->get_expired_members());        
    }
    display_page('listusers.tpl');

?>
