<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Roxy | Official Page
  </title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="../assets/css/font-awesome.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="../assets/css/argon-design-system.css?v=1.2.2" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/befa14dbbd.js" crossorigin="anonymous"></script>
  <style>
  #discordlogin {
  color: #fff;
  text-decoration: none;
  display: inline-block;
  padding: 15px 20px;
  position: relative;
}
#discordlogin:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: #fff;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
#discordlogin:hover:after { 
  width: 100%; 
  left: 0; 
}
#needhelp {
  color: #fff;
  text-decoration: none;
  display: inline-block;
  padding: 15px 20px;
  position: relative;
}
#needhelp:after {    
  background: none repeat scroll 0 0 transparent;
  bottom: 0;
  content: "";
  display: block;
  height: 2px;
  left: 50%;
  position: absolute;
  background: #fff;
  transition: width 0.3s ease 0s, left 0.3s ease 0s;
  width: 0;
}
#needhelp:hover:after { 
  width: 100%; 
  left: 0; 
}
  </style>
</head>

<body class="landing-page">
  <nav id="navbar-main" class="navbar navbar-main navbar-expand-lg navbar-transparent navbar-light py-2">
    <div class="container">
      <a class="navbar-brand mr-lg-5" href="">
        <strong>Roxy
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="navbar-collapse collapse" id="navbar_global">
        <div class="navbar-collapse-header">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <strong>Roxy</strong>
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item d-lg-block dropdown">
            <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button" id = "needhelp">
              <i class="fas fa-life-ring"></i>
              <span class="nav-link-inner--text">Need Help ?</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropleft bg-gradient-gray-dark">
              <div class="dropdown-menu-inner">
                <a href="https://docs.roxy.host/" class="media align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="fas fa-book"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-primary mb-md-1">Getting started</h6>
                    <p class="description d-none d-md-inline-block mb-0">Check out our documentation on using commands</p>
                  </div>
                </a>
                <a href="/commands.php" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                    <i class="fas fa-code"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h6 class="heading text-success mb-md-1">Commands</h6>
                    <p class="description d-none d-md-inline-block mb-0">Check out all the commands Roxy has</p>
                  </div>
                </a>
                <a href="/report.php" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-danger rounded-circle text-white">
                    <i class="fas fa-bug"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-danger mb-md-1">Report Bugs</h5>
                    <p class="description d-none d-md-inline-block mb-0">Report All Your Bugs Here if found :D </p>
                  </div>
                </a>
                <a href="/join.php" class="media d-flex align-items-center">
                  <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                    <i class="fab fa-discord"></i>
                  </div>
                  <div class="media-body ml-3">
                    <h5 class="heading text-primary mb-md-1">Support Server</h5>
                    <p class="description d-none d-md-inline-block mb-0">Still Need Suport? No Problem, join our discord support server!</p>
                  </div>
                </a>                
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav align-items-lg-center ml-lg-auto">
          <li class="nav-item d-lg-block">
            <a href="/login" role="button" class="nav-link" id = "discordlogin">
              <span class="btn-inner--text">
                <i class="fab fa-discord"></i>
              </span>
              <span class="nav-link-inner--icon">Discord Login</span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="wrapper">
    <div class="section section-hero section-shaped bg-gradient-dark">
      <div class="page-header">
        <div class="container shape-container d-flex align-items-center py-lg">
          <div class="col px-0">
            <div class="row align-items-center justify-content-center">
              <div class="col-lg-6 text-center">
                <h1 class="text-white display-1">Roxy</h1>
                <h2 class="display-4 font-weight-normal text-white">Roxy is a fierce, confident and playful bot. Known by many as Foxy. Roxy, this bot is sure to keep you on your toes.</h2>
                <div class="btn-wrapper mt-4">
                  <a href="/invite.php" class="btn btn-warning btn-icon mt-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="far fa-plus-square"></i></span>
                    <span class="btn-inner--text">Invite Now</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100 bg-gradient-gray">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon style="fill:#8893aa;stroke:#8893aa;" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <div class="section features-1 bg-gradient-gray">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <!--span class="badge badge-primary badge-pill mb-3">Insight</span-->
            <h3 class="display-3"> Upcoming Features</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle">
                <i class="ni ni-settings-gear-65"></i>
              </div>
              <h6 class="info-title text-uppercase text-primary">Moderation</h6>
              <p class="description opacity-8">Moderate your server in a modern way even when you are offline, the bot watches your guild. This comes under the section of automoderation.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                <i class="fab fa-magento"></i>
              </div>
              <h6 class="info-title text-uppercase text-success">Log Your Server &nbsp;<span class="badge badge-danger badge-pill mb-1">NEW</span></h6>
              <p class="description opacity-8">Watches your server behind your back. All inappropriate contents and logged and you could classify your logs to different channels.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-warning shadow rounded-circle">
                <i class="fas fa-feather-alt"></i>
              </div>
              <h6 class="info-title text-uppercase text-warning">Custom Commands</h6>
              <p class="description opacity-8">Ever wondered to add a custom command of your wish that responds according to your needs ? Well Roxy helps in that also. :D </p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-default shadow rounded-circle">
                <i class="fas fa-chevron-circle-down"></i>
              </div>
              <h6 class="info-title text-uppercase text-default">Downtime ?</h6>
              <p class="description opacity-8">Well downtime are considered to be less. Roxy has 99.9% uptime :D </p>
              <a href="https://status.roxy.host/" class="text-primary">Check our Status Page
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>          
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-info shadow rounded-circle">
                <i class="fas fa-comments"></i>
              </div>
              <h6 class="info-title text-uppercase text-info">AutoResponder</h6>
              <p class="description opacity-8">Roxy has the capability to provide auto responder, so incase if anyone wants to asks a general question and when you are not online, Roxy will answer for you.</p>
            </div>
          </div>     
          <div class="col-md-4">
            <div class="info">
              <div class="icon icon-lg icon-shape icon-shape-success shadow rounded-circle">
                <i class="fas fa-info-circle"></i>
              </div>
              <h6 class="info-title text-uppercase text-success">More...</h6>
              <p class="description opacity-8">Roxy has more commands also. </p>
              <a href="/commands.php" class="text-primary">Check out all commands
                <i class="ni ni-bold-right text-primary"></i>
              </a>
            </div>
          </div>                    
        </div>
      </div>
    </div>
    <br /><br />
    <footer class="footer">
      <div class="container">
        <hr>
        <div class="row align-items-center justify-content-md-between">
          <div class="col-md-6">
            <div class="copyright">
              &copy; 2021 <a href="https://roxy.host" target="_blank">Roxy Inc</a>.
              [Designed With <a href = "https://github.com/creativetimofficial/argon-design-system" target="_blank">Argon CSS</a>]
            </div>
          </div>
          <div class="col-md-6">
            <ul class="nav nav-footer justify-content-end">
              <li class="nav-item">
              <a href="https://github.com/VineyS" class="nav-link" target="_blank">
                  MADE WITH &nbsp;&nbsp;<svg width="10" height="10" viewBox="0 0 100 100">
                    
                    <path fill="tomato" d="M92.71,7.27L92.71,7.27c-9.71-9.69-25.46-9.69-35.18,0L50,14.79l-7.54-7.52C32.75-2.42,17-2.42,7.29,7.27v0 c-9.71,9.69-9.71,25.41,0,35.1L50,85l42.71-42.63C102.43,32.68,102.43,16.96,92.71,7.27z"></path>
            
                    <animateTransform attributeName="transform" type="scale" values="1; 1.5; 1.25; 1.5; 1.5; 1;" dur="1s" repeatCount="indefinite">      
                    </animateTransform>
            
                    </svg>
                    &nbsp;&nbsp;BY VINEY
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  <script src="../assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-switch.js"></script>
  <script src="../assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/moment.min.js"></script>
  <script src="../assets/js/plugins/datetimepicker.js" type="text/javascript"></script>
  <script src="../assets/js/plugins/bootstrap-datepicker.min.js"></script>
  <script src="../assets/js/argon-design-system.min.js?v=1.2.2" type="text/javascript"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-design-system-pro"
      });
  </script>
</body>

</html>