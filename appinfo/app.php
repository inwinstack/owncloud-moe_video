<?php
/**
 * ownCloud - moe_video
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Duncan Chiang <duncan.c@inwinstack.com>
 * @copyright inwinStack.Inc
 */

namespace OCA\Moe_Video\AppInfo;

//$app = new Application();  
//$app->getContainer()->query('UserHooks')->register(); 



$l = \OC::$server->getL10N('moe_video');


\OCA\Files\App::getNavigationManager()->add([
        "icon"=>"video",
	"id" => 'video',
	"appname" => 'moe_video',
	"script" => 'list.php',
	"order" => 40,
	"name" => $l->t('Learning Video')
]);
