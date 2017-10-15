# Repo for Term Project ![Travis](https://travis-ci.org/classifiedz/classifiedz.github.io.svg?branch=master)
### Github: [classifiedz.github.io](https://github.com/classifiedz/classifiedz.github.io)   
### Website: [classifiedz.xyz](http://classifiedz.xyz)
### Slack : [classifiedz.slack.com](https://classifiedz.slack.com/)
Repo for the term project for SOEN 341, a classifieds website.  
---  
## Important Notes on Laravel
1. There is a lot of documenation on how to use [laravel here.](https://laravel.com/)  
2. Important folders to remember:  

	~~~~~
		- app
			- Http
				- Controllers
		- database
			- migrations
			- seeds
		- images
		- public
		- resources
			- views
				- auth
				- layouts
		- routes
	~~~~~
	- **Controllers** tell laravel where to find your files
	- **public** is where all dependencies are stored, files like:
		- CSS
		- JS
		- Bootstrap
		- jQuery
		- Fontawesome
	- **resources/views** is where we store all our html files like:
		- index.blade.php
		- contact.blade.php
	- **resources/views/auth** is where you can find pages like login and logout
	- **resources/views/layouts** is where you can find layouts, in our case the layout is generate for each and every web page which includes the head, navbar and footer of the document. It looks a little something like this:
		- `<head>`
		- Navbar
		- Inject web page here
		- Footer
	- **routes/web.php** is where you will tell laravel how to route your html hrefs
3. HTML/PHP files are lableled `pageName.blade.php`
4. You can use for, if, switch, while, etc.. in your html documents, more info [here](https://laravel.com/docs/5.5/blade)  
_example:_

	```
	@foreach ($users as $user)
		<p>This is user {{ $user->id }}</p>
	@endforeach
	```  
5. The type of database we are using is `MySQL`
5.  Accessing data in the database is done through `{{ $tableName->row }}` or like the example above `{{ $user->id }}`

## How to Run the Project Locally (OSX)  
1. Make sure you have the latest version of Xcode and Git installed
2. Download and install the latest version of XAMPP
	- In General click `start`
	- In Services click `start all`
	- In Volumes click `mount`
3. Open a terminal window (not in XAMPP) type in:
	- `$  cd /Users/USERNAME/.bitnami/stackman/machines/xampp/volumes/root/htdocs/`  
	- `$ git clone https://github.com/classifiedz/classifiedz.github.io`
4. Go back to XAMPP, under General click `open terminal`then type in:  
	- `$ cd ../opt/lampp/htdocs/classifiedz.github.io/`  
	- `$ curl -sS https://getcomposer.org/installer | php`
	- `$ php composer.phar install`
	- `$ php artisan migrate:refresh --seed`
	- `$ php artisan serve --host 192.168.64.2` This should be the sam IP you see in XAMPP
5. In your browser go to `http://192.168.64.2:8000` :simple_smile::clap:

## How to Add New Rows to the database (OSX) 
The following is an example adding a row called `city` to the `user` table in the `classifiedz` database.  

1. In XAMPP, under General click `open terminal` then type in:  
	- `$ php artisan make:migration update_user_table`  
2. In XAMPP, under General click `volumes` then navigate to
	- `htdocs/classidiedz.github.io/database/migrations/`
	- Open the most recently created file that will look something like this `2017_10_13_232241_update_user_table.php`
	- In the `up()` function add in:
		`Schema::table('users', function (Blueprint $table)		{
    		$table->string('city')->default('Montreal')->nullable();
		});`

3. Navigate to `htdocs/classidiedz.github.io/database/seeds/UserTableSeeder.php`
	- At the bottom of the page you should see a for loop inside the `run()` which is generating all our fake data. Add the following line to generate fake cities as well.
	- `city'=> $faker->city`

4. Like always, after any changes are made to the database run:
	- `$ php artisan migrate:refresh --seed`
	- `$ php artisan serve --host 192.168.64.2` :bowtie:

## How to Create New Web Pages :globe_with_meridians:
These instructions take into assumption that you have already created an HTML page. It will show you how to create a **controller** so that laravel can **route** to your pages.  

1. Make sure your page is located in `htdocs/classidiedz.github.io/resources/views/`
2. Make sure your file is labeled `pageName.blade.php`
3. Navigate to `htdocs/classidiedz.github.io/app/Http/Controllers/PageController.php`  
4. You should see a class `class PageController extends Controller`:  
	- You will creat your **controller** in this class:
	- `public function showPageName()
    {
        return view('pageName');
    }`
5. Navigate to `htdocs/classidiedz.github.io/routes/web.php`
	- Here you will crea your **route**:
	- `Route::get('/pageName', 'PageController@pageName');`
6. Now you can create references in your html to your page from anywhere like this:
	- `href="/PageName"` not ~~`href="/PageName.blade.php"`~~
	- note that we never used file extensions through this guide.
7. You're now on track to becoming a ninja web dev :white_check_mark:  
---  
### Authors:  
[Liyuan Zhang](https://github.com/Swallow666)  
[Rami Yahia](https://github.com/rami186)  
[Kevin	Camellini](https://github.com/kcamcam)  
[Brandon	Balala](https://github.com/BrandonBalala)  
[Laurie Yung](https://github.com/laurie-y)  
[Neqqash	Hussin](https://github.com/neqqash)  
[Gneykou Kengne	Yvann Monny](https://github.com/monnyy)  
[Han Gao](https://github.com/HanGao2333)  
