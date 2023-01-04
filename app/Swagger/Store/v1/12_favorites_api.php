<?php
/**
*  @OA\Get(
*      path="/api/store/v1/favorites",
*      tags={"Api: Favorites"},
*      summary="(get all favorites)",
*      operationId="all_favorites", 
*      @OA\Response(
*          response=200,
*          description="Success",
*          @OA\MediaType(
*              mediaType="application/json",
*          )
*      ),
*      @OA\Response(
*          response=401,
*          description="Unauthorized"
*      ),
*      @OA\Response(
*          response=400,
*          description="Invalid request"
*      ),
*      @OA\Response(
*          response=404,
*          description="Not found"
*      ),
*      security={
*          {"bearerAuth": {}}
*      }
*  )
*/

/**
*  @OA\Post(
*      path="/api/store/v1/badges/favorites/{id}",
*      tags={"Api: Favorites"},
*      summary="(add to favorite)",
*      operationId="add_to_favorite", 
*      @OA\Parameter(
*          name="id",
*          in="path",
*          required=true,
*          @OA\Schema(
*              type="string"
*          )
*      ),  
*      @OA\Parameter(
*          name="status",
*          in="query",
*          required=true,
*          description="Will add or removed.",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Response(
*          response=200,
*          description="Success",
*          @OA\MediaType(
*              mediaType="application/json",
*          )
*      ),
*      @OA\Response(
*          response=401,
*          description="Unauthorized"
*      ),
*      @OA\Response(
*          response=400,
*          description="Invalid request"
*      ),
*      @OA\Response(
*          response=404,
*          description="Not found"
*      ),
*      security={
*          {"bearerAuth": {}}
*      }
    )
*/


/**
*  @OA\Post(
*      path="/api/store/v1/badges/save/{id}",
*      tags={"Api: Save"},
*      summary="(add to save)",
*      operationId="add_to_save", 
*      @OA\Parameter(
*          name="id",
*          in="path",
*          required=true,
*          @OA\Schema(
*              type="string"
*          )
*      ),  
*      @OA\Parameter(
*          name="status",
*          in="query",
*          required=true,
*          description="Will save or unsave.",
*          @OA\Schema(
*              type="string"
*          )
*      ),
*      @OA\Response(
*          response=200,
*          description="Success",
*          @OA\MediaType(
*              mediaType="application/json",
*          )
*      ),
*      @OA\Response(
*          response=401,
*          description="Unauthorized"
*      ),
*      @OA\Response(
*          response=400,
*          description="Invalid request"
*      ),
*      @OA\Response(
*          response=404,
*          description="Not found"
*      ),
*      security={
*          {"bearerAuth": {}}
*      }
    )
*/