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
    ],

    //post resource
    'post' => [
        'navigation' => [
            'label' => "Post",
            'model_label' => "Post",
            'plural_model_label' => "Post"
        ],
        'filters'=>[
            'status' => "Filter By Status"
        ],
        'fields' =>[
            'type' => "Type",
            'title' => "Title",
            "slug" => "Slug",
            'exercpt' => "Excerpt",
            'content' => "Content",
            "feature_image" => "Image",
            "is_featured" => "Featured",
            "comment_status" => "Comment Status",
            "status" => "Status",
            "published_at" => "Published At",
            "parent_id" => "Parent",
            'author' => "Author",
            'view_count' => "Views"
        ]
        ],

        //page resource
        'page' => [
        'navigation' => [
            'label' => "Page",
            'model_label' => "Page",
            'plural_model_label' => "Page"
        ],
        ]
];
