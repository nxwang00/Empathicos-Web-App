<?php
/**
*  @OA\Post(
*      path="/api/store/v1/invitation/send",
*      tags={"Api: Invitations"},
*      summary="(store invitation)",
*      operationId="store_invitation",  
*      @OA\Parameter(
*          name="name",
*          in="query",
*          required=true,
*          @OA\Schema(
*              type="string"
*          )
*      ), 
*      @OA\Parameter(
*          name="email",
*          in="query",
*          required=true,
*          @OA\Schema(
*              type="string"
*          )
*      ), 
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
