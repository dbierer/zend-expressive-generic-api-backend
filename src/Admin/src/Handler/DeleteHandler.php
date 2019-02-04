<?php
declare(strict_types=1);

namespace Admin\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

/**
 * Deletes a row from any table
 * Path: /api/admin/:table/:id
 * HTTP Method: DELETE
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Admin\Handler\DeleteHandler")
 * @OA\Delete(
 *     path="/api/admin{/table}{/id}",
 *     @OA\Response(response="200", description="_table_ and _id_ params are mandatory.  Returns 1 if successful, 0 if not successful"),
 *     @OA\Parameter(name="table",@OA\Schema(type="string"),in="query",description="Name of the target database table"),
 *     @OA\Parameter(name="id",@OA\Schema(type="int"),in="query",description="ID of the primary key for the row to be deleted")
 * )
*/
class DeleteHandler extends Base
{
    /**
     * Handles request
     * 
     * @todo  Need to figure out how to handle relationships: if key data changes, should the delete cascade?
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @return Zend\Diactoros\Response\JsonResponse $response
     */
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        return new JsonResponse(['test' => 'TEST']);
    }
}
