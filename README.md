# Social Share

Add simple social share icons to your site using fontawesome

### Installing

Add the social-share.php to your theme folder and then add the following

```
require get_template_directory() . '/social-share.php';
```

alternatively copy and paste the content into your functions.php (leave out the <?php tag at the top)

### FAQ

* Q: I cannot see any icons on the frontend?
* A: You will need to enqueue fontawesome, you can do so by adding the following code to your functions.php
```
function wpdocs_theme_name_scripts() {
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
```

## Authors

* **Jon Mather** - *Initial work* - [West Coast Digital](https://github.com/WestCoastDigital)

See also the list of [contributors](https://github.com/WestCoastDigital/social-share/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
