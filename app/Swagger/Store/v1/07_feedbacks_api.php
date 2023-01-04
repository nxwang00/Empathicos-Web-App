<?php
/**
*  @OA\Post(
*      path="/api/store/v1/feedback/send",
*      tags={"Api: Feedbacks"},
*      summary="(store feedback)",
*      operationId="store_feedback",  
*      @OA\Parameter(
*          name="message",
*          in="query",
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
