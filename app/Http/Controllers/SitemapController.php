<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Carbon\Carbon;

class SitemapController extends Controller
{
    public function indexs()
    
    {
        // Array to store URLs
        $urls = [];

        // Add static pages
        $urls[] = [
            'loc' => URL::to('/'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'daily',
            'priority' => '1.0'
        ];

        $urls[] = [
            'loc' => URL::to('/blog'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/feature'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/about'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/service'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/contact'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/team'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/testimonial'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/error'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories/blower'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories/industrial-pump'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories/electric-motor'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories/electromagenetic-flow-meter'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories/frp-vessel'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories/ro-and-uf-membrane'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/categories/water-treatment-chemicals-and-media'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/bag-filter'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/micron-filter-cartridge'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/micron-filter-housing'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];

        $urls[] = [
            'loc' => URL::to('/product/ro-membrane-housing'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/ro-membrane'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/pressure-roots-blowers'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/ring-blower'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/vacuum-roots-blower'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/electromagnetic-flow-meter'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/single-phase-motor'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/three-phase-motor'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/frp-vessel'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/dpl-series-dynamic-pump'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/dp-deries-dynamic-pump'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/sgt-centrifugal-pump'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/2gk-dynamic-centrifugal-pump'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/gks-series-centrifugal-pump'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/dynamic-activated-carbon'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/dynamic-resin-001x7-1.3'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];

        $urls[] = [
            'loc' => URL::to('/product/dynamic-resin-001X7-2.0'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/dynamic-anthracite'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/dynamic-coconut-shell-activated-carbon'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
       
        $urls[] = [
            'loc' => URL::to('/product/biocide'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/dechlorinator'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];
        $urls[] = [
            'loc' => URL::to('/product/ro-antiscalant'),
            'lastmod' => Carbon::now()->toAtomString(),
            'changefreq' => 'monthly',
            'priority' => '0.8'
        ];

       


        // Add dynamic pages
        // $posts = \App\Models\Post::all();
        // foreach ($posts as $post) {
        //     $urls[] = [
        //         'loc' => URL::to('/posts/' . $post->slug),
        //         'lastmod' => $post->updated_at->toAtomString(),
        //         'changefreq' => 'weekly',
        //         'priority' => '0.9'
        //     ];
        // }

        // Generate XML
        $xml = $this->generateSitemap($urls);

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }

    private function generateSitemap($urls)
    {
        $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?>
<urlset />');
$xml->addAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');

foreach ($urls as $url) {
$urlTag = $xml->addChild('url');
$urlTag->addChild('loc', $url['loc']);
$urlTag->addChild('lastmod', $url['lastmod']);
$urlTag->addChild('changefreq', $url['changefreq']);
$urlTag->addChild('priority', $url['priority']);
}

return $xml->asXML();
}
}