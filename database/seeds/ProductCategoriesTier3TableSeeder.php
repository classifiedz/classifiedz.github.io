<?php

use Illuminate\Database\Seeder;
use App\ProductCategory;

class ProductCategoriesTier3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
$faker = \Faker\Factory::create();

		$bags_id = 6;
		$jewellery_id = 7;
		$outfit_id = 8;
		$shoes_id = 9;
		$clothing_accesories_id = 10;
		$electronics_accessories_id = 11;
		$computers_id = 12;
		$consoles_id = 13;
		$phones_id = 14;
		$tv_id = 15;
		$electronics_others_id = 16;
		$appliacnces_id = 17;
		$indoor_id = 18;
		$outdoor_id = 19;
		$renovation_id = 20;
		$home_others_id = 21;
		$motorized_id = 22;
		$unmotorized_id = 23;
		$vehicle_parts_id = 24;
		$vehicle_others_id = 25;

        $listOfId = array($bags_id, $jewellery_id, $outfit_id, $shoes_id, $clothing_accesories_id, $electronics_accessories_id, $computers_id, $consoles_id, $phones_id, $tv_id, $electronics_others_id, $appliacnces_id, $indoor_id, $outdoor_id, $renovation_id, $home_others_id, $motorized_id, $unmotorized_id, $vehicle_parts_id, $vehicle_others_id);
        $itemsOfEachCategory = array(9,6,4,4,0,8,3,4,4,5,0,9,7,11,8,0,8,3,6,0);
        
        $parent_category_id = array();
        for ($i=0; $i < count($listOfId) ; $i++) { 
            for ($j=0; $j < $itemsOfEachCategory[$i] ; $j++) { 
                array_push($parent_category_id, $listOfId[$i]);
            }
        }

        $names = array('Athletic/Bowling/Doctor\'s/Duffel','Backpack/Saddle','Baguette/Satchel/Tote','Briefcase/Attache/Hobo/Messenger','Clutch/Minaudiere/Wrislet','Cosmetic Case','Envelope','Shoulder/Sling','Others','Bracelets/Rings','Brooches/Pins','Jewellery Sets','Necklaces','Watches','Others','Kids','Youth','Men','Women','Kids','Youth','Men','Women','Cameras/Camcorders Accessories','Cables/Connectors','Computers Accessories','External Storage','Phone/Tablets Accessories','Printer/Scanner/Fax','Speakers/Headsets/Microphones','Others','Desktops','Laptops','Notebooks','Playstation','Nintendo','Xbox','Others','Android','iOS','Windows','Others','Cameras/Camcorders','CDs/DVDs/Blu-ray','LCD/LED/OLED','Plasma','Others','Irons/Garment Steamers','Microwaves/Cookers','Mixers/Blenders/Juicers','Heaters/Humidifiers/Dehumidifiers','Ovens/Toasters','Refrigerators/Freezers','Washers/Dryers','Vacuum Cleaners','Others','Bath/Kitchen/Dining Wares','Bedding','Carpets/Rugs/Runners','Fireplace/Woods','Decors/Accents/Lighting/Fans','Storage/Shelves','Others','Patio/Garden Furniture','BBQ/Outdoor Cooking','Plants/Fertilizer/Soil','Hot Tubs/Pools','Decors/Lighting','Decks/Fences','Snowblowers','Lawnmowers/Leaf Blowers','Tools/Storage','Garage Doors/Openers','Others','Cabinets/Countertops','Doors/Trim/Windows','Electrical','Floors/Walls','Painting/Paint Supplies','Plumbing/Sinks/Showers/Toilets','Roofing','Others','ATVs/Snowmobiles','Boats/Watercrafts','Cars','Motocycles','RV','Trucks','Vans','Others','Bicylces','Boards','Others','Auto Body Parts','Engines & Parts/Drivetrain/Transmission','Interiors','Tires/Rims','Vehicle Accessories','Others');

        $size = count($names);

        for ($i = 0; $i < $size; $i++) {
            ProductCategory::create([
            	'name' => $names[$i],
            	'parent_category_id' => $parent_category_id[$i]
            ]);
        }
    }
}
