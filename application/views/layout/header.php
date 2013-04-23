<body>
<!-- container full -->
<div class="container_full">

    <!-- header -->
    <div id="header_wrapper" class="clearfix">
        <div id="flags_languages">
            <?php $language = $this->session->userdata('language'); ?>
            <a href="/functions/setLanguage/deutsch/home" id="btnFlag_de" class="flag <?php if($language == 'deutsch') echo 'active'; ?>"><img alt="De" Flag" id="imgFlag_de" src="/assets/images/de_flag_round_small.jpg" class="flagImages" /></a>
            <a href="/functions/setLanguage/french/home" id="btnFlag_fr" class="flag <?php if($language == 'french') echo 'active'; ?>"><img alt="Fr Flag" id="imgFlag_fr" src="/assets/images/fr_flag_round.jpg" class="flagImages" /></a>
            <a href="/functions/setLanguage/english/home" id="btnFlag_en" class="flag <?php if($language == 'english') echo 'active'; ?>"><img alt="En Flag" id="imgFlag_en" src="/assets/images/en_flag_round small.jpg" class="flagImages" /></a>
            <a href="/functions/setLanguage/romanian/home" id="btnFlag_ro" class="flag <?php if($language == 'romanian') echo 'active'; ?>"><img alt="Ro Flag" id="imgFlag_ro" src="/assets/images/ro_flag_round.jpg" class="flagImages" /></a>
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
                    <a href="/admission/admission"><?= lang('admission');?></a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="/admission/licence"><?= lang('licence');?></a></li>
                        <li><a href="/admission/master"><?= lang('master');?></a></li>
                        <li><a href="/admission/doctorate"><?= lang('doctorate');?></a></li>
                        <li><a href="/admission/other_info"><?= lang('other-info');?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="education"><?= lang('education');?></a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="/education/licence"><?= lang('licence');?></a></li>
                        <li><a href="/education/master"><?= lang('master');?></a></li>
                        <li><a href="/education/doctorate"><?= lang('doctorate');?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="students"><?= lang('students');?></a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href=""><?= lang('schedule');?></a></li>
                        <li><a href=""><?= lang('foreign-internships');?></a></li>
                        <li><a href=""><?= lang('practical-internships');?></a></li>
                        <li><a href=""><?= lang('personal-page');?></a></li>
                        <li><a href=""><?= lang('accommodation');?></a></li>
                        <li><a href=""><?= lang('student-organizations');?></a></li>
                        <li><a href=""><?= lang('foreign-students');?></a></li>
                    </ul>
                </li>
                <li>
                    <a href="about" class="active"><?= lang('about-us');?></a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                        <li><a href="">Link</a></li>
                    </ul>
                </li>
                <li>
                    <a href="image"><?= lang('image');?></a>
                    <ul style="top: 60px; display: none; visibility: visible;">
                        <li>
                            <a href="">Link</a>
                        </li>
                        <li>
                            <a href="">Sub Meniu</a>
                            <ul style="top: 0px; display: none; visibility: visible;">
                                <li><a href="">Link 1</a></li>
                                <li><a href="">Link 2</a></li>
                                <li><a href="">Link 3</a></li>
                                <li>
                                    <a href="#">Sub sub meniu</a>
                                    <ul style="top: 0px; display: none; visibility: visible;">
                                        <li><a href="">Link 1</a></li>
                                        <li><a href="">Link 2</a></li>
                                        <li><a href="">Link 3</a></li>
                                        <li><a href="">Link 4</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact"><?= lang('contact');?></a></li>
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