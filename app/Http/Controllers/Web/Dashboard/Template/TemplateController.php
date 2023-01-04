<?php

namespace App\Http\Controllers\Web\Dashboard\Template;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Template\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Template\CreateRequest;
use App\Http\Requests\Web\Dashboard\Template\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Template\EditRequest;
use App\Http\Requests\Web\Dashboard\Template\IndexRequest;
use App\Http\Requests\Web\Dashboard\Template\ShowRequest;
use App\Http\Requests\Web\Dashboard\Template\StoreRequest;
use App\Http\Requests\Web\Dashboard\Template\UpdateRequest;
use App\Template;
use Illuminate\Http\Request;

/**
 * Templates
 *
 * @package    Template Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class TemplateController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.templates.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.templates.create', $request->getTemplate());
    }

    public function store(StoreRequest $request)
    {
        if ($template = $request->persist()->getTemplate()) {
            flashWebResponse('created', 'template');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.templates.show', $template->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, Template $template)
    {
        return view('dashboard.pages.templates.show', $request->getTemplate());
    }

    public function edit(EditRequest $request, Template $template)
    {
        return view('dashboard.pages.templates.edit', $request->getTemplate());
    }

    public function update(UpdateRequest $request, Template $template)
    {
        if ($template = $request->persist()->getTemplate()) {
            flashWebResponse('updated', 'Template');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.templates.show', $template->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Template $template)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('Template') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function get(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->template)) {
                return view('dashboard.pages.templates.ajax.template-'.$request->template);
            }
            return '<div></div>';
        }
        return httpWebResponse();
    }

}
