<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;


/**
 * @OA\Post(
 *    path="/api/posts",
 *    summary="Создание",
 *    tags={"Post"},
 *    @OA\RequestBody(
 *        @OA\JsonContent(
 *            allOf={
 *                @OA\Schema(
 *                    @OA\Property(property="title", type="string", example="Some title"),
 *                    @OA\Property(property="likes", type="integer", example=200)
 *                )
 *            }
 *        )
 *    ),
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(
 *                property="data",
 *                type="object",
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="likes", type="integer", example=200)
 *            )
 *        )
 *    )
 * ),
 * 
 * @OA\Get(
 *    path="/api/posts",
 *    summary="Список",
 *    tags={"Post"},
 *    
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="data", type="array", @OA\Items(
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="likes", type="integer", example=200)
 *            )),
 *        ),
 *    ),
 * ),
 * 
 * @OA\Get(
 *    path="/api/posts/{post}",
 *    summary="Еденичная запись",
 *    tags={"Post"},
 *    @OA\Parameter(
 *        description="ID поста",
 *        in="path",
 *        name="post",
 *        required=true,
 *        example=1,
 *    ),
 *    
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="data", type="object",
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="likes", type="integer", example=200)
 *            ),
 *        ),
 *    ),
 * ),
 * 
 * @OA\Patch(
 *    path="/api/posts/{post}", 
 *    summary="Обновление",
 *    tags={"Post"},
 *    @OA\Parameter(
 *        description="ID поста",
 *        in="path",
 *        name="post",
 *        required=true,
 *        example=2,
 *    ),
 *    
 *    @OA\RequestBody(
 *        @OA\JsonContent(
 *            allOf={
 *                @OA\Schema(
 *                    @OA\Property(property="title", type="string", example="Some title for edit"),
 *                    @OA\Property(property="likes", type="integer", example=21)
 *                )
 *            }
 *        )
 *    ), 
 *
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="data", type="object",
 *                @OA\Property(property="id", type="integer", example=1),
 *                @OA\Property(property="title", type="string", example="Some title"),
 *                @OA\Property(property="likes", type="integer", example=200)
 *            ),
 *        ),
 *    ),
 * ),
 * 
 * @OA\Delete(
 *    path="/api/posts/{post}",
 *    summary="Удаление",
 *    tags={"Post"},
 *    @OA\Parameter(
 *        description="ID поста",
 *        in="path",
 *        name="post",
 *        required=true,
 *        example=1,
 *    ),
 *    
 *    @OA\Response(
 *        response=200,
 *        description="OK",
 *        @OA\JsonContent(
 *            @OA\Property(property="message", type="string", example="done"),
 *        ),
 *    ),
 * ),
 */


class PostController extends Controller
{

}
