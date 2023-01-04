<?php

namespace App\Http\Controllers\Api\Store\v1\BadgeCategory;

use App\BadgeCategory;
use App\Http\Controllers\Controller;
use App\Http\DataProviders\Api\Store\v1\BadgeCategory\IndexDataProvider;
use App\Http\Requests\Api\Store\v1\BadgeCategory\IndexRequest;
use App\Template;
use Illuminate\Http\Request;

class BadgeCategoryController extends Controller
{

    public function index(IndexRequest $request, IndexDataProvider $provider)
    {
        $data = [];
        $category = BadgeCategory::All();
        if($category){
            foreach($category as $cat){
                $data[] = [
                    'id'          => $cat->id,
                    'name'        => $cat->name,
                    'description' => $cat->description,
                    'image'       => asset('storage/badge-categories/images/' . $cat->image),
                    'created_at'  => (string) $cat->created_at,
                    'updated_at'  => (string) $cat->updated_at,
                ];
            }
            return successApiResponse('Badge category', $data);
        }
        else{
            return failedApiResponse('No data found');
        }
    }

    public function category(Request $request, $id)
    {
        // $field = 'first';
        // if ($request->has('template')) {
        //     $field = $request->query('template');
        // }

        // $template_count = Template::where('category_id', $id)->count();
        // $template       = Template::where('category_id', $id)->where('field', $field)->first();
        // $templateField  = 1;

        // if (!empty($template)) {
        //     switch ($template->field) {
        //         case 'second':
        //             $templateField = 2;
        //             break;
        //         case 'third':
        //             $templateField = 3;
        //             break;
        //         case 'fourth':
        //             $templateField = 4;
        //             break;
        //         case 'fifth':
        //             $templateField = 5;
        //             break;
        //         case 'sixth':
        //             $templateField = 6;
        //             break;
        //         default:
        //             $templateField = 1;
        //             break;
        //     }
        // }

        $templates                    = Template::where('category_id', $id)->get();
        foreach ($templates as $key => $template) {
            $template_value              = json_decode($template->value);
            $templateData['title']       = $template_value->title;
            $templateData['description'] = $template_value->description;
            $templateData['image']       = asset('storage/templates/' . $template_value->image);
            $template->value = $templateData;
        }
        return showApiResponse('category (template)', $templates);
    }

}
