<body>
    <!-- container full -->
    <div class="container_full">
        
        <div class="pre-header">
            <p class="title">
                Facultatea de Inginerie in Limbi Straine
            </p>
            
            <div class="languages">
                <?php
                $language = $this->session->userdata('language');
                $url = '';
                $i = 1;
                while( $this->uri->segment($i) != null )
                {
                    $url .= '/'.$this->uri->segment($i++, 0);
                }
                if($url === '') $url = '/home';
                ?>
                <ul>
                    <li class="<?php if ($language == 'deutsch') echo 'active'; ?>">
                        <a href="/deutsch<?php echo $url; ?>" >
                        <i class="icon-deutsch"></i>
                        </a>
                    </li>
                    <li class="<?php if ($language == 'french') echo 'active'; ?>">
                        <a href="/french<?php echo $url; ?>" >
                            <i class="icon-french"></i>
                        </a>
                    </li>
                    <li class="<?php if ($language == 'english') echo 'active'; ?>">
                        <a href="/english<?php echo $url; ?>" >
                            <i class="icon-english"></i>
                        </a>
                    </li>
                    <li class="<?php if ($language == 'romanian') echo 'active'; ?>">
                        <a href="/romanian<?php echo $url; ?>" >
                            <i class="icon-romanian"></i>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="clearfix"></div>
        </div>
        
        <!-- header -->
        <div id="header_wrapper" class="clearfix">
            <!-- menu -->
            <div id="header">
                <!-- logo -->
                <div id="logo"><a href="/"><img src="/assets/images/fils_logo.png" alt="logo" /></a></div>
                <!-- logo end -->
                <!-- main menu -->
                <ul id="mainmenu">
                    <li><a href="/">Home</a></li>

                    <li>
                        <a href="/admission/admission"><?= lang('admission');?></a>
                        <ul>
                            <li><a href="/admission/licence"><?= lang('licence');?></a></li>
                            <li><a href="/admission/master"><?= lang('master');?></a></li>
                            <li><a href="/admission/doctorate"><?= lang('doctorate');?></a></li>
                            <li><a href="/admission/other_info"><?= lang('other-info');?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/education"><?= lang('education');?></a>
                        <ul>
                            <li><a href="/education/licence"><?= lang('licence');?></a></li>
                            <li><a href="/education/master"><?= lang('master');?></a></li>
                            <li><a href="/education/doctorate"><?= lang('doctorate');?></a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/students"><?= lang('students');?></a>
                        <ul>
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
                        <a href="/about" class="active"><?= lang('about-us');?></a>
                        <ul>
                            <li><a href="">Link</a></li>
                            <li><a href="">Link</a></li>
                            <li><a href="">Link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/image"><?= lang('image');?></a>
                        <ul>
                            <li>
                                <a href="">Link</a>
                            </li>
                            <li>
                                <a href="">Sub Meniu</a>
                                <ul>
                                    <li><a href="">Link 1</a></li>
                                    <li><a href="">Link 2</a></li>
                                    <li><a href="">Link 3</a></li>
                                    <li>
                                        <a href="#">Sub sub meniu</a>
                                        <ul>
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
                    <li><a href="/contact"><?= lang('contact');?></a></li>
                </ul>
                <!-- main menu end -->
                <!-- search bar -->
                <div class="search_bar">
                    <form action="index.html" method="get">
                        <input name="s" value="Type &amp; Search" type="text" />
                        <a href="#" class="search_button">Search</a>
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