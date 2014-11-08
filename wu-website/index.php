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

                                                   <h3 class="resume-objective-h3">Objective</h3>
                                                   Seeking a challenging and rewarding opportunity with a company that shares my long-term goals, beliefs, and passion for technology.
                                                   
                                                   <br />
                                                   <br />

                                                   <h3 class="resume-skills-h3">Skills and Abilities<</h3>
                                                       <b>Programming Languages:</b>
                                                        <ul>
                                                            <li>Java</li>
                                                            <li>PHP</li>
                                                            <li>MySql</li>
                                                            <li>Sql</li>
                                                            <li>HTML</li>
                                                            <li>CSS</li>
                                                            <li>Javascript</li>
                                                            <li>Swift</li>
                                                        </ul>
                                                       <b>Software Experience:</b>
                                                        <ul>
                                                            <li>Visual Studios</li>
                                                            <li>Eclipse</li>
                                                            <li>Git</li>
                                                            <li>WinSCP</li>
                                                            <li>dbForge Apache</li>
                                                            <li>MySql</li>
                                                            <li>Oracle VM</li>
                                                            <li>Dreamweaver</li>
                                                            <li>Microsoft Office (Word, Excel, Access, SharePoint, Outlook)</li>
                                                            <li>Microsoft Windows Operating System</li>
                                                            <li>Linux Fedora</li>
                                                            <li>Mac OS</li>
                                                        </ul>
                                                       <b>Professional Abilities:</b>
                                                       <ul>
                                                           <li>Design computer-based systems, processes, components, and programs</li>
                                                           <li>Explain high-level technical concepts to end users</li>
                                                           <li>Teamwork and project management: work efficiently and effectively in a team and as a leader to design and implement systems, optimize resources, and manage/resolve conflicts</li>
                                                           <li>Effective Interface and Database Design</li>
                                                           <li>Enterprise level team management and understand IT ethical integrity</li>
                                                           <li>Assessing user requirements and resource planning</li>
                                                           <li>Analyze, implement, and understand advanced algorithms</li>

                                                       </ul>
                                                </div>
                                      
                                            <div class="modal-footer">
                                        
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                      
                                            </div>
                                    
                                        </div>
                                  
                                    </div>
                               
                                    </div>
                              
                              <div>

                                  <h6>Click to see resume</h6>

                              </div>
                          
                          </div>

          <div class="col-md-4">

            <h4 id="contact">Contact</h4>

            <div id="contact-info">

            <p>Phone Number: (804) 822-0489</p>

            <p>Email: <a href="mailto:wu.stephend+sdw@gmail.com">wu.stephend@gmail.com</a></p>

            <p>Music Alarm: <a href="music.php">click here</a></p>

            </div>

          </div>

        </div>

      </header>

    </div>

<?php

include ("footer.php");

?>