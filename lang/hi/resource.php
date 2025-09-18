<?php
return [
    // common lang keys
    'created_at' => "पर बनाया गया",
    'updated_at' => "को अपडेट किया गया",

    // notifications.
    'notification' => [
        'success' => [
            'default_title' => "सफलता",
            'default_body' => "कार्रवाई सफलतापूर्वक पूरी हुई।"
        ]
    ],

    // category
    'category' => [
        'navigation' => [
            'label' => "श्रेणी",
            'model_label' => "श्रेणी",
            'plural_model_label' => "श्रेणियाँ"
        ],
        'fields' => [
            'name' => "नाम",
            'slug' => "स्लग",
            'parent_category' => "मूल श्रेणी",
            'description' => "विवरण",
            'status' => "स्थिति"
        ],
        'action' => [
            'toggle' => "बदलें"
        ],
        'notification' => [
            'toggle_status' => [
                'success' => [
                    'title' => 'श्रेणी की स्थिति अपडेट की गई',
                    'body'  => 'चयनित श्रेणियाँ सफलतापूर्वक अपडेट कर दी गई हैं।',
                ],
                'error' => [
                    'title' => 'अपडेट विफल',
                    'body'  => 'श्रेणियों की स्थिति अपडेट नहीं की जा सकी। कृपया पुनः प्रयास करें।',
                ],
            ],
        ],
    ]
];
