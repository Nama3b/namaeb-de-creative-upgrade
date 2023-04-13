<?php

namespace App\Nova;

use Illuminate\Support\Str;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Oneduo\NovaFileManager\FileManager;

class About extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\About>
     */
    public static string $model = \App\Models\About::class;

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
                ->rules('required', 'max:100'),

            Email::make('Email')
                ->rules('required', 'max:100', 'unique:abouts,email,{{resourceId}},id,deleted_at,NULL')
                ->displayUsing(function ($value) {
                    return Str::limit($value, 50);
                }),

            Textarea::make('Description')
                ->rules('required')
                ->alwaysShow(),

            Text::make('Phone number','phone_number')
                ->rules('required')
                ->maxlength(11),

            Text::make('Address')
                ->rules('required'),

            Date::make('Birthday')
                ->rules('required', 'before:today'),

            Select::make('Gender')
                ->options([
                    '0' => 'Female',
                    '1' => 'Male'
                ])
                ->hideFromIndex(),

            Text::make('Relate URL', 'relate_url'),

            Textarea::make('Hobby'),

            Image::make('Image Profile', 'image')
                ->rules('required')
                ->maxWidth(50),

            FileManager::make('CV', 'cv_url')
                ->multiple(),
        ];
    }
}
