<?php
/**
*  @OA\Post(
*      path="/api/store/v1/auth/signup",
*      tags={"Api: Authentication"},
*      summary="(auth - signup)",
*      operationId="auth_signup",  
*	   description="Api for user signup.",
*      @OA\Parameter( 
*          name="device_id",
*          in="query",
*          required=true,
*          @OA\Schema(
*              type="string",
*              default="device_id"
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
*      path="/api/store/v1/profile",
*      tags={"Api: Authentication"},
*      summary="(auth profile)",
*      description="Api for user profile",
*      operationId="auth_profile",
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
*     ),
*     security={
*         {"bearerAuth": {}}
*     }
*  )
*/


/**
*  @OA\Post(
*      path="/api/store/v1/profile/{id}",
*      tags={"Api: Authentication"},
*      summary="(auth - profile)",
*      operationId="auth_profile",  
*	   description="Api for user profile.",
*      @OA\Parameter( 
*          name="id",
*          in="path",
*          required=true,
*          @OA\Schema(
*              type="string",
*          )
*      ),
*      @OA\Parameter( 
*          name="name",
*          in="query",
*          required=true,
*          @OA\Schema(
*              type="string",
*              default="John Rarity"
*          )
*      ),   
*      @OA\Parameter( 
*          name="email",
*          in="query",
*          required=true,
*          @OA\Schema(
*              type="string",
*              default="example@gmail.com"
*          )
*      ),    
*      @OA\Parameter( 
*          name="about",
*          in="query",
*          @OA\Schema(
*              type="string",
*              format= "textarea",
*			   default="About you"
*          )
*      ),
*      @OA\Parameter( 
*          name="birthday",
*          in="query",
*          @OA\Schema(
*              type="string",
*             format="date",
*              default="20-12-1998"
*          )
*      ),
*      @OA\Parameter( 
*          name="image",
*          in="query",
*          required=false,
*          @OA\Schema(
*              type="file",
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

