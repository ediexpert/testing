<?php

include_once("connection.php");

if ($_REQUEST['email'] != '') {
    $responsef = array();
    $sTableName = 'User_Registration';
    $aData = $_REQUEST;
    $oGeneral->check_duplicate_record($sTableName, 'email', $_REQUEST['email']);
    $iCount = $oGeneral->icount;
    $aCount = $oGeneral->acount;
    if ($iCount > 0) {
        $iUserID = $aCount[0]['userid'];
        
            $aData['active'] = 1;
            $oGeneral->update_data($sTableName, 'userid', $aData, $iUserID);
            $response['status'] = "success";
        $response['message'] = $aMessage[110];
    } else {
        $response['status'] = "error";
        $response['message'] = $aMessage[108];
    }
} else {
    $response['status'] = "error";
    $response['message'] = $aMessage[109];
}
$responsef['response'] = $response;


echo json_encode($responsef);
?>
