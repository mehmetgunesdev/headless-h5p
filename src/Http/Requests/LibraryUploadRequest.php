<?php

namespace Alsay\LaravelH5P\Http\Requests;

use Alsay\LaravelH5P\Models\H5PLibrary;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Gate;

class LibraryUploadRequest extends FormRequest
{
    public function authorize(): bool
    {
//        return Gate::allows('upload', H5PLibrary::class);

        return true;
    }

    public function rules(): array
    {
        return [
//            'id' => ['required'],
//            'contentId' => ['required'],
            'h5p' => ['required']
        ];
    }

    public function getId()
    {
        return $this->get('id');
    }

    public function getContentId()
    {
        return $this->get('contentId');
    }

    public function getH5PFile(): UploadedFile
    {
        return $this->file('h5p');
    }
}
