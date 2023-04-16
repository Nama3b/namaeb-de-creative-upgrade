<?php

namespace App\Nova;

use Exception;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Education extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Education>
     */
    public static string $model = \App\Models\Education::class;

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
        'title',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param NovaRequest $request
     * @return array
     * @throws Exception
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->rules('required', 'max: 100'),

            Textarea::make('Content')
                ->rules('required'),

            Date::make('Start Date', 'start_date')
                ->rules('required'),

            Date::make('End Date', 'end_date'),

            Flexible::make('Certificate')
                ->addLayout('Certificate item', 'Certificate', [
                    Text::make('Name'),
                    Image::make('Evidence')
                ])
                ->button('Add certificates'),
        ];
    }

}
