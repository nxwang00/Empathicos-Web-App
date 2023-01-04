<?php

namespace App\Http\Controllers\Web\Dashboard\Badge;

use App\Badge;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Badge\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Badge\CreateRequest;
use App\Http\Requests\Web\Dashboard\Badge\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Badge\EditRequest;
use App\Http\Requests\Web\Dashboard\Badge\IndexRequest;
use App\Http\Requests\Web\Dashboard\Badge\ShowRequest;
use App\Http\Requests\Web\Dashboard\Badge\StatusRequest;
use App\Http\Requests\Web\Dashboard\Badge\StoreRequest;
use App\Http\Requests\Web\Dashboard\Badge\UpdateRequest;
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
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.badges.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.badges.create', $request->getBadge());
    }

    public function store(StoreRequest $request)
    {
        if ($Badge = $request->persist()->getBadge()) {
            flashWebResponse('created', 'Badge');
            return redirect()->route('admin.badges.show', $Badge->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, Badge $Badge)
    {
        return view('dashboard.pages.badges.show', $request->getBadge());
    }

    public function edit(EditRequest $request, Badge $Badge)
    {
        return view('dashboard.pages.badges.edit', $request->getBadge());
    }

    public function update(UpdateRequest $request, Badge $Badge)
    {
        if ($Badge = $request->persist()->getBadge()) {
            flashWebResponse('updated', 'Badge');
            return redirect()->route('admin.badges.show', $Badge->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Badge $Badge)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('Badge') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, Badge $Badge)
    {
        if (request()->ajax()) {
            return ($Badge = $request->persist()->getBadge()) ? statusWebResponse(($Badge->status == 1) ? 'Badge has been active successfully.' : 'Badge has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }

     public function templates(Request $request, Badge $badge)
    {   
        return view('dashboard.pages.badges.templates',['badge'=>$badge, 'templates'=>$badge->templates]);
    }
}
