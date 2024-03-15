<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HOME</title>
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/aos.css?ver=1.1.0" rel="stylesheet">
  <link href="css/bootstrap.min.css?ver=1.1.0" rel="stylesheet">
  <link href="css/main.css?ver=1.1.0" rel="stylesheet">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <style type="text/css">
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    #myImg {
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s;
    }

    #myImg:hover {
      opacity: 0.7;
    }

    /* The Modal (background) */
    .modal {
      display: none;
      /* Hidden by default */
      position: fixed;
      /* Stay in place */
      z-index: 0;
      /* Sit on top */
      padding-top: 100px;
      /* Location of the box */
      left: 0;
      top: 0;
      width: 100%;
      /* Full width */
      height: 100%;
      /* Full height */
      overflow: auto;
      /* Enable scroll if needed */
      background-color: rgb(0, 0, 0);
      /* Fallback color */
      background-color: rgba(0, 0, 0, 0.9);
      /* Black w/ opacity */
    }

    /* Modal Content (image) */
    .modal-content {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
    }

    /* Caption of Modal Image */
    #caption {
      margin: auto;
      display: block;
      width: 80%;
      max-width: 700px;
      text-align: center;
      color: #ccc;
      padding: 10px 0;
      height: 150px;
    }

    /* Add Animation */
    .modal-content,
    #caption {
      -webkit-animation-name: zoom;
      -webkit-animation-duration: 0.6s;
      animation-name: zoom;
      animation-duration: 0.6s;
    }

    @-webkit-keyframes zoom {
      from {
        -webkit-transform: scale(0)
      }

      to {
        -webkit-transform: scale(1)
      }
    }

    @keyframes zoom {
      from {
        transform: scale(0)
      }

      to {
        transform: scale(1)
      }
    }

    /* 100% Image Width on Smaller Screens */
    @media only screen and (max-width: 700px) {
      .modal-content {
        width: 100%;
      }
    }
  </style>
</head>

<body id="top">
  <header>
    <div class="profile-page sidebar-collapse">
      <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary" color-on-scroll="400">
        <div class="container">
          <div class="navbar-translate"><a class="navbar-brand" href="index.php" rel="tooltip">Welcome To MY | CV</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span
                class="navbar-toggler-bar bar3"></span></button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#home">Home</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#archivements">Archivements</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#proskill">Professional Skills</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#project ">Project Works</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#education">Education</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="page-content" id="home">
    <div>
      <div class="profile-page">
        <div class="wrapper">
          <div class="page-header page-header-small" filter-color="green">
            <div class="page-header-image" data-parallax="true" style="background-image: url('img/bg1.jpg')">
            </div>
            <div class="container">
              <div class="content-center">
                <div class="cc-profile-image"><a href="#"><img src="img/profile.jpg" alt="Image" /></a></div>
                <div class="h2 title">Sourav</div>
                <p class="category text-white">Web Developer | Application Devloper</p><a
                  class="btn btn-primary smooth-scroll mr-2" href="contact.php" data-aos="zoom-in"
                  data-aos-anchor="data-aos-anchor">Hire Me</a><a class="btn btn-primary" href="cv/My-CV.pdf"
                  target="_blank" data-aos="zoom-in" data-aos-anchor="data-aos-anchor">Download CV</a>
              </div>
            </div>
            <div class="section">
              <div class="container">
                <div class="button-container">
                  <a class="btn btn-default btn-round btn-lg btn-icon"
                    href="https://www.linkedin.com/in/sourav-a740561a6?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BVZam9DqoTWK%2Bwo3dsmPpMQ%3D%3D"
                    rel="tooltip" title="Follow me on Linkedin"><i class="fa fa-linkedin"></i></a>
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="" rel="tooltip"
                    title="Follow me on Google+"><i class="fa fa-google-plus"></i></a>
                  <a class="btn btn-default btn-round btn-lg btn-icon" href="https://www.instagram.com/sour__a_v/"
                    rel="tooltip" title="Follow me on Instagram"><i class="fa fa-instagram"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="about">
        <div class="container">
          <div class="card" data-aos="fade-up" data-aos-offset="10">
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">About</div>
                  <p>Hello! I am Sourav. Web Developer and Application Devloper.</p>
                  <p style="text-align: justify;">An aspiring software engineer with knowledge in software engineering
                    practices such as coding, testing, code reviews, code comments, etc. Strong ability to communicate
                    with clients and ability to express ideas clearly and concisely.Ability to design and maintain web
                    application.</p>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">Basic Information</div>
                  <div class="row">
                    <div class="col-sm-4"><strong class="text-uppercase">Age:</strong></div>
                    <div class="col-sm-8">21</div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Email:</strong></div>
                    <div class="col-sm-8">souravsabi423@gmail.com</div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Phone:</strong></div>
                    <div class="col-sm-8">+91 7814-820-178</div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Address:</strong></div>
                    <div class="col-sm-8">662, Cughitti, Jalandhar, Punjab</div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-sm-4"><strong class="text-uppercase">Language:</strong></div>
                    <div class="col-sm-8">Hindi, Punjabi, English</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Certifications  -->

      <div class="section" id="archivements">
        <div class="container">
          <div class="h4 text-center mb-4 title">Archivements & Certifications</div>
          <div class="container">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="bg-primary text-white">SrNo</th>
                    <th scope="col" class="bg-primary text-white">Issued By</th>
                    <th scope="col" class="bg-primary text-white">Name of Certificate</th>
                    <th scope="col" class="bg-primary text-white">Issued Organization</th>
                    <th scope="col" class="bg-primary text-white">Issued Date</th>
                    <th scope="col" class="bg-primary text-white">Certificate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><img src="img/certificate1.png" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>IOT & its Application</td>
                    <td>National Institute of Technical Teachers Training & Research</td>
                    <td>Jan 2023</td>
                    <td><button id="myImg" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><img src="img/certificate2.png" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Completion of Python Training</td>
                    <td>Indian Institute of Technology, Bombay</td>
                    <td>Nov 2022</td>
                    <td><button id="myImg2" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><img src="img/certificate3.png" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Data Structure and algorithms using Java</td>
                    <td>Great Learning</td>
                    <td>Oct 2022</td>
                    <td><button id="myImg3" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><img src="img/certificate4.png" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Digital Marketing</td>
                    <td>Google</td>
                    <td>May 2021</td>
                    <td><button id="myImg4" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><img src="img/certificate5.png" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>AMCAT (Employability Test)</td>
                    <td>Aspiring Minds</td>
                    <td>Mar 2023</td>
                    <td><button id="myImg5" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

     <!-- Archivements and Awards  -->

     <div class="section" id="awards">
        <div class="container">
          <div class="h4 text-center mb-4 title">Awards and Participation</div>
          <div class="container">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col" class="bg-primary text-white">SrNo</th>
                    <th scope="col" class="bg-primary text-white">Issued By</th>
                    <th scope="col" class="bg-primary text-white">Name of Compitetion</th>
                    <th scope="col" class="bg-primary text-white">Issued Organization</th>
                    <th scope="col" class="bg-primary text-white">Issued Date</th>
                    <th scope="col" class="bg-primary text-white">Certificate</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td><img src="img/apj_logo.png" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Programming Skills</td>
                    <td>Apeejay institute of management & engineering technical campus | AIMETC(Jalandhar)</td>
                    <td>Dec 2021</td>
                    <td><button id="img1" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td><img src="img/apj_logo.png" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Net savvy</td>
                    <td>Apeejay institute of management & engineering technical campus | AIMETC(Jalandhar)</td>
                    <td>Dec 2021</td>
                    <td><button id="img2" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td><img src="img/logo_cgc.jpg" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Project Display (Co-ordinator)</td>
                    <td>Chandigarh group of colleges</td>
                    <td>Feb 2023</td>
                    <td><button id="img3" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td><img src="img/logo_cgc.jpg" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Research-Paper</td>
                    <td>International conference on <b>"global best for diversity,equity and inclusion aimed to sustainable developement"</b></td>
                    <td>May 2021</td>
                    <td><button id="img4" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td><img src="img/logo_cgc.jpg" class="img-fluid" style="max-width: 50px; height: auto;"></td>
                    <td>Transport Co-Ordinator</td>
                    <td>Chandigarh group of colleges</td>
                    <td>Nov 2022</td>
                    <td><button id="img5" type="button" class="btn btn-primary"><i class="fa fa-eye"></i></button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- professional skills  -->

      <div class="section" id="proskill">
        <div class="container">
          <div class="h4 text-center mb-4 title">Professional Skills</div>
          <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">Web Development</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 90%;"></div><span class="progress-value">90%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">JAVA</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">Python</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">Application
                      Development</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">Internet of
                      Things</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 55%;"></div><span class="progress-value">55%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">Machine Learning</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section" id="Libraries">
        <div class="container">
          <div class="h4 text-center mb-4 title">Libraries & Framework</div>
          <div class="card" data-aos="fade-up" data-aos-anchor-placement="top-bottom">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">React JS</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 80%;"></div><span class="progress-value">80%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">Next JS</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 75%;"></div><span class="progress-value">75%</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">OpenCV</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="progress-container progress-primary"><span class="progress-badge">MongoDB</span>
                    <div class="progress">
                      <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                        data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                        aria-valuemax="100" style="width: 60%;"></div><span class="progress-value">60%</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- <div class="row">
              <div class="col-md-6">
                <div class="progress-container progress-primary"><span class="progress-badge">Python</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                      data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                      aria-valuemax="100" style="width: 65%;"></div><span class="progress-value">65%</span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="progress-container progress-primary"><span class="progress-badge">PHP</span>
                  <div class="progress">
                    <div class="progress-bar progress-bar-primary" data-aos="progress-full" data-aos-offset="10"
                      data-aos-duration="2000" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                      aria-valuemax="100" style="width: 70%;"></div><span class="progress-value">70%</span>
                  </div>
                </div>
              </div>
            </div> -->
            </div>
          </div>
        </div>
      </div>
      <!-- PORTFOLIO  -->
      <!-- <div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-6 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary" role="tablist">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#web-development" role="tablist"><i class="fa fa-laptop" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#graphic-design" role="tablist"><i class="fa fa-picture-o" aria-hidden="true"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photography" role="tablist"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
      <div class="tab-pane active" id="web-development">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Recent Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Startup Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Food Order Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#web-development">
                  <figure class="cc-effect"><img src="images/project-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Web Advertising Project</div>
                      <p>Web Development</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="graphic-design" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Triangle Pattern</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Umbrella</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Cube Surface Texture</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#graphic-design">
                  <figure class="cc-effect"><img src="images/graphic-design-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Abstract Line</div>
                      <p>Graphic Design</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane" id="Photography" role="tabpanel">
        <div class="ml-auto mr-auto">
          <div class="row">
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-1.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-3.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Wedding Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
            <div class="col-md-6">
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-2.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Beach Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
              <div class="cc-porfolio-image img-raised" data-aos="fade-up" data-aos-anchor-placement="top-bottom"><a href="#Photography">
                  <figure class="cc-effect"><img src="images/photography-4.jpg" alt="Image"/>
                    <figcaption>
                      <div class="h4">Nature Photoshoot</div>
                      <p>Photography</p>
                    </figcaption>
                  </figure></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
      <div class="section" id="project">
        <div class="container cc-experience">
          <div class="h4 text-center mb-4 title">Project Works</div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p>March,2023</p>
                  <div class="h5">Spam Detection System</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">SMS/Email Spam Detection System</div>
                  <p>Machine Learning Model to determine if an email or SMS is spam or not and also have user interface
                    using streamlit library .
                  <ul>
                    <li>Model Accuracy & Precision</li>
                    <ul type="circle">
                      <li>Accuracy - 97.2% </li>
                      <li>Precision - 100%</li>
                    </ul>
                    <li>Model Used</li>
                    <ul type="circle">
                      <li>Sklearn naive_bayes</li>
                    </ul>
                    <li>Library Used</li>
                    <ul type="circle">
                      <li>Sklearn</li>
                      <li>Matplotlib</li>
                      <li>Pandas</li>
                      <li>Numpy</li>
                    </ul>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p>November 2022</p>
                  <div class="h5">GMALS</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Gas Money And Life Saving Tool</div>
                  <p>An IOT Based device which will detect the LPG Gas and it will automatically off the stove if there
                    is any leakage of gas and you will notify with an emergency notification (your phone will be
                    vibrate) so that you can also check the condition properly.
                  <ul>
                    <li>MQ2 Gas Detector</li>
                    <li>NodeMCU</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p>JULY 2022 - SEPT 2022</p>
                  <div class="h5">WoodLuck Furniture House</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Automation on Furniture Store</div>
                  <p style="text-align: justify;">Wood Luck Furniture Store is a new startup and we are putting a new
                    business idea into practice which has been already implemented in the store as well.
                  <ul>
                    <li>NextJS</li>
                    <li>MongoDB</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-experience-header">
                  <p>SEPT 2021 - NOV 2021</p>
                  <div class="h5">Helping-Hands</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Automation on NGO Management System</div>
                  <p style="text-align: justify;">This project is about the NGO managment system (helping hands) to help
                    poor people.Technology used in this project is:
                  <ul>
                    <li>HTML+CSS+JAVASCRIPT (frontend devlopment)</li>
                    <li>PHP(backtend devlopment)</li>
                    <li>MySql (database)</li>
                  </ul>
                  <p>Here's, the link of my project <a href="http://helpinghands.great-site.net/?i=1"
                      target="_blank">Click
                      Here!</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="education">
        <div class="container cc-education">
          <div class="h4 text-center mb-4 title">Education</div>
          <!-- MASTER'S DEGREE CARD  -->
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>2022 - 2024</p>
                  <div class="h5">Master's Degree</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Master of Computer Application</div>
                  <p class="category">Chandigarh Group of Colleges</p>
                  <p>Chandigarh Group of Colleges, Landran has become a synonym to excellence. Situated on the National
                    Highway 205A, Chandigarh Group of Colleges bespeaks A-class educational facilities. CGC, Landran has
                    come a long way in the field of education. In the year 2001, it got incepted with a hope to bridge
                    the gap between inquisitive minds and education.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>2019 - 2022</p>
                  <div class="h5">Bachelor's Degree</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Bachelor of Computer Applications</div>
                  <p class="category">Apeejay Institute of Management & Engineering Technical Campus</p>
                  <p style="text-align: justify;">Apeejay Institute of Management, Jalandhar, Punjab (North India) was
                    established in 1997 under the aegis of the Apeejay Education Society founded by Dr Stya Paul. It was
                    granted the status of a Technical Campus in 2012 by the All India Council of Technical Education.
                    Apeejay Institute of Management & Engineering Technical Campus has a very clear perspective of
                    becoming academically responsive to the requirements of the Indian industry and commercial
                    establishments.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary" data-aos="fade-right" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body cc-education-header">
                  <p>2017 - 2019</p>
                  <div class="h5">High School</div>
                </div>
              </div>
              <div class="col-md-9" data-aos="fade-left" data-aos-offset="50" data-aos-duration="500">
                <div class="card-body">
                  <div class="h5">Commerce</div>
                  <p class="category">ARYA SENIOR SEC. SCHOOL</p>
                  <p>ARYA SENIOR SEC. SCHOOL # BASTI GUZAN (AIDED)(WEST-01) was established in 1955 and it is managed by
                    the Pvt. Aided. It is located in Urban area. It is located in JALANDHAR EAST block of JALANDHAR
                    district of Punjab. The school consists of Grades from 1 to 12. The school is Co-educational and it
                    doesn't have an attached pre-primary section. The school is N/A in nature and is not using school
                    building as a shift-school. Hindi is the medium of instructions in this school.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- REFRENCES  -->
      <!-- <div class="section" id="reference">
  <div class="container cc-reference">
    <div class="h4 mb-4 text-center title">References</div>
    <div class="card" data-aos="zoom-in">
      <div class="carousel slide" id="cc-Indicators" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#cc-Indicators" data-slide-to="0"></li>
          <li data-target="#cc-Indicators" data-slide-to="1"></li>
          <li data-target="#cc-Indicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-1.jpg" alt="Image"/>
                <div class="h5 pt-2">Aiyana</div>
                <p class="category">CEO / WEBM</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-2.jpg" alt="Image"/>
                <div class="h5 pt-2">Braiden</div>
                <p class="category">CEO / Creativem</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-lg-2 col-md-3 cc-reference-header"><img src="images/reference-image-3.jpg" alt="Image"/>
                <div class="h5 pt-2">Alexander</div>
                <p class="category">CEO / Webnote</p>
              </div>
              <div class="col-lg-10 col-md-9">
                <p> Habitasse venenatis commodo tempor eleifend arcu sociis sollicitudin ante pulvinar ad, est porta cras erat ullamcorper volutpat metus duis platea convallis, tortor primis ac quisque etiam luctus nisl nullam fames. Ligula purus suscipit tempus nascetur curabitur donec nam ullamcorper, laoreet nullam mauris dui aptent facilisis neque elementum ac, risus semper felis parturient fringilla rhoncus eleifend.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->

    </div>
  </div>
  <footer class="footer">
    <div class="container text-center"><a class="cc-facebook btn btn-link" href="#"><i class="fa fa-facebook fa-2x "
          aria-hidden="true"></i></a><a class="cc-twitter btn btn-link " href="#"><i class="fa fa-twitter fa-2x "
          aria-hidden="true"></i></a><a class="cc-google-plus btn btn-link" href="#"><i class="fa fa-google-plus fa-2x"
          aria-hidden="true"></i></a><a class="cc-instagram btn btn-link" href="#"><i class="fa fa-instagram fa-2x "
          aria-hidden="true"></i></a></div>
    <div class="h4 title text-center">Sourav</div>
    <div class="text-center text-muted">
      <p>&copy; Welcome To MY | CV. All rights reserved.</p>
    </div>
  </footer>
  <!-- The Modal -->
  <div id="myModal" class="modal">
    <img class="modal-content" id="img01">
    <div id="caption"></div>
  </div>

  <script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the image and insert it inside the modal - use its "alt" text as a caption
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    // Define an array of image ids
    const imageIds = ["myImg", "myImg2", "myImg3", "myImg4", "myImg5","img1","img2","img3","img4","img5"];

    // Define an array of image sources and captions
    const images = [
      { src: "img/IoT-NTTTR.png", caption: "IOT & its Application" },
      { src: "img/Python_certificate.png", caption: "Completion of Python Training" },
      { src: "img/DSA-JAVA.png", caption: "Data Structure and algorithms using Java" },
      { src: "img/Digital_marketing.jpg", caption: "Digital Marketing" },
      { src: "img/AMCAT Certificate.png", caption: "AMCAT (Employability Test)" },
      { src: "img/Programming skills.jpg", caption: "Programming Skills" },
      { src: "img/Net sevvy.jpg", caption: "Net savvy" },
      { src: "img/Project Display (Co-ordinator).jpg", caption: "Project Display (Co-ordinator)" },
      { src: "img/Research-Paper.jpg", caption: "Research-Paper	" },
      { src: "img/Transport_Co-ordinator.jpg", caption: "Transport Co-Ordinator	" }
      
    ];

    // Loop through each image id and assign onclick event
    for (let i = 0; i < imageIds.length; i++) {
      const img = document.getElementById(imageIds[i]);
      img.onclick = function () {
        modal.style.display = "block";
        modalImg.src = images[i].src;
        captionText.innerHTML = images[i].caption;
      }
    }

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("modal")[0];

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
      modal.style.display = "none";
    }
  </script>
  <script src="js/core/jquery.3.2.1.min.js?ver=1.1.0"></script>
  <script src="js/core/popper.min.js?ver=1.1.0"></script>
  <script src="js/core/bootstrap.min.js?ver=1.1.0"></script>
  <script src="js/now-ui-kit.js?ver=1.1.0"></script>
  <script src="js/aos.js?ver=1.1.0"></script>
  <script src="scripts/main.js?ver=1.1.0"></script>
</body>

</html>