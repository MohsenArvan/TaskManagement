<?php

namespace App\Http\Requests;

use App\Enum\Color;
use App\Enum\Priority;
use App\Enum\Status;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class UpdateTaskRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        return [
            'title' => 'string|max:100',
            'description' => 'string|max:1000',
            'complated_at' => 'date',
            'due_date' => 'date',
            'lable' => ['string', new Enum(Color::class)],
            'status' => ['string', new Enum(Status::class)],
            'priority' => ['string', new Enum(Priority::class)],
        ];
    }
}
