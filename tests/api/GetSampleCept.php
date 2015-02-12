<?php 

$I = new ApiTester($scenario);

$I->wantTo('Request a single sample.');
$I->lookForwardTo('Obtaining the requested sample.');

$I->sendGET('v1/sample/1');

$I->seeResponseCodeIs(200);
$I->seeResponseIsJson();
