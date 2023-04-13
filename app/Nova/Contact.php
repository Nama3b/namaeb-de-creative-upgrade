<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Status;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Contact extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Contact>
     */
    public static string $model = \App\Models\Contact::class;

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
        'name, email, phone_number',
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

            Text::make('Name')
                ->rules('required', 'max: 100'),

            Email::make('Email')
                ->rules('required', 'max:100', 'unique:contacts,email,{{resourceId}},id,deleted_at,NULL'),

            Text::make('Phone number','phone_number')
                ->rules('required')
                ->maxlength(11),

            Textarea::make('Content')
                ->rules('required'),

            Boolean::make('Status'),
        ];
    }

}
