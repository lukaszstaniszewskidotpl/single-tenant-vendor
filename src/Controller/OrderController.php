<?php

declare(strict_types=1);

namespace Ferdyrurka\SingleTenantVendor\Controller;

use Ferdyrurka\SingleTenantVendor\Repository\OrderRepositoryInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    public function __construct(private readonly OrderRepositoryInterface $repository)
    {
    }

    #[Route('/api/single-tenant-vendor/orders', methods: 'GET')]
    public function index(): Response
    {
        return new JsonResponse(
            $this->repository->findAll()
        );
    }
}
