<?php

namespace App\Http\Controllers\Api\Store\v1\Badge;

use Auth;
use App\Save;
use App\Badge;
use App\Favorite;
use App\BadgeTemplate;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\Store\v1\Badge\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\Badge\IndexRequest;
use App\Http\Requests\Api\Store\v1\Badge\ShowRequest;
use Illuminate\Http\Request;

/**
 * Badges
 *
 * @package    Badge Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class BadgeController extends Controller
{

    public function index(Request $request)
    {
        $arr = [];
        $user = $request->user('api');
        if(!($request->user('api'))){
            return failedApiResponse('Oops, could not fetch the data.',null, '201');
        }

        $userId = $request->user('api')->id;

        if($userId){
            //single badge data
            if(isset($request->id) && $request->id != ""){
                $singleData = Badge::findOrFail($request->id);
                if($singleData){
                    $favorite = Favorite::where(['user_id' => $userId, 'badge_id' => $singleData->id])->first();
                    $save = Save::where(['user_id' => $userId, 'badge_id' => $singleData->id])->first();

                    $arr = array(
                        'id'          => $singleData->id,
                        'name'        => $singleData->name,
                        'description' => $singleData->description,
                        'image'       => asset('storage/badges/' . $singleData->image),
                        'favorite'    => (!empty($favorite)) ? true : false,
                        'save'        => (!empty($save)) ? true : false,
                        'created_at'  => (string) $singleData->created_at,
                        'updated_at'  => (string) $singleData->updated_at,
                    );

                    return showApiResponse('Badges data', $arr);
                }
                else{
                    return failedApiResponse('Oops, could not fetch the data.',null, '201');
                }

            }
            else{
               $badgeData = Badge::All();
               if($badgeData){
                 foreach($badgeData as $bg){
                    $favorite = Favorite::where(['user_id' => $userId, 'badge_id' => $bg->id])->first();
                    $save = Save::where(['user_id' => $userId, 'badge_id' => $bg->id])->first();

                     $arr[] = array(
                        'id'          => $bg->id,
                        'name'        => $bg->name,
                        'description' => $bg->description,
                        'image'       => asset('storage/badges/' . $bg->image),
                        'favorite'    => (!empty($favorite)) ? true : false,
                        'save'        => (!empty($save)) ? true : false,
                        'created_at'  => (string) $bg->created_at,
                        'updated_at'  => (string) $bg->updated_at,
                    );
                }

                return showApiResponse('Badges data', $arr);
               }
                return failedApiResponse('Oops, could not fetch the data.',null, '201');
            }
        }
        return failedApiResponse('Oops, could not fetch the data.',null, '201');
    }

    public function show(Request $request, $id)
    {
        $userId = Auth::id();
        $singleData = Badge::findOrFail($id);
        if($singleData){
            $favorite = Favorite::where(['user_id' => $userId, 'badge_id' => $singleData->id])->first();
            $save = Save::where(['user_id' => $userId, 'badge_id' => $singleData->id])->first();

            $arr = array(
                'id'          => $singleData->id,
                'name'        => $singleData->name,
                'description' => $singleData->description,
                'image'       => asset('storage/badges/' . $singleData->image),
                'favorite'    => (!empty($favorite)) ? true : false,
                'save'        => (!empty($save)) ? true : false,
                'created_at'  => (string) $singleData->created_at,
                'updated_at'  => (string) $singleData->updated_at,
            );

            return showApiResponse('Badges data', $arr);
        }
        else{
            return failedApiResponse('Oops, could not fetch the data.',null, '201');
        }
    }

    //  public function show(ShowRequest $request, Badge $badge)
    // {
    //     return $request->getBadge();
    // }

    public function templates(Request $request, $id)
    {
        $templates = [];
        $templates = BadgeTemplate::where('badge_id', $id)->get();

        if(sizeof($templates) > 0){
            foreach ($templates as $key => $template) {
                $template_value              = json_decode($template->value);
                $templateData['title']       = $template_value->title;
                $templateData['description'] = $template_value->description;
                $templateData['image']       = asset('storage/badge-templates/' . $template_value->image);
                $template->value = $templateData;
            }
            return showApiResponse('badge (templates)', $templates);
        }

        else{
            return failedApiResponse('Oops, could not fetch the data.',null, '201');
        }
    }

    public function favorites(Request $request)
    {
        $request->validate([
            'status'   => 'required',
            'id' => 'required'
        ]);

        $id = $request->id;

        $badge = Badge::where('status', 1)->where('id', $id)->first();

        $msg = 'Something went wrong, please try again later...';
        //removed form favorite...
        if ($request->has('status') && $request->status == 'removed') {

            $favorite = Favorite::where([
                'user_id'  => $request->user('api')->id,
                'badge_id' => $badge->id,
            ]);

            $msg = ($favorite->delete()) ? 'Badge has been removed successfully form favorite.' : 'Badge could not able to remove form favorite, please try again later...';
        }
        // add to favorite...
        if ($request->has('status') && $request->status == 'add') {

            $favorite = Favorite::create([
                'user_id'  => $request->user('api')->id,
                'badge_id' => $badge->id,
            ]);
            $msg = (!empty($favorite)) ? 'Badge has been added successfully form favorite.' : 'Badge could not able to add form favorite, please try again later...';
        }

        return successApiResponse($msg);
    }


    public function save(Request $request, $id)
    {
        $request->validate([
            'status'   => 'required',
        ]);

        $badge = Badge::where('status', 1)->where('id', $id)->first();

        $msg = 'Something went wrong, please try again later...';
        //removed form saveb...
        if ($request->has('status') && $request->status == 'unsave') {

            $saveb = Save::where([
                'user_id'  => $request->user('api')->id,
                'badge_id' => $badge->id,
            ]);

            $msg = ($saveb->delete()) ? 'Badge has been saved successfully.' : 'Badge could not able to save, please try again later...';
        }
        // add to saveb...
        if ($request->has('status') && $request->status == 'save') {

            $saveb = Save::create([
                'user_id'  => $request->user('api')->id,
                'badge_id' => $badge->id,
            ]);
            $msg = (!empty($saveb)) ? 'Badge has been saved successfully.' : 'Badge could not able to save, please try again later...';
        }

        return successApiResponse($msg);
    }
}
