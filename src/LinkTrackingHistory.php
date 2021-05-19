<?php

namespace Shadercloud\LinkTrackingHistory;

class LinkTrackingHistory
{
    public static function linkHistory(Int $steps_ago){
        if(!session()->has(LinkTrackingHistory::sessionId())){
            return false;
        }
        $links = session(LinkTrackingHistory::sessionId());
        if(!isset($links[$steps_ago])){
            return false;
        }
        return $links[$steps_ago];
    }

    public static function sessionId(){
        return config('linktrackinghistory.session_id');
    }
}
