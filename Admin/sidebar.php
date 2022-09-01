<?php

include "../conn.php";
session_start();

//if user not login the always show login page 
if(!isset($_SESSION["username"])){
  header("location: index.php");
}

?>

<!-- prevent resubmission -->
<!-- <script>

  if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href)
  }
</script> -->
<!-- end prevent resubmission -->
<style>
  ::-webkit-scrollbar {
  display:none;
}
  .sidebar {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 78px;
  background: #11101d;
  padding: 6px 14px;
  transition: all 0.5s ease;
  overflow-y: auto;
}
.sidebar.active {
  width: 240px;
}
.sidebar .logo-content .logo {
  color: #fff;
  display: flex;
  height: 50px;
  width: 100%;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  transition: all 0.5s ease;
}
.sidebar.active .logo-content .logo {
  opacity: 1;
  pointer-events: none;
}
.logo-content .logo i {
  font-size: 35px;
  margin-right: 5px;
}
.logo-content .logo .logo-name {
  font-size: 20px;
  font-weight: 700;
}
.sidebar #toggle-btn {
  color: #fff;
  position: absolute;
  left: 50%;
  top: 6px;
  font-size: 33px;
  height: 50px;
  width: 50px;
  text-align: center;
  line-height: 50px;
  transform: translateX(-50%);
  cursor: pointer;
}
.sidebar.active #toggle-btn {
  left: 90%;
}
.sidebar ul {
  margin-top: 20px;
  margin-left: -20px;
}
.sidebar ul li {
  position: relative;
  height: 60px;
  width: 100%;
  margin: 0 5px;
  list-style: none;
  line-height: 50px;
}
.sidebar ul li a {
  color: #fff;
  text-decoration: none;
  display: flex;
  align-items: center;
  border-radius: 0 40px 40px 0;
  transition: all 0.4s ease;
  white-space: nowrap;
}
.sidebar ul li a:hover:not(.side-active) {
  color: #11101d;
  background: #fff;
}
.sidebar ul li i {
  height: 50px;
  min-width: 50px;
  border-radius: 12px;
  line-height: 50px;
  text-align: center;
  font-size: 28px;
  margin-left: 10px;
}
.sidebar .links-name {
  opacity: 0;
  pointer-events: none;
  transition: all 0.2s ease;
}
.sidebar.active .links-name {
  opacity: 1;
  pointer-events: auto;
}
.sidebar .profile-content {
  position: relative;
  color: #fff;
  bottom: 0;
  left: 0;
  width: 100%;
}
.sidebar .profile-content .profile {
  position: relative;
  padding: 10px 6px;
  height: 60px;
  background: none;
  transition: all 0.4s ease;
}
.sidebar.active .profile-content .profile {
  background: #1d1b31;
}
.profile-content .profile .profile-details {
  display: flex;
  align-items: center;
  opacity: 0;
  pointer-events: none;
  white-space: nowrap;
}
.sidebar.active .profile .profile-details {
  opacity: 1;
  pointer-events: auto;
}
.profile .profile-details img {
  height: 45px;
  width: 45px;
  object-fit: cover;
  border-radius: 12px;
}
.profile .profile-details .name-job {
  margin-left: 10px;
}
.profile .profile-details .name {
  font-size: 15px;
  font-weight: 600;
}
.profile .profile-details .job {
  font-size: 12px;
}
.profile #log-out {
  position: absolute;
  left: 50%;
  bottom: 5px;
  transform: translateX(-50%);
  min-width: 50px;
  line-height: 50px;
  font-size: 28px;
  border-radius: 12px;
  cursor: pointer;
  text-align: center;
  transition: all 0.4s ease;
  background: #1d1b31;
  color: #fff;
}
.profile #log-out:hover {
  background: #fff;
  color: blueviolet;
}
.sidebar.active .profile #log-out {
  left: 88%;
}
.sidebar.active .profile #log-out {
  background: none;
}
ul li a.side-active {
  background-color: blueviolet;
}
.sidebar.active ~ .main-content {
  margin-left: 240px;
  transition: all 0.6s ease;
}

 .sidebar.active ~ header {
  margin-left: 240px;
  transition: all 0.4s ease;
}
</style>

<div class="sidebar">
        <div class="logo-content">
          <div class="logo">
            <i class="las la-graduation-cap"></i>
            <div class="logo-name">M I M I T</div>
          </div>
          <i class="las la-bars" id="toggle-btn"></i>
        </div>

        <ul class="nav-list">
          <li>
            <a href="admin-home.php">
              <i class="las la-border-all dark-75"></i>
              <span class="links-name">Dashboard</span>
            </a>
          </li>
          <li>
            <a href="addstudent.php">
              <i class="las la-user-plus"></i>
              <span class="links-name">Add Student</span>
            </a>
          </li>
          <li>
            <a href="managestudent.php">
              <i class="las la-user-edit"></i>
              <span class="links-name">Manage Student</span>
            </a>
 
          </li>
          <li>
            <a href="addteacher.php">
              <i class="las la-user-tie"></i>
              <span class="links-name">Add Teacher</span>
            </a>
          </li>
          <li>
            <a href="manageteacher.php">
              <i class="las la-user-cog"></i>
              <span class="links-name">Manage Teacher</span>
            </a>
          </li>
          <li>
            <a href="addclass.php">
              <i class="las la-chalkboard-teacher"></i>
              <span class="links-name">Add Class</span>
            </a>
          </li>
          <li>
            <a href="manageclass.php">
              <i class="las la-users"></i>
              <span class="links-name">Manage Class</span>
            </a>
          </li>
          <li>
            <a href="addsubject.php">
              <i class="las la-book-medical"></i>
              <span class="links-name">Add Subject</span>
            </a>
          </li>
          <li>
            <a href="managesubject.php">
              <i class="lar la-edit"></i>
              <span class="links-name">Manage Subject</span>
            </a>
          </li>
          <li>
            <a href="notice.php">
              <i class="las la-newspaper"></i>
              <span class="links-name">Notice Board</span>
            </a>
          </li>
          <li>
            <a href="timetable.php">
              <i class="las la-calendar"></i>
              <span class="links-name">Time Table</span>
            </a>
          </li>
        </ul>

        <div class="profile-content">
          <div class="profile">
            <div class="profile-details">
              <img src="images/profile.jpg" alt="" />
              <div class="name-job">
                <div class="name">Admin</div>
                <div class="job">MIMIT, Malout</div>
              </div>
            </div>
            <a href="logout.php" name="logout">
              <i class="las la-file-export" id="log-out"></i>
            </a>
          </div>
        </div>

      </div>
 
<script>
/* sidebar active js*/
      const currentLocation = location.href;
      const menuItem = document.querySelectorAll("li a");
      const menuLength = menuItem.length;
      for (let i = 0; i < menuLength; i++) {
        if (menuItem[i].href === currentLocation) {
          menuItem[i].className = "side-active";
        }
      }
</script>