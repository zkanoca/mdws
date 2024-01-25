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
use Illuminate\Http\Request;

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
            ->where(
                function ($query) {
                    $query->where('dil', 'tum')
                        ->orWhere('dil', \App::getLocale());
                }
            )
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
        $locale = \App::getLocale();
        $target = ['en' => 'tr', 'tr' => 'en'];

        $styles = [
            'tr' => 'primary',
            'en' => 'danger'];
        $languageNames = ['tr' => 'English', 'en' => 'Türkçe'];


        $object = new \stdClass();
        $object->url = str_replace("/" . $locale, "/" . $target[$locale], url()->full());
        $object->languageName = $languageNames[$locale];

        return $object;
    }
}


