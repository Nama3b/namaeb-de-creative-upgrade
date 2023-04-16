<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Service extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Service>
     */
    public static string $model = \App\Models\Service::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->rules('required', 'max:100'),

            Textarea::make('Content')
                ->rules('required', 'max:1000'),

            Image::make('Image thumbnail', 'image_thumbnail')
                ->rules('required')
        ];
    }
}
