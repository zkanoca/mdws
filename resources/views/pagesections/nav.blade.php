<button id="menu_button" class="r_corners tr_all color_blue db_centered m_bottom_20 d_none d_xs_block">
    <i class="icon-menu"></i>
</button>
<nav role="navigation"
     class="d_inline_m f_left f_xs_none d_xs_none m_xs_right_0 m_right_15 m_sm_right_5 t_align_l m_xs_bottom_15">
    <ul class="hr_list main_menu type_2 fw_light">
        <li class="@yield('nav_home_current')">
            <a class="d_block fs_large color_dark" href="/">Home</a>
        </li>
        <li class=" @yield('nav_about_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/about">About
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li>
                    <a href="/about/who-am-i" class="d_block color_dark relative">Who Am I?</a>
                </li>
                <li>
                    <a href="/about/what-i-want" class="d_block color_dark relative">What I Want</a>
                </li>
            </ul>
        </li>
        <li class=" @yield('nav_scientific_studies_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/scientific-studies">Scientific Studies
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li>
                    <a href="/scientific-studies/publications" class="d_block color_dark relative">Publications</a>
                </li>
                <li>
                    <a href="/scientific-studies/projects" class="d_block color_dark relative">Projects</a>
                </li>
                <li>
                    <a href="/scientific-studies/public-studies" class="d_block color_dark relative">Public Studies</a>
                </li>
            </ul>
        </li>
        <li class="  @yield('nav_psychology_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/psychology">Psychology
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li>
                    <a href="/psychology/clinical-psychology" class="d_block color_dark relative">Clinical
                        Psychology</a>
                </li>
                <li>
                    <a href="/psychology/geropsychology" class="d_block color_dark relative">Geropsychology</a>
                </li>
                <li>
                    <a href="/psychology/trauma-psychology" class="d_block color_dark relative">Trauma Psychology</a>
                </li>
                <li>
                    <a href="/psychology/forensic-clinical-psychology" class="d_block color_dark relative">Forensic
                        Clinical Psychology</a>
                </li>
            </ul>
        </li>
        <li class=" @yield('nav_services_current') container3d relative f_xs_none m_xs_bottom_5">
            <a class="color_dark fs_large relative r_xs_corners" href="/services">Services
                <i class="icon-angle-down d_inline_m"></i>
            </a>
            <ul class="sub_menu r_xs_corners bg_light vr_list tr_all tr_xs_none trf_xs_none bs_xs_none d_xs_none">
                <li>
                    <a href="/services/trainings" class="d_block color_dark relative">Trainings</a>
                </li>
                <li>
                    <a href="/services/Consultancy" class="d_block color_dark relative">Consultancy</a>
                </li>
                <li>
                    <a href="/services/psychotherapy" class="d_block color_dark relative">Psychotherapy</a>
                </li>
                <li>
                    <a href="/psychology/supervision" class="d_block color_dark relative">Supervision</a>
                </li>
            </ul>
        </li>
        <li>
            <a class="@yield('nav_measurement_evaluation_current') d_block fs_large color_dark"
               href="/measurement_evaluation">Measurement & Evaluation</a>
        </li>

        <li class="@yield('nav_contact_current')">
            <a class="d_block fs_large color_dark" href="/contact">Contact</a>
        </li>
    </ul>
</nav>