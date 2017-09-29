# Laravel Instructions OSX :computer:  
The purpose of this document is to give instructionson how to run a local environment on a Mac running OSX so that developement and testing can be done locally on your computers. These step by step instructions will guide you through the installation of XAMP(Local Server),Composer(a package installer), and Laravel(a PHP Framework). I used [these instructions](https://www.frankwaive.com/how-to-install-laravel-on-a-mac-with-xampp/) to set up my own environment, the following is a condensed and modified where I ran into issues.  

### Step 1 : Download XAMP
Download and install [XAMP](https://www.apachefriends.org/index.html), the installation is straight forward.  

### Step 2 : Run XAMP
1. Run XAMP and click `START`  
1. Go to the `SERVICES` tab and make sure they're all running  
1. Go to `NETWORK` and click `ENABLE`  
1. Go to `VOLUMES` and click `MOUNT`  
    1. On your mac go to `Finder` -> `Preferences` 
    1. Under Show these items on the desktop: check `Connected Servers`  
    
**Hurray!** you shoud see your local server on the desktop called *lampp*

### Step 3 : Install Composer
We will now instal Composer, a simple dependancy manager.
> SIDE NOTE: your server is located at `/Users/[USERNAME]/.bitnami/stackman/machines/xampp/volumes/root`. If you're unsure, you can open up a terminal window, drag in the lampp volume and it will show you your file path  
1. Open up a terminal window
1. Type in `cd /Users/[USERNAME]/.bitnami/stackman/machines/xampp/volumes/root/htdocs`. *Our HTML files will be held in the `htdocs` folder*.
1. Type in `curl -s http://getcomposer.org/installer | php`  

You should now have composer installed on your local server.

### Step 4: Install Laravel
This step is only necessary to verifiy **laravel** and **composer** are installed correctly. In step 5 when we git clone it will already import laravel again into that directory.
1.  While still in `/htdocs` type in `php composer.phar create-project laravel/laravel --prefer-dist`
> The next two steps are just to fix a bug that doesn't display the laravel homepage.
1.  Type in `cd laravel`, 
    > :mag_right: We want `/Users/[USERNAME]/.bitnami/stackman/machines/xampp/volumes/root/htdocs/laravel`.
1. Type in `sudo chmod -R 7777 storage`, *this will give XAMP admin privleges to the storage folder*.
    
### Step 5 : Clone Repository
> We are going to clone the repository into ` htdocs` 
1. Open up the Github Desktop App
1. Click `File` -> `Clone Repository`
1. Chose the path `/Users/[USERNAME]/.bitnami/stackman/machines/xampp/volumes/root/htdocs`

### Step 6 : Check Your Awesomeness :muscle:
`http://localhost:8080/classifiedz.github.io/resources/views/index.blade.php` will display classifiedz.xyz  
`http://localhost:8080/laravel` will display the default laravel page  
You can now git *pull/push/commit* in terminal or through the desktop app like you normally would  
> *SIDE NOTE*: our REAL not LOCAL server is located at `http://104.131.9.198/`

### Update : Fix to page not loading
Once the repository is cloned/re-cloned dont forget to run in the directory of the repo, 
`curl -s http://getcomposer.org/installer | php`  
`php composer.phar install`  
`sudo chmod -R 777 storage`  


