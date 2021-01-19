<!DOCTYPE html>

<?php 

    if(isset($_POST["submit"])){
        
        if(!$_POST["Full-Name"]){
            $error="Please enter your name";
        }
        else if(!$_POST["Email-id"]){
            $error="Please enter your email-id";
        }
        else if(!$_POST["Subject"]){
            $error="Please enter a subject";
        }
        else if(!$_POST["Message"]){
            $error="Please enter a message";
        }
        else{
            $error = null;
        }
        if(isset($error)){
            $result = "<div class=\"alert alert-danger\">$error</div>";
        }
        else{
            $result = "<div class=\"alert alert-success\">Form Submitted</div>";
            $link = mysqli_connect("127.0.0.1","root","","usersdb");
            if($link){
              $name = $_POST["Full-Name"];
              $email = $_POST["Email-id"];
              $sub = $_POST["Subject"];
              $message = $_POST["Message"];
              $sql = "INSERT INTO `teams` (`Name`,`Email`,`Subject`,`Message`) VALUES('$name','$email','$sub','$message')";
              // $query = "SELECT * FROM users";
              if(mysqli_query($link,$sql)){
              }
              else{
              }
            }
            else{
            }
        }
  
    }

?>


<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/team.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script
      src="https://kit.fontawesome.com/1305f8f706.js"
      crossorigin="anonymous"
    ></script>
    <title>TeamKART</title>
    <div class="sidebar">
      <a href="#"><i class="fas fa-arrow-left close"></i></a>
      <!-- <a href="#"><img src="./images/tklogo.png" alt="teamkart-logo" class="tklogo"></a> -->
      <div class="sidebar-in">
        <a href="./index.html">Home</a>
        <a href="./team.html">Team</a>
        <a href="./cars.html">Cars</a>
        <a href="./index.html#contact">Contact</a>
        <a href="./sponsers.html">Sponsors</a>
        <a href="./gallery.html">Gallery</a>
        <a href="./blog.html">Blog</a>
      </div>
    </div>
  </head>

  <body>
    <div class="main">
      <i class="fa fa-bars close mx-1 my-1"></i>
      <!-- <img
        src="./images/index-cover.jpg"
        class="index-cover"
        alt="index-cover"
      /> -->

      <div class="jumbotron" id="team">
        <!-- team managers -->
        <h1 class="text-center">TEAM MANAGERS</h1>
        <hr class="hr mx-auto"/>
        <div class="container container-fluid">
          <div class="row justify-content-around">
            <div class="col col-xl-4 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form method="post">
                          <?php 
                            echo isset($result) ? $result : null;
                         ?>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                                name="Full-Name"
                                value="<?php 
                                    error_reporting(E_ERROR | E_PARSE);
                                    echo $_POST["Full-Name"];
                 
                                ?>"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                name="Email-id"
                                placeholder="swarnim@raj.com"
                                value="<?php 
                                error_reporting(E_ERROR | E_PARSE);
                                echo $_POST["Email-id"];
                            
                                ?>"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                name="Subject"
                                placeholder="Subject"
                                value="<?php 
                                error_reporting(E_ERROR | E_PARSE);
                                echo $_POST["Subject"];
                            
                                ?>"
                              />
                              <textarea
                                name="Message"
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Write Something ..."
                                value="<?php 
                                error_reporting(E_ERROR | E_PARSE);
                                echo $_POST["Message"];
                            
                                ?>"
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                              name="submit"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Swarnim Raj</h3>
              <h4 class="pt-1 ">Team Leader</h4>
            </div>
            <div class="col col-xl-4 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Keshav Bagri</h3>
              <h4 class="pt-1 ">Deputy Team Leader</h4>
            </div>
            <div class="col col-xl-4 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Vasu Chourasia</h3>
              <h4 class="pt-1 ">Finance Head</h4>
            </div>
          </div>
        </div>
        <!-- corporate and public relations -->
        <h1 class="text-center">CORPORATE & PUBLIC RELATIONS</h1>
        <hr class="hr mx-auto"/>
        <div class="container container-fluid">
          <div class="row justify-content-around">
            <div class="col col-xl-6 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Moinak Ghosh</h3>
              <h4 class="pt-1 ">CPR Head</h4>
            </div>
            <div class="col col-xl-6 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Arya Tathe</h3>
              <h4 class="pt-1 ">Media Head</h4>
            </div>
          </div>
        </div>
        <!-- Drivetrain -->
        <h1 class="text-center">POWERTRAIN</h1>
        <hr class="hr mx-auto"/>
        <div class="container container-fluid">
          <div class="row justify-content-around">
            <div class="col col-xl-12 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Amar Bapat</h3>
              <h4 class="pt-1 ">Powertrain Head</h4>
            </div>
          </div>
        </div>
        <!-- Electronics -->
        <h1 class="text-center">ELECTRONICS</h1>
        <hr class="hr mx-auto"/>
        <div class="container container-fluid">
          <div class="row justify-content-around">
            <div class="col col-xl-4 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Sumedh Lodhi</h3>
              <h4 class="pt-1 ">EV Head</h4>
            </div>
            <div class="col col-xl-4 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Gaurav Bisen</h3>
              <h4 class="pt-1 ">Electronics Head</h4>
            </div>
            <div class="col col-xl-4 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Siddharth Porwal</h3>
              <h4 class="pt-1">Electronics Head</h4>
            </div>
          </div>
        </div>
        <!-- Aerodynamics -->
        <h1 class="text-center">AERODYNAMICS</h1>
        <hr class="hr mx-auto"/>
        <div class="container-fluid">
          <div class="row justify-content-between">
            <div class="col col-xl-3 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Vardhan Vydula</h3>
              <h4 class="pt-1 ">Aerodynamics Head</h4>
            </div>
            <div class="col col-xl-3 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Utsab Pal</h3>
              <h4 class="pt-1 ">Aerodynamics Head</h4>
            </div>
            <div class="col col-xl-3 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Subhadeep Mondal</h3>
              <h4 class="pt-1 ">Aerodynamics Head</h4>
            </div>
            <div class="col col-xl-3 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Pankaj Sethi</h3>
              <h4 class="pt-1">Aerodynamics Head</h4>
            </div>
          </div>
        </div>
        <!-- Vehicle Dynamics -->
        <h1 class="text-center">VEHICLE DYNAMICS</h1>
        <hr class="hr mx-auto"/>
        <div class="container container-fluid">
          <div class="row justify-content-around">
            <div class="col col-xl-6 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Sudhanshu Shankar</h3>
              <h4 class="pt-1 ">Suspension & Brakes Head</h4>
            </div>
            <div class="col col-xl-6 text-center p-4">
              <div class="media mx-auto">
                <img
                  src="./images/team/avatar.png"
                  alt="avatar"
                  class="image"
                />
                <div class="team-contact fs-3 justify-content-around d-flex">
                  <a href=""><i class="fab fa-facebook"></i></a>
                  <a href=""><i class="fab fa-linkedin-in"></i></a>
                  <a
                    href=""
                    data-bs-toggle="modal"
                    data-bs-target="#exampleModal"
                    ><i class="fas fa-envelope"></i
                  ></a>
                  <!-- Button trigger modal -->

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button
                            type="button"
                            class="btn-close p-0 close-button"
                            data-bs-dismiss="modal"
                          ></button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Full Name"
                              />
                              <input
                                type="email"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Email-id"
                              />
                              <input
                                type="text"
                                class="form-control my-1 rounded-0 bg-white"
                                placeholder="Subject"
                              />
                              <textarea
                                class="form-control my-1 rounded-0 bg-white"
                                rows="6"
                                placeholder="Type your message here..."
                              ></textarea>
                            </div>
                            <button
                              type="submit"
                              class="btn btn-outline-danger send-button"
                            >
                              Submit
                            </button>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <h3 class="pt-1 ">Shivansh Laad</h3>
              <h4 class="pt-1 ">Chassis Head</h4>
            </div>
          </div>
        </div>
      </div>


      <footer>
        <div class="container container-fluid footer">
          <div class="row justify-content-center">
            <div class="col col-xl-3 col-lg-5 col-md-12 col-sm-12 col-12">
              <h4 class="pt-4">Find Us</h4>
              <div class="map clearfix">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1792.9044026033764!2d87.31555235805091!3d22.320339919170205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1d441bd5dd36ff%3A0xe6a8debfe052c0aa!2sTeamKART%20Bay!5e0!3m2!1sen!2sin!4v1609521595560!5m2!1sen!2sin"
                  frameborder="0"
                  style="border: 0"
                ></iframe>
              </div>
            </div>
            <div class="row col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <div
                class="col col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ps-0"
              >
                <h4 class="pt-4 pb-1">Contacts</h4>
                <p class="manager-contact mb-4">
                  Swarnim Raj <br />
                  +91- 91241247125
                </p>
                <p class="manager-contact mt-4">
                  Keshav Bagri<br />
                  +91- 91241247125
                </p>
                <i class="fas fa-phone-alt d-block mt-4 pt-1"
                  ><span class="ps-2">+91-987654321</span></i
                >
                <i class="fas fa-envelope d-block mt-2"
                  ><span class="ps-2">kart@team.com</span></i
                >
                <i class="fas fa-map-marker-alt d-block mt-2">
                  <span class="ps-2">TeamKART Bay, Behind Nehru Musem</span>
                </i>
              </div>
              <div class="col col-xl-6 col-lg-8 col-md-8 col-sm-12 col-12 ps-0">
                <h4 class="pt-4 pb-1">Newsletter</h4>

                <div class="input-group rounded-0">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Enter your email..."
                    aria-label="Newsletter subscription"
                  />
                  <div class="input-group-append">
                    <button
                      class="btn btn-outline-secondary mx-1 btn-large"
                      type="button"
                    >
                      <i class="fas fa-paper-plane"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div
              class="col col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 social-media"
            >
              <hr style="width: 80%; margin: 1em auto" />
              <div
                class="container container-fluid mt-0 mb-4"
                id="footer-links"
              >
                <a href="./index.html" id="footer-links">Home</a>
                <a href="./team.html" id="footer-links">Team</a>
                <a href="./cars.html" id="footer-links">Cars</a>
                <a href="./index.html#contact" id="footer-links">Contact</a>
                <a href="./sponsers.html" id="footer-links">Sponsors</a>
                <a href="./gallery.html" id="footer-links">Gallery</a>
                <a href="./blog.html" id="footer-links">Blog</a>
              </div>
              <p class="mb-1">Copyright ©2020 | TeamKART</p>
              <a href=""><i class="fab fa-facebook-f"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-youtube"></i></a>
              <a href=""><i class="fab fa-linkedin-in"></i></a>
              <a href=""> <i class="fas fa-envelope"></i></a>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!--
        bootstrap scripts
    -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
      integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj"
      crossorigin="anonymous"
    ></script>
    <script src="./script/script.js"></script>
  </body>
</html>
