<?php
  
/**
*  @OA\Get(
*      path="/api/store/v1/products",
*      tags={"Api: Products"},
*      summary="(get product)",
*      operationId="get_product",  
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
*      path="/api/store/v1/products/{id}",
*      tags={"Api: Products"},
*      summary="(get single product)",
*      operationId="get_single_product",  
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