<?php
  
/**
*  @OA\Get(
*      path="/api/store/v1/badges",
*      tags={"Api: Badge "},
*      summary="(get badge )",
*      operationId="get_badge",  
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
*      path="/api/store/v1/badges/{id}",
*      tags={"Api: Badge "},
*      summary="(get single badge )",
*      operationId="get_single_badge",  
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


/**
*  @OA\Get(
*      path="/api/store/v1/badge-templates/{id}",
*      tags={"Api: Badge "},
*      summary="(get badge templates badge )",
*      operationId="get_badge_templates_badge",  
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