<?php
namespace Admin\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

/**
 * Lists one or more rows from any table
 * Path: /api/admin/:table/:id[/:page]
 * HTTP Method: GET
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Admin\Handler\ListHandler")
 * @OA\Get(
 *     path="/api/admin{/table}{/id}{/page}",
 *     @OA\Response(response="200", description="_table_ and _id_ params are mandatory. If _id_ param == 0, return all rows paginated"),
 *     @OA\Parameter(name="table",@OA\Schema(type="string"),in="query",description="Name of the target database table (mandatory)"),
 *     @OA\Parameter(name="id",@OA\Schema(type="int"),in="query",description="ID of the primary key for the row to be listed.  If set to 0 will return all rows. (mandatory)"),
 *     @OA\Parameter(name="page",@OA\Schema(type="int"),in="query",description="Used for pagination. Used to calculate the SQL OFFSET (optional)")
 * )
*/
class ListHandler extends Base
{
    /**
     * Handles request
     * 
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @return Zend\Diactoros\Response\JsonResponse $response
     */
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        // if 'id' is present, just return 1 single row
        // if 'id' is 0, return all rows paginated
        return new JsonResponse(['test' => 'TEST']);
    }
}
