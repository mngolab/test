<?php

session_start();

$digit1 = mt_rand(1,10);
$digit2 = mt_rand(1,10);

$correctanswer = $digit1 + $digit2;

// Set the session contents
$_SESSION['answer'] = $correctanswer;

?>

<?php
/* old code
session_start();


if(isset($_POST['submit'])) {  
      
    if($_POST['myanswer'] == $_SESSION['answer']) {          
            // send email  
            $accept = "Thank you! We will contact you with more info.";

            $to = 'mark@thinkparallax.com';

            $subject = 'I Want to Join the Revolution';

            $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
            $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";



            $message = '<html><body>';
            $message .='<p>Hello,<br> I would like to receive updates on the YouCubed organization.</p>';
            $message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
            $message .= "<tr style='background: #eee;'><td><strong>First Name:</strong> </td><td>" . strip_tags($_POST['firstname']) . "</td></tr>";
            $message .= "<tr style='background: #eee;'><td><strong>Last Name:</strong> </td><td>" . strip_tags($_POST['lastname']) . "</td></tr>";            
            $message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['email']) . "</td></tr>";
            $message .= "</table>";
            $message .= "<p>Thanks</p>";
            $message .= "</body></html>";

            mail($to, $subject, $message, $headers);


        } else {

            $error = "Please verify that you typed in the correct answer.";
            $digit1 = mt_rand(1,10);
            $digit2 = mt_rand(1,10);

            $correctanswer = $digit1 + $digit2;

            // Set the session contents
            $_SESSION['answer'] = $correctanswer;
    }         
  
}else{
  $digit1 = mt_rand(1,10);
  $digit2 = mt_rand(1,10);

  $correctanswer = $digit1 + $digit2;

  // Set the session contents
  $_SESSION['answer'] = $correctanswer;
}
*/

?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js is-ie9" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
  <meta charset="utf-8" />
  <meta name="description" content="The new movement to revolutionize math teaching and learning. YouCubed is a nonprofit providing free and affordable K-12 mathematics resources and professional development  for educators and parents.">
  <title>YouCubed - Join the Revolution</title>
 
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/colorbox3/colorbox.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="scripts/modernizr.youcubed.js"></script>
  <script src="scripts/waypoints.min.js"></script>
  <script src="scripts/waypoints-sticky.min.js"></script>
  <script src="scripts/form.js"></script>
  <script src="scripts/validate.min.js"></script>
  <script src="scripts/jquery.colorbox-min.js"></script>
  <script src="scripts/youcubed.js"></script>

  </head>

  <body>
    <section id="home">
        <nav>
          <ul>
            <li><a href="#intro" class="intro">Intro</a></li>
            <li><a href="#first-steps" class="first-steps">First Steps</a></li>
            <li><a href="#whats-next" class="whats-next">What's Next</a></li>
            <li><a href="#news" class="news">In The News</a></li>
            <li><a href="#revolution" class="revolution">Join the Revolution</a></li>
          </ul>
        </nav>

      <div class="page-wrapper">

        <div class="six-columns right">
          <h1 class="logo">YouCubed</h1>
          <p class="intro-paragraph">The new movement to revolutionize math teaching and learning</p>
          <p>YouCubed is a nonprofit providing free and affordable K-12 mathematics resources and professional development  for educators and parents.</p>
          <a href="#revolution" class="revolution-btn">Join the Math Revolution<br>
            <small>Signup for regular updates &raquo;</small>

          </a>
        </div>        
      </div>

      <div class="buckets whole-page">
        <ul class="page-wrapper">
            <li class="three-columns">
              <h3>Why?</h3>
              <p>Research has shown that there is a better way to teach math that leads to math empowerment rather than math failure. YouCubed will not only make math enjoyable for learners, it will allow students to see the way math will help them in their lives and work.</p>
              <p><a href="http://joboaler.com/" target="_blank">Read More</a></p>
            </li>
            <li class="three-columns">
              <h3>Who's behind it all?</h3>
              <p>Our ideas and materials are developed by leading international researchers and educators who draw from research and experience to deliver exciting and innovative ideas to mathematics education.</p>
            </li>
            <li class="three-columns">
              <h3>Who's Jo?</h3>
              <p>Jo Boaler is a Stanford University math specialist who has become a driving force behind math change in the United States and beyond; she is leading the YouCubed project.</p>
            </li>
            <li class="three-columns last">
              <h3>In the News</h3>
              <p><a href="#news" class="news">Check out how the movement is spreading &raquo;</a></p>
            </li>
        </ul>
      </div>
    </section><!-- End of #home -->

      <nav id="sliding-nav">
          <a href="#home" class="home-btn"><div class="logo">YouCubed</div></a>
          <ul>
            <li><a href="#intro" class="intro">Intro</a></li>
            <li><a href="#first-steps" class="first-steps">First Steps</a></li>
            <li><a href="#whats-next" class="whats-next">What's Next</a></li>
            <li><a href="#news" class="news">In The News</a></li>
            <li><a href="#revolution" class="revolution">Join the Revolution</a></li>
      </nav><!-- End of #slide-nav -->

    <div id="content">
      <div class="page-wrapper">
      <section id="intro">
        <div class="video-item">
          <iframe src="//player.vimeo.com/video/76722104?title=0&amp;byline=0" width="820" height="461" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </section><!-- End of #intro -->

      <section id="first-steps">
        <div class="video-ideas">
          <div class="six-columns">
            <h2>First Steps</h2>
            <h3>Big ideas</h3>
            <p>We will feature short, high quality video ideas, featuring Jo & friends. Watch to learn about ways to build self-confident, math-loving children and students. Hear from students and experts, and see how it works in classrooms.</p>
          </div>
          <div class="six-columns center-align last">
            <img src="images/video-ideas-img.png" class="cube center-align" alt="box with a 1">
          </div>
        </div>
        <p>From Stanford Online: <a href="https://class.stanford.edu/courses/Education/EDUC115N/How_to_Learn_Math/about">How to Learn Math</a>, Jo Boaler</p>
        <ul class="video-listing listing">
          <li><a href="./pdfs/teacher article youcubed.pdf" onClick="_gaq.push(['_trackEvent', 'PDF', 'Download', 'Unlocking  Children’s  Math  Potential:  
5 Research  Results to  Transform Math  Learning']);"><img src="images/elephant-thumb.jpg"><h4>Unlocking Children’s Math Potential</h4></a></li>
          <li><a href="https://player.vimeo.com/video/76884123" class="colorbox" onClick="_gaq.push(['_trackEvent', 'Video', 'Vimeo', 'Maths and Mindset (Lesson 2)']);"><img src="images/video-th-1.jpg"><h4>Maths and Mindset (Lesson 2)</h4></a></li>
          <li><a href="https://player.vimeo.com/video/76884124" class="colorbox" onClick="_gaq.push(['_trackEvent', 'Video', 'Vimeo', 'Teaching for a Growth Mindset (Lesson 4)']);"><img src="images/video-th-2.jpg"><h4>Teaching for a Growth Mindset (Lesson 4)</h4></a></li>
       
        </ul>
        <div class="content-tasks">
          <div class="four-columns">
            <img class="sphere" src="images/content-tasks-img.png">
          </div>
          <div class="eight-columns last">
            <h3>Content & tasks</h3>
            <p>We will increase understanding of the most important math concepts, and provide engaging K-12 tasks aligned with the Common Core State Standards to use in classrooms and at home.</p>
          </div>
        <ul class="video-listing listing">
          <li><a href="./pdfs/Glow in the Dark Geometry 3-5 boaler.pdf" onClick="_gaq.push(['_trackEvent', 'PDF', 'Download', 'Glow-in-the-Dark Geometry']);"><img src="images/glowbook-thumb.png"><h4>Elementary</h4></a></li>
          <li><a href="./pdfs/Math 8 Function Unit Final Draft 1.0.pdf" onClick="_gaq.push(['_trackEvent', 'PDF', 'Download', 'Math 8 Function Unit']);"><img src="images/msfunctions-thumb.jpg"><h4>Middle School</h4></a></li>
          <li><a href="./pdfs/The Sunblocker.pdf" onClick="_gaq.push(['_trackEvent', 'PDF', 'Download', 'The  Simpson’s Sunblocker']);"><img src="images/sunblocker-thumb.jpg"><h4>High School</h4></a></li>        
        </ul>


        </div>
        <div class="math-innovation">
           <div class="four-columns">
            <img class="polygon" src="images/math-innovation-img.png">
          </div>
          <div class="eight-columns last">      
            <h3>Math & Innovation</h3>
            <p>We will feature math problems used in today’s innovative companies. Click to see what math problem Google needed to solve recently.</p>

            <div class="math-item"><a href="http://youcubed.org/math-lessons/math_problem_1_google.pdf" onClick="_gaq.push(['_trackEvent', 'PDF', 'Download', 'A GOOGLE DILEMMA']);"><img src="images/google-lesson.jpg"></a></div>
          </div>
        </div>

        <div class="tools-for-parents">
          <div class="five-columns">
            <h3>Tools for parents</h3>
            <p>We will support you with ideas and resources for helping your children at home and advocating for them in school.</p>
          </div>
          <div class="five-columns">
            <img class="pyramid" src="images/tools-for-parents-img.png">
          </div>
        </div>
        <ul class="video-listing listing">
          <li><a href="https://player.vimeo.com/video/76724911" class="colorbox" onClick="_gaq.push(['_trackEvent', 'Video', 'Vimeo', 'Window into the Classroom']);"><img src="images/video-th-3.jpg"><h4>Window into the Classroom</h4></a></li> 
          <li><a href="./pdfs/Parents Make Math Fun.pdf" onClick="_gaq.push(['_trackEvent', 'PDF', 'Download', 'Parents Make Math Fun']);"><img src="images/youcubed-thumb.png"><h4>Parents Make Math Fun</h4></a></li>
          <li><a href="./pdfs/Youcubed K-5 games V3.pdf" onClick="_gaq.push(['_trackEvent', 'PDF', 'Download', 'Youcubed K-5 games']);"><img src="images/game-thumb.png"><h4>Youcubed K-5 games</h4></a></li>
        </ul>
      </section><!-- End of #first-steps -->

      <section id="whats-next">
        <h2>What's Next?</h2>
        <p>The fully operational site will be filled with tasks, materials, and video ideas. We will provide help with moving to teaching math in a more engaging way with examples of the Common Core Standards. We will feature the math worked on in today's innovative companies.</p>
        <p>Once YouCubed is fully up and running we’ll provide customized professional development plans that include video, resources and workshop options designed to improve math teaching and learning.</p>
      </section><!-- End of #whats-next -->

      <section id="news">
        <h2>In The News</h2>
         <ul class="news-listing listing">
          <li>
            <a href="http://www.computerbasedmath.org/events/education-summit-newyork-2013" target="_blank">
            <div class="thumb"><img src="images/computer-based-math.png"></div>
            <p class="article-date">Nov 21, 2013</p>
            <p class="article-title">Computer-Based Math</p>
            <p class="summary">Jo Boaler Will Speak at Education Summit Scheduled</p>
            </a>
          </li>
          <li>
            <a href="http://www.theatlantic.com/education/archive/2013/11/the-stereotypes-about-math-that-hold-americans-back/281303/" target="_blank">
            <div class="thumb"><img src="images/the-atlantic.png"></div>
            <p class="article-date">Nov 12, 2013</p>
            <p class="article-title">The Atlantic</p>
            <p class="summary">The Stereotypes About Math That Hold Americans Back</p>
            </a>
          </li>   
          <li>
            <a href="http://www.telegraph.co.uk/education/universityeducation/10414989/University-education-maturing-of-the-Mooc.html" target="_blank">
            <div class="thumb"><img src="images/telegraph-logo.png"></div>
            <p class="article-date">Nov 2, 2013</p>
            <p class="article-title">The Telegraph</p>
            <p class="summary">University Education: The Maturing of the MOOC</p>
            </a>
          </li>             
        </ul>
        <div class="coming-soon">
          <h3>YouCubed will be fully operational <span class="highlight">in a few months.</span></h3>
        </div>
      </section><!-- End of #news-->
  </div><!-- End of #content -->

      <section id="revolution">
        <div class="cyan-block whole-page">
          <div class="page-wrapper clearfix">
            <div class="five-columns">
              <div class="join-revolution">Join the Math Revolution!</div>
            </div>
            <div class="five-columns right">
              <form id="join-form" method="post" action="https://docs.google.com/forms/d/1LML2-jw_AKMQFmbJNPkGPdlOQQqE4IORyTa60oRRyiY/formResponse">
                <p>Please join us by signing up for updates. We will let you know when more resources and content are added to the site.</p>
                
                <input id="entry.453524267" name="entry.453524267" type="text" value="<?php echo (isset($_POST['firstname']) ? $_POST['firstname'] : 'First Name');?>" data-label="First Name">
                <input id="entry.1635576842" name="entry.1635576842" type="text" value="<?php echo (isset($_POST['lastname']) ? $_POST['lastname'] : 'Last Name');?>" data-label="Last Name">
                <input id="entry.612641899" name="entry.612641899" type="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : 'Email');?>" data-label="Email" required>

              <?php if(!empty($accept)):?>

                <div class="accept">Thank you! We will contact you shortly!</div>

              <?php else:?>

                <p class="required-field">For security, answer the math problem in the box below:</p>
                <fieldset class="security">
                  <div class="formula">
                    <span class="var-x"><?php print $digit1;?></span><span>+</span><span class="var-y"><?php print $digit2;?></span><span>=</span>
                    <input id="myanswer" name="myanswer" type="text" value="?" required>
                  </div>
                </fieldset>
                <input type="submit" name="submit" value="Join">
                <?php if(!empty($error)) echo '<label class="error">'.$error.'</label>'; ?>  
              <?php endif;?>                
              </form>
            </div>
          </div>
        </div>

        <div class="bottom whole-page">
          <div class="page-wrapper">
          <ul id="testimonials" class="ten-columns">
            <li>"...It has helped me think about the transition to common core and how to help my students develop a love and curiosity for math."
            <span class="author">Michelle Koo</span></li>
            <li>"...As I plunge into another year of teaching second grade, I intend to hold the torch high that you have lit..."
            <span class="author">Dori Faust<br>
            BUSD<br>
            San Jose</span>
            </li>
            <li>"...Thank you so much for this wonderful way to allow this information about these new reasons and methods to be spread to so many people (teachers, parents, etc.) at once..."<span class="author">Carmel</span></li>
            <li>"...It's like an answer to my dreams of math teaching and learning..."<span class="author">Elisa Cortina</span></li>
            <li>"...I was searching for a process of learning math that would change the attitude of students from dislike to enjoy... this was the change I needed..."<span class="author">Deb Crane</span></li>
            <li>"... As a homeschooling mom, I'm always looking for new opportunities to become a better teacher and this class has revolutionized the way I think about (and therefore teach) math. You have opened my eyes to the research behind things such as the negative effects of over-testing and "drill and kill" methods that I sensed intuitively were detrimental..."<span class="author">Nichole Middleton</span></li>
            <li>"...I never realized how math could be made so interesting besides the way it is usually taught... I will approach teaching math in a whole new light... I feel empowered and motivated to change how I teach this school year. You have taught me to look at math as an art and to teach it as such."<span class="author">Donna Young</span></li>
            <li>"...You have taught me to look at math as an art and to teach it as such..."<span class="author">Sincerely a dedicated teacher</span></li>
            <li>"...Throughout my schooling years, I had enough “bad” experiences with math that I was left feeling stupid and incapable of doing it...<br>
            I cannot tell you the relief I now have that I can learn math myself, and I can teach students that they can too..."<span class="author">Middle School Teacher</span></li>

          </ul>
          </div>
        </div>
      </section><!-- End of #revolution-->
    </div>


  <footer>
    <div class="page-wrapper">This website does not provide individualized educational  advice. The user of this information should use the contents of this website and the materials as a general guideline. Examples of outcomes in this website are not intended to convey and warranty, either express or implied, as to outcomes, promises or benefits from this educational approach.</div>
  </footer>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-44139141-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  </body>

  </html>