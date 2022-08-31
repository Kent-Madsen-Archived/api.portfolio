<?php
    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;


    class UpdateLinkModelRequest
        extends FormRequest
    {

        public function authorize(): bool
        {
            return false;
        }


        public function rules(): array
        {
            return
            [
                //
            ];
        }
    }
?>