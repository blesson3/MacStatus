# MacStatus

## Install

#### Server
- Copy the files straight from the server folder onto a server
- Modify the mac/sleepwatch_install.sh file to reflect the url being utilized

#### Mac
- cd into the mac directory 
- Run the command `./sleepwatch_install.sh`
*This will install a third party application called sleepwatch (from http://www.bernhard-baehr.de/) that monitors sleep and wake for this application*

#### iOS
- Create an app id and obtain a push notification certificate
- Change the project app id to the app id you just created
- Build and run on an iOS device
- Tap Allow when prompted and take note of the APNS device token
- Change the server file `StatusChange.php` to reflect your device token


You must be a registered Apple Developer for this program to be used.
