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
    ],
    //post resource
    'post' => [
        'navigation' => [
            'label' => "पोस्ट",
            'model_label' => "पोस्ट",
            'plural_model_label' => "पोस्ट्स"
        ],
        'fields' => [
            'type' => "प्रकार",
            'title' => "शीर्षक",
            'slug' => "स्लग",
            'exercpt' => "अंश",
            'content' => "सामग्री",
            'feature_image' => "प्रमुख छवि",
            'is_featured' => "विशेष रुप से प्रदर्शित",
            'comment_status' => "टिप्पणी स्थिति",
            'status' => "स्थिति",
            'published_at' => "प्रकाशित तिथि",
            'parent_id' => "मूल पोस्ट",
            'author' => "लेखक",
            'view_count' => "दृश्य"
        ]
    ]
];
