<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="background"></div>
<div id="wrapper">
    <header id="header" class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="/wp-content/themes/muhamed/img/Mountain-Conqueror.png" width="250" />
            </div>
            <div class="col-md-9">
                <h1>"Life is a journey, not a destination"</br><span>Ralph Waldo Emerson</span></h1>
            </div>
        </div>
    </header>
    <div id="container" class="container">
        <div class="row">
            <div class="col-md-3">
                <ul>
                    <li><a>THE CONQUEROR</a></li>
                    <li><a>MOUNTAIN MAP</a></li>
                    <li><a>PLANNINGS</a></li>
                    <li><a>NATURE SOUVENIRS</a></li>
                    <li><a>OFFROAD</a></li>
                </ul>
            </div>
            <div class="col-md-9">
                <main id="content">
                    <div>
                        <h2><a href="#">Hard climbing shit.</a></h2>
                        <p>Hard climbing shit. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend [read more] 15th of april 2018 > Alan Schweitzer > MOUNTAIN-MAP</p>
                    </div>
                    <div>
                        <h2><a href="#">My paradise on earth.</a></h2>
                        <p>My paradise on earth. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend [read more]</p>
                    </div>
                </main>
            </div>
        </div>
    </div>

    <footer id="footer" class="container-fluid">
        <div id="copyright">
            &copy; <?php echo esc_html( date_i18n( __( 'Y', 'muhamed' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        </div>
    </footer>

</div>
<?php wp_footer(); ?>
</body>
</html>