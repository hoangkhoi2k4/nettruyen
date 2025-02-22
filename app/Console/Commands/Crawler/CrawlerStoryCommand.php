<?php

namespace App\Console\Commands\Crawler;
use App\Traits\HelperCrawlerTrait;
use App\HelpersClass\CliEcho;
use App\Models\Story;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CrawlerStoryCommand extends Command
{
    use HelperCrawlerTrait;
    protected $signature = 'crawler:story';
    protected $description = 'Crawler story';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // CliEcho::success("OK");
        $this->init();
    }

    protected function init()
    {
        $category = $this->getCategoryDefault();
        if(!$category) 
        {
            CliEcho::successnl("-- Run Crawler Stop: --");
            return false;
        }

        $this -> getPageByCategory($category);
        $this -> init();
    }

    protected function getPageByCategory($category)
    {
        $link = $category -> c_link;
        CliEcho::infonl(" -- Link: ".$link." -- ");
        $html = file_get_html($link);
        $lastPage = "0";
        foreach ($html -> find(' div.row.category > div > div > ul > li > a') as $li) {
            if ($li->{'data-page'} > $lastPage) {
                $lastPage = $li->{'data-page'};
            }
        }
        if($lastPage == "0") {
            $lastPage = "1";
        }
        $lastPage = (int)$lastPage;
        CliEcho::infonl(" -- Total Page: ".$lastPage." -- ");

        //2. Update total page by category

        $category -> c_total_page = $lastPage;
        $category -> save();

        //3. Crawler link story detail

        $this -> getStoryByCategory($category);

    }

    protected function getStoryByCategory($category)
    {
        $link = $category -> c_link;
        $lastPage = $category -> c_total_page;
        // for($i = 1; $i <= $lastPage; $i++) {
            $i = 0;
            $linkContent = $link.'page/'.$i.'/';
            CliEcho::infonl('-- -- Link: ' . $linkContent. ' -- --');
            CliEcho::infonl('-- -- Page: ' . $i. ' -- --' . ' -- -- Total Page: ' . $lastPage. ' -- --');
            $htmlContent = file_get_html($linkContent);
            foreach ($htmlContent -> find('#truyen-slide > div.main-home > div > div:nth-child(1) > div > div > div > div') as $item){
                $view = $item -> find('div.caption > div.chi-tiet.luot-xem', 0) -> plaintext;
                $view = str_replace('Lượt xem: ', '', trim($view));
                $s_link = $item -> find('div.each_truyen > a', 0) -> href ?? "";
                if($this -> checkExistStory($s_link)) {
                    CliEcho::errornl(' -- Story exist: '.$item -> find('div.caption > a', 0) -> title.' -- ');
                    continue;
                }
                $stories = [
                    's_name' => $item -> find('div.caption > a', 0) -> title ?? "",
                    's_link' => $s_link,
                    's_slug' => Str::slug($item -> find('div.caption > a', 0) -> title ?? ""),
                    's_auth_name' => file_get_html($s_link) -> find('#wrap > div.site-content > div > div.container > div > div > div.tab-summary > div.summary_content_wrap > div > div > div > div:nth-child(5) > p:nth-child(1) > a', 0) -> title ?? "",
                    's_avatar' => $item -> find('div.each_truyen > a > img', 0) -> src ?? "",
                    's_view' => (int)$view ?? 0,
                    's_total_chapter' => (int) $item -> find('div.caption > div.chi-tiet.tt-status > small > span > span', 0) -> plaintext ?? 0,
                    'c_parent_id' => $category -> id,
                    'created_at' => Carbon::now(),
                ];
                Story::insert($stories);
                CliEcho::successnl(' -- Insert story: '.$stories['s_name'].' -- ');
            }
        // }
        CliEcho::successnl(' -- Crawler story by '.$category -> c_name.' success -- ');
    }
}
