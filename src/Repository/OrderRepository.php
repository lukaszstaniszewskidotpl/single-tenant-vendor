<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendor\Repository;

class OrderRepository implements OrderRepositoryInterface
{
    public function findAll(): array
    {
        return [
            'data from single tenant vendor',
        ];
    }
}
