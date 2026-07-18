<?php

declare(strict_types=1);

namespace OCA\Kinship\Controller;

use OCA\Kinship\Service\PersonService;
use OCP\AppFramework\ApiController;
use OCP\AppFramework\Http\DataResponse;
use OCP\IRequest;

class PersonController extends ApiController
{
    public function __construct(
        string $appName,
        IRequest $request,
        private PersonService $service
    ) {
        parent::__construct(
            $appName,
            $request
        );
    }

    public function index(): DataResponse
    {
        return new DataResponse([
            'people' => $this->service->getAll()
        ]);
    }

    public function show(
        int $id
    ): DataResponse {
        return new DataResponse(
            $this->service->get($id)
        );
    }
}
