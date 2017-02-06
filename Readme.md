Skyscrapers Profile
===================
This is a [Skyscrapers profile][pw-skyscrapers] by [Ryan Cramer][ryan-cramer]. This one is made compatible with ProcessWire 3.x version.

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

## Notes
This profile uses [FieldtypeMapMarker][pw-map-marker]. You will be notified that the field could
not be found in the admin. Go to __Modules -> Site -> Add New __. Scroll down till the __Module Class Name__
field and enter `FieldtypeMapMarker` and press __Download and Install__. You will be prompted to install the
module cpouple of times. Install it and enter your Google Maps API Key. After that the site profile should
be working in full.

[pw-skyscrapers]: https://github.com/ryancramerdesign/SkyscrapersProfile
[ryan-cramer]: https://github.com/ryancramerdesign
[pw-map-marker]: http://modules.processwire.com/modules/fieldtype-map-marker/