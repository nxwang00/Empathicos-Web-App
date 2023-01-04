<?php

namespace App\Http\Requests\Api\v1\Feedback;

use App\Feedback;
use App\Http\Resources\Api\v1\Feedback\FeedbackResource;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class StoreRequest extends FormRequest
{
    private $feedback;

    /**
     * Determine if the Feedback is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_id' => 'required|integer|max:255',
            'message' => 'required|string|max:1000',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {

        return [
            'required' => 'The :attribute field is required.',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [

        ];
    }

    public function persist(): self
    {
        $this->feedback = Feedback::create($this->data());
        return $this;
    }

    protected function data(): array
    {
        return [
            'user_id' => $this->user_id,
            'message' => $this->message,
        ];
    }

    public function getFeedback()
    {
        return storeApiResponse('feedback', new FeedbackResource($this->feedback));
    }
}
