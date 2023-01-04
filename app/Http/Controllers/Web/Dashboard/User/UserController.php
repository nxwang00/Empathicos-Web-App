<?php

namespace App\Http\Controllers\Web\Dashboard\User;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\User\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\User\CreateRequest;
use App\Http\Requests\Web\Dashboard\User\DestroyRequest;
use App\Http\Requests\Web\Dashboard\User\EditRequest;
use App\Http\Requests\Web\Dashboard\User\IndexRequest;
use App\Http\Requests\Web\Dashboard\User\ShowRequest;
use App\Http\Requests\Web\Dashboard\User\StatusRequest;
use App\Http\Requests\Web\Dashboard\User\StoreRequest;
use App\Http\Requests\Web\Dashboard\User\UpdateRequest;
use App\User;
use Illuminate\Http\Request;
/**
 * Users
 *
 * @package    User Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class UserController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.users.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.users.create', $request->getUser());
    }

    public function store(StoreRequest $request)
    {
        if ($user = $request->persist()->getUser()) {
            flashWebResponse('created', 'user');
            return redirect()->route('admin.users.show', $user->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, User $user)
    {
        return view('dashboard.pages.users.show', $request->getUser());
    }

    public function edit(EditRequest $request, User $user)
    {
        return view('dashboard.pages.users.edit', $request->getUser());
    }

    public function update(UpdateRequest $request, User $user)
    {
        if ($user = $request->persist()->getUser()) {
            flashWebResponse('updated', 'user');
            return redirect()->route('admin.users.show', $user->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, User $user)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('user') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, User $user)
    {
        if (request()->ajax()) {
            return ($user = $request->persist()->getUser()) ? statusWebResponse(($user->status == 1) ? 'User has been active successfully.' : 'User has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }
    
    //notification
    public function notificationView(CreateRequest $request){
        return view('dashboard.pages.notification.create', $request->getUser());
    }
    
    public function sendPushNotification(Request $request){
        $tkn = [];
        if($request->title == "" && $request->description == ""){
            flashWebResponse('error','Please enter the title and description for the notification');
            return redirect()->back();
        }
        
        $deviceTokens = User::whereNotNull('device_token')->get();
        foreach($deviceTokens as $dt){
            $tkn[] = $dt->device_token;
            
        }
        $url = 'https://fcm.googleapis.com/fcm/send';

        $fields = array (
            'registration_ids' => $tkn,
            'data' => array (
                "title" => $request->title,
                "body" => $request->description
            ),
            'notification' => array (
                "title" => $request->title,
                "body" => $request->description
            )
        );
        $fields = json_encode ( $fields );
    
        $headers = array (
                'Authorization: key=' . "AAAArF_BWp8:APA91bG8YYYdPOQT77K6aJ_6Pw_becwBu-BWZPQW-OS9bQ8tI7kozS-HQCfNZMbcAZKkOc-JgtmDkM9K0uvIFFre2Qi9nZvNZ4ztI26Vl9NIle03tFhmGI4RVvAPMVTDhGILbdebZVpA",
                'Content-Type: application/json'
        );
    
        $ch = curl_init ();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, true );
        curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );
    
        $result = curl_exec ( $ch );
        
        curl_close ( $ch );
        
        $result = json_decode($result);
        if($result->success > 0){
            flashWebResponse('created', 'Notification has been sent successfully!');
            return redirect()->back();
        }
        flashWebResponse('error','There are some error while sending the notification');
        return redirect()->back();
    }
}
