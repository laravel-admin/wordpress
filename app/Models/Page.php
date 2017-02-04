<?php

namespace App\Models;

use Corcel\Post as Corcel;
use LaravelAdmin\HeadlessWordpress\Corcel\UrlTrait;
use LaravelAdmin\HeadlessWordpress\Corcel\HelperTrait;

class Page extends Corcel
{
	use UrlTrait, HelperTrait;

    protected $postType = 'page';

}
