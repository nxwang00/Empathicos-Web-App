<?php

namespace App\Http\Controllers\Web\Dashboard\About;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\About\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\About\CreateRequest;
use App\Http\Requests\Web\Dashboard\About\DestroyRequest;
use App\Http\Requests\Web\Dashboard\About\EditRequest;
use App\Http\Requests\Web\Dashboard\About\IndexRequest;
use App\Http\Requests\Web\Dashboard\About\ShowRequest;
use App\Http\Requests\Web\Dashboard\About\StatusRequest;
use App\Http\Requests\Web\Dashboard\About\StoreRequest;
use App\Http\Requests\Web\Dashboard\About\UpdateRequest;
use App\About;

/**
 * Abouts
 *
 * @package    About Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class AboutController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        return view('dashboard.pages.abouts.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.abouts.create', $request->getAbout());
    }

    public function store(StoreRequest $request)
    {
        if ($about = $request->persist()->getAbout()) {
            flashWebResponse('created', 'About');
            return redirect()->route('admin.abouts.show', $about->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, About $about)
    {
        return view('dashboard.pages.abouts.show', $request->getAbout());
    }

    public function edit(EditRequest $request, About $about)
    {
        return view('dashboard.pages.abouts.edit', $request->getAbout());
    }

    public function update(UpdateRequest $request, About $about)
    {
        if ($about = $request->persist()->getAbout()) {
            flashWebResponse('updated', 'About');
            return redirect()->route('admin.abouts.show', $about->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, About $about)
    {
        if (request()->ajax()) {
             if($request->persist()->getMsg()) {
                flashWebResponse('trashed', 'About');
                return response()->json(['status' => 'success','redirect' => true, 'title' => 'Deleted!', 'text' => 'About has been trashed successfully.']);
             }
             return errorWebResponse();

        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, About $about)
    {
        if (request()->ajax()) {
            return ($about = $request->persist()->getAbout()) ? statusWebResponse(($about->status == 1) ? 'About has been active successfully.' : 'About has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }
}
