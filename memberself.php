<?php

require_once('./PLUG/session.inc.php');
    
    $memberself = new Person($ldap);
    $memberauthdata = $Auth->getAuthData();
    $memberself->load_ldap($memberauthdata['dn']);
    
    //print_r($memberself->userarray());
    $smarty->assign('memberself', $memberself->userarray());
    
    display_page('memberself.tpl');
    
?>
