<?php

namespace App\Http\Controllers\Web\Dashboard\BadgeCategory;

use App\BadgeCategory;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\BadgeCategory\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\BadgeCategory\CreateRequest;
use App\Http\Requests\Web\Dashboard\BadgeCategory\DestroyRequest;
use App\Http\Requests\Web\Dashboard\BadgeCategory\EditRequest;
use App\Http\Requests\Web\Dashboard\BadgeCategory\IndexRequest;
use App\Http\Requests\Web\Dashboard\BadgeCategory\ShowRequest;
use App\Http\Requests\Web\Dashboard\BadgeCategory\StatusRequest;
use App\Http\Requests\Web\Dashboard\BadgeCategory\StoreRequest;
use App\Http\Requests\Web\Dashboard\BadgeCategory\UpdateRequest;
use Illuminate\Http\Request;

/**
 * Badge Categories
 *
 * @package    Badge Category Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class BadgeCategoryController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.badge-categories.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.badge-categories.create', $request->getBadgeCategory());
    }

    public function store(StoreRequest $request)
    {
        if ($badge_category = $request->persist()->getBadgeCategory()) {
            flashWebResponse('created', 'Badge category');
            return redirect()->route('admin.badge-categories.show', $badge_category->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, BadgeCategory $badge_category)
    {
        return view('dashboard.pages.badge-categories.show', $request->getBadgeCategory());
    }

    public function edit(EditRequest $request, BadgeCategory $badge_category)
    {
        return view('dashboard.pages.badge-categories.edit', $request->getBadgeCategory());
    }

    public function update(UpdateRequest $request, BadgeCategory $badge_category)
    {
        if ($badge_category = $request->persist()->getBadgeCategory()) {
            flashWebResponse('updated', 'category');
            return redirect()->route('admin.badge-categories.show', $badge_category->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, BadgeCategory $badge_category)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('category') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, BadgeCategory $badge_category)
    {
        if (request()->ajax()) {
            return ($badge_category = $request->persist()->getBadgeCategory()) ? statusWebResponse(($badge_category->status == 1) ? 'Category has been active successfully.' : 'Category has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function templates(Request $request, BadgeCategory $badge_category)
    {   
        return view('dashboard.pages.badge-categories.templates',['category'=>$badge_category, 'templates'=>$badge_category->templates]);
    }
}
