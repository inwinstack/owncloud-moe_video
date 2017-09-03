<?php

namespace OCA\Moe_Video\AppInfo;

use \OCP\AppFramework\App;

use \OCA\Moe_Video\UserHooks;

class Application extends App {

    public function __construct(array $urlParams=array()){
        parent::__construct('moe_video', $urlParams);

        $container = $this->getContainer();
    }
}
