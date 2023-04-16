<?php

namespace App\Providers;

use App\Nova\About;
use App\Nova\Client;
use App\Nova\Contact;
use App\Nova\Dashboards\Main;
use App\Nova\Education;
use App\Nova\Experience;
use App\Nova\Language;
use App\Nova\Level;
use App\Nova\Position;
use App\Nova\Project;
use App\Nova\Service;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Oneduo\NovaFileManager\NovaFileManager;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::make(__('Social'), [
                    MenuItem::resource(About::class),
                    MenuItem::resource(Client::class),
                    MenuItem::resource(Contact::class),
                    MenuItem::resource(Service::class),
                    MenuItem::resource(User::class),
                ])->icon('user')->collapsable(),

                MenuSection::make(__('File Manager'))
                    ->path('/nova-file-manager')
                    ->icon('server'),

                MenuSection::make(__('Skills'), [
                    MenuItem::resource(Education::class),
                    MenuItem::resource(Experience::class),
                    MenuItem::resource(Project::class),
                ])->icon('calendar')->collapsable(),

                MenuSection::make(__('Resources'), [
                    MenuItem::resource(Level::class),
                    MenuItem::resource(Position::class),
                    MenuItem::resource(Language::class),
                ])->icon('document-text')->collapsable(),

            ];
        });

    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes(): void
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate(): void
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards(): array
    {
        return [
            new Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools(): array
    {
        return [
            NovaFileManager::make(),
        ];

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }
}
