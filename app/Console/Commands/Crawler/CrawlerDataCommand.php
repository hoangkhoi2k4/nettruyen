<?php

namespace App\Console\Commands\Crawler;

use App\Models\Category;
use App\Models\Story;
use App\Models\Type;
use Illuminate\Console\Command;
use App\Traits\HelperCrawlerTrait;
use Carbon\Carbon;
use Illuminate\Support\Str;
use simple_html_dom;

class CrawlerDataCommand extends Command
{
    protected $signature = 'crawler:init';
    protected $description = 'Crawler';


    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        $this->init();
    }

    protected function init()
    {
        // $this->crawlerCategory();
        // $this->initType();
        // $story = Story::where('s_status', 0)->first();
        // if (!$story) {
        //     $this->info('-- Success --');
        //     return;
        // }
        // $category_name = Category::select('c_name')->where('id', $story->c_parent_id)->first();
        // $story->s_status = 1;
        // $story->category_name = $category_name->c_name;
        // $story->save();
        // $this->info('-- Success --' . $story->s_name);
        // $this->init();
        $this->info('cần chọn chức năng');
    }

    protected function crawlImage(){
        $link = 'https://www.bhdstar.vn/#main';
        $html = file_get_html($link);
        foreach($html -> find('img') as $item){
            $this -> info($item -> src);
        }
    }

    protected function crawlerCategory()
    {
        $linkContent = 'https://nettruyen88.net/bach-hop/';
        $this->warn("-- Category --");
        $this->info("-- Link: ".$linkContent." --");
        $html = file_get_html($linkContent);
        foreach($html -> find('div > div.index_cate.row > div> a') as $item) {
            $name = trim($item->plaintext);
            $category = [
                'c_name' => $name,
                'c_slug' => Str::slug($name),
                'c_link' => $item->href,
                'created_at' => Carbon::now(),
                'c_domain' => 'nettruyen88.net',
            ];
            $helper = new class {
                use HelperCrawlerTrait;
            };

            if ($category['c_name'] != null && $helper->checkExistCategory($category['c_name']) == false) {
                Category::insert($category);
                $this->info('-- Success --');
            } else {
                $this->error('-- Error --');
            }

            // $this->crawlerStory($item->href);
        }
    }

    protected function crawlerStory($link)
    {
        $html = file_get_html($link);
        $total_page = "0";
        foreach ($html -> find(' div.row.category > div > div > ul > li > a') as $li) {
            if ($li->{'data-page'} > $total_page) {
                $total_page = $li->{'data-page'};
            }
        }
        if($total_page == "0") {
            $total_page = "1";
        }
        $total_page = (int)$total_page;
        for($i = 1; $i <= $total_page; $i++){
            $data_link = $link.'page/'.$i.'/';
            $new_html = file_get_html($data_link);
            foreach($new_html->find("div > div:nth-child(1) > div > div > div> div > div.caption > a") as $item){
                dump($item); 
                die;
                $link_detail = $item -> href;
                $detail_html = file_get_html($link_detail);
                $name = $detail_html -> find('div.tab-summary > div.summary_content_wrap > div > div > div > h1', 0) -> plaintext;
                $total_chap = explode(' ', $detail_html -> find('#list-chapter-single > div > div > ul > li:nth-child(1) > a > span', 0) -> plaintext);
                if (Str::endsWith($total_chap[1], ':')) {
                    $total_chap[1] = rtrim($total_chap[1], ':');
                }
                $stories = [
                    's_name' => $name,
                    's_slug' => Str::slug($name),
                    's_description' => trim($detail_html -> find('#content', 0) -> innertext ?? ''),
                    's_avatar' => $detail_html -> find('div > div > div.tab-summary > div.summary_image > img', 0) -> src,
                    's_auth_name' => $detail_html -> find(' div.summary_content_wrap > div > div > div > div > p> a', 0) -> plaintext,
                    's_total_chapter' => $total_chap[1],
                    's_view' => rand(1000, 99999),
                    // 'created_at' => Carbon::now(),
                ];
                // dump($stories);
                // Story::insert($stories);
            }
        }
    }

    protected function initType()
    {
        $type = [
            [
                't_name' => 'Truyện Full',
                't_slug' => 'truyen-full',
                't_description' => 'Truyện Full',
                'created_at' => Carbon::now(),
            ],
            [
                't_name' => 'Truyện Hot',
                't_slug' => 'truyen-hot',
                't_description' => 'Truyện Hot',
                'created_at' => Carbon::now(),
            ],
            [
                't_name' => 'Truyện Mới',
                't_slug' => 'truyen-moi',
                't_description' => 'Truyện Mới',
                'created_at' => Carbon::now(),
            ]
        ];
        Type::truncate();
        Type::insert($type);
        $this->info('-- Init Type Table Success --');
    }
}
