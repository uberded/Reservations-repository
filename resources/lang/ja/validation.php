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

    'accepted'             => ':attributeを承認してください。',
    'active_url'           => ':attributeは有効なURLではありません。',
    'after'                => ':attributeは:date以降である必要があります。',
    'alpha'                => ':attributeにはアルファベット文字しか使用できません。',
    'alpha_dash'           => ':attributeにはアルファベットや数字、ダッシュ記号しか使用できません。',
    'alpha_num'            => ':attributeにはアルファベットか数字しか使用できません。',
    'array'                => ':attributeは配列である必要があります。',
    'before'               => ':attributeは:date以前である必要があります。',
    'between'              => [
        'numeric' => ':attributeは:minから:maxの間である必要があります。',
        'file'    => ':attributeは:minKB以上:maxKB以下である必要があります。',
        'string'  => ':attributeは:min文字以上:max以下である必要があります。',
        'array'   => ':attributeの要素は:min個以上:max以下である必要があります。',
    ],
    'boolean'              => ':attributeはtrueまたはfalseである必要があります。',
    'confirmed'            => ':attributeは確認用項目と一致しません。',
    'date'                 => ':attributeは日付ではありません。',
    'date_format'          => ':attributeは:formatの形式に従っていません。',
    'different'            => ':attributeと:otherは違っている必要があります。',
    'digits'               => ':attributeは:digitsでなければなりません。',
    'digits_between'       => ':attributeは:min以上:max以下である必要があります。',
    'dimensions'           => ':attributeは画像サイズが無効です。',
    'distinct'             => ':attributeの値が重複しています。',
    'email'                => ':attributeは有効なメールアドレスである必要があります。',
    'exists'               => '選択された:attributeは無効です。',
    'file'                 => ':attributeはファイルである必要があります。',
    'filled'               => ':attributeは必須項目です。',
    'image'                => ':attributeは画像である必要があります。',
    'in'                   => '選択された:attributeは無効です。',
    'in_array'             => ':otherに:attribute項目が存在しません。',
    'integer'              => ':attributeは整数である必要があります。',
    'ip'                   => ':attributeは有効なIPアドレスである必要があります。',
    'json'                 => ':attributeは有効なJSON文字列である必要があります。',
    'max'                  => [
        'numeric' => ':attributeは:max以下である必要があります。',
        'file'    => ':attributeは:maxKB以下である必要があります。',
        'string'  => ':attributeは:max文字以下である必要があります。',
        'array'   => ':attributeの要素は:max個以下である必要があります。',
    ],
    'mimes'                => ':attributeは次のタイプのファイルである必要があります: :values.',
    'min'                  => [
        'numeric' => ':attributeは:min以上である必要があります。',
        'file'    => ':attributeは:minKB以上である必要があります。',
        'string'  => ':attributeは:min文字以上である必要があります。',
        'array'   => ':attributeの要素は:min個以上である必要があります。',
    ],
    'not_in'               => '選択された:attributeは無効です。',
    'numeric'              => ':attributeは数字である必要があります。',
    'present'              => ':attributeが存在する必要があります。',
    'regex'                => ':attributeの形式は無効です。',
    'required'             => ':attributeが必要です。',
    'required_if'          => ':otherが:valueの場合、:attributeが必要です。',
    'required_unless'      => ':otherが:valuesの場合を除き、:attributeが必要です。',
    'required_with'        => ':valuesが存在する場合、:attributeが必要です。',
    'required_with_all'    => ':valuesが存在する場合、:attributeが必要です。',
    'required_without'     => ':valuesが存在しない場合、:attributeが必要です。',
    'required_without_all' => ':valuesがどこにも存在しない場合、:attributeが必要です。',
    'same'                 => ':attributeと:otherが一致しません。',
    'size'                 => [
        'numeric' => ':attributeは:sizeである必要があります。',
        'file'    => ':attribute:sizeKBである必要があります。',
        'string'  => ':attributeは:size文字である必要があります。',
        'array'   => ':attributeは:size個の要素を含んでいる必要があります。',
    ],
    'string'               => ':attributeは文字列である必要があります。',
    'timezone'             => ':attributeは有効なタイムゾーンである必要があります。',
    'unique'               => ':attributeはすでに使用されています。',
    'url'                  => ':attributeの形式は無効です。',

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
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [],

];
