@extends('layouts.sidebar')
@section('main')
<div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-md-12 p-0">
         <div class="row g-0 position-relative mt- mb-5">
            <div class="col-md-4 mb-md-0 p-md-4">
              <img src="/img/a2.png" class="w-100" alt="...">
            </div>
            <div class="col-md-8 pt-4 pb-4 ps-md-1 mb-3">
              <h3 class="mt-0" style="font-family: 'Poppins', serif;">About Me</h3>
              <p class="mt-2" style="font-family: 'Poppins', serif;">I'am Abbas Zabier Mohammad a UI Designer & Frontend Developer with a background in Computer Science at IPB University. I'am interested in UI Design in creating a mobile design and web design, the tool I use for designing is Figma or Adobe XD. Besides being interested in UI Design, I am also interested in the world of frontend programming, where I have studied programming languages such as HTML, CSS, JavaScript, and PHP.</p>

              <div>
                <a href="/cv/CV-Abbas-Zabier-Mohammad.pdf" target="_blank"><button type="button" class="btn btn-outline-primary btn-sm me-3">Download CV</button></a>
              </div>
            </div>

            <div class="col-lg-12 p-md-4 mb-2">
              <h4 class="pb-2 border-bottom" style="font-family: 'Poppins', serif;">Skills</h4>
              <div class="col-lg-12">
                <p><strong>Hard Skills</strong>: HTML, CSS, JavaScript, PHP, Bootstrap, Laravel, Responsive Web Design, Version Control/git, Wireframing, User Interface Design, Prototyping, Style Guide.</p>
              </div>
              <div class="col-lg-12">
                <p><strong>Soft Skills</strong>: Creativity, Fast Learner, Problem Solving, Teamwork.</p>
              </div>
              <div class="col-lg-12">
                <p><strong>Tools</strong>: Adobe XD, Figma, Visual Studi Code, XAMPP.</p>
              </div>
              <div class="col-lg-12">
                <p><strong>Languages</strong>: Indonesia (Native), English (Limited working proficiency).</p>
              </div>
            </div>
            <div class="col-lg-12 p-md-4 mb-2">
              <h4 class="pb-2 border-bottom mb-3" style="font-family: 'Poppins', serif;">Experiences</h4>
              <div class="col-lg-12">
                <h5>Freelancer UI Design at Upwork</h5>
                <small><p>Feb 2022 - Present</p></small>
              </div>
              <ul class="mb-4" style="list-style-type:disc;">
                <li>
                    Creating mobile design and web design based on request from client
                </li>
              </ul>
              <div class="col-lg-12">
                <h5>Frontend Developer Intern at DSITD IPB</h5>
                <small><p>Feb 2022 - Jul 2022</p></small>
              </div>
              <ul style="list-style-type:disc;">
                <li>
                    Developing features Konsultani & Tanya Pakar on Web Digitani from the frontend side with Laravel framework
                </li>
              </ul>
            </div>
            <div class="col-lg-12 p-md-4 mb-2">
              <h4 class="pb-2 border-bottom mb-3" style="font-family: 'Poppins', serif;">Education</h4>
              <div class="col-lg-12">
                <h5>IPB University</h5>
                <small><p>Aug 2018 - Dec 2022</p></small>
              </div>
              <p>Fresh Graduate, Computer Science</p>
            </div>
          </div>
      </div>
   </div>
</div>
@endsection