<?php

namespace App\Http\Controllers\Web\Dashboard\Topic;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Topic\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Topic\CreateRequest;
use App\Http\Requests\Web\Dashboard\Topic\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Topic\EditRequest;
use App\Http\Requests\Web\Dashboard\Topic\IndexRequest;
use App\Http\Requests\Web\Dashboard\Topic\ShowRequest;
use App\Http\Requests\Web\Dashboard\Topic\StoreRequest;
use App\Http\Requests\Web\Dashboard\Topic\UpdateRequest;
use App\Topic;
use App\Mainsubcat;
use Illuminate\Http\Request;

/**
 * Templates
 *
 * @package    Template Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class TopicController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.topics.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.topics.create', $request->getTopic());
    }

    public function store(StoreRequest $request)
    {
        if ($topic = $request->persist()->getTopic()) {
            flashWebResponse('created', 'Topic');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.topics.show', $topic->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, Topic $topic)
    {
        return view('dashboard.pages.topics.show', $request->getTopic());
    }

    public function edit(EditRequest $request, Topic $topic)
    {
        return view('dashboard.pages.topics.edit', $request->getTopic());
    }

    public function update(UpdateRequest $request, Topic $topic)
    {
        if ($topic = $request->persist()->getTopic()) {
            flashWebResponse('updated', 'Topic');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.topics.show', $topic->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Topic $topic)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('Topic') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function get(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->template)) {
                return view('dashboard.pages.contents.ajax.template-'.$request->template);
            }
            return '<div></div>';
        }
        return httpWebResponse();
    }
}
