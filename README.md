# Inhabitent
Custom Wordpress Template Site <br>



![](/themes/inhabitent/readme-images/inhabitent-landing.png)

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

### Plugins:
[Ajax Search Lite](https://wordpress.org/plugins/ajax-search-lite/)<br>
[Advanced Custom Fields](https://www.advancedcustomfields.com/)<br>
[Query Monitor](https://en-ca.wordpress.org/plugins/query-monitor/)<br>



## PHP / Wordpress:
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

Below I used a PHP '''foreach''' to loop through my taxonomy products and grab the appropriate slug, to be appended to the URL of the images path Im looking for within my project directory. Then, I also add the correct category discription and button link to that products page based on the ```$term```

### CODE:
```
foreach($terms as $term):?>

    <section class="front-page-product-sections">
        <img class="product-section-svg" src="<?php echo get_stylesheet_directory_uri();?>/assets/images/product-type-icons/<?php echo $term->slug;?>.svg" alt="">
         <?php echo category_description($term);?>
        <a href="<?php echo "product-type/" . $term->slug ;?>"><button type="submit" class="front-page-product-sections-btn"><?php echo $term->name;?></button></a>
    </section>

<?php endforeach;?>
```

### RESULT:

![](/themes/inhabitent/readme-images/shop-screenshot.png)


Below Is the code I used to grab my custom wordpress widget, in this case it was the sidebar that appears on a few, but not all of the pages. I accessed my widget through my funcions.php file after creating it on the wordpress dashboard.

### CODE:

```
function inhabitent_widgets(){
    register_sidebar( array(
        'name'          => sprintf( __( 'Sidebar %d' ), 1 ),
        'id'            => "sidebar-1",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => "</aside>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ));
}
```

Then in the pages I wanted my sidebar to appear I used..
```
<?php get_sidebar();?>

```
..at the end of my script, to add the sidebar to the pages I wanted it to appear. Then appended it to its ```grid-area: a;``` place accordingly in my SCSS file.

### Result:

![](/themes/inhabitent/readme-images/screenshot2.png)



## Environment
* macOS Mojave: 10.14.6
* VS Code: 1.39.1

## Authors
* **Bruce Pouncey** - *Initial work* - [BPouncey](https://github.com/BPouncey)

## License
(MIT)

## Acknowledgments
[RED Academy](https://github.com/redacademy)


