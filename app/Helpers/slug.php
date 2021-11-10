<?php
if (!function_exists('incrementSlug')) {
    function incrementSlug($table, $slug, $except = null)
    {
        $original = $slug;
        $count = 2;
        if ($except) {
            while (DB::table($table)->where('id', '<>', $except)->whereSlug($slug)->exists()) {
                $slug = "{$original}-" . $count++;
            }
        }else {
            while (DB::table($table)->whereSlug($slug)->exists()) {
                $slug = "{$original}-" . $count++;
            }
        }
        return $slug;
    }
}
