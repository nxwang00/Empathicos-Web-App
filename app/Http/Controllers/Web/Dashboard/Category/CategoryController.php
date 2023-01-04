<?php

namespace App\Http\Controllers\Web\Dashboard\Category;

use App\Http\Controllers\Controller;
use App\Http\DataProviders\Web\Dashboard\Category\IndexDataProvider;
use App\Http\Requests\Web\Dashboard\Category\CreateRequest;
use App\Http\Requests\Web\Dashboard\Category\DestroyRequest;
use App\Http\Requests\Web\Dashboard\Category\EditRequest;
use App\Http\Requests\Web\Dashboard\Category\IndexRequest;
use App\Http\Requests\Web\Dashboard\Category\ShowRequest;
use App\Http\Requests\Web\Dashboard\Category\StatusRequest;
use App\Http\Requests\Web\Dashboard\Category\StoreRequest;
use App\Http\Requests\Web\Dashboard\Category\UpdateRequest;
use App\Category;

/**
 * Categories
 *
 * @package    Category Controller
 * @subpackage Controller
 * @author     E.id:13
 */

class CategoryController extends Controller
{
    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        if (request()->ajax()) {
            return $provider->datatables();
        }
        return view('dashboard.pages.categories.index', $provider->meta());
    }

    public function create(CreateRequest $request)
    {
        return view('dashboard.pages.categories.create', $request->getCategory());
    }

    public function store(StoreRequest $request)
    {
        if ($category = $request->persist()->getCategory()) {
            flashWebResponse('created', 'category');
            return redirect()->route('admin.categories.show', $category->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function show(ShowRequest $request, Category $category)
    {
        return view('dashboard.pages.categories.show', $request->getCategory());
    }

    public function edit(EditRequest $request, Category $category)
    {
        return view('dashboard.pages.categories.edit', $request->getCategory());
    }

    public function update(UpdateRequest $request, Category $category)
    {
        if ($category = $request->persist()->getCategory()) {
            flashWebResponse('updated', 'category');
            return redirect()->route('admin.categories.show', $category->id);
        }
        flashWebResponse('error');
        return redirect()->back();
    }

    public function destroy(DestroyRequest $request, Category $category)
    {
        if (request()->ajax()) {
            return ($request->persist()->getMsg()) ? trashedWebResponse('Category') : errorWebResponse();
        }
        return httpWebResponse();
    }

    public function status(StatusRequest $request, Category $category)
    {
        if (request()->ajax()) {
            return ($category = $request->persist()->getCategory()) ? statusWebResponse(($category->status == 1) ? 'Category has been active successfully.' : 'Category has been inative successfully.') : errorWebResponse();
        }
        return httpWebResponse();
    }
}
