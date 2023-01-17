<?php

namespace App\Http\Controllers\Api\Store\v1\Journal;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Journal;

class JournalController extends Controller
{
    public function save(Request $request)
    {
        $request->validate([
            'title'   => 'required|string',
            'description' => 'required|string',
            'user_id' => 'required',
        ]);

        $id = $request->id;

        if (is_null($id))
        {
            $journal = new Journal;
        }
        else
        {
            $journal = Journal::find($id);
        }

        $journal->title = $request->title;
        $journal->description = $request->description;
        $journal->user_id = $request->user_id;

        $saved = $journal->save();
        if ($saved)
        {
            $rst = [];
            $rst['id'] = $journal->id;
            return successApiResponse('Journal saved successfully.', $rst, 200);
        }
        return failedApiResponse('failed', null, 500);
    }
}
