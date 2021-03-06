
<!DOCTYPE html>
<html lang="en">
<head>
  <title>unotes.in </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
  .small-screen {
  opacity: 1;
  
}

@media screen and (max-width: 1060px) {
  
  
 
  
  .small-screen {
    
    color: #bdc3c7;
    text-align: center;
  }
  
}
  #profile-pic{
     border-radius: 1000px !important;
    overflow: hidden;
    width: 35px;
    height: 35px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    position: absolute;
    margin-top: -15px;
	margin-left:-15px;
  
  }
  @media (max-width: 700px) {
    #profile-pic {   
        
       display:none;
		
    }
}
  
  #navBarSearchForm{
	  margin-left:33.6%; margin-right:34%;
	  border:1px solid blue;
 
  }
   @media (max-width: 700px) {
     #navBarSearchForm {   
        flex-direction: column;
      width:100%;
	  margin-left:0px;
	 margin-right:0px;
   margin-right:0px;
   border:1px solid blue;
		
    }
}
 .navbar-custom {
    background-color:#00b5ff;
    border:1px solid blue;
    color:#ffffff;
    border-radius:0;
    opacity:0.9;
}
.navbar-custom .navbar-nav  {
    margin-right:12%;
    color:#ffffff;
}
  @media (max-width: 700px) {
    .navbar-custom .navbar-nav {   
        
        margin-right:0px;
		text-align:center;
		
    }
}

.navbar-custom .navbar-nav > li > a {
    
    color:#fff;
}

.navbar-custom .navbar-nav > .active > a {
    color: #ffffff;
    background-color:transparent;
}
  @media (max-width: 700px) {
    .navbar-custom .navbar-nav > .active > a {   
        
       display:none;
		
    }
}

.navbar-custom .navbar-nav > .active { border-radius: 50%;
	 
	  
	   border-radius: 1000px !important;
    overflow: hidden;
    width: 35px;
    height: 35px;
    border: 1px solid rgba(255, 255, 255, 0.7);
    position: absolute;
    margin-top: 7px;
	}
  @media (max-width: 700px) {
    .navbar-custom .navbar-nav > .active {   
        
       display:none;
		
    }
}

.navbar-custom .navbar-nav > li > a:focus{
    text-decoration: none;
    background-color: #00b5ff;
}
.navbar-custom .navbar-nav > li > a:hover,
.navbar-custom .navbar-nav > .open >a {
    text-decoration: none;
    background-color: #528ff2;
}

.navbar-custom .navbar-brand {
    text-decoration:none;
	  font-size:42px;
	  font-family:comic sans ms;
	  color:white;
	  padding-left:230px;
	  position:relative;
	  
	  top:-4px;
}

@media (max-width: 700px) {
    .navbar-custom .navbar-brand {   
        flex-direction: column;
		
	  padding-left:20px;
    }
}
.navbar-custom .navbar-toggle {
    background-color:#eeeeee;
}
.navbar-custom .icon-bar {
    background-color:#528ff2;
}


  </style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>
<body style="height:1000px ">

<nav class="navbar navbar-custom navbar-fixed-top" style=" border: 1px solid blue; @include box-shadow(2px 2px 7px rgba(0, 0, 0, 0.52));">
  <div class="container-fluid">
    <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
         <span class="icon-bar"></span>
         <span class="icon-bar"></span>		 
      </button>
	  
    
      <div  style=" text-shadow: 2px 2px 5px #528ff2; font-family:Courier New;"> <a href="home.php" class="navbar-brand" style="  text-decoration:none; color:white;" >Unotes.in</a></div>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
    <ul class="nav navbar-nav navbar-right" >
	
      <li class="active"><a href="success.php"><img id="profile-pic" src="profile_image/<?php echo $_SESSION["profile_image"] ; ?>"></a></li><li>	&nbsp;	&nbsp;	&nbsp;	&nbsp;	&nbsp;</li>
      <li ><a href="myprofile.php" style="text-transform:capitalize; text-decoration:none; text-shadow: 2px 2px 4px #000000; color:white;"><?php echo $_SESSION["user"];   ?></a></li>
      <li><a href="home.php" style="text-decoration:none; text-shadow: 2px 2px 4px #000000; color:white;">Home</a></li>
      
	   <li class="dropdown">
        <a href="123"  style="text-decoration:none; text-shadow: 2px 2px 4px #000000; " data-toggle="dropdown">Logout <b class="caret"></b></a>
        <ul class="dropdown-menu" >
		<li><a href="logoff.php" id="logoff"  >Log off</a></li>
          
        
          <li class="divider"></li>
          <li><a href="#">Setting</a></li>
          <li class="divider"></li>
          <li><a href="#">One more link</a></li>
        </ul>
      </li>
    </ul>
    <form  id="navBarSearchForm" style="margin-top:7px;  " action="/action_page.php">
      <div class="input-group" style="opacity:0.8;">
        <input type="text" style="opacity:0.8; background-color:white;" class="form-control" placeholder="Search" name="search">
        <div class="input-group-btn">
          <button class="btn btn-default" type="submit">
            <i class="glyphicon glyphicon-search"></i>
          </button>
        </div>
      </div>
    </form>
    </div>
  </div>
</nav>
<script>
var _prevScrollPos = 0;
$(window).scroll(function(event) {
  var scrollPos = $(this).scrollTop();
  var $n = $('nav');
  
  //SCROLLING DOWN
  if (scrollPos > _prevScrollPos) {
    //remove fixed position so nav rolls off the page top with the content
    if ($n.css('position') != 'absolute') {
      $n.css({position:'absolute', top:_prevScrollPos});
    }
  }
  //SCROLLING UP
  else if (scrollPos < _prevScrollPos) {
    //once we set it fixed, no need to run this anymore
    if ($n.css('position') != 'fixed') {
      //if we are down the page a bit, but the nav is still at the top, we need to move it down closer (but not all the way, so there's a little delay) to where we currently are
      if (scrollPos > 200 && $n.offset().top < scrollPos-200) {
          $n.offset({ top: scrollPos-200 });
      }
      //once the nav is in place, set it to fixed so it stays there
      else if ($n.offset().top >= scrollPos) {
        $n.css({position:'fixed', top:'0'});
      }
    }
  }
  _prevScrollPos = scrollPos;
});
</script>
 
</body>
<br><br><br>
</html>
