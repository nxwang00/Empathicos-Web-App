<?php
/**
*  @OA\Post(
*      path="/api/store/v1/payment/create",
*      tags={"Api: Payments"},
*      summary="(store payment)",
*      operationId="store_payment",  
*      @OA\Parameter(
*          name="amount",
*          in="query",
*          required=true,
*          description="Will be number.",
*          @OA\Schema(
*              type="number"
*          )
*      ),
*      @OA\Parameter(
*          name="shipping",
*          in="query",
*          required=true,
*          description="Will be number.",
*          @OA\Schema(
*              type="number"
*          )
*      ),
*      @OA\Parameter(
*          name="items",
*          in="query",
*          description="Will be array.",
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
    )
*/
