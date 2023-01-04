<?php

namespace App\Http\Controllers\Web\Dashboard\BadgeTemplate;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\BadgeTemplate\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\BadgeTemplate\CreateRequest;
use App\Http\Requests\Web\Dashboard\BadgeTemplate\DestroyRequest;
use App\Http\Requests\Web\Dashboard\BadgeTemplate\EditRequest;
use App\Http\Requests\Web\Dashboard\BadgeTemplate\IndexRequest;
use App\Http\Requests\Web\Dashboard\BadgeTemplate\ShowRequest;
use App\Http\Requests\Web\Dashboard\BadgeTemplate\StoreRequest;
use App\Http\Requests\Web\Dashboard\BadgeTemplate\UpdateRequest;
use App\BadgeTemplate;
use Illuminate\Http\Request;

/**
 * BadgeTemplates
 *
 * @package    BadgeTemplate Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class BadgeTemplateController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.badge-templates.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.badge-templates.create', $request->getBadgeTemplate());
    }

    public function store(StoreRequest $request)
    {
        if ($badge_template = $request->persist()->getBadgeTemplate()) {
            flashWebResponse('created', 'badge template');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.badge-templates.show', $badge_template->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, BadgeTemplate $badge_template)
    {
        return view('dashboard.pages.badge-templates.show', $request->getBadgeTemplate());
    }

    public function edit(EditRequest $request, BadgeTemplate $badge_template)
    {
        return view('dashboard.pages.badge-templates.edit', $request->getBadgeTemplate());
    }

    public function update(UpdateRequest $request, BadgeTemplate $badge_template)
    {
        if ($badge_template = $request->persist()->getBadgeTemplate()) {
            flashWebResponse('updated', 'badge template');
            if (!empty($request->redirect)) {
                return redirect($request->redirect);
            }
            return redirect()->route('admin.badge-templates.show', $badge_template->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, BadgeTemplate $badge_template)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('badge template') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function get(Request $request)
    {
        if (request()->ajax()) {
            if (!empty($request->template)) {
                return view('dashboard.pages.badge-templates.ajax.template-'.$request->template);
            }
            return '<div></div>';
        }
        return httpWebResponse();
    }

}
