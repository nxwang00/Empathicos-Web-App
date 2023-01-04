<?php
/**
*  @OA\Get(
*      path="/api/store/v1/faqs",
*      tags={"Api: Faqs"},
*      summary="(get all faqs)",
*      operationId="all_faqs", 
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