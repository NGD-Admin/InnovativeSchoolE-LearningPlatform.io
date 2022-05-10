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

          
          <div class="profile">
            <div class="icon_wrap">
             
              <i class="fas fa-chevron-down"></i>
            </div>
    
            <div class="profile_dd">
              <ul class="profile_ul">
                <li><a class="logout"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>
                
                <div id="myDropdown" class="dropdown-content">
                <a class="btn" onclick="toggleLogin()">Login</a>
            <i class="fas fa-times" onclick="toggleLogin()"></i>
                </div>  


              
              </a></li>
              </ul>
            </div>

            <div class="overlay">
      <div class="login">
        <div class="header">
          <h1>Login</h1>
          <i class="fas fa-times" onclick="toggleLogin()"></i>
        </div>
        <div class="body">
          <form action="#" class="form">
            <input type="text" placeholder="Username" />
            <input type="password" placeholder="Password" />
          </form>
        </div>
        <div class="footer">
          <button>Login</button>
        </div>
      </div>
    </div>
          </div>
        </div>
      </div>
      
     
    </div>


