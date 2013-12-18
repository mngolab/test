<?php

session_start();

$digit1 = mt_rand(1,10);
$digit2 = mt_rand(1,10);

$correctanswer = $digit1 + $digit2;

// Set the session contents
$_SESSION['answer'] = $correctanswer;


?>

<!DOCTYPE html>
<!--[if IE 9]>    <html class="no-js is-ie9" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  <head>
  <meta charset="utf-8" />

  <title>YouCubed - Join the Revolution</title>
 
  <!-- Included CSS Files (Compressed) -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/colorbox3/colorbox.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="scripts/modernizr.youcubed.js"></script>
  <script src="scripts/waypoints.min.js"></script>
  <script src="scripts/waypoints-sticky.min.js"></script>
  <script src="scripts/form-dev.js"></script>
  <script src="scripts/validate.min.js"></script>
  <script src="scripts/jquery.colorbox-min.js"></script>
  <script src="scripts/youcubed.js"></script>

  <script>
  $.validator.methods.equal = function(value, element, param) { return value == param; }; 

  $(function(){

    $("#join-form").validate({
      rules: {
        myanswer:{
          equal: <?php echo $correctanswer;?>
        }
      },
      messages: {
        'entry.612641899': {
          required: "Please enter a valid email address",
          minlength: "Please enter a valid email address",
        },
        myanswer:{
          required: "Please answer the math problem above"
        }   
      },
        errorPlacement: function(error,element){
              $('.form-error').html('<label class="error">Please correct the fields above</label>')                                         
              return false;
          }, 
        errorClass: "error",
    });
  });
  </script>


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
              <p>Check out how the movement is spreading &raquo;</p>
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
          <iframe src="//player.vimeo.com/video/74745742?title=0&amp;byline=0" width="820" height="461" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </section><!-- End of #intro -->

      <section id="first-steps">
        <div class="video-ideas">
          <div class="six-columns">
            <h2>First Steps</h2>
            <h3>Video ideas</h3>
            <p>We will feature short, high quality video ideas, featuring Jo & friends. Watch to learn about ways to build self-confident, math-loving children and students. Hear from students and experts, and see how it works in classrooms.</p>
          </div>
          <div class="six-columns center-align last">
            <img src="images/video-ideas-img.png" class="cube center-align" alt="box with a 1">
          </div>
        </div>
        <ul class="video-listing listing">
          <li><a href="https://player.vimeo.com/video/74741799" class=""></a><img src="images/video-th-1.jpg"></li>
          <li><a href="https://player.vimeo.com/video/74741800" class=""></a><img src="images/video-th-2.jpg"></li>
          <li><a href="https://player.vimeo.com/video/74745743" class=""></a><img src="images/video-th-3.jpg"></li>        
        </ul>
        <div class="content-tasks">
          <div class="four-columns">
            <img class="sphere" src="images/content-tasks-img.png">
          </div>
          <div class="eight-columns last">
            <h3>Content & tasks</h3>
            <p>We will increase understanding of the most important math concepts, and provide engaging K-12 tasks aligned with the Common Core State Standards to use in classrooms and at home.</p>
          </div>
        </div>
        <div class="math-innovation">
           <div class="four-columns">
            <img class="polygon" src="images/math-innovation-img.png">
          </div>
          <div class="eight-columns last">      
            <h3>Math & Innovation</h3>
            <p>We will feature math problems used in today’s innovative companies. Click to see what math problem Google needed to solve recently.</p>

            <div class="math-item"><a href="http://youcubed.org/math-lessons/math_problem_1_google.pdf"><img src="images/google-lesson.jpg"></a></div>
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
            <a href="http://www.telegraph.co.uk/education/maths-reform/9621100/Make-Britain-Count-Stop-telling-children-maths-isnt-for-them.html" target="_blank">

            <div class="thumb"><img src="images/telegraph-logo.png"></div>
            <p class="article-date">Oct 20, 2012</p>
            <p class="article-title">The Telegraph</p>
            <p class="summary">Make Britain Count: 'Stop telling children maths isn’t for them’</p>
            </a>
          </li>
          <li>
            <a href="http://www.insidehighered.com/news/2012/10/15/stanford-professor-goes-public-attacks-over-her-math-education-research" target="_blank">
            <div class="thumb"><img src="images/inside-higher-ed-logo.png"></div>
            <p class="article-date">Oct 15, 2012</p>
            <p class="article-title">Inside Higher Ed</p>
            <p class="summary">Casualty of the Math Wars</p>
            </a>
          </li>
          <li>
            <a href="http://www.commonwealthclub.org/events/2013-09-17/race-nowhere-vicki-abeles-dark-side-achievement-culture" target="_blank">
            <div class="thumb"><img src="images/commonwealth-club-logo.png"></div>
            <p class="article-date">Sept 17, 2013</p>
            <p class="article-title">The Commonwealth Club of California</p>
            <p class="summary">UPCOMING EVENT: Race to Nowhere with Vicki Abeles: The Dark Side of Achievement Culture</p>
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
              <form id="join-form" method="post" action="process.php">
                <p>Please join us by signing up for updates. We will let you know when more resources and content are added to the site.</p>
                
                <input id="entry.453524267" name="entry.453524267" type="text" value="<?php echo (isset($_POST['firstname']) ? $_POST['firstname'] : 'First Name');?>" data-label="First Name">
                <input id="entry.1635576842" name="entry.1635576842" type="text" value="<?php echo (isset($_POST['lastname']) ? $_POST['lastname'] : 'Last Name');?>" data-label="Last Name">
                <input id="entry.612641899" name="entry.612641899" type="email" value="<?php echo (isset($_POST['email']) ? $_POST['email'] : 'Email');?>" data-label="Email" class="required-field" required>

              <?php if(!empty($accept)):?>

                <div class="accept">Thank you for your interest in YouCubed. We look forward to updating you with exciting news in mathematics education.</div>

              <?php else:?>

                <p class="required-field">For security, answer the math problem in the box below:</p>
                <fieldset class="security">
                  <div class="formula">
                    <span class="var-x"><?php print $digit1;?></span><span>+</span><span class="var-y"><?php print $digit2;?></span><span>=</span>
                    <input id="myanswer" name="myanswer" type="text" value="?" required>
                  </div>
                </fieldset>
                <input type="submit" name="submit" value="Join">
                <label class="form-error"></label>

              <?php endif;?>                
              </form>
            </div>
          </div>
        </div>

        <div class="bottom whole-page">
          <div class="page-wrapper">
          <ul id="testimonials" class="ten-columns">
           <li>"...It has helped me think about the transition to common core and how to help my students develop a love and curiosity for math."</li>
            <li>"...As I plunge into another year of teaching second grade, I intend to hold the torch high that you have lit..."</span>
            </li>
            <li>"...Thank you so much for this wonderful way to allow this information about these new reasons and methods to be spread to so many people (teachers, parents, etc.) at once..."</li>
            <li>"...It's like an answer to my dreams of math teaching and learning..."</li>
            <li>"...I was searching for a process of learning math that would change the attitude of students from dislike to enjoy... this was the change I needed..."</li>
            <li>"... As a homeschooling mom, I'm always looking for new opportunities to become a better teacher and this class has revolutionized the way I think about (and therefore teach) math. You have opened my eyes to the research behind things such as the negative effects of over-testing and "drill and kill" methods that I sensed intuitively were detrimental..."</li>
            <li>"...I never realized how math could be made so interesting besides the way it is usually taught... I will approach teaching math in a whole new light... I feel empowered and motivated to change how I teach this school year. You have taught me to look at math as an art and to teach it as such."</li>
            <li>"...You have taught me to look at math as an art and to teach it as such..."</li>
            <li>"...Throughout my schooling years, I had enough “bad” experiences with math that I was left feeling stupid and incapable of doing it...<br>
            I cannot tell you the relief I now have that I can learn math myself, and I can teach students that they can too..."</li>

          </ul>
          </div>
        </div>
      </section><!-- End of #revolution-->
    </div>


  <footer>
    <div class="page-wrapper">This website does not provide individualized educational  advice. The user of this information should use the contents of this website and the materials as a general guideline. Examples of outcomes in this website are not intended to convey and warranty, either express or implied, as to outcomes, promises or benefits from this educational approach.</div>
  </footer>

  </body>
 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44139141-1', 'youcubed.org');
  ga('send', 'pageview');

</script> 
  </html>