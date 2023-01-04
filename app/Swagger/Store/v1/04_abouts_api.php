<?php
  
/**
*  @OA\Get(
*      path="/api/store/v1/abouts",
*      tags={"Api: Abouts"},
*      summary="(get about)",
*      operationId="get_about",  
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
*    )
*/

/**
*  @OA\Get(
*      path="/api/store/v1/abouts/{id}",
*      tags={"Api: Abouts"},
*      summary="(get single about)",
*      operationId="get_single_about",  
*      @OA\Parameter(
*          name="id",
*          in="path",
*          required=true,
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
*    )
*/