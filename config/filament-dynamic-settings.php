<?php

use App\Filament\Forms\CustomMenuField;

return [
    /*
    |--------------------------------------------------------------------------
    | Multi-Tenant Mode
    |--------------------------------------------------------------------------
    */
    'multi_tenant' => false,

    /*
    |--------------------------------------------------------------------------
    | Tenant Model
    |--------------------------------------------------------------------------
    | The model to use for tenants when multi-tenant mode is enabled
    */
    'tenant_model' => null, // e.g., App\Models\Tenant::class

    /**
     * Panels where settings are shared globally (not tenant-scoped).
     * 
     */
    'global_panels' => [
       
    ],

    /*
    |--------------------------------------------------------------------------
    | Tenant Column Name
    |--------------------------------------------------------------------------
    */
    'tenant_column' => 'tenant_id',

    /*
    |--------------------------------------------------------------------------
    | Tenant Relationship Name
    |--------------------------------------------------------------------------
    */
    'tenant_relation' => 'tenant',

    /*
    |--------------------------------------------------------------------------
    | Layout Type
    |--------------------------------------------------------------------------
    | Available options: 'tabs', 'sections'
    */
    'layout' => 'tabs',

    /*
    |--------------------------------------------------------------------------
    | Default Module
    |--------------------------------------------------------------------------
    */
    'default_module' => 'general',

    /*
    |--------------------------------------------------------------------------
    | Settings Modules
    |--------------------------------------------------------------------------
    */
    'modules' => [
        'general' => [
            'label' => 'General Settings',
            'icon' => 'heroicon-o-cog-6-tooth',
            'sort' => 0,
            'description' => 'General application settings',
        ],
        'app' => [
            'label' => 'Application Settings',
            'icon' => 'heroicon-o-squares-2x2',
            'sort' => 1,
            'description' => 'Application specific configurations',
        ],
        'email' => [
            'label' => 'Email Settings',
            'icon' => 'heroicon-o-envelope',
            'sort' => 4,
            'description' => 'Email configuration and templates',
        ],
        'security' => [
            'label' => 'Security Settings',
            'icon' => 'heroicon-o-shield-check',
            'sort' => 3,
            'description' => 'Security and authentication settings',
        ],
        'menu' => [
            'label' => 'Menu Settings',
            'icon' => 'heroicon-o-folder',
            'sort' => 3,
            'description' => 'Menu settings',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Navigation Settings
    |--------------------------------------------------------------------------
    */
    'navigation' => [
        'group' => 'System',
        'sort' => 100,
        'icon' => 'heroicon-o-cog-6-tooth',
    ],
    
    /*
    |--------------------------------------------------------------------------
    | Navigation Registration
    |--------------------------------------------------------------------------
    */
    'resource' => [
        'register' => true,             
        'exclude_on_panels' => [],   
    ],

    'page' => [
        'register' => true,
        'exclude_on_panels' => [],
    ],

    /*
    |--------------------------------------------------------------------------
    | Field Types
    |--------------------------------------------------------------------------
    */
    'field_types' => [
        'boolean' => 'Toggle',
        'date' => 'Date',
        'date_time' => 'Date Time',
        'email' => 'Email',
        'file' => 'File Upload',
        'json' => 'JSON',
        'number' => 'Number',
        'password' => 'Password',
        'rich_text' => 'Rich Text',
        'select' => 'Select',
        'text' => 'Text Input',
        'textarea' => 'Textarea',
        'url' => 'URL',
    ],


    /*
    |--------------------------------------------------------------------------
    | Custom Components
    |--------------------------------------------------------------------------
    | Register custom components that can be used in settings forms
    */
    'custom_components' => [
        // Example:
        'Menu' => [
            'component' => CustomMenuField::class,
            'label' => 'Choose Menu',
            'description' => 'A custom field component',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Component Resolvers
    |--------------------------------------------------------------------------
    | Custom resolvers for field components
    */
    'component_resolvers' => [
        // Example:
        // 'custom_resolver' => CustomComponentResolver::class,
    ],
];