<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendor;

use Ferdyrurka\SingleTenantVendor\DependencyInjection\SingleTenantVendorExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class SingleTenantVendorBundle extends AbstractBundle
{
    public function getContainerExtension(): ExtensionInterface
    {
        return new SingleTenantVendorExtension();
    }
}
