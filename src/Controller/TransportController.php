<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendor\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TransportController extends AbstractController
{
    #[Route('/api/single-tenant-vendor/transports', methods: 'GET')]
    public function index(): Response
    {
        return new Response('Single tenant vendor transports');
    }
}
