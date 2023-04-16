<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Nikaia\Rating\Rating;

class Client extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Client>
     */
    public static string $model = \App\Models\Client::class;

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
     */
    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Title')
                ->rules('required', 'max:100'),

            Text::make('Name')
                ->rules('required', 'max:100'),

            Textarea::make('Comment')
                ->rules('required'),

//            Rating::make('Rate')->min(0)->max(5)
//                ->increment(0.5)
//                ->hideRating()
//                ->withStyles([
//                    'star-size' => 15,
//                    'rounded-corners' => true,
//                ])->onlyOnIndex()->sortable(),
        ];
    }
}
