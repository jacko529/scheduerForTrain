
## Tech test 

The scheduling system for loc-express

My approach was to only allow routes which have 5 drivers allocated into the sheduler.

You can allocate drivers to routes when you create the driver entity or when you edit the route information.


## Useage

Create a local database - best example is loco-express

php artisan migrate

php artisan db:seed --class=DriverSeeder

register a user

## Problems


Not unit tested.

You have to edit all fields of information when editing a route or driver

Sometime when generating as new schedule it will say outset 10, if this happens just refresh the page.