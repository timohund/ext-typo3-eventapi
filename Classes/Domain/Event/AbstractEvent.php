<?php

namespace Dkd\TYPO3EventApi\Domain\Event;

use Dkd\TYPO3EventApi\Domain\Context\AbstractContext;

abstract class AbstractEvent {

    /**
     * @var AbstractContext
     */
    protected $context;

    /**
     * @param \Dkd\TYPO3EventApi\Domain\Context\AbstractContext $context
     */
    public function setContext(AbstractContext $context)
    {
        $this->context = $context;
    }

    /**
     * @return \Dkd\TYPO3EventApi\Domain\Context\AbstractContext
     */
    public function getContext()
    {
        return $this->context;
    }
}