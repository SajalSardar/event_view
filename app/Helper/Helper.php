<?php

use Illuminate\Support\Carbon;

class Helper
{
    /**
     * Define public static method ISOdate() to see the date in international format
     * @param $date
     * @return string
     */
    public static function ISOdate($date)
    {
        return date_format($date, 'd M, Y');
    }

    /**
     * Define public function for active and inactive status
     * @param string $status
     * @return string
     */
    public static function status(?string $status): string
    {
        return $status == '1' ? "<span class='badge badge-soft-success  my-1  me-2'>Active</span>" : "<span class='badge badge-soft-danger my-1  me-2'>Inactive</span>";
    }

    /**
     * Define public function for show date in human readable form
     * @param string $date
     * @return string
     */
    public static function humanReadableDate(?string $date): string
    {
        return  Carbon::parse($date)->diffForHumans();
    }
}
