<?php

namespace App\Nova;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

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
                ->rules('required', 'max: 100'),

            Textarea::make('Content')
                ->rules('required'),

            BelongsTo::make('Position','positions',\App\Models\Position::class)
                ->rules('required'),

            BelongsTo::make('Level','levels',\App\Models\Level::class)
                ->rules('required'),

            Text::make('Reward')
        ];
    }
}
