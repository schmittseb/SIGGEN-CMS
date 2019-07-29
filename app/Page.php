<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;
use Kalnoy\Nestedset\NodeTrait;

class Page extends Model
{
    //use NodeTrait;
    use PresentableTrait;

    protected $presenter = 'App\Presenters\PagePresenter';

    protected $fillable = [
        'title',
        'url',
        'content'
    ];
    //One page can be created by only 1 user:
    public function user() {
        return $this->belongsTo('App\User');
    }

    /*public function updateOrder($order, $orderPage) {
        $relative = Page::findOrFail($orderPage);

        if($order == 'before'){
            $this->beforeNode($relative)->save();
        } else if ($order == 'after') {
            $this->afterNode($relative)->save();
        } else {
            $relative->appendNode($this);
        }

        Page::fixTree();
    }*/
}
