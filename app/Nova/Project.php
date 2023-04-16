<?php

namespace App\Nova;

use Exception;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Whitecube\NovaFlexibleContent\Flexible;

class Project extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Project>
     */
    public static string $model = \App\Models\Project::class;

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
        'title, name',
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

            Text::make('title')
                ->rules('required', 'max:100'),

            Text::make('name')
                ->rules('required', 'max:100'),

            Select::make('Position', 'positions')
                ->options(
                    \App\Models\Position::pluck('name', 'id')
                )
                ->displayUsingLabels()
                ->rules('required'),

            Select::make('Language', 'languages')
                ->options(
                    \App\Models\Language::pluck('name', 'id')
                )
                ->displayUsingLabels()
                ->rules('required'),

            URL::make('Page URL')
                ->hideFromIndex(),

            Date::make('Start Date','start_date'),

            Date::make('End date','end_date'),

            Boolean::make('Status'),

            Flexible::make('Description')
                ->addLayout('Item', 'description', [
                        Text::make('Title')
                            ->rules('required'),
                        Textarea::make('Description')
                            ->rules('required'),
                ])
                ->rules('required')
                ->button('Add description'),
        ];
    }
}
