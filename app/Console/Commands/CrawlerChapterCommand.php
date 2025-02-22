<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Traits\HelperCrawlerTrait;
use App\HelpersClass\CliEcho;
use App\Models\Chapter;
use App\Models\Story;
use Illuminate\Support\Str;
use Carbon\Carbon;

class CrawlerChapterCommand extends Command
{
    use HelperCrawlerTrait;

    protected $signature = 'crawler:chapter';
    protected $description = 'Crawler Chapter Command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this -> init();
    }

    protected function init()
    {
        $story = $this -> getStoryDefault();

        if(!$story)
        {
            CliEcho::successnl("Crawler Chapter By Story Success!");
            return false;
        }

        $this -> CrawlerChapter($story -> s_link, $story -> id);
        $this->init();

    }

    protected function CrawlerChapter($link, $s_id)
    {
        $html = file_get_html($link);
        $arr = $html 
                -> find('#list-chapter-single > div > div > ul > li:nth-child(1) > a');

        $arr = array_reverse($arr);
        $cnt = 0;

        foreach ($arr as $li) {
            $cnt++;

            if ($cnt > 15){
                break;
            }

            $c_link = $li -> href;

            if($this -> checkExistChapter($c_link))
            {
                $chapter = Chapter::where('c_link', $c_link, 0) -> first();
                $chapter -> c_story_id = $s_id;
                $chapter -> save();
                CliEcho::successnl('Update: '. $chapter -> c_name.' success!');
                continue;
            }

            $data = [
                'c_name' => $li -> plaintext ?? "",
                'c_slug' => Str::slug($li -> plaintext),
                'c_link' => $c_link,
                'c_story_id' => $s_id,
                'created_at' => Carbon::now(),
            ];

            $this -> CrawlerContent($c_link, $data);
        }
    }

    protected function CrawlerContent($link, $data)
    {
        $html = file_get_html($link);
        $content = $html 
                    -> find('body > div.body-container > div > div > div.chap-c.wd-f100.pdd-6', 0) 
                    -> innertext;

        $data['c_content'] = $content;
        Chapter::insert($data);
        CliEcho::successnl("Crawler ".$data['c_name']." Success!");
    }

}
