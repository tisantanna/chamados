<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use App\Menu;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        //
        //linha abaixo impede erro tamanho de string
        Schema::defaultStringLength(191);
        //código abaixo cria os menus
        /*$events->listen(BuildingMenu::class, function (BuildingMenu $event) {
            $event->menu->add('CADASTROS');
            $event->menu->add([
                'text' => 'Categorias',
                'url' => 'categorias',
            ]);
            $event->menu->add([
                'text' => 'Requerentes',
                'url' => 'requerentes',
            ]);
        });*/
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) {
           // $event->menu->add('teste');

            $menus=Menu::all();

            foreach($menus as $menu)
            {
                $event->menu->add([
                    'text' => $menu['nome'],
                    'url' => $menu['url'],
                    'icon' => $menu['icone'],
                ]);
            }



            
            
           
          
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        if ($this->app->environment() == 'local') {
            $this->app->register('Appzcoder\CrudGenerator\CrudGeneratorServiceProvider');
        }
    }
}
