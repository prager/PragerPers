<section id='blog' class='blog-section section' >

  <div class='container' >

    <div class='row' >

      <div class='col-md-6 col-md-offset-3' >
      <div class='section-header text-center' >

          <h2>K's Blog</h2>

          <div class='divider-draft center' ></div>

          <p>
            This is my blog where my thoughts live. Still under development, for example the Comments Section is coming.
            Come back and be surprised!
          </p>
          <p> <?php //echo 'test'; ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class='posts-block section-block' >

    <div class='container' >

      <div class='row' >

        <div class='col-md-8' >

          <div class='post' >

            <div class='content' >
            <?php if($pinned != NULL) {?>
            <h4>
              <?php echo anchor('blog/article/' . $pinned['id_blog'], $pinned['title']); ?>
            </h4>
            <ul class='post-icons' >

              <li>
                <i class='ion-ios-person' ></i>
                <span><?php echo $pinned['fname'] . ' ' . $pinned['lname']; ?></span>
              </li>

              <li>
                  <i class='ion-ios-clock' ></i>
                  <span><?php echo $pinned['date']; ?></span>
              </li>

            </ul>

            <p>
              <?php echo $pinned['snip']; ?>
            </p>

            <a href='<?php echo base_url(); ?>index.php/blog/article/<?php echo $pinned['id_blog']; ?>' class='read-more' >
              Read More
            <i class='ion-ios-arrow-thin-right' ></i>
            </a>
            <hr />

            <?php }?>
            <?php $i = 0;?>
            <?php foreach($exerpts as $snip) {
            if($snip['published'] == 1) {?>
              <?php $id = $snip['id_blog']; ?>
              <h4>
                <?php echo anchor('blog/article/' . $id, $snip['title']); ?>
              </h4>

              <ul class='post-icons' >

                <li>
                  <i class='ion-ios-person' ></i>
                  <span><?php echo $snip['fname'] . ' ' . $snip['lname']; ?></span>
                </li>

                <li>
                  <i class='ion-ios-clock' ></i>
                  <span><?php echo $snip['date']; ?></span>
                </li>

              </ul>
              <p>
                <?php echo $snip['snip']; ?>
              </p>

              <?php echo anchor('blog/article/' . $id, 'Read More', 'class="read-more"'); ?>
                <i class='ion-ios-arrow-thin-right' ></i>
              <hr />
            <?php
              $i++;
             }
            }?>
            <!--<button id="toggle_elem">Discuss</button>
              <p id="toggled">Designed for discussion</p>-->
            </div>

          </div>

        </div>

        <div class='col-md-4' >

          <div class='sidebar' >

            <div class='sidebar-widget' >

            </div>

            <!-- <div class='sidebar-widget' >
              <div class='categories-widget' >

                <div class='widget-header' >
                  <h4>
                    <i class='ion-ios-folder' ></i> Categories
                  </h4>
                </div>

                <ul class='sidebar-list' >
                <?php foreach($subjects as $sub) { ?>
                  <li>
                    <a href='#' ><?php echo $sub;?></a>
                  </li>
                <?php } ?>

                </ul>

              </div>
            </div>-->

            <?php include 'sidebar_incl.php'; ?>

            <!-- <div class='sidebar-widget' >

              <div class='widget-header' >
                <h4>
                  <i class='ion-document' ></i>
                  Recent Posts
                </h4>
              </div>


                <ul class='sidebar-list' >
                <?php $i = 0;?>
                <?php foreach($exerpts as $snip) {?>
                  <li>
                    <?php
                    if($i < 4) {
                      echo anchor('blog/show/' . $snip['id_blog'], $snip['title']);
                    }
                    else {
                      break;
                    }
                    $i++;
                    ?>
                  </li>
                <?php } ?>

                </ul>

            </div> -->
          </div>

        </div>

      </div>

    </div>

  </div>

<!--  <div class='container' >
    <div class='row' >
      <div class='col-md-6 col-md-offset-3' >

      </div>
    </div>
  </div>-->

  <div class='footer bg-lightgray section-block' >

    <div class='container' >

      <div class='row' >


        <div class='col-xs-6 text-left' >
          <h4><?php echo $user['fname'] . ' ' . $user['lname']; ?></h4>
        </div>

        <div class='col-xs-6 text-right' >
          <ul class='footer-social' >
            <li>
              <a href='https://www.facebook.com/jkulisek' >
                <i class='ion-social-facebook' ></i>
              </a>
            </li>
            <li>
              <a href='https://twitter.com/JanKulisek' >
                <i class='ion-social-twitter' ></i>
              </a>
            </li>
            <li>
              <a href='https://www.linkedin.com/in/jan-kul%C3%ADsek-13066b44' >
                <i class='ion-social-linkedin' ></i>
              </a>
            </li>
          </ul>
        </div>

      </div>

    </div>

  </div>
</section>
