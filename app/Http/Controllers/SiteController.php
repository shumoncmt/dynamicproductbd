<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
     //Page start
     function home(){
        return view ('site.home');
        
    }
    function blog(){
        return view('site.blog');
    }
    function contact(){
        return view('site.contact');
    }
    function about(){
        return view('site.about');
    }
    function team(){
        return view('site.team');
    }
    function service(){
        return view('site.service');
    }
    function feature(){
        return view('site.feature');
    }
    function error(){
        return view('site.error');
    }
    function testimonial(){
        return view('site.testimonial');
    }
      //Page End

      //Project Start



    function project(){
        return view('project.project');
    }

    function deeptubewell(){
        return view ('project.Deep-Tube-Well');
    }
    function zld(){
        return view ('project.zld');
    }
    function DrinkingWaterTreatmentPlant(){
        return view ('project.Drinking-Water-Treatment-Plant');
    }
    function etp(){
        return view ('project.etp');
    }
    function MembraneBasedDesalinationPlant(){
        return view ('project.Membrane-Based-Desalination-Plant');
    }
    function MobileWaterTreatmentPlant(){
        return view ('project.Mobile-Water-Treatment-Plant');
    }
    function PumpsandPumpingSystems(){
        return view ('project.Pumps-and-Pumping-Systems');
    }
    function stp(){
        return view ('project.stp');
    }
    function SurfaceWaterTreatmentPlant(){
        return view ('project.Surface-Water-Treatment-Plant');
    }
    function UltraPureWaterTreatmentPlant(){
        return view ('project.Ultra-Pure-Water-Treatment-Plant');
    }
    function WaterandWasteWaterTreatmentPlants(){
        return view ('project.Water-and-Waste-Water-Treatment-Plants');
    }
    
    function wtp(){
        return view ('project.wtp');
    }
    //Project End

//Product Caregory Start
    
    function categories(){
        return view ('product-category.all-category');
    }

        function blower(){
            return view ('product-category.blower');
        }
        function diffuser(){
            return view ('product-category.diffuser');
        }
        function electricmotor(){
            return view ('product-category.electricmotor');
        }
        function electromageneticflowmeter(){
            return view ('product-category.electromageneticflowmeter');
        }
        function frpvessel(){
            return view ('product-category.frpvessel');
        }
        function roandufmembrane(){
            return view ('product-category.roandufmembrane');
        }
        function watertreatmentaccessories(){
            return view ('product-category.watertreatmentaccessories');
        }
        function watertreatmentchemicalsandmedia(){
            return view ('product-category.watertreatmentchemicalsandmedia');
        }

        function allproduct(){
            return view ('product-category.all-product');
        }

        function allcategory(){
            return view('product-category.all-category');
        }
        function industrialpump(){
            return view('product-category.industrialpump');
        }
        function filtrationmedia(){
            return view('product-category.filtrationmedia');
        }
        function ionexchangeresin(){
            return view('product-category.ionexchangeresin');
        }

        function dosingpump(){
            return view('product-category.dosing-pump');
        }

          function dynamicsubmersiblepump (){
            return view('product-category.dynamic-submersible-pump');
        }

        // Single Product start

        function bagfilter(){
            return view('product.Biocide-Membrane-Cleaner.Bag-Filter');
        }
        function MicronFilterCartridge(){
            return view('product.Biocide-Membrane-Cleaner.Micron-Filter-Cartridge');
        }
        function MicronFilterHousing(){
            return view('product.Biocide-Membrane-Cleaner.Micron-Filter-Housing');
        }

        function RoMembraneHousing(){
            return view('product.Biocide-Membrane-Cleaner.Ro-Membrane-Housing');
        }
        function romembrane(){
            return view('product.Biocide-Membrane-Cleaner.Ro-membrane');
        }
        function pressurerootsblowers(){
            return view('product.Blower.Pressure-Roots-Blowers');
        }


        function ringblower(){
            return view('product.Blower.Ring-Blower');
        }
        function vacuumrootsblower(){
            return view('product.Blower.Vacuum-Roots-Blower');
        }

        function electromagneticflowmeter(){
            return view('product.Flow-Meter.Electromagnetic-Flow-Meter');
        }

        function threephasemotor(){
            return view('product.Motor.three-phase-motor');
        }

        function singlephasemotor(){
            return view('product.Motor.Single-Phase-Motor');
        }


        function frpvesse(){
            return view('product.Vessel.frp-vessel');
        }

        //pump section

        function DplSeriesDynamicPump(){
            return view('product.Pump.High-Pressure-Multistage-Pump.Dpl-Series-Dynamic-Pump');
        }

        function DpSeriesDynamicPump(){
            return view('product.Pump.High-Pressure-Multistage-Pump.Dp-Series-Dynamic-Pump');
        }
        function dpmCentrifugalPump(){
            return view('product.Pump.Gk-Centrifugal-Pump.dpm-Centrifugal-Pump');
        }
        function gkdynamiccentrifugalpump(){
            return view('product.Pump.Gk-Centrifugal-Pump.2gk-dynamic-centrifugal-pump');
        }
        function gksseriescentrifugalpump(){
            return view('product.Pump.gks-series-centrifugal-pump');
        }

        //Water treatment chemicals and Media

        function DynamicActivatedCarbon(){
            return view('product.Filtration-Media.Dynamic-Activated-Carbon');
        }

        function DynamicResin3(){
            return view('product.Filtration-Media.Dynamic-Resin-1');
        }

        function DynamicResin2(){
            return view('product.Filtration-Media.Dynamic-Resin-2');
        }

        function Anthracite(){
            return view('product.Filtration-Media.dynamic-anthracite');
        }
        function Coconutshellactivatedcarbon(){
            return view('product.Filtration-Media.dynamic-coconut-shell-activated-carbon');
        }
        function Manganesedioxide(){
            return view('product.Filtration-Media.dynamic-manganese-dioxide');
        }
        function Biocide(){
            return view('product.Filtration-Media.Biocide');
        }
        function Dechlorinator(){
            return view('product.Filtration-Media.Dechlorinator');
        }
        function Flocculants(){
            return view('product.Filtration-Media.Flocculants');
        }
        function RoAntiscalant(){
            return view('product.Filtration-Media.Ro-Antiscalant');
        }

        function microdynereverseosmosismembrane(){
            return view('product.membrane.dynamic-reverse-osmosis-membrane');
        }
        function membraniumreverseosmosismembrane(){
            return view('product.membrane.membranium-reverse-osmosis-membrane');
        }
        function hydramembraneros(){
            return view('product.membrane.hydranautics-ro-membranes');
        }


        //Dynamic Dosing Pump
        function dynamicdosingpump(){
            return view('product.dosing-pump.dynamic-dosing-pump');
        }
//Dynamic Submarsabile Pump

       function dynamicsubmersiblepump2qgda(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-2qgda');
            }
         function dynamicsubmersiblepump35stm2(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-35stm2');
            }
         function dynamicsubmersiblepump3stm1(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-3stm1');
            }
         function dynamicsubmersiblepump3stm2(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-3stm2');
            }
         function dynamicsubmersiblepump3stm35(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-3stm3-5');
            }
         function dynamicsubmersiblepump3skm(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-3skm');
            }
         function dynamicsubmersiblepump4stm2(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm2');
            }
         function dynamicsubmersiblepump4stm3(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm3');
            }
         function dynamicsubmersiblepump4stm4(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm4');
            }
         function dynamicsubmersiblepump4stm6(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm6');
            }
         function dynamicsubmersiblepump4stm8(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm8');
            }
         function dynamicsubmersiblepump4stm10(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm10');
            }
         function dynamicsubmersiblepump4stm12(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm12');
            } 
         function dynamicsubmersiblepump4stm16(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm16');
            }
         function dynamicsubmersiblepump4qgda(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4qgda');
            }
         function dynamicsubmersiblepump4skm(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4skm');
            }
         function dynamicsubmersiblepump4sm2(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4sm2');
            }
         function dynamicsubmersiblepump4sm5(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4sm5');
            }
         function dynamicsubmersiblepump4sm8(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4sm8');
            }
         function dynamicsubmersiblepump4stm(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-4stm');
            }
         function dynamicsubmersiblepump5sr10(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-5sr10');
            }
         function dynamicsubmersiblepump5sr15(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-5sr15');
            }
         function dynamicsubmersiblepump6sp17(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sp17');
            }
         function dynamicsubmersiblepump6sp30(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sp30');
            }
         function dynamicsubmersiblepump6sp46(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sp46');
            }
         function dynamicsubmersiblepump6sp60(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sp60');
            }
         function dynamicsubmersiblekpump3stm1(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sr18');
            }
         function dynamicsubmersiblepump6sr18(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sr18');
            }
         function dynamicsubmersiblepump6sr30(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sr30');
            }
         function dynamicsubmersiblepump6sr45(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-6sr45');
            }
         function dynamicsubmersiblepumpksm(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-ksm');
            }
         function dynamicsubmersiblepumpqgda(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-qgda');
            }
            function dynamicsubmersiblepumps150a(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-s150a');
            }
            function dynamicsubmersiblepumps150b(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-s150b');
            }
            function dynamicsubmersiblepumps150c(){
                return view('product.pump.dynamic-submersible-pump.dynamic-submersible-pump-s150c');
            }
        

        
        //Single Product End




        // Product Category End


        }