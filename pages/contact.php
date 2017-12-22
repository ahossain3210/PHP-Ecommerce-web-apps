<?php
if(isset($_POST['btn']))
{
    $message=$obj_app->save_contact_message_info($_POST);
}

?>
<div class="main">
    <div class="wrap">
        <div class="m_top_10" style="width: 100%;">
            <!--<h3 class="color_dark m_bottom_20"><b>Join Us on Facebook</b></h3>-->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.894847422034!2d90.38866281426533!3d23.751128884589004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bcd681372b%3A0x5c2b8755e4327004!2sBashundhara+City+Shopping+Complex!5e0!3m2!1sen!2sin!4v1505754299231" width="100%" height="350"></iframe>
        </div>
        <div class="content-top" style="width: 100%;">
            <div class="lsidebar span_1_of_c1">
                <p>Follow us on this following social media</p>
            </div>
            <div class="cont span_2_of_c1">
                <div class="social">	
                    <ul>	
                        <li class="facebook"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"><a href="#"> </a></div><div class="border hide"><p class="num">1.51K</p></div></li>
                    </ul>
                </div>
                <div class="social">	
                    <ul>	
                        <li class="twitter"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                    </ul>
                </div>
                <div class="social">	
                    <ul>	
                        <li class="google"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                    </ul>
                </div>
                <div class="social">	
                    <ul>	
                        <li class="dot"><a href="#"><span> </span></a><div class="radius"> <img src="assets/images/radius.png"></div><div class="border hide"><p class="num">1.51K</p></div></li>
                    </ul>
                </div>
                
            </div>
            			
        </div>
        <div class="m_bottom_100" style="width: 100%;">
            <h4 class="title m_top_40">Leave your Feedback</h4>
            <h5 class="color_dark_2 f_size_13">Always stay connected to us.</h5>
            <h6 class="color_green">
                <?php
                if(isset($message))
                {
                    echo $message;
                    unset($message);
                }
                ?>
            </h6>
            <form action="" method="post">
                <div class="col_1_of_2 span_1_of_2">
                    <div>
                        <label class="f_size_13 color_dark_2">Email Address :</label>
                        <input type="email" name="email" value="E-Mail" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'E-Mail';
                                }">
                    </div>
                    <div>
                        <label class="f_size_13 color_dark_2">Your Message :</label>
                        <textarea class="m_top_5 color_dark_2" name="message" rows="4" value="Message" onfocus="this.value = '';" onblur="if (this.value == '') {
                                    this.value = 'Your message here';
                                }" style="width: 97%;"></textarea>
                    </div>
                    <button type="submit" name="btn" class="grey m_top_10">Submit Query</button>
                </div>
            </form>
            <div class="col_1_of_2 span_1_of_2">
                <h4 class="title t_align_c">Dhaka Address</h4>
                <div class="t_align_c" style="width: 100%;">
                    <p class="f_size_13 color_dark_2 l_height_p" style="line-height: 1.7;">Level#3, Block#B, Shop#34 <br>Bashundhara Center Shopping Mall,<br> Dhaka-1215 Bangladesh.<br>Cell: +88-01672-505856, Phone: +2946832 <br>Website : <a href="http://itexpertsbd.com">www.eshop.itexpertsbd.com</a></p>
<!--                    <p class="color_dark_2 f_size_13 "><b>Schedule : </b> 10 AM - 9 PM (Open)</p>
                    <p class="color_dark_2 f_size_13"><b>Closed : </b> Tuesday (Weekly)</p>-->
                </div>
                <h3 class="title t_align_c m_top_40 tt_uppercase color_dark_2 m_bottom_10">Chittagong</h3>
                <div class="t_align_c" style="width: 100%;">
                    <p class="f_size_13 color_dark_2 l_height_p" style="line-height: 1.7;">Level#3, Block#B, Shop#34 <br>Bashundhara Center Shopping Mall,<br> Dhaka-1215 Bangladesh.<br>Cell: +88-01672-505856, Phone: +2946832 <br>Website : <a href="http://itexpertsbd.com">www.eshop.itexpertsbd.com</a></p>
                </div>
            </div>
            <div class="clear"></div>
        </div>

    </div>
</div>