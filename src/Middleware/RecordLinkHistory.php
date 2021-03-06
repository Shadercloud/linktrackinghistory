<?php

namespace Shadercloud\LinkTrackingHistory\Middleware;

use Closure;
use Illuminate\Http\Request;
use Shadercloud\LinkTrackingHistory\LinkTrackingHistory;

class RecordLinkHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $links = session()->has(LinkTrackingHistory::sessionId()) ? session(LinkTrackingHistory::sessionId()) : [];
        $currentLink = request()->fullUrl(); // Getting current URI like 'category/books/'
        array_unshift($links, $currentLink); // Putting it in the beginning of links array
        $links = array_slice($links, 0, config('linktrackinghistory.history_limit')); // Trim the end of the array (stop it getting too big)
        session([LinkTrackingHistory::sessionId() => $links]); // Saving links array to the session

        return $next($request);
    }
}
