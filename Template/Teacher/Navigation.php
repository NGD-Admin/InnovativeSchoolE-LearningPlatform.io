<style>
.wrapper{
  width: 100%;
  height: 100%;

}

.navbar{
    background-color: #0f2433;
  width: 100%;
  height: 60px;
  padding: 0 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.navbar .navbar_left .logo a{
   font-family: 'Trade Winds';
   font-size: 20px;
}

.navbar .navbar_right{
   display: flex;
}

.navbar .navbar_right img{
  width: 35px;
}

.navbar .navbar_right .icon_wrap{
  cursor: pointer;
}

.navbar .navbar_right .notifications{
  margin-right: 25px;
}

.navbar .navbar_right .notifications .icon_wrap{
  font-size: 28px;
}

.navbar .navbar_right .profile,
.navbar .navbar_right .notifications{
  position: relative;
}

.navbar .profile .profile_dd,
.notification_dd{
  position: absolute;
  top: 48px;
  right: -15px;
  user-select: none;
  background: #fff;
  border: 1px solid #c7d8e2;
  width: 350px;
  height: auto;
  display: none;
  border-radius: 3px;
  box-shadow: 10px 10px 35px rgba(0,0,0,0.125),
              -10px -10px 35px rgba(0,0,0,0.125);
}

.navbar .profile .profile_dd:before,
.notification_dd:before{
    content: "";
    position: absolute;
    top: -20px;
    right: 15px;
    border: 10px solid;
    border-color: transparent transparent #fff transparent;
}

.notification_dd li {
    border-bottom: 1px solid #f1f2f4;
    padding: 10px 20px;
    display: flex;
    align-items: center;
}

.notification_dd li .notify_icon{
  display: flex;
}

.notification_dd li .notify_icon .icon{
  display: inline-block;
  background: url('https://i.imgur.com/MVJNkqW.png') no-repeat 0 0;
	width: 40px;
	height: 42px;
}

.notification_dd li.baskin_robbins .notify_icon .icon{
  background-position: 0 -43px;
}

.notification_dd li.mcd .notify_icon .icon{
  background-position: 0 -86px;
}

.notification_dd li.pizzahut .notify_icon .icon{
  background-position: 0 -129px;
}

.notification_dd li.kfc .notify_icon .icon{
  background-position: 0 -178px;
}

.notification_dd li .notify_data{
  margin: 0 15px;
  width: 185px;
}

.notification_dd li .notify_data .title{
  color: #000;
  font-weight: 600;
}

.notification_dd li .notify_data .sub_title{
  font-size: 14px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  margin-top: 5px;
}

.notification_dd li .notify_status p{
  font-size: 12px;
}

.notification_dd li.success .notify_status p{
  color: #47da89;
}

.notification_dd li.failed .notify_status p{
  color: #fb0001;
}

.notification_dd li.show_all{
  padding: 20px;
  display: flex;
  justify-content: center;
}

.notification_dd li.show_all p{
  font-weight: 700;
  color: #3b80f9;
  cursor: pointer;
}

.notification_dd li.show_all p:hover{
  text-decoration: underline;
}

.navbar .navbar_right .profile .icon_wrap{
  display: flex;
  align-items: center;
}

.navbar .navbar_right .profile .name{
  display: inline-block;
  margin: 0 10px;
  color: #fff;
}

.navbar .navbar_right .icon_wrap:hover,
.navbar .navbar_right .profile.active .icon_wrap,
.navbar .navbar_right .notifications.active .icon_wrap{
  color: #3b80f9;
}
 
.navbar .profile .profile_dd{
  width: 225px;
}
.navbar .profile .profile_dd:before{
  right: 10px;
}

.navbar .profile .profile_dd ul li {
    border-bottom: 1px solid #f1f2f4;
}

.navbar .profile .profile_dd ul li  a{
    display: block;
    padding: 15px 35px;
    position: relative;
}

.navbar .profile .profile_dd ul li  a .picon{
  display: inline-block;
  width: 30px;
}

.navbar .profile .profile_dd ul li  a:hover{
  color: #3b80f9;
  background: #f0f5ff;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}

.navbar .profile .profile_dd ul li.profile_li a:hover {
    background: transparent;
    cursor: default;
    color: #7f8db0;
}

.navbar .profile .profile_dd ul li .btn{
    height: 32px;
    padding: 7px 10px;
    color: #fff;
    border-radius: 3px;
    cursor: pointer;
    text-align: center;
    background: #3b80f9;
    width: 125px;
    margin: 5px auto 15px;
}

.navbar .profile .profile_dd ul li .btn:hover{
  background: #6593e4;
}

.navbar .profile.active .profile_dd,
.navbar .notifications.active .notification_dd{
  display: block;
}

.popup {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    transition: all 0.2s ease;
    display: none;
}

.popup .shadow {
    width: 100%;
    height: 100%;
    background: #000;
    opacity: 0.6;
}

.popup .inner_popup {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
    height: auto;
}

.popup .notification_dd{
  display: block;
  position: static;
  margin: 0 auto;
  height: 357px;
  overflow: auto;
}

.popup .notification_dd:before{
   display: none;
}

.popup .notification_dd li.title{
  font-weight: 700;
  color: #3b80f9;
  display: flex;
  justify-content: center;
  position: relative;
}

.popup .notification_dd li.title .close{
  position: absolute;
  top: 2px;
  right: 10px;
  font-size: 20px;
  cursor: pointer;
}

.popup .notification_dd li.title .close:hover{
  opacity: 0.5;
}
        /* hanggang Dito For the Header*/
</style>
<div class="wrapper">
      <div class="navbar">
        <div class="navbar_left">
          <div class="logo">
           <img src="ISEP-Icon/ISEP-Icon.png" Style="width: 150px;">
          </div>
        </div>
    
        <div class="navbar_right">


          <div class="notifications">
            <div class="icon_wrap"><img src="ISEP-icon/Notification.png" alt=""></div>
            
            <div class="notification_dd">
                <ul class="notification_ul">
                    <li class="starbucks success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                               Alvine A. Raminrez
                            </div>
                            <div class="sub_title">
                            Case Study # 2: Augmented Reality
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>30/30 points</p>  
                        </div>
                    </li>  
                    <li class="baskin_robbins success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Alvine A. Raminrez  
                            </div>
                            <div class="sub_title">
                            ETHICS AND PROFESSIONALISM OF EMERGING TECHNOLOGIES
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>25/25</p>  
                        </div>
                    </li> 
                    <li class="mcd success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Ace Zheridan S. Gutierrez
                            </div>
                            <div class="sub_title">
                            Computer System Overview with Comments
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>50/50</p>  
                        </div>
                    </li>  
                    <li class="pizzahut success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Ace Zheridan S. Gutierrez 
                            </div>
                            <div class="sub_title">
                            ITE 2 - Assignment No. 3
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>16/20</p>  
                        </div>
                    </li> 
                    <li class="kfc success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Ace Zheridan S. Gutierrez 
                            </div>
                            <div class="sub_title">
                            Von Neumann Arch
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>25/25</p>  
                        </div>
                    </li> 
                    <li class="show_all">
                        <p class="link">Show All Activities</p>
                    </li> 
                </ul>
            </div>
          
            
          </div>





          <div class="notifications">
            <div class="icon_wrap"><img src="ISEP-icon/message.png" alt=""></div>
            
            <div class="notification_dd">
                <ul class="notification_ul">
                    <li class="starbucks success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        
                        <div class="notify_data">
                            <div class="title">
                               Alvine A. Raminrez
                            </div>
                            <div class="sub_title">
                            Case Study # 2: Augmented Reality
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>New</p>  
                        </div>
                    </li>  
                    <li class="baskin_robbins success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Alvine A. Raminrez  
                            </div>
                            <div class="sub_title">
                            ETHICS AND PROFESSIONALISM OF EMERGING TECHNOLOGIES
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>New</p>  
                        </div>
                    </li> 
                    <li class="mcd success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Ace Zheridan S. Gutierrez
                            </div>
                            <div class="sub_title">
                            Computer System Overview with Comments
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>New</p>  
                        </div>
                    </li>  
                    <li class="pizzahut success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Ace Zheridan S. Gutierrez 
                            </div>
                            <div class="sub_title">
                            ITE 2 - Assignment No. 3
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>New</p>  
                        </div>
                    </li> 
                    <li class="kfc success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                            Ace Zheridan S. Gutierrez 
                            </div>
                            <div class="sub_title">
                            Von Neumann Arch
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>Seened</p>  
                        </div>
                    </li> 
                    <li class="show_all">
                        <p class="link">Show All Messages</p>
                    </li> 
                </ul>
            </div>
          
            
          </div>







       











          
          <div class="profile">
            <div class="icon_wrap">
              <img src="https://i.imgur.com/x3omKbe.png" alt="profile_pic">
              <span class="name"> <?php echo $row['name']; ?></span>
              <i class="fas fa-chevron-down"></i>
            </div>
    
            <div class="profile_dd">
              <ul class="profile_ul">
                <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                    </span>Profile</a>
                 <a href="teacher-profile.php"> <div class="btn">  My Account</div></a>
                </li>
                <li><a class="address" href="About-vision.php"><span class="picon"><i class="fas fa-map-marker"></i></span>About</a></li>
               
                <li><a class="logout" href="logout.php"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      
      <div class="popup">
        <div class="shadow"></div>
        <div class="inner_popup">
            <div class="notification_dd">
                <ul class="notification_ul">
                    <li class="title">
                        <p>All Notifications</p>
                        <p class="close"><i class="fas fa-times" aria-hidden="true"></i></p>
                    </li> 
                    <li class="starbucks success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                              Lorem ipsum dolor sit amet consectetur.
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>S20/30 points</p>  
                        </div>
                    </li>  
                    <li class="baskin_robbins failed">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                              Lorem ipsum dolor sit amet consectetur.
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>20/30 points</p>  
                        </div>
                    </li> 
                    <li class="mcd success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                              Lorem ipsum dolor sit amet consectetur.
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>20/30 points</p>  
                        </div>
                    </li>  
                    <li class="pizzahut failed">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                              Lorem ipsum dolor sit amet consectetur.
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>20/30 points</p>  
                        </div>
                    </li> 
                    <li class="kfc success">
                        <div class="notify_icon">
                            <span class="icon"></span>  
                        </div>
                        <div class="notify_data">
                            <div class="title">
                                Lorem, ipsum dolor.  
                            </div>
                            <div class="sub_title">
                              Lorem ipsum dolor sit amet consectetur.
                          </div>
                        </div>
                        <div class="notify_status">
                            <p>20/30 points</p>  
                        </div>
                    </li>
                </ul>
            </div>
        </div>
      </div>
      
    </div>


