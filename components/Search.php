<?php namespace AnandPatel\Search\Components;

use Cms\Classes\ComponentBase;

class Search extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Search Component',
            'description' => 'Search through CMS Pages, Static Pages, Blog',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onType()
    {
        return "types";
    }

    public function onRun()
    {

            $this->addJs("//code.jquery.com/jquery-1.11.0.min.js");
            $this->addJs("/plugins/anandpatel/search/assets/js/search.js");

    }

}