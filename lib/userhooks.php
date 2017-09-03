<?php

namespace OCA\Moe_Video;

use OCP\Util;
use OCP\User;
use OC\Files;

class UserHooks {
    private $userManager;
    private $UserFolder;

    public function __construct($userManager, $userFolder){
        $this->userManager = $userManager;
        $this->UserFolder = $userFolder;
    }

    public static function share($params) {
        if ( ($params['shareType'] === \OCP\Share::SHARE_TYPE_USER) || ($params['shareType'] === \OCP\Share::SHARE_TYPE_GROUP) ) {
            $params['shareType'] === \OCP\Share::SHARE_TYPE_USER ? $shareType = " with User: " : $shareType = " with Group: ";
            Util::writeLog('activity',"user:" . $params['uidOwner'] . " action:share " . $params['fileTarget'] . $shareType . $params['shareWith'], Util::INFO);
        }
        else {
            Util::writeLog('activity',"user:" . $params['uidOwner'] . " action:share " . $params['fileTarget'] . ' with link', Util::INFO);
        }
    }

    public function register() {
        $loginRecord = function($user) {
            Util::writeLog('core',"user:" . User::getDisplayName() . " action:login success", Util::INFO);
        };

        $logoutRecord = function() {
            Util::writeLog('core',"user:" . User::getDisplayName() . " action:logout success", Util::INFO);
        };

        $createRecord = function($node) {
            Util::writeLog('activity',"user:" . User::getDisplayName() . " action:creates " . $node->getName() . " success", Util::INFO);
        };

        $deleteRecord = function($node) {
            Util::writeLog('activity',"user:" . User::getDisplayName() . " action:deletes " . $node->getName() . " success", Util::INFO);
        };

        $renameRecord = function($node) {
            Util::writeLog('activity',"user:" . User::getDisplayName() . " action:renames " . $node->getName() . " success", Util::INFO);
        };

        $touchRecord = function($node) {
            Util::writeLog('activity',"user:" . User::getDisplayName() . " action:touches " . $node->getName() . " success", Util::INFO);
        };

        Util::connectHook('OCP\Share', 'post_shared', 'OCA\Moe_Video\UserHooks', 'share');

        $this->userManager->listen('\OC\User', 'postLogin', $loginRecord);
        $this->userManager->listen('\OC\User', 'logout', $logoutRecord);

        $this->UserFolder->listen('\OC\Files', 'postCreate', $createRecord);
        $this->UserFolder->listen('\OC\Files', 'postDelete', $deleteRecord);

        $this->UserFolder->listen('\OC\Files', 'postRename', $renameRecord);
        }
}

