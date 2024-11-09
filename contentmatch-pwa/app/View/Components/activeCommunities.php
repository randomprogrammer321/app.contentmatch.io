<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class activeCommunities extends Component
{
    public string $FirstString;
    public string $CommunityName;
    public string $CommunityAudience;
     /* Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->FirstString = 'J';
        $this->CommunityName = 'Community Name';
        $this->CommunityAudience = '24k Members';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        // return the view with the data
        return view('components.active-communities', [
            'FirstString' => $this->FirstString,
            'CommunityName' => $this->CommunityName,
            'CommunityAudience' => $this->CommunityAudience
        ]);
    }
}
