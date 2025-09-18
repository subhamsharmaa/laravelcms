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

    'accepted' => ':attribute फ़ील्ड स्वीकृत होना चाहिए।',
    'accepted_if' => ':attribute फ़ील्ड तब स्वीकृत होना चाहिए जब :other :value हो।',
    'active_url' => ':attribute फ़ील्ड एक वैध URL होना चाहिए।',
    'after' => ':attribute फ़ील्ड :date के बाद की तिथि होनी चाहिए।',
    'after_or_equal' => ':attribute फ़ील्ड :date के बाद या उससे समान तिथि होनी चाहिए।',
    'alpha' => ':attribute फ़ील्ड में केवल अक्षर होने चाहिए।',
    'alpha_dash' => ':attribute फ़ील्ड में केवल अक्षर, अंक, डैश और अंडरस्कोर होने चाहिए।',
    'alpha_num' => ':attribute फ़ील्ड में केवल अक्षर और अंक होने चाहिए।',
    'any_of' => ':attribute फ़ील्ड अमान्य है।',
    'array' => ':attribute फ़ील्ड एक सरणी होनी चाहिए।',
    'ascii' => ':attribute फ़ील्ड में केवल एकल-बाइट अल्फ़ान्यूमेरिक वर्ण और प्रतीक होने चाहिए।',
    'before' => ':attribute फ़ील्ड :date से पहले की तिथि होनी चाहिए।',
    'before_or_equal' => ':attribute फ़ील्ड :date से पहले या उसके बराबर की तिथि होनी चाहिए।',
    'between' => [
        'array' => ':attribute फ़ील्ड में कम से कम :min और अधिकतम :max आइटम होने चाहिए।',
        'file' => ':attribute फ़ील्ड :min से :max किलाबाइट्स के बीच होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :min और :max के बीच होना चाहिए।',
        'string' => ':attribute फ़ील्ड :min से :max अक्षरों का होना चाहिए।',
    ],
    'boolean' => ':attribute फ़ील्ड true या false होना चाहिए।',
    'can' => ':attribute फ़ील्ड में एक अनधिकृत मान है।',
    'confirmed' => ':attribute फ़ील्ड की पुष्टि मेल नहीं खाती।',
    'contains' => ':attribute फ़ील्ड में आवश्यक मान नहीं मिला है।',
    'current_password' => 'पासवर्ड गलत है।',
    'date' => ':attribute फ़ील्ड एक वैध तिथि होनी चाहिए।',
    'date_equals' => ':attribute फ़ील्ड :date के समान तिथि होनी चाहिए।',
    'date_format' => ':attribute फ़ील्ड प्रारूप :format से मेल खाना चाहिए।',
    'decimal' => ':attribute फ़ील्ड में :decimal दशमलव स्थान होने चाहिए।',
    'declined' => ':attribute फ़ील्ड अस्वीकृत होना चाहिए।',
    'declined_if' => ':attribute फ़ील्ड अस्वीकृत होना चाहिए जब :other :value हो।',
    'different' => ':attribute फ़ील्ड और :other अलग होने चाहिए।',
    'digits' => ':attribute फ़ील्ड में :digits अंक होने चाहिए।',
    'digits_between' => ':attribute फ़ील्ड में :min और :max अंकों के बीच होना चाहिए।',
    'dimensions' => ':attribute फ़ील्ड की छवि आयाम अमान्य हैं।',
    'distinct' => ':attribute फ़ील्ड में एक ही मान एक से अधिक है।',
    'doesnt_contain' => ':attribute फ़ील्ड निम्नलिखित में से कोई भी मान नहीं होना चाहिए: :values।',
    'doesnt_end_with' => ':attribute फ़ील्ड निम्नलिखित में से किसी एक पर समाप्त नहीं होना चाहिए: :values।',
    'doesnt_start_with' => ':attribute फ़ील्ड निम्नलिखित में से किसी एक से शुरू नहीं होना चाहिए: :values।',
    'email' => ':attribute फ़ील्ड एक मान्य ईमेल पता होना चाहिए।',
    'ends_with' => ':attribute फ़ील्ड निम्नलिखित में से किसी एक पर समाप्त होना चाहिए: :values।',
    'enum' => 'चयनित :attribute अमान्य है।',
    'exists' => 'चयनित :attribute अमान्य है।',
    'extensions' => ':attribute फ़ील्ड में निम्नलिखित एक्सटेंशनों में से एक होना चाहिए: :values।',
    'file' => ':attribute फ़ील्ड एक फ़ाइल होनी चाहिए।',
    'filled' => ':attribute फ़ील्ड में मान होना चाहिए।',
    'gt' => [
        'array' => ':attribute फ़ील्ड में :value से अधिक आइटम होने चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलाबाइट्स से बड़ी होनी चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value से बड़ी होनी चाहिए।',
        'string' => ':attribute फ़ील्ड :value अक्षरों से बड़ी होनी चाहिए।',
    ],
    'gte' => [
        'array' => ':attribute फ़ील्ड में कम से कम :value आइटम होने चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलाबाइट्स या उससे अधिक होनी चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value या उससे अधिक होनी चाहिए।',
        'string' => ':attribute फ़ील्ड :value अक्षरों या उससे ज्यादा होनी चाहिए।',
    ],
    'hex_color' => ':attribute फ़ील्ड एक वैध हेक्साडेसिमल रंग होना चाहिए।',
    'image' => ':attribute फ़ील्ड एक छवि होनी चाहिए।',
    'in' => 'चयनित :attribute अमान्य है।',
    'in_array' => ':attribute फ़ील्ड :other में होना चाहिए।',
    'in_array_keys' => ':attribute फ़ील्ड में निम्नलिखित कुंजियों में कम से कम एक होना चाहिए: :values।',
    'integer' => ':attribute फ़ील्ड एक पूर्णांक होना चाहिए।',
    'ip' => ':attribute फ़ील्ड एक मान्य IP पता होना चाहिए।',
    'ipv4' => ':attribute फ़ील्ड एक मान्य IPv4 पता होना चाहिए।',
    'ipv6' => ':attribute फ़ील्ड एक मान्य IPv6 पता होना चाहिए।',
    'json' => ':attribute फ़ील्ड एक मान्य JSON स्ट्रिंग होनी चाहिए।',
    'list' => ':attribute फ़ील्ड एक सूची होनी चाहिए।',
    'lowercase' => ':attribute फ़ील्ड छोटे अक्षरों में होना चाहिए।',
    'lt' => [
        'array' => ':attribute फ़ील्ड में :value से कम आइटम होने चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलाबाइट्स से कम होनी चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value से कम होनी चाहिए।',
        'string' => ':attribute फ़ील्ड :value अक्षरों से कम होनी चाहिए।',
    ],
    'lte' => [
        'array' => ':attribute फ़ील्ड में :value से अधिक आइटम नहीं होने चाहिए।',
        'file' => ':attribute फ़ील्ड :value किलाबाइट्स या कम होनी चाहिए।',
        'numeric' => ':attribute फ़ील्ड :value या कम होनी चाहिए।',
        'string' => ':attribute फ़ील्ड :value अक्षरों या कम होनी चाहिए।',
    ],
    'mac_address' => ':attribute फ़ील्ड एक मान्य MAC पता होना चाहिए।',
    'max' => [
        'array' => ':attribute फ़ील्ड में अधिकतम :max आइटम हो सकते हैं।',
        'file' => ':attribute फ़ील्ड :max किलाबाइट्स से अधिक नहीं हो सकती।',
        'numeric' => ':attribute फ़ील्ड :max से अधिक नहीं हो सकता।',
        'string' => ':attribute फ़ील्ड :max अक्षरों से अधिक नहीं हो सकती।',
    ],
    'max_digits' => ':attribute फ़ील्ड में अधिकतम :max अंक हो सकते हैं।',
    'mimes' => ':attribute फ़ील्ड निम्नलिखित प्रकार की फ़ाइल होनी चाहिए: :values।',
    'mimetypes' => ':attribute फ़ील्ड निम्नलिखित प्रकार की फ़ाइल होनी चाहिए: :values।',
    'min' => [
        'array' => ':attribute फ़ील्ड में कम से कम :min आइटम होने चाहिए।',
        'file' => ':attribute फ़ील्ड कम से कम :min किलाबाइट्स होनी चाहिए।',
        'numeric' => ':attribute फ़ील्ड कम से कम :min होनी चाहिए।',
        'string' => ':attribute फ़ील्ड कम से कम :min अक्षरों की होनी चाहिए।',
    ],
    'min_digits' => ':attribute फ़ील्ड में कम से कम :min अंक होने चाहिए।',
    'missing' => ':attribute फ़ील्ड अनुपस्थित होना चाहिए।',
    'missing_if' => ':attribute फ़ील्ड अनुपस्थित होना चाहिए जब :other :value हो।',
    'missing_unless' => ':attribute फ़ील्ड अनुपस्थित होना चाहिए जब तक कि :other :value न हो।',
    'missing_with' => ':attribute फ़ील्ड अनुपस्थित होना चाहिए जब :values मौजूद हों।',
    'missing_with_all' => ':attribute फ़ील्ड अनुपस्थित होना चाहिए जब सभी :values मौजूद हों।',
    'multiple_of' => ':attribute फ़ील्ड :value का गुणज होना चाहिए।',
    'not_in' => 'चयनित :attribute अमान्य है।',
    'not_regex' => ':attribute फ़ील्ड का प्रारूप अमान्य है।',
    'numeric' => ':attribute फ़ील्ड एक संख्या होनी चाहिए।',
    'password' => [
        'letters' => ':attribute फ़ील्ड में कम से कम एक अक्षर होना चाहिए।',
        'mixed' => ':attribute फ़ील्ड में कम से कम एक बड़ा और एक छोटा अक्षर होना चाहिए।',
        'numbers' => ':attribute फ़ील्ड में कम से कम एक अंक होना चाहिए।',
        'symbols' => ':attribute फ़ील्ड में कम से कम एक प्रतीक होना चाहिए।',
        'uncompromised' => 'दिया गया :attribute डेटा लीक में पाया गया है। कृपया कोई अलग :attribute चुनें।',
    ],
    'present' => ':attribute फ़ील्ड मौजूद होना चाहिए।',
    'present_if' => ':attribute फ़ील्ड मौजूद होना चाहिए जब :other :value हो।',
    'present_unless' => ':attribute फ़ील्ड मौजूद होना चाहिए जब तक कि :other :value न हो।',
    'present_with' => ':attribute फ़ील्ड मौजूद होना चाहिए जब :values मौजूद हों।',
    'present_with_all' => ':attribute फ़ील्ड मौजूद होना चाहिए जब सभी :values मौजूद हों।',
    'prohibited' => ':attribute फ़ील्ड निषिद्ध है।',
    'prohibited_if' => ':attribute फ़ील्ड निषिद्ध है जब :other :value हो।',
    'prohibited_if_accepted' => ':attribute फ़ील्ड निषिद्ध है जब :other स्वीकार किया गया हो।',
    'prohibited_if_declined' => ':attribute फ़ील्ड निषिद्ध है जब :other अस्वीकार किया गया हो।',
    'prohibited_unless' => ':attribute फ़ील्ड निषिद्ध है जब तक कि :other :values में न हो।',
    'prohibits' => ':attribute फ़ील्ड :other को मौजूद होने से रोकता है।',
    'regex' => ':attribute फ़ील्ड का प्रारूप अमान्य है।',
    'required' => ':attribute फ़ील्ड अनिवार्य है।',
    'required_array_keys' => ':attribute फ़ील्ड में निम्नलिखित के लिए प्रविष्टियाँ होनी चाहिए: :values।',
    'required_if' => ':attribute फ़ील्ड आवश्यक है जब :other :value हो।',
    'required_if_accepted' => ':attribute फ़ील्ड आवश्यक है जब :other स्वीकार किया गया हो।',
    'required_if_declined' => ':attribute फ़ील्ड आवश्यक है जब :other अस्वीकार किया गया हो।',
    'required_unless' => ':attribute फ़ील्ड आवश्यक है जब तक कि :other :values में न हो।',
    'required_with' => ':attribute फ़ील्ड आवश्यक है जब :values मौजूद हों।',
    'required_with_all' => ':attribute फ़ील्ड आवश्यक है जब सभी :values मौजूद हों।',
    'required_without' => ':attribute फ़ील्ड आवश्यक है जब :values न हों।',
    'required_without_all' => ':attribute फ़ील्ड आवश्यक है जब कोई :values मौजूद न हों।',
    'same' => ':attribute फ़ील्ड :other से मेल खाना चाहिए।',
    'size' => [
        'array' => ':attribute फ़ील्ड में :size आइटम होने चाहिए।',
        'file' => ':attribute फ़ील्ड :size किलाबाइट्स का होना चाहिए।',
        'numeric' => ':attribute फ़ील्ड :size होना चाहिए।',
        'string' => ':attribute फ़ील्ड :size अक्षरों की होनी चाहिए।',
    ],
    'starts_with' => ':attribute फ़ील्ड निम्नलिखित में से किसी से शुरू होना चाहिए: :values।',
    'string' => ':attribute फ़ील्ड एक स्ट्रिंग होनी चाहिए।',
    'timezone' => ':attribute फ़ील्ड एक मान्य टाइमज़ोन होना चाहिए।',
    'unique' => 'चयनित :attribute पहले से ही लिया जा चुका है।',
    'uploaded' => ':attribute फ़ील्ड को अपलोड नहीं किया जा सका।',
    'uppercase' => ':attribute फ़ील्ड बड़े अक्षरों में होना चाहिए।',
    'url' => ':attribute फ़ील्ड एक मान्य URL होना चाहिए।',
    'ulid' => ':attribute फ़ील्ड एक मान्य ULID होना चाहिए।',
    'uuid' => ':attribute फ़ील्ड एक मान्य UUID होना चाहिए।',


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
