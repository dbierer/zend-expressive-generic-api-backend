<?php
namespace Admin\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

/**
 * Updates a row from any table
 * Path: /api/admin/:table/:id
 * HTTP Method: PUT,PATCH
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Admin\Handler\EditHandler")
 * @OA\Put(
 *     path="/api/admin{/table}{/id}",
 *     @OA\Response(response="200", description="_table_ and _id_ params are mandatory. Returns 1 if successful, 0 if not"),
 *     @OA\Parameter(name="table",@OA\Schema(type="string"),in="query",description="Name of the target database table"),
 *     @OA\Parameter(name="id",@OA\Schema(type="int"),in="query",description="ID of the primary key for the row to be replaced")
 * )
 * @OA\Patch(
 *     path="/api/admin{/table}{/id}",
 *     @OA\Response(response="200", description="_table_ and _id_ params are mandatory. Returns 1 if successful, 0 if not"),
 *     @OA\Parameter(name="table",@OA\Schema(type="string"),in="query",description="Name of the target database table"),
 *     @OA\Parameter(name="id",@OA\Schema(type="int"),in="query",description="ID of the primary key for the row to be updated")
 * )
*/
class EditHandler extends Base
{
    /**
     * Handles request
     * 
     * @todo  Need to figure out how to handle relationships: if key data changes, should it cascade?
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @return Zend\Diactoros\Response\JsonResponse $response
     */
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        // if HTTP method == PUT then do DELETE and then ADD
        // if HTTP method == PATCH then do UPDATE
        return new JsonResponse(['test' => 'TEST']);
    }
}
