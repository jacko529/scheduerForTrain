# Tech test 

This is the scheduling application for Loco express, the application allows the user create new schedules for the drivers.

The approach was that a route would not even enter the sheduler until 5 drivers are allocated. Drivers are allocated
when the driver is created or via the edit button.

When the 'generate timetable' is pressed the table is entered into the database and the user then updates the entry with the date.
## Installation

Make sure the first function you do is create database, seed the database, routes must be created before the application works.

```bash
pip install foobar
```

## Problems

The application is slightly buggy and does not currently hold the additional added features laid out in the brief.

Remember that when you edit a route or driver you must edit all of their details or it will throw an error.

Also when generating a schedule sometimes an error appears stating outset 10, if this happens just refresh the page.