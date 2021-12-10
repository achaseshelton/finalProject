<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use SKAgarwal\GoogleApi\PlacesApi;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurantData = [
            [
                "name" => "Ramsey's Diner",
                "url" => "https://www.zomato.com/lexington-ky/ramseys-diner-south-tates-creek-road/info",
                "address" => "4053 Tates Creek Centre Dr, Lexington, KY 40517",
                "price" => 2,
                "cuisine" => "Southern"
            ],
            [
                "name" => "Shamrock Bar & Grill",
                "url" => "https://www.zomato.com/lexington-ky/shamrock-bar-grille-south-tates-creek-road/info",
                "address" => "4750 Hartland Pkwy, Lexington, KY 40515",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Cheddar's Scratch Kitchen",
                "url" => "https://www.zomato.com/lexington-ky/cheddars-scratch-kitchen-south-tates-creek-road/info",
                "address" => "3604 Walden Drive Lexington, KY 40517",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Old San Jaun Cuban Cuisine",
                "url" => "https://www.zomato.com/lexington-ky/old-san-juan-cuban-cuisine-zandale/info",
                "address" => "247 Surfside Drive, Zandale, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "Cuban"
            ],
            [
                "name" => "P.F. Chang's",
                "url" => "https://www.zomato.com/lexington-ky/p-f-changs-nicholasville-road-area/info",
                "address" => "3405 Nicholasville Road Lexington, KY 40503",
                "price" => 3,
                "cuisine" => "Chinese"
            ],
            [
                "name" => "Giuseppe's Ristorante Italiano",
                "url" => "https://www.zomato.com/lexington-ky/giuseppes-ristorante-italiano-nicholasville-road-area/info",
                "address" => "4456 Nicholasville Rd, Lexington, KY 40515",
                "price" => 5,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Merrick Inn",
                "url" => "https://www.zomato.com/lexington-ky/merrick-inn-landsdowne/info",
                "address" => "1074 Merrick Drive, Lexington, KY 40502",
                "price" => 5,
                "cuisine" => "Southern"
            ],
            [
                "name" => "Pho BC",
                "url" => "https://www.zomato.com/lexington-ky/pho-bc-zandale/info",
                "address" => "171 West Lowry Lane, Suite 176, Lexington, KY 40503",
                "price" => 1,
                "cuisine" => "Vietnamese"
            ],
            [
                "name" => "El Rancho Tapatio Restaurant",
                "url" => "https://www.zomato.com/lexington-ky/el-rancho-tapatio-restaurant-zandale/info",
                "address" => "144 Burt Rd, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "Mexican"
            ],
            [
                "name" => "Bella Note",
                "url" => "https://www.zomato.com/lexington-ky/bella-notte-nicholasville-road-area/info",
                "address" => "3715 Nicholasville Rd, Lexington, KY 40503",
                "price" => 4,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Mi Pequena Hacienda",
                "url" => "https://www.zomato.com/lexington-ky/mi-pequena-hacienda-nicholasville-road-area/info",
                "address" => "3501 Lansdowne Drive, Lexington, KY 40517",
                "price" => 2,
                "cuisine" => "Mexican"
            ],
            [
                "name" => "Saul Good Restaurant & Pub",
                "url" => "https://www.zomato.com/lexington-ky/saul-good-restaurant-pub-nicholasville-road-area/info",
                "address" => "3801 Mall Road, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Chuy's",
                "url" => "https://www.zomato.com/lexington-ky/chuys-nicholasville-road-area/info",
                "address" => "3841 Nicholasville Centre Drive, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "Mexican"
            ],
            [
                "name" => "Asuka Japanese Steak House & Sushi",
                "url" => "https://www.zomato.com/lexington-ky/asuka-japanese-steak-house-sushi-nicholasville/info",
                "address" => "360 East Brannon Road, Nicholasville, KY 40356",
                "price" => 3,
                "cuisine" => "Japanese"
            ],
            [
                "name" => "Malone's",
                "url" => "https://www.zomato.com/lexington-ky/malones-lansdowne-landsdowne/info",
                "address" => "3347 Tates Creek Rd, Lexington, KY 40502",
                "price" => 5,
                "cuisine" => "Steakhouse"
            ],
            [
                "name" => "Asian Bistro Express",
                "url" => "https://www.zomato.com/lexington-ky/asian-bistro-express-south-tates-creek-road/info",
                "address" => "4224 Saron Dr, Lexington, KY 40515",
                "price" => 1,
                "cuisine" => "Chinese"
            ],
            [
                "name" => "Wah Mei",
                "url" => "https://www.zomato.com/lexington-ky/wah-mei-chinese-south-tates-creek-road/info",
                "address" => "4750 Hartland Pkwy, Lexington, KY 40515",
                "price" => 1,
                "cuisine" => "Chinese"
            ],
            [
                "name" => "Windy Corner",
                "url" => "https://www.zomato.com/lexington-ky/windy-corner-market-and-restaurant-hamburg/info",
                "address" => "4595 Bryan Station Road, Lexington, KY 40516",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Bonefish Grill",
                "url" => "https://www.zomato.com/lexington-ky/bonefish-grill-hamburg/info",
                "address" => "2341 Sir Barton Way, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "Seafood"
            ],
            [
                "name" => "Old Chicago",
                "url" => "https://www.zomato.com/lexington-ky/old-chicago-hamburg/info",
                "address" => "1924 Pavillon Way, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Carraba's Italian Grill",
                "url" => "https://www.zomato.com/lexington-ky/carrabbas-italian-grill-hamburg/info",
                "address" => "1881, Plaudit Pl, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Ted's Montana Grill",
                "url" => "https://www.zomato.com/lexington-ky/teds-montana-grill-hamburg/info",
                "address" => "2304 Sir Barton Way, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "American"
            ],
            [
                "name" => "Tandoor Fine Indian Cuisine",
                "url" => "https://www.zomato.com/lexington-ky/tandoor-fine-indian-cuisine-hamburg/info",
                "address" => "3146 Mapleleaf Drive Ste 110, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "Indian"
            ],
            [
                "name" => "Carino's",
                "url" => "https://www.zomato.com/lexington-ky/carinos-italian-hamburg-hamburg/info",
                "address" => "2333 Sir Barton Way, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Rafferty's Restaurant & Bar",
                "url" => "https://www.zomato.com/lexington-ky/raffertys-restaurant-bar-hamburg/info",
                "address" => "1865 Alysheba Way, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "American"
            ],
            [
                "name" => "Puccini's Pizza & Pasta",
                "url" => "https://www.zomato.com/lexington-ky/puccinis-pizza-pasta-hamburg/info",
                "address" => "3090 Helmsdale Pl, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Harry's",
                "url" => "https://www.zomato.com/lexington-ky/harrys-hamburg-hamburg/info",
                "address" => "1920 Pleasant Ridge Dr, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Outback Steakhouse",
                "url" => "https://www.zomato.com/lexington-ky/outback-steakhouse-hamburg/info",
                "address" => "1957 Bryant Road, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "Steakhouse"
            ],
            [
                "name" => "Red Lobster",
                "url" => "https://www.zomato.com/lexington-ky/red-lobster-hamburg/info",
                "address" => "1848 Alysheba Way, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "Seafood"
            ],
            [
                "name" => "Jalapeno's",
                "url" => "https://www.zomato.com/lexington-ky/jalapenos-mexican-hamburg/info",
                "address" => "3130 Mapleleaf Dr, Lexington, KY 40509",
                "price" => 1,
                "cuisine" => "Mexican"
            ],
            [
                "name" => "Wild Eggs",
                "url" => "https://www.zomato.com/lexington-ky/wild-eggs-hamburg/info",
                "address" => "1925 Justice Dr, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "Brunch"
            ],
            [
                "name" => "Miyako Sushi & Steakhouse",
                "url" => "https://www.zomato.com/lexington-ky/miyako-sushi-steakhouse-chippen-dale-square/info",
                "address" => "2547 Richmond Rd, Lexington, KY 40509",
                "price" => 4,
                "cuisine" => "Japanese"
            ],
            [
                "name" => "City BBQ",
                "url" => "https://www.zomato.com/lexington-ky/city-barbeque-the-lofts-of-locust-hills/info",
                "address" => "3292 Richmond Rd, Lexington, KY 40515",
                "price" => 2,
                "cuisine" => "BBQ"
            ],
            [
                "name" => "Arirang Garden Korean BBQ",
                "url" => "https://www.zomato.com/lexington-ky/arirang-garden-korean-bbq-the-lofts-of-locust-hills/info",
                "address" => "109 Mount Tabor Road, Lexington, KY 40517",
                "price" => 3,
                "cuisine" => "Korean"
            ],
            [
                "name" => "Taj India",
                "url" => "https://www.zomato.com/lexington-ky/taj-india-indian-restaurant-chippen-dale-square/info",
                "address" => "154 Patchen Dr, Lexington, KY 40517",
                "price" => 2,
                "cuisine" => "Indian"
            ],
            [
                "name" => "Sutton's",
                "url" => "https://www.zomato.com/lexington-ky/suttons-the-lofts-of-locust-hills/info",
                "address" => "110 N. Locust Hill Rd, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Mr. Kabab",
                "url" => "https://www.zomato.com/lexington-ky/mr-kabab-the-lofts-of-locust-hills/info",
                "address" => "2901 Richmond Rd, Lexington, KY 40509",
                "price" => 1,
                "cuisine" => "Mediterranean"
            ],
            [
                "name" => "Texas Roadhouse",
                "url" => "2901 Richmond Rd, Lexington 40509",
                "address" => "3029 Richmond Road, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "Steakhouse"
            ],
            [
                "name" => "Durango's",
                "url" => "https://www.zomato.com/lexington-ky/durangos-mexican-idle-hour-drive/info",
                "address" => "2121 Richmond Rd, Lexington, KY 40502",
                "price" => 2,
                "cuisine" => "Mexican"
            ],
            [
                "name" => "Koreana Authentic Cuisine",
                "url" => "https://www.zomato.com/lexington-ky/koreana-authentic-cuisine-idle-hour-drive/info",
                "address" => "2350 Woodhill Dr, Lexington, KY 40509",
                "price" => 2,
                "cuisine" => "Korean"
            ],
            [
                "name" => "Pho Saigon",
                "url" => "https://www.zomato.com/lexington-ky/pho-saigon-vietnamese-noodle-soup-grill-idle-hour-drive/info",
                "address" => "1555 E New Circle Rd, Lexington, KY 40509",
                "price" => 1,
                "cuisine" => "Vietnamese"
            ],
            [
                "name" => "Golden Wok",
                "url" => "https://www.zomato.com/lexington-ky/golden-wok-chinese-the-lofts-of-locust-hills/info",
                "address" => "3101 Richmond Rd, Lexington, KY 40509",
                "price" => 1,
                "cuisine" => "Chinese"
            ],
            [
                "name" => "Columbia's",
                "url" => "https://www.zomato.com/lexington-ky/columbia-steak-house-chippen-dale-square/info",
                "address" => "2750 Richmond Rd, Lexington, KY 40509",
                "price" => 3,
                "cuisine" => "Steakhouse"
            ],
            [
                "name" => "Dickey's Barbecue Pit",
                "url" => "https://www.zomato.com/lexington-ky/dickeys-barbecue-pit-meadows-loudon/info",
                "address" => "1315 Winchester Road #325, Lexington, KY 40505",
                "price" => "2",
                "cuisine" => "BBQ"
            ],
            [
                "name" => "Osaka Sushi",
                "url" => "https://www.zomato.com/lexington-ky/osaka-sushi-restaurant-nicholasville-road-area/info",
                "address" => "3805 Dylan Pl Suite 130, Lexington, KY 40514",
                "price" => 3,
                "cuisine" => "Japanese"
            ],
            [
                "name" => "Palmers Fresh Grill",
                "url" => "https://www.zomato.com/lexington-ky/palmers-fresh-grill-nicholasville-road-area/info",
                "address" => "161 Lexington Green Circle, Lexington, KY 40503",
                "price" => 3,
                "cuisine" => "Seafood"
            ],
            [
                "name" => "Rooster's",
                "url" => "https://www.zomato.com/lexington-ky/roosters-wings-nicholasville-road-area/info",
                "address" => "124 Marketplace Dr, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Number Once China Buffet",
                "url" => "https://www.zomato.com/lexington-ky/number-one-china-buffet-nicholasville-road-area/info",
                "address" => "105 E Reynolds Rd, Lexington, KY 40517",
                "price" => 2,
                "cuisine" => "Chinese"
            ],
            [
                "name" => "Bellacino's Pizza and Grinders",
                "url" => "https://www.zomato.com/lexington-ky/bellacinos-pizza-and-grinders-nicholasville-road-area/info",
                "address" => "161 E Brannon Rd, Nicholasville, KY 40356",
                "price" => 2,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Winchell's",
                "url" => "https://www.zomato.com/lexington-ky/winchells-southland/info",
                "address" => "348 Southland Drive, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "Southern"
            ],
            [
                "name" => "The Ketch",
                "url" => "https://www.zomato.com/lexington-ky/the-ketch-seafood-grill-southland/info",
                "address" => "2012 Regency Rd, Lexington, KY 40503",
                "price" => 3,
                "cuisine" => "Seafood"
            ],
            [
                "name" => "Planet Thai",
                "url" => "https://www.zomato.com/lexington-ky/planet-thai-zandale/info",
                "address" => "2417 Nicholasville Rd #2, Lexington, KY 40503",
                "price" => 1,
                "cuisine" => "Thai"
            ],
            [
                "name" => "Sahara",
                "url" => "https://www.zomato.com/lexington-ky/sahara-mediterranean-cuisine-beaumont/info",
                "address" => "3061 Fieldstone Way, Lexington, KY 40513",
                "price" => 1,
                "cuisine" => "Mediterranean"
            ],
            [
                "name" => "Masala",
                "url" => "https://www.zomato.com/lexington-ky/masala-indian-cuisine-beaumont/info",
                "address" => "3061 Fieldstone Way Ste 600, Lexington, KY 40513",
                "price" => 2,
                "cuisine" => "Indian"
            ],
            [
                "name" => "Drake's",
                "url" => "https://www.zomato.com/lexington-ky/drakes-lexington-landsdowne/info",
                "address" => "3347 Tates Creek Rd, Lexington, KY 40502",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Panda Cuisine",
                "url" => "https://www.zomato.com/lexington-ky/panda-cuisine-zandale/info",
                "address" => "2358 Nicholasville Rd, Lexington, KY 40503",
                "price" => 1,
                "cuisine" => "Chinese"
            ],
            [
                "name" => "Bru Burger Bar",
                "url" => "https://www.zomato.com/lexington-ky/bru-burger-bar-lexington-beaumont/info",
                "address" => "3010 Lakecrest Cir, Lexington, KY 40513",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "Curry House",
                "url" => "https://www.zomato.com/lexington-ky/curry-house-zandale/info",
                "address" => "2220 Nicholasville Road, Suite 160, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "Indian"
            ],
            [
                "name" => "Paisano's",
                "url" => "https://www.zomato.com/lexington-ky/paisanos-italian-restaurant-lounge-zandale/info",
                "address" => "2417 Nicholasville Road, Lexington, KY 40503",
                "price" => 3,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Taste of India",
                "url" => "https://www.zomato.com/lexington-ky/taste-of-india-restaurant-bar-zandale/info",
                "address" => "2467 Nicholasville Rd, Lexington, KY 40503",
                "price" => 2,
                "cuisine" => "Indian"
            ],
            [
                "name" => "Cole's 735",
                "url" => "https://www.zomato.com/lexington-ky/coles-735-main-downtown/info",
                "address" => "735 East Main St, Lexington, KY 40502",
                "price" => 5,
                "cuisine" => "American"
            ],
            [
                "name" => "Dudley's on Short",
                "url" => "https://www.zomato.com/lexington-ky/dudleys-on-short-downtown/info",
                "address" => "259 W Short St, Lexington, KY 40507",
                "price" => 5,
                "cuisine" => "Southern"
            ],
            [
                "name" => "Le Deauville",
                "url" => "https://www.zomato.com/lexington-ky/le-deauville-downtown/info",
                "address" => "199 N Limestone, Lexington, KY 40507",
                "price" => 5,
                "cuisine" => "French"
            ],
            [
                "name" => "County Club",
                "url" => "https://www.zomato.com/lexington-ky/county-club-downtown/info",
                "address" => "555 Jefferson St, Lexington, KY 40508",
                "price" => 3,
                "cuisine" => "BBQ"
            ],
            [
                "name" => "Nat's",
                "url" => "https://www.zomato.com/lexington-ky/nats-downtown/info",
                "address" => "111 S Upper Street, Lexington, KY 40507",
                "price" => 2,
                "cuisine" => "Thai"
            ],
            [
                "name" => "Taste of Thai",
                "url" => "https://www.zomato.com/lexington-ky/taste-of-thai-downtown/info",
                "address" => "101 West Main Street, Lexington, KY 40507",
                "price" => 2,
                "cuisine" => "Thai"
            ],
            [
                "name" => "Distilled",
                "url" => "https://www.zomato.com/lexington-ky/distilled-at-gratz-park-inn-downtown/info",
                "address" => "120 West 2nd Street, Lexington, KY 40507",
                "price" => "4",
                "cuisine" => "American"
            ],
            [
                "name" => "Carson's Food and Drink",
                "url" => "https://www.zomato.com/lexington-ky/carsons-downtown/info",
                "address" => "361 E Main Street, Lexington, KY 40507",
                "price" => 4,
                "cuisine" => "Southern"
            ],
            [
                "name" => "Buddah Lounge",
                "url" => "https://www.zomato.com/lexington-ky/buddha-lounge-downtown",
                "address" => "109 North Mill Street, Lexington, KY 40507",
                "price" => 2,
                "cuisine" => "Japanese"
            ],
            [
                "name" => "Corto Lima",
                "url" => "https://www.zomato.com/lexington-ky/corto-lima-downtown/info",
                "address" => "101 West Short Street, Lexington, KY 40507",
                "price" => 3,
                "cuisine" => "Mexican"
            ],
            [
                "name" => "Lockbox",
                "url" => "https://www.zomato.com/lexington-ky/lockbox-downtown/info",
                "address" => "167 W Main Street, Lexington, KY 40507",
                "price" => 3,
                "cuisine" => "Southern"
            ],
            [
                "name" => "Jeff Ruby's",
                "url" => "https://www.zomato.com/lexington-ky/jeff-rubys-steakhouse-downtown/info",
                "address" => "101 W Vine St Lexington, KY 40507",
                "price" => 5,
                "cuisine" => "Steakhouse"
            ],
            [
                "name" => "Doodle's",
                "url" => "https://www.zomato.com/lexington-ky/doodles-breakfast-lunch-downtown/info",
                "address" => "262 N Limestone, Lexington, KY 40507",
                "price" => 2,
                "cuisine" => "Brunch"
            ],
            [
                "name" => "Bourbon n' Toulouse",
                "url" => "https://www.zomato.com/lexington-ky/bourbon-n-toulouse-chevy-chase/info",
                "address" => "829 E Euclid Ave, Lexington, KY 40502",
                "price" => 1,
                "cuisine" => "Southern"
            ],
            [
                "name" => "Joe Bologna's",
                "url" => "https://www.zomato.com/lexington-ky/joe-bolognas-historic-south-hill/info",
                "address" => "120 W Maxwell St, Lexington, KY 40508",
                "price" => 2,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Stella's Kentucky Deli",
                "url" => "https://www.zomato.com/lexington-ky/stellas-kentucky-deli-north-broadway-short-street/info",
                "address" => "143 Jefferson St, Lexington, KY 40508",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "The Grey Goose",
                "url" => "https://www.zomato.com/lexington-ky/the-grey-goose-north-broadway-short-street/info",
                "address" => "170 Jefferson Street, Lexington, KY 40508",
                "price" => 3,
                "cuisine" => "American"
            ],
            [
                "name" => "Charlie Brown's",
                "url" => "https://www.zomato.com/lexington-ky/charlie-browns-chevy-chase/info",
                "address" => "816 E Euclid Ave, Lexington, KY 40502",
                "price" => 2,
                "cuisine" => "American"
            ],
            [
                "name" => "The Tulip Bistro and Bar",
                "url" => "https://www.zomato.com/lexington-ky/the-tulip-bistro-and-bar-chevy-chase/info",
                "address" => "355 Romany Road, Lexington, KY 40502",
                "price" => 4,
                "cuisine" => "French"
            ],
            [
                "name" => "Pies & Pints",
                "url" => "https://www.zomato.com/lexington-ky/pies-pints-north-broadway-short-street/info",
                "address" => "401 W Main St, Lexington, KY 40507",
                "price" => 2,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Tony's of Lexington",
                "url" => "https://www.zomato.com/lexington-ky/tonys-of-lexington-north-broadway-short-street/info",
                "address" => "401 West Main Street, Lexington, KY 40507",
                "price" => 5,
                "cuisine" => "Steakhouse"
            ],
            [
                "name" => "Joella's",
                "url" => "https://www.zomato.com/lexington-ky/joellas-cochran-road-chevy-chase/info",
                "address" => "101 Cochran Road, Lexington, KY 40502",
                "price" => 3,
                "cuisine" => "Southern"
            ],
            [
                "name" => "Josie's",
                "url" => "https://www.zomato.com/lexington-ky/josies-chevy-chase/info",
                "address" => "821 Place, Chevy Chase, Lexington, KY 40502",
                "price" => 2,
                "cuisine" => "Brunch"
            ],
            [
                "name" => "Athenian Grill",
                "url" => "https://www.zomato.com/lexington-ky/athenian-grill-bistro-market-chevy-chase/info",
                "address" => "313 S Ashland Ave, Lexington, KY 40502",
                "price" => 1,
                "cuisine" => "Mediterranean"
            ],
            [
                "name" => "Oasis",
                "url" => "https://www.zomato.com/lexington-ky/oasis-mediterranean-chevy-chase/info",
                "address" => "837 Chevy Chase Pl, Lexington, KY 40502",
                "price" => 2,
                "cuisine" => "Mediterranean"
            ],
            [
                "name" => "Han Woo Ri",
                "url" => "https://www.zomato.com/lexington-ky/han-woo-ri-historic-south-hill/info",
                "address" => "371 S. Limestone, Lexington, KY 40508",
                "price" => 1,
                "cuisine" => "Korean"
            ],
            [
                "name" => "Bangkok House",
                "url" => "https://www.zomato.com/lexington-ky/bangkok-house-historic-south-hill/info",
                "address" => "275 E Euclid Avenue, Lexington, KY 40508",
                "price" => 2,
                "cuisine" => "Thai"
            ],
            [
                "name" => "Blue Door Smokehouse",
                "url" => "https://www.zomato.com/lexington-ky/blue-door-smokehouse-meadows-loudon/info",
                "address" => "226 Walton Ave, Lexington, KY 40502",
                "price" => 2,
                "cuisine" => "BBQ"
            ],
            [
                "name" => "Tachibana",
                "url" => "https://www.zomato.com/lexington-ky/tachibana-japanese-restaurant-elkhorn-park/info",
                "address" => "785 Newtown Ct, Lexington, KY 40511",
                "price" => 2,
                "cuisine" => "Japanese"
            ],
            [
                "name" => "Blue Reef Sushi",
                "url" => "https://www.zomato.com/lexington-ky/blue-reef-sushi-grill-to-go-s-broadway-park/info",
                "address" => "1080 S Broadway Rd, Lexington, KY 40504",
                "price" => 2,
                "cuisine" => "Japanese"
            ],
            [
                "name" => "First Watch",
                "url" => "https://www.zomato.com/lexington-ky/first-watch-s-broadway-park/info",
                "address" => "1080 S Broadway, Lexington, KY 40504",
                "price" => 2,
                "cuisine" => "Brunch"
            ],
            [
                "name" => "Pasta Garage",
                "url" => "https://www.zomato.com/lexington-ky/pasta-garage-italian-cafe-meadows-loudon/info",
                "address" => "962 Delaware Avenue, Lexington, KY 40505",
                "price" => 2,
                "cuisine" => "Italian"
            ],
            [
                "name" => "The Local Taco",
                "url" => "https://www.zomato.com/lexington-ky/the-local-taco-historic-south-hill/info",
                "address" => "315 S Limestone, Lexington, KY 40508",
                "price" => 2,
                "cuisine" => "Mexican"
            ],
            [
                "name" => "Proud Mary BBQ",
                "url" => "https://www.zomato.com/lexington-ky/proud-mary-bbq-idle-hour-drive/info",
                "address" => "9079 Old Richmond Road 40515",
                "price" => 3,
                "cuisine" => "BBQ"
            ],
            [
                "name" => "Jasmine Rice",
                "url" => "https://www.zomato.com/lexington-ky/jasmine-rice-thai-restaurant-meadows-loudon/info",
                "address" => "911 Winchester Rd, Lexington, KY 40505",
                "price" => 2,
                "cuisine" => "Thai"
            ],
            [
                "name" => "Courtyard Deli",
                "url" => "https://www.zomato.com/lexington-ky/courtyard-deli-downtown/info",
                "address" => "351 Church St, Lexington, KY 40507",
                "price" => 1,
                "cuisine" => "American"
            ],
            [
                "name" => "OBC Kitchen",
                "url" => "https://www.zomato.com/lexington-ky/obc-kitchen-landsdowne/info",
                "address" => "3373 Tates Creek Rd, Lexington, KY 40502",
                "price" => 4,
                "cuisine" => "Southern"
            ],
            [
                "name" => "AZUR",
                "url" => "https://www.zomato.com/lexington-ky/azur-restaurant-patio-beaumont/menu",
                "address" => "3070 Lakecrest Circle, Lexington, KY 40513",
                "price" => 3,
                "cuisine" => "Southern"
            ],
            [
                "name" => "J. Render's Southern Table & Bar",
                "url" => "https://www.zomato.com/lexington-ky/j-renders-southern-table-bar-beaumont/info",
                "address" => "3191 Beaumont Centre Circle, Lexington, KY 40513",
                "price" => 2,
                "cuisine" => "BBQ"
            ],
            [
                "name" => "Goodfellas Pizzeria",
                "url" => "https://www.zomato.com/lexington-ky/goodfellas-pizzeria-downtown/info",
                "address" => "110 N Mill St, Lexington, KY 40507",
                "price" => 1,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Mancino's Pizza & Grinder's",
                "url" => "https://www.zomato.com/lexington-ky/mancinos-pizza-grinders-meadowthorpe/info",
                "address" => "1590 Leestown Rd, Lexington, KY 40511",
                "price" => 1,
                "cuisine" => "Italian"
            ],
            [
                "name" => "Zim's Cafe",
                "url" => "https://wwww.zimscafe.com",
                "address" => "215 W Main St, Lexington, KY 40507",
                "price" => 1,
                "cuisine" => "Brunch"
            ],
            [
                "name" => "Frank & Dino's",
                "url" => "https://wwww.frankanddinos.com",
                "address" => "271 W Short St, Lexington, KY 40507",
                "price" => 5,
                "cuisine" => "Italian"
            ]
        ];

  for ($i = 0; $i < count($restaurantData); $i++) {
            $restaurant = new Restaurant;
            $restaurant->cuisine = $restaurantData[$i]['cuisine'];
            $restaurant->name = $restaurantData[$i]['name'];
            $restaurant->address = $restaurantData[$i]['address'];
            $restaurant->url = $restaurantData[$i]['url'];
            $restaurant->price = $restaurantData[$i]['price'];
            $restaurant->save();
        };
        // \App\Models\Restaurant::factory(15)->create();
    }
}
