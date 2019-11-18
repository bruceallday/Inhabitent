# Inhabitent
Custom Wordpress Template Site <br>

![]()

## Preview
Clone project<br>

run in local server of your choice<br>

## Technologies used
* HTML5
* CSS3
* [SASS](https://sass-lang.com/)
* [Wordpress](https://wordpress.com/)
* [MAMP](https://www.mamp.info/en/)
* [PHP](https://www.php.net/)
* [GULP](https://gulpjs.com/docs/en/getting-started/quick-start) 
* JavaScript
* Git
* bash

## Media Query 

| Device      | Width         | Height        | 
|:-----------:|:-------------:|:-------------:|
| Desktop     | 1240          | 1000          |  
             


## Personal Learnings

### Wordpress:
This was the first time I used the CMS Wordpress to create a functional site with mulitple pages.
I set-up my account then customised the Dashboard with the pages, posts and necessary plugins we would be using. 
In this case I created a products tab Which contins all the products that the site would be using along with the ability to add new products.

### Plugins:
[Ajax Search Lite](https://wordpress.org/plugins/ajax-search-lite/)<br>
[Advanced Custom Fields](https://www.advancedcustomfields.com/)<br>
[Query Monitor](https://en-ca.wordpress.org/plugins/query-monitor/)<br>



### PHP:
We were introduced to the general-purpose scripting language PHP (Personal Home Page). Using this language I leanred how to connect my Wordpress content into my Custom Theme using the built in PHP/Wordpress functions. Below I use the Built in PHP functions to grab the data for each product and have is displayed accordingly onto its correct page. 

```
<a href="<?php echo get_permalink() ;?>">
        <figure>
        <?php the_post_thumbnail('large');?>
        <figcaption>
            <p><?php the_title(); ?></p>
            <?php echo "£" . get_field('price');?>
        </figcaption>
        </figure>
</a>

```

Below I used a PHP '''foreach''' to loop through my taxonomy products and grab the appropriate slug, to be appended to the URL of the image im looking for. Locasted in my directory. Then also add the correct category discription and button to link to the correct page.


CODE: <br>
```
foreach($terms as $term):?>

    <section class="front-page-product-sections">
        <img class="product-section-svg" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product-type-icons/<?php echo $term->slug;?>.svg" alt="">
         <?php echo category_description($term);?>
        <a href="<?php echo "product-type/" . $term->slug ;?>"><button type="submit" class="front-page-product-sections-btn"><?php echo $term->name;?></button></a>
    </section>

<?php endforeach;?>
```

RESULT: <br>

![](/themes/inhabitent/shop-screenshot.png)






### GULP Task-runner
I learnt how to utilise task-runner [GULP]("https://gulpjs.com/docs/en/getting-started/quick-start") to Automate and streamline my work flow.
I created a ```gulp.js``` file that streamlines my SASS into pure CSS3, minifies my ```app.js``` and ```style.css```, then places them in a build directory, live using browser-sync.<br>

Example:<br>

```javascript
gulp.task("sass", function(){
    return gulp
    ...
}
```

```javascript
gulp.task("scripts", function(){
    return gulp
    ...
}
```

``` javascript
gulp.task("browser-sync", function(done){
    return gulp
    ...
}
```

## Custom menu
![](customMenu.png)

To add some personal flavour to my page I implemented a [custom cursor](http://www.rw-designer.com/cursor-library), and matched the colour pallet to that of the site.

<br>

## Environment
* macOS Mojave: 10.14.6
* VS Code: 1.39.1

## Contributing

Please feel free to clone this project, feedback and improvements welcome.

## Authors
* **Bruce Pouncey** - *Initial work* - [BPouncey](https://github.com/BPouncey)

## License
(MIT)

## Acknowledgments
[RED Academy](https://github.com/redacademy)


