<?php

declare(strict_types=1);

namespace OCA\Kinship\Listener;

use OCP\App\Events\AppNavigationEvent;
use OCP\EventDispatcher\Event;
use OCP\EventDispatcher\IEventListener;

class NavigationListener implements IEventListener
{
    public function handle(Event $event): void
    {
        if (!$event instanceof AppNavigationEvent) {
            return;
        }

        $event->getNavigation()->add([
            'id' => 'kinship',
            'order' => 50,
            'href' => '/index.php/apps/kinship/',
            'name' => 'Kinship',
            'icon' => \OC::$server->getURLGenerator()->imagePath('kinship', 'app.svg'),
        ]);
    }
}
