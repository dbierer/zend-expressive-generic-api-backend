<?php
namespace Admin\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

/**
 * Adds a row to any table
 * Path: /api/admin/:table
 * HTTP Method: POST
 * 
 * @author doug@unlikelysource.com
 * @OA\Schema(schema="Admin\Handler\AddHandler")
 * @OA\Post(
 *     path="/api/admin{/table}",
 *     @OA\Response(response="200", description="(int) last insert ID if successful, 0 if not"),
 *     @OA\Parameter(name="table",@OA\Schema(type="string"),in="query",description="Name of the target database table")
 * )
*/
class AddHandler extends Base
{
    /**
     * Handles request
     * 
     * @param Psr\Http\Message\ServerRequestInterface $request
     * @return Zend\Diactoros\Response\JsonResponse $response
     */
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        return new JsonResponse(['test' => 'TEST']);
    }
}
