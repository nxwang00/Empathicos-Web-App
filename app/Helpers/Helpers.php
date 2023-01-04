<?php
/**
|-----------------------------------------------
| Api Response Helper Functions.......
|-----------------------------------------------
 */
if (!function_exists('indexApiResponse')) {
    function indexApiResponse($message = '', $results = [], $code = '201')
    {
        if(count($results) < 1){ $results = null;}
        return response()->json(['status' => true, 'message' => 'All ' . ucwords($message) . ' has been fetched successfully.', 'results' => $results], $code);
    }
}

if (!function_exists('showApiResponse')) {
    function showApiResponse($message = '', $results = [], $code = '200')
    {
        if(count($results) < 1){ $results = null;}
        return response()->json(['status' => true, 'message' => ucwords($message) . ' has been fetched successfully.', 'results' => $results], $code);
    }
}

if (!function_exists('storeApiResponse')) {
    function storeApiResponse($message = '', $results = [], $code = '201')
    {
        if(count($results) < 1){ $results = null;}
        return response()->json(['status' => true, 'message' => ucwords($message) . ' has been added successfully.', 'results' => $results], $code);
    }
}

if (!function_exists('updateApiResponse')) {
    function updateApiResponse($message = '', $results = [], $code = '201')
    {
        if(is_array($results) && count($results) < 1){ $results = null;}
        return response()->json(['status' => true, 'message' => ucwords($message) . ' has been updated successfully.', 'results' => $results], $code);
    }
}

if (!function_exists('destroyApiResponse')) {
    function destroyApiResponse($message = '', $results = [], $code = '201')
    {
        if(count($results) < 1){ $results = null;}
        return response()->json(['status' => true, 'message' => ucwords($message) . ' has been trashed successfully.', 'results' => $results], $code);
    }
}

if (!function_exists('validatorApiResponse')) {
    function validatorApiResponse($errors = [])
    {
        
        return response()->json(['status' => false, 'message' => 'Please fill all required fields.', 'errors' => $errors]);
    }
}

if (!function_exists('failedApiResponse')) {
    function failedApiResponse($message = '', $results = [], $code = '201')
    {
        if(is_array($results) && count($results) < 1){ $results = null;}
        return response()->json(['status' => false, 'message' => $message, 'results' => $results], $code);
    }
}

if (!function_exists('successApiResponse')) {
    function successApiResponse($message = '', $results = [], $code = '201')
    {
        if(count($results) < 1){ $results = null;}
        return response()->json(['status' => true, 'message' => $message, 'results' => $results], $code);
    }
}

/**
|-----------------------------------------------
| Web Response Helper Functions.......
|-----------------------------------------------
 */
if (!function_exists('httpWebResponse')) {
    function httpWebResponse()
    {
        return response()->json(['status' => 'Http request']);
    }
}

if (!function_exists('errorWebResponse')) {
    function errorWebResponse()
    {
        return response()->json(['status' => 'error', 'title' => 'Error!', 'text' => 'Something is wrong, please try again...']);
    }
}

if (!function_exists('createdWebResponse')) {
    function createdWebResponse($text = '')
    {
        return response()->json(['status' => 'success', 'title' => 'Created!', 'text' => ucwords($text) . ' has been added successfully.']);
    }
}

if (!function_exists('updatedWebResponse')) {
    function updatedWebResponse($text = '')
    {
        return response()->json(['status' => 'success', 'title' => 'Updated!', 'text' => ucwords($text) . ' has been updated successfully.']);
    }
}

if (!function_exists('trashedWebResponse')) {
    function trashedWebResponse($text = '')
    {
        return response()->json(['status' => 'success', 'title' => 'Deleted!', 'text' => ucwords($text) . ' has been trashed successfully.']);
    }
}

if (!function_exists('deletedWebResponse')) {
    function deletedWebResponse($text = '')
    {
        return response()->json(['status' => 'success', 'title' => 'Delete Permanently!', 'text' => ucwords($text) . ' has been deleted successfully.']);
    }
}

if (!function_exists('restoredWebResponse')) {
    function restoredWebResponse($text = '')
    {
        return response()->json(['status' => 'success', 'title' => 'Restored!', 'text' => ucwords($text) . ' has been restored successfully.']);
    }
}

if (!function_exists('validatorWebResponse')) {
    function validatorWebResponse($errors = [])
    {
        return response()->json(['status' => 'info', 'title' => 'Info!', 'text' => 'Please fill all required fields.', 'errors' => $errors]);
    }
}

if (!function_exists('infoWebResponse')) {
    function infoWebResponse($info = '')
    {
        return response()->json(['status' => 'info', 'title' => 'Info!', 'text' => $info, 'errors' => []]);
    }
}

if (!function_exists('bulkWebResponse')) {
    function bulkWebResponse($errors = [])
    {
        return response()->json(['errors' => $errors]);
    }
}

if (!function_exists('statusWebResponse')) {
    function statusWebResponse($message = '')
    {
        return response()->json(['status' => 'success', 'title' => 'Changed!', 'text' => $message]);
    }
}

if (!function_exists('flashWebResponse')) {
    function flashWebResponse($status = '', $message = '')
    {
        switch ($status) {
            case 'created':
                session()->flash('status', "success");
                session()->flash('text', !empty($message) ? $message : ucwords($message) . " has been added successfully.");
                break;
            case 'updated':
                session()->flash('status', "success");
                session()->flash('text', ucwords($message) . " has been updated successfully.");
                break;
            case 'trashed':
                session()->flash('status', "success");
                session()->flash('text', ucwords($message) . " has been trashed successfully.");
                break;
            case 'info':
                session()->flash('status', "info");
                session()->flash('text', "Something is wrong, please try again...");
                break;
            case 'message':
                session()->flash('status', "message");
                session()->flash('text', $message);
                break;
            case 'error':
                session()->flash('status', "error");
                session()->flash('text', !empty($message) ? $message : "Something is wrong, please try again...");
                break;
        }
    }
}

/**
|-----------------------------------------------
| Web Action Button Helper Functions.......
|-----------------------------------------------
 */
if (!function_exists('viewButton')) {
    function viewButton($route = '', $object = null, $tooltip = '')
    {
        $remove_admin = str_replace('admin.', '', $route);
        $singular     = Str::singular(ucwords(str_replace('-', ' ', $remove_admin)));
        if (!empty($tooltip)) {
            $singular = ucwords($tooltip);
        }
        return '<a href="' . route("$route.show", $object->id) . '" class="btn btn-dark btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="View ' . $singular . '" data-original-title="View ' . $singular . '"><i class="nav-icon fa fa-eye font-weight-bold"></i></a>';
    }
}

if (!function_exists('editButton')) {
    function editButton($route = '', $object = null, $tooltip = '')
    {
        $remove_admin = str_replace('admin.', '', $route);
        $singular     = Str::singular(ucwords(str_replace('-', ' ', $remove_admin)));
        if (!empty($tooltip)) {
            $singular = ucwords($tooltip);
        }
        return '<a href="' . route("$route.edit", $object->id) . '" class="btn btn-success btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Edit ' . $singular . '" data-original-title="Edit ' . $singular . '"><i class="nav-icon fa fa-pencil font-weight-bold"></i></a>';
    }
}

if (!function_exists('trashButton')) {
    function trashButton($route = '', $object = null, $tooltip = '')
    {
        $remove_admin = str_replace('admin.', '', $route);
        $singular     = Str::singular(ucwords(str_replace('-', ' ', $remove_admin)));
        if (!empty($tooltip)) {
            $singular = ucwords($tooltip);
        }

        $attr = 'id="' . $object->id . '" text="' . $singular . '" table="' . str_replace('-', '_', str_replace('.', '_', $route)) . '_table" route="' . route("$route.destroy", $object->id) . '"';

        return '<a href="javascript:void(0)" ' . $attr . ' class="delete btn btn-danger btn-sm mr-2" data-toggle="tooltip" data-placement="top" title="Trash ' . $singular . '" data-original-title="Trash ' . $singular . '"><i class="nav-icon fa fa-trash-o font-weight-bold"></i></a>';
    }
}

if (!function_exists('statusButton')) {

    function statusButton($route = '', $object = null, $tooltip = '')
    {
        $class = ($object->status == 1) ? 'primary' : 'danger';
        $text  = ($object->status == 1) ? 'Active' : 'Inactive';

        $remove_admin = str_replace('admin.', '', $route);
        $singular     = Str::singular(ucwords(str_replace('-', ' ', $remove_admin)));
        if (!empty($tooltip)) {
            $singular = ucwords($tooltip);
        }

        $attr = 'id="' . $object->id . '" text="' . $singular . ' status to ' . $text . '"  table="' . str_replace('-', '_', str_replace('.', '_', $route)) . '_table" route="' . route("$route.status", $object->id) . '"';
        return '<div class="dropdown action-label">
                    <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-dot-circle-o text-' . $class . '"></i> ' . $text . '
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(103px, 31px, 0px);">
                            <a href="#" ' . $attr . ' class="dropdown-item change-status">
                                <i class="fa fa-dot-circle-o text-primary"></i>
                                Active
                            </a>
                            <a href="#" ' . $attr . ' class="dropdown-item change-status">
                                <i class="fa fa-dot-circle-o text-danger"></i>
                                Inactive
                            </a>
                    </div>
            </div>';
    }
}

/**
|-----------------------------------------------
| Web Action Button  Helper Functions.......
|-----------------------------------------------
 */

if (!function_exists('is_active')) {
    function is_active($route = '')
    {
        return (request()->routeIs($route)) ? 'class="active"' : '';
    }
}

if (!function_exists('is_route')) {
    function is_route($route = '')
    {
        return (request()->routeIs($route)) ? true : false;
    }
}

if (!function_exists('error_msg')) {
    function error_msg($errors = [], $input = '')
    {
        if ($errors->has($input)) {
            return '<span class="text-danger">' . $errors->first($input) . '</span>';
        }
    }
}

if (!function_exists('error_field')) {
    function error_field($errors = [], $input = '')
    {
        return ($errors->has($input)) ? 'form-control border-danger-r' : 'form-control';
    }
}

if (!function_exists('the_setting_field')) {
    function the_setting_field($field = '')
    {
        $setting = App\Setting::where('field', $field)->first();
        if (!empty($setting)) {
            echo $setting->value;
        }
        echo '';
    }
}

if (!function_exists('get_setting_field')) {
    function get_setting_field($field = '')
    {
        $setting = App\Setting::where('field', $field)->first();
        if (!empty($setting)) {
            return $setting->value;
        }
        return null;
    }
}

if (!function_exists('get_rating')) {
    function get_rating($rating)
    {
        switch ($rating) {
            case '1':
                return '
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                ';
                break;
            case '2':
                return '
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                ';
                break;
            case '3':
                return '
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                ';
                break;
            case '4':
                return '
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star"></span>
                ';
                break;
            case '5':
                return '
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                    <span class="fa fa-star" style="color: orange;"></span>
                ';
                break;

            default:
                return '
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                ';
                break;
        }
    }
}

if (!function_exists('createSlug')) {
    function createSlug($title, $id = 0)
    {
        // Normalize the title
        $slug = str_slug($title);

        // Get any that could possibly be related.
        // This cuts the queries down by doing it once.
        $allSlugs = getRelatedSlugs($slug, $id);

        // If we haven't used it before then we are all good.
        if (!$allSlugs->contains('slug', $slug)) {
            return $slug;
        }

        // Just append numbers like a savage until we find not used.
        for ($i = 1; $i <= 10; $i++) {
            $newSlug = $slug . '-' . $i;
            if (!$allSlugs->contains('slug', $newSlug)) {
                return $newSlug;
            }
        }

        throw new \Exception('Can not create a unique slug');
    }
}

if (!function_exists('getRelatedSlugs')) {
    function getRelatedSlugs($slug, $id = 0)
    {
        return App\Article::select('slug')->where('slug', 'like', $slug . '%')
            ->where('id', '<>', $id)
            ->get();
    }
}

if (!function_exists('base64url_encode')) {
    function base64url_encode($plainText)
    {
        return base64_encode($plainText);//strtr(base64_encode($plainText), '+/=', '-_1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }
}

if (!function_exists('base64url_decode')) {
    function base64url_decode($b64Text)
    {
        return base64_decode($b64Text);//(strtr($b64Text, '-_1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', '+/='));
    }
}
