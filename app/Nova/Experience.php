<?php

namespace App\Nova;

use Exception;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Oneduo\NovaFileManager\FileManager;
use Whitecube\NovaFlexibleContent\Flexible;

class Experience extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Experience>
     */
    public static string $model = \App\Models\Experience::class;

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

            Select::make('Position', 'positions')
                ->options(
                    \App\Models\Position::pluck('name', 'id')
                )
                ->displayUsingLabels()
                ->rules('required'),

            Select::make('Level', 'levels')
                ->options(
                    \App\Models\Level::pluck('name', 'id')
                )
                ->displayUsingLabels()
                ->rules('required'),

            Flexible::make('Reward')
                ->addLayout('Reward item', 'Reward', [
                    Text::make('Name'),
                    FileManager::make('Authentication'),
                ])
                ->rules('required')
                ->button('Add rewards'),
        ];
    }
}
