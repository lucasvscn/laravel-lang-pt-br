<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'O campo :attribute deve ser aceito.',
    'active_url' => 'O campo :attribute não é uma URL válida.',
    'after' => 'O campo :attribute deve conter uma data posterior à :date.',
    'after_or_equal' => 'O campo :attribute deve conter uma data posterior ou igual à :date.',
    'alpha' => 'O campo :attribute deve conter apenas letras.',
    'alpha_dash' => 'O campo :attribute deve conter apenas letras, números, traços e sublinhados.',
    'alpha_num' => 'O campo :attribute deve conter apenas letras e números.',
    'array' => 'O campo :attribute deve conter uma lista.',
    'before' => 'O campo :attribute deve conter uma data anterior à :date.',
    'before_or_equal' => 'O campo :attribute deve conter uma data anterior ou igual à :date.',
    'between' => [
        'numeric' => 'O campo :attribute deve conter um valor entre :min e :max.',
        'file' => 'O arquivo :attribute deve ter entre :min e :max kilobytes.',
        'string' => 'O campo :attribute deve ter entre :min e :max caracteres.',
        'array' => 'O campo :attribute deve ter entre :min e :max itens.',
    ],
    'boolean' => 'O campo :attribute deve ser verdadeiro ou falso.',
    'confirmed' => 'O valor de confirmação do campo :attribute não confere.',
    'date' => 'O campo :attribute não contém uma data válida.',
    'date_equals' => 'O campo :attribute deve conter uma data igual à :date.',
    'date_format' => 'O campo :attribute não confere com o formato :format.',
    'different' => 'O campo :attribute e :other devem ser diferentes.',
    'digits' => 'O campo :attribute deve conter :digits dígitos.',
    'digits_between' => 'O campo :attribute deve ter entre :min e :max dígitos.',
    'dimensions' => 'As dimensões da imagem :attribute são inválidas.',
    'distinct' => 'O campo :attribute tem um valor duplicado.',
    'email' => 'O campo :attribute deve conter um email válido.',
    'ends_with' => 'O campo :attribute deve ser terminado com um dos seguintes valores: :values.',
    'exists' => 'O campo :attribute selecionado é inválido.',
    'file' => 'O campo :attribute deve conter um arquivo.',
    'filled' => 'O campo :attribute deve ser preenchido com um valor.',
    'gt' => [
        'numeric' => 'O campo :attribute deve ser maior que :value.',
        'file' => 'O arquivo :attribute deve ter mais que :value kilobytes.',
        'string' => 'O campo :attribute deve ter mais que :value caracteres.',
        'array' => 'O campo :attribute deve ter mais que :value itens.',
    ],
    'gte' => [
        'numeric' => 'O campo :attribute deve ser maior ou igual que :value.',
        'file' => 'O arquivo :attribute deve ter :value kilobytes ou mais.',
        'string' => 'O campo :attribute deve ter :value caracteres ou mais.',
        'array' => 'O campo :attribute deve ter :value itens ou mais.',
    ],
    'image' => 'O campo :attribute deve ser uma imagem.',
    'in' => 'O campo :attribute selecionado é inválido.',
    'in_array' => 'O campo :attribute não existe em :other.',
    'integer' => 'O campo :attribute deve conter um inteiro.',
    'ip' => 'O campo :attribute deve conter um endereço IP válido.',
    'ipv4' => 'O campo :attribute deve conter um endereço IPv4 válido.',
    'ipv6' => 'O campo :attribute deve conter um endereço IPv6 válido.',
    'json' => 'O campo :attribute deve conter uma string JSON válida.',
    'lt' => [
        'numeric' => 'O campo :attribute deve ser menor que :value.',
        'file' => 'O arquivo :attribute deve ter menos que :value kilobytes.',
        'string' => 'O campo :attribute deve ter menos que :value caracteres.',
        'array' => 'O campo :attribute deve ter menos que :value itens.',
    ],
    'lte' => [
        'numeric' => 'O campo :attribute deve ser menor ou igual à :value.',
        'file' => 'O arquivo :attribute deve ter :value kilobytes ou menos.',
        'string' => 'O campo :attribute deve ter :value caracteres ou menos.',
        'array' => 'O campo :attribute deve ter :value itens ou menos.',
    ],
    'max' => [
        'numeric' => 'O campo :attribute não deve ser maior que :max.',
        'file' => 'O arquivo :attribute não deve ter mais que :max kilobytes.',
        'string' => 'O campo :attribute não deve ter mais que :max caracteres.',
        'array' => 'O campo :attribute não deve ter mais que :max itens.',
    ],
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'mimetypes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo :attribute deve ter no mínimo :min.',
        'file' => 'O arquivo :attribute deve ter no mínimo :min kilobytes.',
        'string' => 'O campo :attribute deve ter no mínimo :min caracteres.',
        'array' => 'O campo :attribute deve ter no mínimo :min itens.',
    ],
    'multiple_of' => 'O campo :attribute deve conter um multiplo de :value.',
    'not_in' => 'O campo :attribute selecionado é inválido.',
    'not_regex' => 'O formato do campo :attribute é inválido.',
    'numeric' => 'O campo :attribute deve conter um número.',
    'password' => 'A senha está incorreta.',
    'present' => 'O campo :attribute deve estar presente.',
    'regex' => 'O formato do campo :attribute é inválido.',
    'required' => 'O campo :attribute é obrigatório.',
    'required_if' => 'O campo :attribute é obrigatório quando :other contém :value.',
    'required_unless' => 'O campo :attribute é obritatório a menos que :other contenha :values.',
    'required_with' => 'O campo :attribute é obrigatório quando o valor :values estiver presente.',
    'required_with_all' => 'O campo :attribute é obrigatório quando os valores :values estiverem presentes.',
    'required_without' => 'O campo :attribute é obrigatório quando o valor :values não estiver presente.',
    'required_without_all' => 'O campo :attribute é obrigatório quando nenhum dos valores :values estiver presente.',
    'prohibited' => 'O campo :attribute é proibido.',
    'prohibited_if' => 'O campo :attribute é proibido quando :other contiver :value.',
    'prohibited_unless' => 'O campo :attribute é proibido a menos que :other esteja contido em :values.',
    'same' => 'O campo :attribute e :other devem ser iguais.',
    'size' => [
        'numeric' => 'O campo :attribute deve ser do tamanho :size.',
        'file' => 'O arquivo :attribute deve ter :size kilobytes.',
        'string' => 'O campo :attribute deve ter :size caracteres.',
        'array' => 'O campo :attribute deve conter :size itens.',
    ],
    'starts_with' => 'O campo :attribute deve começar com um dos seguintes valores: :values.',
    'string' => 'O campo :attribute deve ser uma string.',
    'timezone' => 'O campo :attribute deve ser um fuso horário válido.',
    'unique' => 'O campo :attribute já foi utilizado.',
    'uploaded' => 'O upload do campo :attribute falhou.',
    'url' => 'O formato do campo :attribute é inválido.',
    'uuid' => 'O campo :attribute deve ser um UUID válido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
