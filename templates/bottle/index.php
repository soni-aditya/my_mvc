<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/jumbotron-narrow.css" rel="stylesheet"/>
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation"><a href="http://localhost/my_mvc/&tmpl=bottle">Home</a></li>
                <li role="presentation"><a href="http://localhost/my_mvc/about&tmpl=bottle">About</a></li>
                <li role="presentation"><a href="http://localhost/my_mvc/contact&tmpl=bottle">Contact</a></li>
                <li role="presentation"><a href="http://localhost/my_mvc/services&tmpl=bottle">Services</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">Project name</h3>
    </div>

    <div class="jumbotron">
        <?php
            My_Mvc::app();
        ?>
    </div>

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>

        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2016 Company, Inc.</p>
    </footer>
</body>
</html>
