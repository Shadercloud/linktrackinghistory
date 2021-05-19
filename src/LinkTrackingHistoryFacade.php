<?php

namespace Shadercloud\LinkTrackingHistory;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Shadercloud\LinkTrackingHistory\Skeleton\SkeletonClass
 */
class LinkTrackingHistoryFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'linktrackinghistory';
    }
}
