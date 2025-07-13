<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Response;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

//Sitemap Start

Route::get('/sitemap.xml', [SitemapController::class, 'indexs']);

//Sitemap End

//Page Route Start

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/feature', [SiteController::class, 'feature'])->name('feature');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/service', [SiteController::class, 'service'])->name('service');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/team', [SiteController::class, 'team'])->name('team');
Route::get('/testimonial', [SiteController::class, 'testimonial'])->name('testimonial');
Route::get('/error', [SiteController::class, 'error'])->name('error');

//Page Route End

//Project Route Start

Route::get('/project', [SiteController::class, 'project'])->name('project');
Route::get('/zld', [SiteController::class, 'zld'])->name('zld');
Route::get('/Deep-Tube-Well', [SiteController::class, 'deeptubewell'])->name('deeptubewell');
Route::get('/Drinking-Water-Treatment-Plant', [SiteController::class, 'DrinkingWaterTreatmentPlant'])->name('DrinkingWaterTreatmentPlant');
Route::get('/etp', [SiteController::class, 'etp'])->name('etp');
Route::get('/Membrane-Based-Desalination-Plant', [SiteController::class, 'MembraneBasedDesalinationPlant'])->name('MembraneBasedDesalinationPlant');
Route::get('/Mobile-Water-Treatment-Plant', [SiteController::class, 'MobileWaterTreatmentPlant'])->name('MobileWaterTreatmentPlant');
Route::get('/Pumps-and-Pumping-Systems', [SiteController::class, 'PumpsandPumpingSystems'])->name('PumpsandPumpingSystems');
Route::get('/stp', [SiteController::class, 'stp'])->name('stp');
Route::get('/Surface-Water-Treatment-Plant', [SiteController::class, 'SurfaceWaterTreatmentPlant'])->name('SurfaceWaterTreatmentPlant');
Route::get('/Ultra-Pure-Water-Treatment-Plant', [SiteController::class, 'UltraPureWaterTreatmentPlant'])->name('UltraPureWaterTreatmentPlant');
Route::get('/Water-and-Waste-Water-Treatment-Plants', [SiteController::class, 'WaterandWasteWaterTreatmentPlants'])->name('WaterandWasteWaterTreatmentPlants');

Route::get('/wtp', [SiteController::class, 'wtp'])->name('wtp');

//Project Route End

// Route::get('/product-category/category', [SiteController::class, 'category'])->name('category');
Route::get('/categories', [SiteController::class, 'categories'])->name('categories');
Route::get('/categories/blower', [SiteController::class, 'blower'])->name('blower');
Route::get('/categories/diffuser', [SiteController::class, 'diffuser'])->name('diffuser');
Route::get('/categories/industrial-pump', [SiteController::class, 'industrialpump'])->name('industrialpump');
Route::get('/categories/electric-motor', [SiteController::class, 'electricmotor'])->name('electricmotor');
Route::get('/categories/electromagenetic-flow-meter', [SiteController::class, 'electromageneticflowmeter'])->name('electromageneticflowmeter');
Route::get('/categories/frp-vessel', [SiteController::class, 'frpvessel'])->name('frpvessel');
Route::get('/categories/ro-and-uf-membrane', [SiteController::class, 'roandufmembrane'])->name('roandufmembrane');
Route::get('/categories/water-treatment-accessories', [SiteController::class, 'watertreatmentaccessories'])->name('watertreatmentaccessories');
Route::get('/categories/water-treatment-chemicals-and-media', [SiteController::class, 'watertreatmentchemicalsandmedia'])->name('watertreatmentchemicalsandmedia');
Route::get('/categories/ion-exchange-resin', [SiteController::class, 'ionexchangeresin'])->name('ionexchangeresin');
Route::get('/categories/filtration-media', [SiteController::class, 'filtrationmedia'])->name('filtrationmedia');
Route::get('/categories/dosing-pump', [SiteController::class, 'dosingpump'])->name('dosingpump');


//Product Category End

//Single Product Start


Route::get('/product/bag-filter', [SiteController::class, 'bagfilter'])->name('bagfilter');
Route::get('/product/micron-filter-cartridge', [SiteController::class, 'MicronFilterCartridge'])->name('MicronFilterCartridge');
Route::get('/product/micron-filter-housing', [SiteController::class, 'MicronFilterHousing'])->name('MicronFilterHousing');
Route::get('/product/ro-membrane-housing', [SiteController::class, 'RoMembraneHousing'])->name('RoMembraneHousing');
Route::get('/product/ro-membrane', [SiteController::class, 'romembrane'])->name('romembrane');



Route::get('/product/pressure-roots-blowers', [SiteController::class, 'pressurerootsblowers'])->name('pressurerootsblowers');
Route::get('/product/ring-blower', [SiteController::class, 'ringblower'])->name('ringblower');
Route::get('/product/vacuum-roots-blower', [SiteController::class, 'vacuumrootsblower'])->name('vacuumrootsblower');

Route::get('/product/electromagnetic-flow-meter', [SiteController::class, 'electromagneticflowmeter'])->name('electromagneticflowmeter');

Route::get('/product/single-phase-motor', [SiteController::class, 'singlephasemotor'])->name('singlephasemotor');

Route::get('/product/three-phase-motor', [SiteController::class, 'threephasemotor'])->name('threephasemotor');

Route::get('/product/frp-vessel', [SiteController::class, 'frpvesse'])->name('frpvesse');

//Pump section 

Route::get('/product/dpl-series-dynamic-pump', [SiteController::class, 'DplSeriesDynamicPump'])->name('DplSeriesDynamicPump');
Route::get('/product/dp-deries-dynamic-pump', [SiteController::class, 'DpSeriesDynamicPump'])->name('DpSeriesDynamicPump');
Route::get('/product/dpm-centrifugal-pump', [SiteController::class, 'dpmCentrifugalPump'])->name('dpmCentrifugalPump');
Route::get('/product/2gk-dynamic-centrifugal-pump', [SiteController::class, 'gkdynamiccentrifugalpump'])->name('gkdynamiccentrifugalpump');
Route::get('/product/gks-series-centrifugal-pump', [SiteController::class, 'gksseriescentrifugalpump'])->name('gksseriescentrifugalpump');


//Water treatment chemicals and Media 


Route::get('/product/dynamic-activated-carbon', [SiteController::class, 'DynamicActivatedCarbon'])->name('DynamicActivatedCarbon');
Route::get('/product/dynamic-resin-001x7-1.3', [SiteController::class, 'DynamicResin3'])->name('DynamicResin3');
Route::get('/product/dynamic-resin-001X7-2.0', [SiteController::class, 'DynamicResin2'])->name('DynamicResin2');
Route::get('/product/dynamic-anthracite', [SiteController::class, 'Anthracite'])->name('Anthracite');
Route::get('/product/dynamic-coconut-shell-activated-carbon', [SiteController::class, 'Coconutshellactivatedcarbon'])->name('Coconutshellactivatedcarbon');
Route::get('/product/dynamic-manganese-dioxide', [SiteController::class, 'Manganesedioxide'])->name('Manganesedioxide');
Route::get('/product/biocide', [SiteController::class, 'Biocide'])->name('Biocide');
Route::get('/product/dechlorinator', [SiteController::class, 'Dechlorinator'])->name('Dechlorinator');
Route::get('/product/flocculants', [SiteController::class, 'Flocculants'])->name('Flocculants');
Route::get('/product/ro-antiscalant', [SiteController::class, 'RoAntiscalant'])->name('RoAntiscalant');


//Membrane Product start
Route::get('/product/dynamic-reverse-osmosis-membrane', [SiteController::class, 'microdynereverseosmosismembrane'])->name('microdynereverseosmosismembrane');
Route::get('/product/membranium-reverse-osmosis-membrane', [SiteController::class, 'membraniumreverseosmosismembrane'])->name('membraniumreverseosmosismembrane');
Route::get('/product/hydranautics-ro-membranes', [SiteController::class, 'hydramembraneros'])->name('hydramembraneros');

//Dosing Pump

Route::get('/product/dynamic-dosing-pump', [SiteController::class, 'dynamicdosingpump'])->name('dynamicdosingpump');

//Single Product Enduse Illuminate\Support\Facades\Route;


Route::get('/robots.txt', function () {
    $lines = [
        'User-agent: *',
        app()->environment('production') ? 'Disallow:' : 'Disallow: /',
    ];
    return Response::make(implode("\n", $lines), 200, ['Content-Type' => 'text/plain']);
});