<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model
{
    //

    /*
     * UPDATE publications SET
    slug = lower(baslik),
    slug = replace(slug, '.', ''),
    slug = replace(slug, ',', ''),
    slug = replace(slug, '\'', ''),
    slug = replace(slug, ':', '-'),
    slug = replace(slug, '"', ''),
    slug = replace(slug, '%', ''),
    slug = replace(slug, '$', ''),
    slug = replace(slug, ':', '-'),
    slug = replace(slug, 'ğ', 'g'),
    slug = replace(slug, 'ı', 'i'),
    slug = replace(slug, 'ö', 'o'),
    slug = replace(slug, 'ş', 's'),
    slug = replace(slug, 'ü', 'u'),
    slug = replace(slug, 'ç', 'c'),
    slug = replace(slug, 'İ', 'i'),
    slug = replace(slug, 'Ş', 's'),
    slug = replace(slug, 'Ç', 'c'),
    slug = replace(slug, 'Ü', 'u'),
    slug = replace(slug, 'Ğ', 'g'),
    slug = replace(slug, 'Ö', 'o'),
    slug = trim(slug),
    slug = replace(slug, ' ', '-'),
    slug = replace(slug, '--', '-');
UPDATE publications SET
    slug = replace(slug, '--', '-');

    */
}
