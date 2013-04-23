<body>
<!-- container full -->
<div class="container_full">

    <!-- header -->
    <div id="header_wrapper" class="clearfix">
        <div id="flags_languages">
            <?php $language = $this->session->userdata('language'); ?>
            <a href="functions/setLanguage/deutsch/home" id="btnFlag_de" class="flag <?php if($language == 'deutsch') echo 'active'; ?>"><img alt="De" Flag" id="imgFlag_de" src="/assets/images/de_flag_round_small.jpg" class="flagImages" /></a>
            <a href="functions/setLanguage/french/home" id="btnFlag_fr" class="flag <?php if($language == 'french') echo 'active'; ?>"><img alt="Fr Flag" id="imgFlag_fr" src="/assets/images/fr_flag_round.jpg" class="flagImages" /></a>
            <a href="functions/setLanguage/english/home" id="btnFlag_en" class="flag <?php if($language == 'english') echo 'active'; ?>"><img alt="En Flag" id="imgFlag_en" src="/assets/images/en_flag_round small.jpg" class="flagImages" /></a>
            <a href="functions/setLanguage/romanian/home" id="btnFlag_ro" class="flag <?php if($language == 'romanian') echo 'active'; ?>"><img alt="Ro Flag" id="imgFlag_ro" src="/assets/images/ro_flag_round.jpg" class="flagImages" /></a>
        </div>
        <!-- menu -->
        <div id="header">
	        <!-- logo -->
            <div id="logo">
	            <a href="http://ing.pub.ro">
	                <img src="/assets/images/fils_logo.png" alt="logo">
                </a>
            </div>
            <!-- logo end -->

            <!-- main menu -->
            <ul id="mainmenu">
                <li>
                    <a href="/"  id="aImgHome"><img src="/assets/images/icons/home_icon.jpg" alt="Home" id="imgHome"></a>
                </li>
                <li>
                    <a href="admitere">Admitere</a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="">Nivo Slider</a></li>

                    </ul>
                </li>
                <li>
                    <a href="">Studii</a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="">About Us</a></li>

                    </ul>
                </li>
                <li>
                    <a href="">Studenti</a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="">1 Column</a></li>

                    </ul>
                </li>
                <li>
                    <a href="" class="active">Despre noi</a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="">Blog Full Width</a></li>
                        <li><a href="">Blog Large Image</a></li>
                        <li><a href="">Blog Medium Image</a></li>
                    </ul>
                </li>
                <li>
                    <a href="">Imagine</a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li>
                            <a href="">Colors</a>
                            <ul style="top: 0px; display: none; left:120px; visibility: visible;">
                                <li><a href="" class="change_color" data-color="pink">Pink</a></li>
                                <li><a href="" class="change_color" data-color="green">Green</a></li>
                                <li><a href="" class="change_color" data-color="blue">Blue</a></li>
                                <li><a href="" class="change_color" data-color="orange">Orange</a></li>
                                <li><a href="" class="change_color" data-color="black">Black</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="">Sub Menu</a>
                            <ul style="top: 0px; display: none; visibility: visible;">
                                <li><a href="">Third Level 1</a></li>
                                <li><a href="">Third Level 2</a></li>
                                <li><a href="">Third Level 3</a></li>
                                <li>
                                    <a href="#">Third Level 4</a>
                                    <ul style="top: 0px; display: none; visibility: visible;">
                                        <li><a href="">Fourth Level 1</a></li>
                                        <li><a href="">Fourth Level 2</a></li>
                                        <li><a href="">Fourth Level 3</a></li>
                                        <li><a href="">Fourth Level 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <!--<li>
                    <a href="http://dreamlife.designforlifeden.com/elements.html">Shortcodes</a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="http://dreamlife.designforlifeden.com/elements.html">Elements</a></li>
                        <li><a href="http://dreamlife.designforlifeden.com/icons.html">Icons</a></li>
                        <li><a href="http://dreamlife.designforlifeden.com/pricing_options.html">Pricing Tables</a></li>
                        <li><a href="http://dreamlife.designforlifeden.com/sliders.html">Sliders</a></li>
                        <li><a href="http://dreamlife.designforlifeden.com/typography.html">Typography</a></li>
                        <li><a href="http://dreamlife.designforlifeden.com/media.html">Media</a></li>
                    </ul>
                </li>-->
                <li><a href="">Contact</a></li>
            </ul>
            <!-- main menu end -->
            <!-- search bar -->
            <div class="search_bar">
                <form action="" method="get">
                    <input name="s" value="Type &amp; Search" type="text">
                    <a href="" class="search_button">Search</a>
                </form>
            </div>
            <!-- search bar end -->
        </div>
        <!-- menu end -->
    </div>
    <!-- header end -->
    <div class="clearfix"></div>

    <!-- content-wrapper -->
    <div class="content-wrapper">