<?php
  
/**
*  @OA\Get(
*      path="/api/store/v1",
*      tags={"Api: Badge Category"},
*      summary="(get badge category)",
*      operationId="get_badge_category",  
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
*      path="/api/store/v1/category/{id}",
*      tags={"Api: Badge Category"},
*      summary="(get single badge category)",
*      operationId="get_single_badge_category",  
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