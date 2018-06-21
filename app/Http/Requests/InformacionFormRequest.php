<?php

namespace FotoPrisma\Http\Requests;

use FotoPrisma\Http\Requests\Request;

class InformacionFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
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
            
            'Mision'=>'required|max:500',
            'Vision'=>'required|max:500',
            'HorarioAtencion'=>'required|max:100',
            'Contactenos'=>'required|max:100',
        ];
    }
}
