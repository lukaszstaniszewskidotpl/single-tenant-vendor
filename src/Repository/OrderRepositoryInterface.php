<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendor\Repository;

interface OrderRepositoryInterface
{
    public function findAll(): array;
}
