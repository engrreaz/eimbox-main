<section id="works" class="works clearfix">
  <div class="container">
    <div class="row">
      <div class="sec-title text-center">
        <h2>Screenshots</h2>
        <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
      </div>

      <div class="sec-sub-title text-center">
        <p>
          There're some sreenshots of application are below
        </p>
      </div>

      <div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
        <ul class="text-center">
          <li>
            <a href="javascript:;" data-filter="all" class="active filter">All</a>
          </li>
          <li>
            <a href="javascript:;" data-filter=".student" class="filter">Student</a>
          </li>
          <li>
            <a href="javascript:;" data-filter=".teacher" class="filter">Teacher</a>
          </li>
          <li>
            <a href="javascript:;" data-filter=".result" class="filter">Results</a>
          </li>
          <li>
            <a href="javascript:;" data-filter=".payment" class="filter">Payments</a>
          </li>
          <li>
            <a href="javascript:;" data-filter=".misc" class="filter">Misc</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="project-wrapper">


    <?php
    for ($i = 1; $i < 9; $i++) {
      ?>

      <figure class="mix work-item student">
        <img src="img/sshots/<?php echo $i;?>.png" alt="" />
        <figcaption class="overlay">
          <a class="fancybox" rel="works" title="Write Your Image Caption Here" href="img/sshots/<?php echo $i;?>.png"><i
              class="fa fa-eye fa-lg"></i></a>
          <h4>Student Enrollment</h4>
          <p>Student Module</p>
        </figcaption>
      </figure>


    <?php
    }
    ?>


  </div>
</section>