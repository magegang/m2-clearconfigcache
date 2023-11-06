<?php
/**
 * Copyright © Magegang All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magegang\ClearConfigCache\Observer;

use Magegang\ClearConfigCache\Service\Cache;
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Psr\Log\LoggerInterface;

class SystemConfigSave implements ObserverInterface
{
    /**
     * @param \Magegang\ClearConfigCache\Service\Cache $cacheService
     * @param \Psr\Log\LoggerInterface $logger
     * @param array $types
     */
    public function __construct(
        protected Cache $cacheService,
        protected LoggerInterface $logger,
        protected array $types = []
    ) {
    }

    /**
     * @param \Magento\Framework\Event\Observer $observer
     * @return void
     */
    public function execute(Observer $observer): void
    {
        try {
            $this->cacheService->clean($this->types);
        } catch (\Exception $e) {
            $this->logger->debug('Something went wrong during the process', ['message', $e->getMessage()]);
        }
    }
}
