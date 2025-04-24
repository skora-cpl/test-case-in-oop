=== test case in OOP ===
Contributors:      Will Skora
Tags:              block
Tested up to:      6.7
Stable tag:        0.1.0
License:           GPL-2.0-or-later
License URI:       https://www.gnu.org/licenses/gpl-2.0.html

Example block scaffolded with Create Block tool.

== Description ==

This is a pretty simple proof of concept of a dynamic WordPress block created using create-block (https://developer.wordpress.org/block-editor/reference-guides/packages/packages-create-block/) while also using OOP (object-oriented programming). 

Again, i'm just scratching the surface here and it's literally just a sample; there are probably some decisions and things that more experienced OOP would cringe at; this isn't the only way to accomplish my goal. 

I hope this is a bridge for PHP developers who know concepts of OOP and want to use create-block to create a WordPress block and a bridge for WordPress developers to learn some concepts of OOP. 

== Why did I do this?  ==

Because I was rewriting another project done with create-block into OOP and wanted to have a more narrow test case; and I couldn't find any other Wordpress blocks that were created with create-block and also use OOP, if you do, please share them! 

== For someone to replicate this from scratch for your own project:  ==

1.  create your block, run: 
npx @wordpress/create-block@latest --variant dynamic
during the interactive process in this command; name the plugin that (this is also going to be your part of package name for composer)
stunt-dogs
1b: you'll be prompted for the internal namespace for the block name; you'll be using this again for your vendor in composer, keep in mind.
to prevent conflicts and more work later on. In this repo, it's "cpl"

2. In the root of the folder that was created; 
create another folder named includes (or something else) 
this is where your classes will be loaded from)

3. add composer support to the plugin: 
3a. go inside the root directory of the plugin: 
3b. run 
composer init 

you'll be at the composer config generator 

first prompt will be: 
for the package name (which consists of vendor and name, also referred to as vendor/name); 
in our example, our vendor is cpl 
and the package name is test-case-in-oop
cpl/test-case-in-oop

you'll be prompted: "Add PSR-4 autoload mapping? Maps namespace "Cpl\TestCaseInOop" to the entered relative path"
type in the folder that you will place your class(es) in: 
in this is example, it is: 
includes/

BE SURE TO END IT with a / 


also note: in your composer.json file, will look like 

    "autoload": {
        "psr-4": {
            "Cpl\\TestCaseInOop\\": "includes/"
        }
    },
    "authors": [

If you followed the above directions (and entered cpl and test-case-in-oop at composer config generator, your composer.json will look like, in part: 


4. inside the includes folder, create a php file, its name MUST name the php file that will contain your class. 
create the class inside the PHP file 

your class name MUST match (case sensitivity too) the file name (sans the php extension) (this is a PSR-4 standard)

if you name the class DogBreed ; the file inside includes folder should DogBreed.php 

at the top of the class' file, be sure to put the namespace, in our example, it's 
namespace Cpl\TestCaseInOop;

5. run composer dump-autoload -o 
this will update the classes that are being used; and now you can 
If you create another file and class; you will need to run this command again. s

6. run `npm run start` and your code is 



= What about foo bar? =

Answer to foo bar dilemma.

== Screenshots ==

== Changelog ==

= 0.1.0 =
* Release

== Arbitrary section ==

You may provide arbitrary sections, in the same format as the ones above. This may be of use for extremely complicated
plugins where more information needs to be conveyed that doesn't fit into the categories of "description" or
"installation." Arbitrary sections will be shown below the built-in sections outlined above.
