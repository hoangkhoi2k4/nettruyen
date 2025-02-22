<?php

namespace App\Traits;

use App\Models\Category;
use App\Models\Chapter;
use App\Models\Story;
use Illuminate\Support\Str;

trait HelperCrawlerTrait
{
    public function checkExistCategory($name)
    {
        return Category::where('c_slug', Str::slug($name)) -> exists();
    }

    public function checkExistStory($link){
        return Story::where('s_link', $link) -> exists();
    }

    public function checkExistChapter($link){
        return Chapter::where('c_link', $link) -> exists();
    }

    /** 
     * @return false
     * lấy category chưa run crawler
     * 
     */

    public function getCategoryDefault()
    {
        $category = Category::where('c_status', 0) -> first();

        if($category)
        {
            $category -> c_status = Category::STATUS_WAITING;
            $category -> save();
            return $category;
        }

        return false;
    }

    public function getStoryDefault()
    {
        $story = Story::where('s_status', 0) -> first();
        if($story)
        {
            $story -> s_status = Story::STATUS_WAITING;
            $story -> save();
            return $story;
        }
    }

    public function setStoryDefault($id)
    {
        $story = Story::where('id', $id) -> get();
        $story -> s_status = Story::STATUS_WAITING;
        $story -> save();
    }
}