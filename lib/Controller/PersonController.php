<?php

declare(strict_types=1);

namespace OCA\Kinship\Controller;

use OCP\AppFramework\ApiController;
use OCP\AppFramework\Http\DataResponse;
use OCP\IRequest;

class PersonController extends ApiController
{
    public function __construct(
        string $appName,
        IRequest $request
    ) {
        parent::__construct(
            $appName,
            $request
        );
    }

    /**
     * Return all people.
     *
     * @return DataResponse
     */
    public function index(): DataResponse
    {
        return new DataResponse([
            'people' => []
        ]);
    }

    /**
     * Create a person.
     *
     * @return DataResponse
     */
    public function create(): DataResponse
    {
        return new DataResponse([
            'message' => 'Person creation will be implemented with the database layer.'
        ]);
    }

    /**
     * Return a single person.
     *
     * @param int $id
     * @return DataResponse
     */
    public function show(int $id): DataResponse
    {
        return new DataResponse([
            'id' => $id,
            'message' => 'Person lookup will be implemented with the repository layer.'
        ]);
    }

    /**
     * Update a person.
     *
     * @param int $id
     * @return DataResponse
     */
    public function update(int $id): DataResponse
    {
        return new DataResponse([
            'id' => $id,
            'message' => 'Person update will be implemented later.'
        ]);
    }

    /**
     * Delete a person.
     *
     * @param int $id
     * @return DataResponse
     */
    public function destroy(int $id): DataResponse
    {
        return new DataResponse([
            'id' => $id,
            'message' => 'Person deletion will be implemented later.'
        ]);
    }
}
