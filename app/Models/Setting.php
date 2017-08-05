<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Lanmeng\Utils\StringUtil;

class Setting extends Model
{
    protected $fillable = [
        'key', 'content',
    ];

    public static $whiteList = [
        'notice_show_home', 'notice_show_number', 'category_url_type', 'article_list_number',
        'home_category_article_number', 'site_name', 'footer_content',
        'site_title_home', 'site_key_home', 'site_description_home',
        'site_title_category', 'site_key_category', 'site_description_category',
        'site_title_article', 'site_key_article', 'site_description_article',
    ];

    public function contentArray()
    {
        return StringUtil::line2Array($this->content);
    }
}
