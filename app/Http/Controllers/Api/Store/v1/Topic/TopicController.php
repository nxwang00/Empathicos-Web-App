<?php

namespace App\Http\Controllers\Api\Store\v1\Topic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Topic;
use App\Entry;

class TopicController extends Controller
{
    public function index($cat_id)
    {
        $topics = Topic::where('category_id', $cat_id)->get();
        if($topics->isEmpty()){
            return failedApiResponse('No data found.', null, 400);
        }
        return successApiResponse('Topics Data', $topics, 200);
    }

    public function saveEntry(Request $request)
    {
        $entry = new Entry;
        $entry->entry = $request->entry_text;
        $entry->topic_id = $request->topic_id;
        $entry->user_id = $request->user_id;

        $entry->save();

        if (empty($entry->id)) {
            return failedApiResponse('Saving entry is failed.', null, 400);
        }

        return successApiResponse('Your entry is submitted', ['id'=>$entry->id], 200);
    }
}
