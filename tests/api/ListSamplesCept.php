<?php 

$I = new ApiTester($scenario);

$I->wantTo('Get a list of samples.');
$I->lookForwardTo('Seeing a list of requested samples.');

$I->sendGET('v1/sample');

$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
