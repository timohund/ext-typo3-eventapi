<?php

namespace Dkd\TYPO3EventApi\Tests\Integration\DataHandler;

use Dkd\TYPO3EventApi\Domain\Event\Page\Changed\SelfChangedEvent;
use Dkd\TYPO3EventApi\Tests\Integration\AbstractIntegrationTest;
use TYPO3\CMS\Core\DataHandling\DataHandler;

class DataHandlerTestCase extends AbstractIntegrationTest {

    /**
     * @var DataHandler
     */
    protected $dataHandler;

    /**
     * @test
     */
    public function getTriggerSelfChangedEventWhenTitleOfPageWasChanged() {
        $eventWasFired = false;
        $this->dispatcher->subscribe('Page::Changed::Self', function($event) use (&$eventWasFired) {
            if($event instanceof SelfChangedEvent) {
                $eventWasFired = true;
            }

            $eventWasFired = false;
        });

        $this->dataHandler->updateDB();
        $this->dataHandler->process_datamap();
        $this->assertTrue($eventWasFired);
    }
}