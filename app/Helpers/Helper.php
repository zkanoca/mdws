<?php
/**
 * Created by Özkan ÖZLÜ.
 * User: zkanoca
 * Date: 04.01.2017
 * Time: 10:18
 */

namespace App\Helpers;

use App\Publication;
use App\News;
use App\About;
use Illuminate\Session;

class  Helper
{
    public static function slugify($text)
    {

        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    public static function tarih($tarih)
    {

        $M = array('Jan' => 'Oca', 'Feb' => 'Şub', 'Mar' => 'Mar', 'Apr' => 'Nis',
            'May' => 'May', 'Jun' => 'Haz', 'Jul' => 'Tem', 'Aug' => 'Ağu',
            'Sep' => 'Eyl', 'Oct' => 'Eki', 'Nov' => 'Kas', 'Dec' => 'Ara'
        );

        $F = array('January' => 'Ocak', 'February' => 'Şubat', 'March' => 'Mart', 'April' => 'Nisan',
            'May' => 'Mayıs', 'June' => 'Haziran', 'July' => 'Temmuz', 'August' => 'Ağustos',
            'September' => 'Eylül', 'October' => 'Ekim', 'November' => 'Kasım', 'December' => 'Aralık'
        );

        $l = array('Monday' => 'Pazartesi', 'Tuesday' => 'Salı', 'Wednesday' => 'Çarşamba',
            'Thursday' => 'Perşembe', 'Friday' => 'Cuma', 'Saturday' => 'Cumartesi', 'Sunday' => 'Pazar'
        );

        $D = array('Mon' => 'Pzt', 'Tue' => 'Sal', 'Wed' => 'Çar', 'Thu' => 'Per',
            'Fri' => 'Cum', 'Sat' => 'Cmt', 'Sun' => 'Paz'
        );


    }

    public static function sutun($data, $i)
    {
        //$var = ${'sutun'.$i};
        $s = '';
        foreach ($data as $d):
            $s .= "" . $d->{'sutun' . $i} . ",";

        endforeach;


        return substr($s, 0, -1);
    }

    public static function yillar($data)
    {
        $y = '';

        foreach ($data as $d) {
            $y .= "'" . $d->yil . "',";

        }

        return substr($y, 0, -1);
    }

    public static function latest_news($take)
    {
        return News::where([['onay', '1'], ['sil', '0']])
            ->orderBy('tarih', 'desc')
            ->orderBy('id', 'desc')
            ->orderBy('created_at', 'desc')
            ->take($take)
            ->get();


    }

    public static function latest_publications($take)
    {

        $p = Publication::where([['onay', '1'], ['sil', '0']])
            ->orderBy('tarih', 'desc')
            ->orderBy('id', 'desc')
            ->orderBy('created_at', 'desc')
            ->take($take)
            ->get();

        return $p;

    }

    public static function shortly_about()
    {
        $a = About::where('page', 'who-am-i')->get();

        return $a;
    }

    public static function switch_language()
    {
        // Default language ($lang) & current uri language ($lang_uri)
        $lang = 'tr';
        $lang_uri = URI::segment(1);

// Set default session language if none is set
        if (!Session::has('language')) {
            Session::put('language', $lang);
        }

// Route language path if needed
        if ($lang_uri !== 'en' && $lang_uri !== 'he') {
            return Redirect::to($lang . '/' . ($lang_uri ? URI::current() : ''));
        } // Set session language to uri
        elseif ($lang_uri !== Session::get('language')) {
            Session::put('language', $lang_uri);
        }

// Store the language switch links to the session
        $he2en = preg_replace('/he\//', 'en/', URI::full(), 1);
        $en2he = preg_replace('/en\//', 'he/', URI::full(), 1);
        Session::put('he2en', $he2en);
        Session::put('en2he', $en2he);
    }
}



/*
    d - The day of the month (from 01 to 31)
    D - A textual representation of a day (three letters)
    j - The day of the month without leading zeros (1 to 31)
    l (lowercase 'L') - A full textual representation of a day
    N - The ISO-8601 numeric representation of a day (1 for Monday, 7 for Sunday)
    S - The English ordinal suffix for the day of the month (2 characters st, nd, rd or th. Works well with j)
    w - A numeric representation of the day (0 for Sunday, 6 for Saturday)
    z - The day of the year (from 0 through 365)
    W - The ISO-8601 week number of year (weeks starting on Monday)
    F - A full textual representation of a month (January through December)
    m - A numeric representation of a month (from 01 to 12)
    M - A short textual representation of a month (three letters)
    n - A numeric representation of a month, without leading zeros (1 to 12)
    t - The number of days in the given month
    L - Whether it's a leap year (1 if it is a leap year, 0 otherwise)
    o - The ISO-8601 year number
    Y - A four digit representation of a year
    y - A two digit representation of a year
    a - Lowercase am or pm
    A - Uppercase AM or PM
    B - Swatch Internet time (000 to 999)
    g - 12-hour format of an hour (1 to 12)
    G - 24-hour format of an hour (0 to 23)
    h - 12-hour format of an hour (01 to 12)
    H - 24-hour format of an hour (00 to 23)
    i - Minutes with leading zeros (00 to 59)
    s - Seconds, with leading zeros (00 to 59)
    u - Microseconds (added in PHP 5.2.2)
    e - The timezone identifier (Examples: UTC, GMT, Atlantic/Azores)
    I (capital i) - Whether the date is in daylights savings time (1 if Daylight Savings Time, 0 otherwise)
    O - Difference to Greenwich time (GMT) in hours (Example: +0100)
    P - Difference to Greenwich time (GMT) in hours:minutes (added in PHP 5.1.3)
    T - Timezone abbreviations (Examples: EST, MDT)
    Z - Timezone offset in seconds. The offset for timezones west of UTC is negative (-43200 to 50400)
    c - The ISO-8601 date (e.g. 2013-05-05T16:34:42+00:00)
    r - The RFC 2822 formatted date (e.g. Fri, 12 Apr 2013 12:01:05 +0200)
    U - The seconds since the Unix Epoch (January 1 1970 00:00:00 GMT)

 */