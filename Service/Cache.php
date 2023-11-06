<?php
/**
 * Copyright © Magegang All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magegang\ClearConfigCache\Service;

use Magento\Framework\App\Cache\TypeListInterface;
use Psr\Log\LoggerInterface;

class Cache
{
    /**
     * @param \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList
     * @param \Psr\Log\LoggerInterface $logger
     * @param array $types
     */
    public function __construct(
        protected TypeListInterface $cacheTypeList,
        protected LoggerInterface $logger,
        protected array $types = []
    ) {
    }

    public function clean(array $types): void
    {
        foreach ($types as $type) {
            $this->cacheTypeList->cleanType($type);
        }
    }
}
