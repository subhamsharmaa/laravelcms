<?php
return [
    // common lang keys
    'created_at' => "Creado el",
    'updated_at' => "Actualizado el",

    // notifications.
    'notification' => [
        'success' => [
            'default_title' => "Éxito",
            'default_body' => "Acción completada con éxito."
        ]
    ],

    // category
    'category' => [
        'navigation' => [
            'label' => "Categoría",
            'model_label' => "Categoría",
            'plural_model_label' => "Categorías"
        ],
        'fields' => [
            'name' => "Nombre",
            'slug' => "Slug",
            'parent_category' => "Padre",
            'description' => "Descripción",
            'status' => "Estado"
        ],
        'action' => [
            'toggle' => "Alternar"
        ],
        'notification' => [
            'toggle_status' => [
                'success' => [
                    'title' => 'Estado de categoría actualizado',
                    'body'  => 'Las categorías seleccionadas se han actualizado correctamente.',
                ],
                'error' => [
                    'title' => 'Actualización fallida',
                    'body'  => 'No se pudieron actualizar los estados de las categorías. Por favor, inténtalo de nuevo.',
                ],
            ],
        ],
    ],
    //post resource
    'post' => [
        'navigation' => [
            'label' => "Publicación",
            'model_label' => "Publicación",
            'plural_model_label' => "Publicaciones"
        ],
        'fields' => [
            'type' => "Tipo",
            'title' => "Título",
            'slug' => "Slug",
            'exercpt' => "Extracto",
            'content' => "Contenido",
            'feature_image' => "Imagen Destacada",
            'is_featured' => "Destacado",
            'comment_status' => "Estado de Comentarios",
            'status' => "Estado",
            'published_at' => "Publicado En",
            'parent_id' => "Padre",
            'author' => "Autor",
            'view_count' => "Vistas"
        ]
    ]
];
