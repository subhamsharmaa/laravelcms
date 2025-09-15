<?php
return [
    //common lang keys
    'created_at' => "Created At",
    'updated_at' => "Updated At",
    // notifications.
    'notification' => [
        'success' => [
            'default_title' => "Sucess",
            'default_body' => "Action Completed Successfully."
        ]
    ],
    // category
    'category' => [
        'navigation' => [
            'label' => "Category",
            'model_label' => "Category",
            'plural_model_label' => "Category"
        ],
        'fields' => [
            'name' => "Name",
            'slug' => "Slug",
            'parent_category' => "Parent",
            'description' => "Description",
            "status" => "Status"
        ],
        'action' => [
            'toggle' => "Toggle"
        ],
        'notification' => [
            'toggle_status' => [
                'success' => [
                    'title' => 'Category status updated',
                    'body'  => 'The selected categories have been updated successfully.',
                ],
                'error' => [
                    'title' => 'Update failed',
                    'body'  => 'Unable to update category statuses. Please try again.',
                ],
            ],
        ],
    ]
];
