<?php

namespace App\Http\Controllers\Web\Dashboard\Content;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Content\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Content\CreateRequest;
use App\Http\Requests\Web\Dashboard\Content\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Content\EditRequest;
use App\Http\Requests\Web\Dashboard\Content\IndexRequest;
use App\Http\Requests\Web\Dashboard\Content\ShowRequest;
use App\Http\Requests\Web\Dashboard\Content\StoreRequest;
use App\Http\Requests\Web\Dashboard\Content\UpdateRequest;
use App\Content;
use App\Mainsubcat;
use Illuminate\Http\Request;

/**
 * Templates
 *
 * @package    Template Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class ContentController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.contents.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.contents.create', $request->getTemplate());
    }

    public function store(StoreRequest $request)
    {
        if ($content = $request->persist()->getTemplate()) {
            flashWebResponse('created', 'template');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.contents.show', $content->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show($id)
    {
        $content = Content::find($id);
        $arr = [];
        $arr['content'] = $content;
        $arr['category'] = Mainsubcat::where('id', $content->category_id)->pluck('title')->implode('');
        return view('dashboard.pages.contents.show', $arr);
    }

    public function edit(EditRequest $request, Content $content)
    {
        return view('dashboard.pages.contents.edit', $request->getTemplate($request->content));
    }

    public function update(UpdateRequest $request, Content $content)
    {
        if ($request->persist($request->content)->getTemplate()) {
            flashWebResponse('updated', 'Content');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.contents.show', $request->content->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Content $content)
    {
        if (request()->ajax()) {
            return ($request->persist($request->content)->getMsg()) ? trashedWebResponse('Content') : errorWebResponse();
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

    public function getCategoriesByMain($main_cat_id)
    {
        if ($main_cat_id === 'all' || $main_cat_id === '')
            $categories = Mainsubcat::all();
        else
            $categories = Mainsubcat::where('cat_id', $main_cat_id)->get();
        return $categories;
    }
}
