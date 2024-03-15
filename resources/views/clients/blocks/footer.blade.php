<footer>
    <div class="footer">
        <div class="footer-content">
            <div class="row">
                <div class="col-4 footer-logo">                   
                    {{ createLogo("white","white")}}
                    <p style="color: #ffffff !important;">In the new era of technology we look a in the future with certainty and pride to for our company and.</p>
                    <?php //generateSocial("bg-danger");?>  
                    <div class='header-top-right'>
                        <a href=''>
                            <div class='header-top-right-bg bg-danger'>
                                <i class='fa fa-twitter twitter-icon' aria-hidden='true'></i>
                            </div>
                        </a>
                        <a href=''>
                            <div class='header-top-right-bg bg-danger '>
                                <i class='fa fa-facebook facebook-icon' aria-hidden='true'></i>
                            </div>
                        </a>
                        <a href=''>
                            <div class='header-top-right-bg bg-danger '>
                                <i class='fa fa-instagram instagram-icon' aria-hidden='true'></i>
                            </div>
                        </a>
                        <a href=''>
                            <div class='header-top-right-bg bg-danger'>
                                <i class='fa fa-github github-icon' aria-hidden='true'></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row footer-pages">
                        <div class="col-2">
                            <p class="footer-pages-title1"><strong>Pages</strong></p>
                            <nav>
                                <ul class='menu2'>
                                    <li>
                                        <a href="">Home</a>
                                    </li>
                                    <li>
                                        <a href="">Contact</a>
                                    </li>
                                    <li>
                                        <a href="">About</a>
                                    </li>
                                    <li>
                                        <a href="">Pages</a>
                                    </li>
                                </ul>
                            </nav>
                            <?php //generateNavbar($array_navbar_2,"menu2") ?>
                        </div>
                        <div class="col-6" style="padding: 0;">
                            <p class="footer-pages-title2"><strong>Utility Pages</strong></p>
                            <nav>
                                <ul class='menu2'>
                                    <li>
                                        <a href="">Start here</a>
                                    </li>
                                    <li>
                                        <a href="">Styleguide</a>
                                    </li>
                                    <li>
                                        <a href="">Password Protected</a>
                                    </li>
                                    <li>
                                        <a href="">404 Not Found</a>
                                    </li>
                                </ul>
                            </nav>
                            <?php //generateNavbar($array_navbar_3,"menu2") ?>
                        </div>
                    </div>
                </div>
                <div class="col-5">
                    <p class="footer-pages-title3"><strong>Follow Us On Instagram</strong></p>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{asset('assets/images/images-footer1.jpg')}}" alt="images">
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/images/images-footer2.jpg')}}" alt="images">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <img src="{{asset('assets/images/images-footer3.jpg')}}" alt="images">
                        </div>
                        <div class="col-md-5">
                            <img src="{{asset('assets/images/images-footer4.jpg')}}" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-line">
            <hr>
        </div>
        <div class="footer-copyright">
            <p>Copyright © 2023 Hashtag Developer. All Rights Reserved</p>
        </div>
    </div>
</footer>
