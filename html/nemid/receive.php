<?php header('Content-Type: application/json'); ?>

<?php
/*
* Copyright (c) 2016, Signaturgruppen  <info@signaturgruppen.dk>.
* All rights reserved.
* @license    See separate agreement regarding license information
*/
require_once __DIR__ . '/vendor/autoload.php';

\Signaturgruppen\SPS\Demo\Configuration::loadConfig();

$postResult = $_POST["result"];

$validator = new \Frame\NemIDFlowValidator();
try{
    $flowResult = $validator->validate($postResult);

    //CPRSERVICE uses cURL, you need trust for SSL for tuservices.siganturgruppen.dk/tuservices-test.signaturgruppen.dk
    //$cprService = new \Signaturgruppen\SPS\Services\PidMatchService();
    //$cprMatched = $cprService->pidMatchesCpr($flowResult->AuthenticationInfo->Pid, "1402263260");
    //$flowResult->AuthenticationInfo contains the NemID authentication info
    //EXAMPLE: Get the PID: $flowResult->AuthenticationInfo->Pid;
    echo json_encode($flowResult->AuthenticationInfo);
}catch (\Signaturgruppen\SPS\Frame\ValidationException $exeption){
    echo json_encode(array('error' => true));
}

?>
