<?php

namespace App\Http\Controllers\Web\Dashboard\Faq;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Faq\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Faq\CreateRequest;
use App\Http\Requests\Web\Dashboard\Faq\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Faq\EditRequest;
use App\Http\Requests\Web\Dashboard\Faq\IndexRequest;
use App\Http\Requests\Web\Dashboard\Faq\ShowRequest;
use App\Http\Requests\Web\Dashboard\Faq\StatusRequest;
use App\Http\Requests\Web\Dashboard\Faq\StoreRequest;
use App\Http\Requests\Web\Dashboard\Faq\UpdateRequest;
use App\Faq;

/**
 * Faqs
 *
 * @package    Faq Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class FaqController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.faqs.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.faqs.create', $request->getFaq());
    }

    public function store(StoreRequest $request)
    {
        if ($faq = $request->persist()->getFaq()) {
            flashWebResponse('created', 'Faq');
            return redirect()->route('admin.faqs.show', $faq->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, Faq $faq)
    {
        return view('dashboard.pages.faqs.show', $request->getFaq());
    }

    public function edit(EditRequest $request, Faq $faq)
    {
        return view('dashboard.pages.faqs.edit', $request->getFaq());
    }

    public function update(UpdateRequest $request, Faq $faq)
    {
        if ($faq = $request->persist()->getFaq()) {
            flashWebResponse('updated', 'Faq');
            return redirect()->route('admin.faqs.show', $faq->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Faq $faq)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('Faq') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, Faq $faq)
    {
        if (request()->ajax()) {
            return ($faq = $request->persist()->getFaq()) ? statusWebResponse(($faq->status == 1) ? 'Faq has been active successfully.' : 'Faq has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }
}
