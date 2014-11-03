<?php

$title = "Home";

include ("header.php");

?>

<div id="intro">

      <!-- Header-->

      <header class="container" style="display: block;">

        <div class="row">

          <div class="col-md-12" id="logo">

            <!-- Logo-->

            <div class="logo">

              <h1>Stephen Wu</h1>

              <h2>Programmer, Developer &amp; Analyst</h2>

            </div>

          </div>

        </div>

        <div class="row">

          <div class="col-md-4">

            <h4 id="project">Projects</h4>

            <div id="project-info">

            <p><a href="wordpress-trunk">Programming Projects</a></p>

            <p><a href="car.php">Car Projects</a></p>

            <p><a href="motorcycle.php">Motorcycle Projects</a></p>

            </div>

          </div>

                          <div class="col-md-4" id="resume">
            
                            <button data-toggle="modal" data-target="#myModal" id="resume-btn">Resume</button>

                                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  
                                    <div class="modal-dialog">
                                    
                                        <div class="modal-content">
                                      
                                            <div class="modal-header">
                                        
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        
                                                <h4 class="modal-title" id="myModalLabel">Resume</h4>
                                      
                                            </div>
                                      
                                            <div class="modal-body" id="modal-body">

                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque dolor a pulvinar congue. Phasellus vitae pulvinar ante, sit amet iaculis nunc. Praesent eget ullamcorper lorem. Pellentesque semper nisi sit amet orci aliquam, id interdum nisi egestas. Vivamus eu tellus molestie, gravida lacus non, rutrum dolor. Ut ut erat justo. Sed et diam nec erat consequat molestie. Integer eleifend, dui sit amet congue congue, magna mauris cursus justo, eget egestas sapien massa a justo.

Sed auctor a urna eu suscipit. Phasellus tempor, tortor eu ornare malesuada, felis augue cursus erat, aliquet ornare tellus massa ac lorem. Vivamus in egestas est. Donec non lectus ut tellus ultrices venenatis in vitae tortor. Fusce in dolor pharetra dolor faucibus facilisis ut vel sem. Aliquam sagittis lacus id nisl molestie euismod. Ut eu dictum felis. Nam varius eget nisl vel interdum. Maecenas vulputate, erat sed accumsan feugiat, erat nunc sagittis lectus, sit amet faucibus nisl arcu quis turpis. Suspendisse rutrum vehicula dignissim. Vivamus aliquam tortor a accumsan condimentum. Nullam euismod consequat leo non mattis.

Proin facilisis erat eu pharetra dapibus. Sed faucibus accumsan lacinia. Donec pretium ipsum mollis dui interdum, ut sodales purus convallis. Fusce sed justo metus. Quisque pellentesque tincidunt bibendum. Morbi non luctus tortor. Suspendisse sit amet risus ac nisl porttitor vulputate sit amet nec diam. Suspendisse non lectus ante.

Nullam dictum tellus id pellentesque lobortis. Etiam eget sapien ac neque scelerisque aliquam. Suspendisse vestibulum porttitor enim nec adipiscing. Nam a lorem eget lacus consequat aliquet pulvinar convallis enim. Phasellus consequat pellentesque pharetra. Suspendisse consectetur, mauris sed facilisis malesuada, justo felis laoreet enim, quis ornare lectus velit et justo. Nulla a erat vitae dolor molestie tempor eget vel massa. In dictum eleifend dolor eu interdum. Nullam vel ullamcorper leo, nec vulputate turpis. Aliquam eget nunc non dui molestie bibendum at a urna. Mauris eu odio egestas turpis malesuada gravida.

Nunc commodo nulla ac malesuada aliquet. Vivamus at libero porttitor, semper velit ullamcorper, varius massa. Sed augue sapien, tristique at commodo vel, scelerisque vitae dui. Aenean dignissim neque id diam ullamcorper porta. Curabitur mattis est arcu, sit amet pellentesque velit tristique dignissim. Nunc a lacinia eros. Curabitur at nisi sit amet sem rutrum sodales at at dui. Proin congue mollis egestas. Phasellus dignissim risus sit amet massa vehicula, non vestibulum magna dictum. Donec non ante vitae mi posuere ullamcorper. Praesent ultricies diam vel tellus hendrerit, at laoreet diam vestibulum.
                                      
                                            </div>
                                      
                                            <div class="modal-footer">
                                        
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      
                                            </div>
                                    
                                        </div>
                                  
                                    </div>
                               
                                    </div>
                              
                              <div>

                                  <h6>Click above to see resume</h6>

                              </div>
                          
                          </div>

          <div class="col-md-4">

            <h4 id="contact">Contact</h4>

            <div id="contact-info">

            <p>Phone Number: (804) 822-0489</p>

            <p>Email: <a href="mailto:wu.stephend+sdw@gmail.com">wu.stephend@gmail.com</a></p>

            </div>

          </div>

        </div>

      </header>

    </div>

<?php

include ("footer.php");

?>