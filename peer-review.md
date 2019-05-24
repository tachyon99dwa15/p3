## P3 Peer Review

+ Peter Chen: 
+ Diane R.: 
+ https://github.com/dianebainbridge/p3

## 1. Interface
+ Nice and clean interface. The menu on the top is effective.
+ Fuel Reading from Gas Pump is confuisng. I'm not sure what that means without reading the instruction on the left. NOt very intuitive.
+ THe instructions on the left worked really well and added clarity to the app. Like an instruction manual.
+

## 2. Functional testing
+ Submitting the form without any data resulted in a list of errors detailing the need for data entry
+ Negative numbers are not allowed
+ Letters are not allowed for odometer reading
+ http://p3.dianebainbridge.com/abc resulted in a "404 | Not Found" error


## 3. Code: Routes
+ Routes in web.php are well organized and methodically thought out.
+ Very clean and organized with comments too


## 4. Code: Views
+ about.blade.php, contact.blade.php. form.blade.php, show.blade.php, viewLogic.blade, php all used template inheritance
+ Display files only did display and logic files did the processing. Separation of concerns and MVC model convention
+ No unfamilair Blade syntax or technique that I could see
+ She used Blade where appropriate. In fact, there was a liberal use of Blade directives everywhere as needed

## 5. Code: General
+ Diane used js libraries which I didn't use. I stuck with standard PHP Blade Laravel
+ Diane used COOKIE instead of SESSION that was reviewed in class. That's interesting twist. 
+ I didn't understand the need to cast to an object in the file FuelConsumptionController.php. See below.
#create object from the form data
            $data = (object)array(
                'fuelCalcID' => $fuelCalcID,
                'date' => $today,
                'distance' => $distance,
                'fuel' => $fuelVolume,
                'fuelConsumption' => $fuelConsumption,
            );
 + Overall, her code is very nicely organized and structured. Obviously, she has done a lot of development and coding.


## 6. Misc
+ Liked the log feature and used of JSON to store the data. That's pretty neat and also standard way how modern web storage is done. so, kudos there.

