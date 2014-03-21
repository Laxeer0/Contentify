<?php namespace App\Modules\Matches\Controllers;

use App\Modules\Matches\Models\Match as Match;
use Hover, BackController;

class AdminMatchesController extends BackController {

    protected $icon = 'joystick.png';

    public function __construct()
    {
        $this->model = 'Match';

        parent::__construct();
    }

    public function index()
    {
        $this->buildIndexPage([
            'tableHead' => [
                t('ID')     => 'id', 
                t('Title')  => 'title'
            ],
            'tableRow' => function($game)
            {
                $hover = new Hover();
                if ($game->icon) $hover->image(asset('uploads/games/'.$game->icon));

                return [
                    $game->id,
                    $hover.$game->title,
                ];            
            }
        ]);
    }

}