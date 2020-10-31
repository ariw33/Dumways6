<!DOCTYPE html>
<html dir="ltr">
<?php
include './include/koneksi.php';
?>
<head>

	<script>
    var themeHasJQuery = !!window.jQuery;
</script>
<script type="text/javascript" src="./assets/js/jquery.js?1.0.651"></script>
<script>
    window._$ = jQuery.noConflict(themeHasJQuery);
</script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="./assets/css/bootstrap.css?1.0.651" media="screen" />
<script type="text/javascript" src="./assets/js/bootstrap.min.js?1.0.651"></script>
<!--[if lte IE 9]>
<link rel="stylesheet" href="./assets/css/layout.ie.css?1.0.651">
<script src="./assets/js/layout.ie.js?1.0.651"></script>
<![endif]-->
<link class="" href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&subset=latin' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="./assets/js/layout.core.js"></script>
<script src="./assets/js/CloudZoom.js?1.0.651"></script>

    <title>Home Page</title>
	<link rel="stylesheet" href="./assets/css/style.css?1.0.651">
	<script src="./assets/js/script.js?1.0.651"></script>
    <meta charset="utf-8">

 <meta name="keywords" content="HTML, CSS, JavaScript">

 <style>a {
  transition: color 250ms linear;
}
</style>
</head>
<body class=" bootstrap bd-body-1
 bd-homepage bd-pagebackground-3  bd-margins">
    <header class=" bd-headerarea-1 bd-margins">
        <section class=" bd-section-4 bd-tagstyles" id="section4" data-section-title="">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutbox-3 bd-no-margins clearfix">
    <div class="bd-container-inner">
        <a class=" bd-logo-2" href="">
    <img class=" bd-imagestyles" src="./assets/images/879392cc00f4493b999d039b18dd1df4_logo.png">
</a>

    <nav class=" bd-hmenu-1"  data-responsive-menu="true" data-responsive-levels="expand on click" data-responsive-type="" data-offcanvas-delay="0ms" data-offcanvas-duration="700ms" data-offcanvas-timing-function="ease">

            <div class=" bd-menuoverlay-13 bd-menu-overlay"></div>
            <div class=" bd-responsivemenu-11 collapse-button">
    <div class="bd-container-inner">
        <div class="bd-menuitem-4 ">
            <a  data-toggle="collapse"
                data-target=".bd-hmenu-1 .collapse-button + .navbar-collapse"
                href="#" onclick="return false;">
                    <span>Menu</span>
            </a>
        </div>
    </div>
</div>
            <div class="navbar-collapse collapse ">

            <div class=" bd-horizontalmenu-70 clearfix">
                <div class="bd-container-inner">
                    <ul class=" bd-menu-63 nav nav-pills navbar-left">
                            <li class=" bd-menuitem-36

 bd-submenu-icon-only
                                        bd-toplevel-item

                                        "
                                    >

                            <a class="active" href="./index.php" >Home</a>

                           
                            </li>

                            <li class=" bd-menuitem-36

                                        bd-toplevel-item

                                        "
                                    >

                            <a  href="./about.php" >About</a>

                            </li>
							<li class=" bd-menuitem-36

                                        bd-toplevel-item

                                        "
                                    >

                            <a  href="./addbook.php" >Add book</a>

                            </li>
							<li class=" bd-menuitem-36

                                        bd-toplevel-item

                                        "
                                    >

                            <a  href="./addwriter.php" >Add Writer</a>

                            </li>
							<li class=" bd-menuitem-36

                                        bd-toplevel-item

                                        "
                                    >

                            <a  href="./addcategory.php" >Add Category</a>

                            </li>
                            <li class=" bd-menuitem-36

                                        bd-toplevel-item

                                        "
                                    >
                            <a  href="./contacts.php" >Contacts</a>

                            </li>
                    </ul>

                </div>
            </div>

            <div class="bd-menu-close-icon">
    <a href="#" class="bd-icon  bd-icon-29"></a>
</div>

            </div>
    </nav>
    </div>
</div>
    </div>
</section>
</header>

		<div class=" bd-content-13">

    <div class=" bd-htmlcontent-1 bd-margins"
 data-page-id="page.0">
    <section class=" bd-section-7 bd-page-width bd-tagstyles " id="section4" data-section-title="Two Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-9 bd-page-width  bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
 bd-row-flex
 bd-row-align-middle">
                <div class=" bd-columnwrapper-20
 col-md-6">
    <div class="bd-layoutcolumn-20 bd-column" ><div class="bd-vertical-align-wrapper"></div></div>
</div>

		<div class=" bd-columnwrapper-22
 col-md-6">
    <div class="bd-layoutcolumn-22 bd-column" ><div class="bd-vertical-align-wrapper"></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>

		<section class=" bd-section-1 bd-page-width bd-tagstyles " id="section4" data-section-title="Travel Four Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-6 bd-page-width  bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
 bd-row-flex
 bd-row-align-top">
 <?php
 $cek = mysqli_query($koneksi,"SELECT * FROM book_tb");
 
 ?>
                <div class=" bd-columnwrapper-10
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-10 bd-column" ><div class="bd-vertical-align-wrapper"><h2 class=" bd-textblock-4 bd-content-element">
    Destinations
</h2>

		<div class=" bd-spacer-2 clearfix"></div>

		<p class=" bd-textblock-10 bd-content-element">
    C++
</p>

		<div class=" bd-spacer-5 clearfix"></div>

		<a
 href="" class="bd-linkbutton-2  bd-button-12 bd-icon bd-icon-19 bd-own-margins bd-content-element"    >
    view more
</a></div></div>
</div>

		<div class=" bd-columnwrapper-14
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-14 bd-column" ><div class="bd-vertical-align-wrapper"><h2 class=" bd-textblock-13 bd-content-element">
    Vacations
</h2>

		<div class=" bd-spacer-7 clearfix"></div>

		<p class=" bd-textblock-15 bd-content-element">
    PYTHON
</p>

		<div class=" bd-spacer-9 clearfix"></div>

		<a
 href="" class="bd-linkbutton-6  bd-button-14 bd-icon bd-icon-24 bd-own-margins bd-content-element"    >
    view more
</a></div></div>
</div>

		<div class=" bd-columnwrapper-16
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-16 bd-column" ><div class="bd-vertical-align-wrapper"><h2 class=" bd-textblock-17 bd-content-element">
    Cruises
</h2>

		<div class=" bd-spacer-11 clearfix"></div>

		<p class=" bd-textblock-19 bd-content-element">
    ASSAMBLY
</p>

		<div class=" bd-spacer-13 clearfix"></div>

		<a
 href="" class="bd-linkbutton-8  bd-button-16 bd-icon bd-icon-27 bd-own-margins bd-content-element"    >
    view more
</a></div></div>
</div>

		<div class=" bd-columnwrapper-18
 col-md-3
 col-sm-6">
    <div class="bd-layoutcolumn-18 bd-column" ><div class="bd-vertical-align-wrapper"><h2 class=" bd-textblock-21 bd-content-element">
    Group travel
</h2>

		<div class=" bd-spacer-15 clearfix"></div>

		<p class=" bd-textblock-25 bd-content-element">
    JAVA
</p>

		<div class=" bd-spacer-17 clearfix"></div>

		<a
 href="" class="bd-linkbutton-11  bd-button-17 bd-icon bd-icon-31 bd-own-margins bd-content-element"    >
    view more
</a></div></div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
<section class=" bd-section-7 bd-page-width bd-tagstyles " id="section4" data-section-title="One Columns">
    <div class="bd-container-inner bd-margins clearfix">
        <div class=" bd-layoutcontainer-9 bd-page-width  bd-columns bd-no-margins">
    <div class="bd-container-inner">
        <div class="container-fluid">
            <div class="row
 bd-row-flex
 bd-row-align-middle">
                <div class=" bd-columnwrapper-20
 col-md-6">
    <div class="bd-layoutcolumn-20 bd-column" ><div class="bd-vertical-align-wrapper"></div>
	test
	</div>
</div>
            </div>
        </div>
    </div>
</div>
    </div>
</section>
</div>
</div>

		<footer class=" bd-footerarea-1 bd-margins">
        <section class=" bd-section-2 bd-tagstyles" id="section2" data-section-title="">
    <div class="bd-container-inner bd-margins clearfix">
        <p class=" bd-textblock-1 bd-content-element">
    © <?php echo date("Y");?>
</p>


		<div class=" bd-pagefooter-1">
    <div class="bd-container-inner">

             created by myself.
    </div>
</div>
    </div>
</section>
</footer>

		<div data-smooth-scroll data-animation-time="250" class=" bd-smoothscroll-3"><a href="#" class=" bd-backtotop-1 ">
    <span class="bd-icon-67 bd-icon "></span>
</a></div>
</body>
</html>
