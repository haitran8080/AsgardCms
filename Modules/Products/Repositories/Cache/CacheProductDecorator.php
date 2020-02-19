<?php

namespace Modules\Products\Repositories\Cache;

use Modules\Products\Repositories\ProductRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheProductDecorator extends BaseCacheDecorator implements ProductRepository
{
    public function __construct(ProductRepository $product)
    {
        parent::__construct();
        $this->entityName = 'products.products';
        $this->repository = $product;
    }
}
