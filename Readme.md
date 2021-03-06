Skyscrapers Profile
===================
This is a [Skyscrapers profile][pw-skyscrapers] by [Ryan Cramer][ryan-cramer]. This one is made compatible with ProcessWire 3.x version.

![Profile Image][profile-img]

## Requirements
- ProcessWire version >= 3.x

## Installation
Before running the ProcessWire installer. Place this directory beside other site profiles.
Your ProcessWire directory should looki like this.
```
site-beginner
site-blank
site-classic
site-default
site-language
site-skyscrapers
wire
...
index.php
install.php
...
```
Then you can start the installer and there should be an option to choose skyscrapers profile.

## Warning!
After installation you will get error on the front-end. This is because this profile depends on
[FieldtypeMapMarker][pw-map-marker]. You will be notified that the field could not be found in the admin also.

Go to __Modules -> Site -> Add New__. Scroll down till the __Module Class Name__
field and enter `FieldtypeMapMarker` and press __Download and Install__. You will be prompted to install the
module couple of times. Install it and enter your Google Maps API Key in the module settings. After that
the site profile should be working in full.

[pw-skyscrapers]: http://demo.processwire.com/
[profile-img]: https://raw.githubusercontent.com/dadish/pw-skyscrapers-profile/master/install/skyscrapers.gif
[ryan-cramer]: https://github.com/ryancramerdesign
[pw-map-marker]: http://modules.processwire.com/modules/fieldtype-map-marker/