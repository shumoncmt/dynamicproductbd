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
Route::get('/categories/dynamic-submersible-pump', [SiteController::class, 'dynamicsubmersiblepump'])->name('dynamicsubmersiblepump');



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

//Dynamic Submersible Pump

Route::get('/product/dynamic-submersible-pump-2qgda', [SiteController::class, 'dynamicsubmersiblepump2qgda'])->name('dynamicsubmersiblepump2qgda');
Route::get('/product/dynamic-submersible-pump-3.5″stm2', [SiteController::class, 'dynamicsubmersiblepump35stm2'])->name('dynamicsubmersiblepump35stm2');
Route::get('/product/dynamic-submersible-pump-3″stm1', [SiteController::class, 'dynamicsubmersiblepump3″stm1'])->name('dynamicsubmersiblepump3″stm1');
Route::get('/product/dynamic-submersible-pump-3″stm2', [SiteController::class, 'dynamicsubmersiblepump3″stm2'])->name('dynamicsubmersiblepump3″stm2');
Route::get('/product/dynamic-submersible-pump-3″stm3.5', [SiteController::class, 'dynamicsubmersiblepump3″stm35'])->name('dynamicsubmersiblepump3″stm35');
Route::get('/product/dynamic-submersible-pump-3skm', [SiteController::class, 'dynamicsubmersiblepump3skm'])->name('dynamicsubmersiblepump3skm');
Route::get('/product/dynamic-submersible-pump-4″stm2', [SiteController::class, 'dynamicsubmersiblepump4″stm2'])->name('dynamicsubmersiblepump4″stm2');
Route::get('/product/dynamic-submersible-pump-4″stm3', [SiteController::class, 'dynamicsubmersiblepump4″stm3'])->name('dynamicsubmersiblepump4″stm3');
Route::get('/product/dynamic-submersible-pump-4″stm4', [SiteController::class, 'dynamicsubmersiblepump4″stm4'])->name('dynamicsubmersiblepump4″stm4');
Route::get('/product/dynamic-submersible-pump-4″stm6', [SiteController::class, 'dynamicsubmersiblepump4″stm6'])->name('dynamicsubmersiblepump4″stm6');
Route::get('/product/dynamic-submersible-pump-4″stm8', [SiteController::class, 'dynamicsubmersiblepump4″stm8'])->name('dynamicsubmersiblepump4″stm8');
Route::get('/product/dynamic-submersible-pump-4″stm10', [SiteController::class, 'dynamicsubmersiblepump4″stm10'])->name('dynamicsubmersiblepump4″stm10');
Route::get('/product/dynamic-submersible-pump-4″stm12', [SiteController::class, 'dynamicsubmersiblepump4″stm12'])->name('dynamicsubmersiblepump4″stm12');
Route::get('/product/dynamic-submersible-pump-4″stm16', [SiteController::class, 'dynamicsubmersiblepump4″stm16'])->name('dynamicsubmersiblepump4″stm16');
Route::get('/product/dynamic-submersible-pump-4qgda', [SiteController::class, 'dynamicsubmersiblepump4qgda'])->name('dynamicsubmersiblepump4qgda');
Route::get('/product/dynamic-submersible-pump-4skm', [SiteController::class, 'dynamicsubmersiblepump4skm'])->name('dynamicsubmersiblepump4skm');
Route::get('/product/dynamic-submersible-pump-4sm2', [SiteController::class, 'dynamicsubmersiblepump4sm2'])->name('dynamicsubmersiblepump4sm2');
Route::get('/product/dynamic-submersible-pump-4sm5', [SiteController::class, 'dynamicsubmersiblepump4sm5'])->name('dynamicsubmersiblepump4sm5');
Route::get('/product/dynamic-submersible-pump-4sm8', [SiteController::class, 'dynamicsubmersiblepump4sm8'])->name('dynamicsubmersiblepump4sm8');
Route::get('/product/dynamic-submersible-pump-4stm', [SiteController::class, 'dynamicsubmersiblepump4stm'])->name('dynamicsubmersiblepump4stm');
Route::get('/product/dynamic-submersible-pump-5sr10', [SiteController::class, 'dynamicsubmersiblepump5sr10'])->name('dynamicsubmersiblepump5sr10');
Route::get('/product/dynamic-submersible-pump-5sr15', [SiteController::class, 'dynamicsubmersiblepump5sr15'])->name('dynamicsubmersiblepump5sr15');
Route::get('/product/dynamic-submersible-pump-6sp17', [SiteController::class, 'dynamicsubmersiblepump6sp17'])->name('dynamicsubmersiblepump6sp17');
Route::get('/product/dynamic-submersible-pump-6sp30', [SiteController::class, 'dynamicsubmersiblepump6sp30'])->name('dynamicsubmersiblepump6sp30');
Route::get('/product/dynamic-submersible-pump-6sp46', [SiteController::class, 'dynamicsubmersiblepump6sp46'])->name('dynamicsubmersiblepump6sp46');
Route::get('/product/dynamic-submersible-pump-6sp60', [SiteController::class, 'dynamicsubmersiblepump6sp60'])->name('dynamicsubmersiblepump6sp60');
Route::get('/product/dynamic-submersible-pump-6sr18', [SiteController::class, 'dynamicsubmersiblepump6sr18'])->name('dynamicsubmersiblepump6sr18');
Route::get('/product/dynamic-submersible-pump-6sr30', [SiteController::class, 'dynamicsubmersiblepump6sr30'])->name('dynamicsubmersiblepump6sr30');
Route::get('/product/dynamic-submersible-pump-6sr45', [SiteController::class, 'dynamicsubmersiblepump6sr45'])->name('dynamicsubmersiblepump6sr45');
Route::get('/product/dynamic-submersible-pump-ksm', [SiteController::class, 'dynamicsubmersiblepumpksm'])->name('dynamicsubmersiblepumpksm');
Route::get('/product/dynamic-submersible-pump-qgda', [SiteController::class, 'dynamicsubmersiblepumpqgda'])->name('dynamicsubmersiblepumpqgda');
Route::get('/product/dynamic-submersible-pump-s150a', [SiteController::class, 'dynamicsubmersiblepump3″stm1'])->name('dynamicsubmersiblepump3″stm1');
Route::get('/product/dynamic-submersible-pump-s150b', [SiteController::class, 'dynamicsubmersiblepumps150b'])->name('dynamicsubmersiblepumps150b');
Route::get('/product/dynamic-submersible-pump-s150c', [SiteController::class, 'dynamicsubmersiblepumps150c'])->name('dynamicsubmersiblepumps150c');


//Single Product Enduse Illuminate\Support\Facades\Route;


Route::get('/robots.txt', function () {
    $lines = [
        'User-agent: *',
        app()->environment('production') ? 'Disallow:' : 'Disallow: /',
    ];
    return Response::make(implode("\n", $lines), 200, ['Content-Type' => 'text/plain']);
});