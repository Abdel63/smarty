<link rel="stylesheet" href="main.css" />
<!-- Nos produits Section -->
<section class="page-section portfolio" id="portfolio">
  <div class="container">
    <!-- Nos produits Section Heading -->
    <h2
      class="page-section-heading text-center text-uppercase mb-0 texte-nos-produits"
    >
      NOS PRODUITS
    </h2>

    <!-- Nos produits Grid Items -->
    <div class="row mt-2">
      <!-- Nos produits Item 1 -->
      {foreach $Categories as $Category}
      <div class="col-md-6 col-lg-4">
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 divBizarre"
          >
            <a href="categories.php?id={$Category['id']}"
              ><img
                class="img-fluid mx-auto mb-4 cartes"
                src="{$Category['image']}"
                alt="t-shirt-man"
              />
            </a>
          </div>
      </div>
      {/foreach}

      <!-- Nos produits Item 2 -->
      <!-- <div class="col-md-6 col-lg-4">
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
          >
            <a href="index-tshirts.php">
              <img
                class="img-fluid cartes"
                src="images/t-shirts/tommy-jeans_170036_UM0UM01170_990_TP_20190307T163352_01.jpg"
                alt="t-shirts-man"
            /></a>
          </div>
      </div> -->

      <!-- Nos produits Item 3 -->
      <!-- <div class="col-md-6 col-lg-4">
        <div
          class="portfolio-item mx-auto"
          data-toggle="modal"
          data-target="#portfolioModal3"
        >
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
          >
            <a href="index-tshirts.php">
              <img
                class="img-fluid cartes"
                src="images/t-shirts/uniplay_143034_fab18-up-t282-blk_20180903T152339_01.jpg"
                alt="t-shirts-man"
            /></a>
          </div>
        </div>
      </div> -->

      <!-- Nos produits Item 4 -->
      <!-- <div class="col-md-6 col-lg-4">
        <div
          class="portfolio-item mx-auto"
          data-toggle="modal"
          data-target="#portfolioModal4"
        >
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 divBizarre"
          >
            <a href="index-pants.php">
              <img
                class="img-fluid mb-4 cartes"
                src="images/pantalons/ellesse_188410_1034N-GUSTAVE-PANT-POLY_NOIR_20190708T160037_01.jpg"
                alt="pants"
            /></a>
          </div>
        </div>
      </div> -->

      <!-- Nos produits Item 5 -->
      <!-- <div class="col-md-6 col-lg-4">
        <div
          class="portfolio-item mx-auto"
          data-toggle="modal"
          data-target="#portfolioModal5"
        >
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
          >
            <a href="index-pants.php">
              <img
                class="img-fluid cartes"
                src="images/pantalons/sergio-tacchini_171677_36986_013_20190227T103928_01.jpg"
                alt="pants"
            /></a>
          </div>
        </div>
      </div> -->

      <!-- Nos produits Item 6 -->
      <!-- <div class="col-md-6 col-lg-4">
        <div
          class="portfolio-item mx-auto"
          data-toggle="modal"
          data-target="#portfolioModal6"
        >
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
          >
            <a href="index-pants.php">
              <img
                class="img-fluid cartes"
                src="images/pantalons/uniplay_161259_UP-T3296_GREY_20181114T144233_01.jpg"
                alt="pants"
            /></a>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-md-6 col-lg-4">
        <div
          class="portfolio-item mx-auto"
          data-toggle="modal"
          data-target="#portfolioModal6"
        >
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100 divBizarre"
          >
            <a href="index-accessoires.php">
              <img
                class="img-fluid mb-4 cartes"
                src="images/accessoires/california-jewels_162375_B920-1_B920-2_20181214T102833_01.jpg"
                alt="accessoires-man"
            /></a>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-md-6 col-lg-4">
        <div
          class="portfolio-item mx-auto"
          data-toggle="modal"
          data-target="#portfolioModal6"
        >
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
          >
            <a href="index-accessoires.php">
              <img
                class="img-fluid cartes"
                src="images/accessoires/calvin-klein_187259_K50K505054_BDS_20190624T165319_01.jpg"
                alt="accessoires-man"
            /></a>
          </div>
        </div>
      </div> -->

      <!-- <div class="col-md-6 col-lg-4">
        <div
          class="portfolio-item mx-auto"
          data-toggle="modal"
          data-target="#portfolioModal6"
        >
          <div
            class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100"
          >
            <a href="index-accessoires.php">
              <img
                class="img-fluid cartes"
                src="images/accessoires/jack-and-jones_135924_12131657-j1809-00-sand-noosss18_20180903T142855_01.jpg"
                alt="accessoires-man"
            /></a>
          </div>
        </div>
      </div> -->
    </div>
    <!-- /.row -->
  </div>
</section>

<!-- About Section -->
<section class="page-section text-white mb-0" id="about" id="text-about">
  <div class="container">
    <!-- About Section Heading -->
    <h2 class="page-section-heading text-center text-uppercase text-white">
      About
    </h2>

    <!-- About Section Content -->
    <div class="row">
      <div class="col-lg-4 ml-auto">
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
      <div class="col-lg-4 mr-auto">
        <p class="lead">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Contact Section -->
<section class="page-section" id="contact">
  <div class="container">
    <!-- Contact Section Heading -->
    <h2
      class="page-section-heading text-center text-uppercase text-secondary mb-0"
    >
      Contact Me
    </h2>

    <!-- Contact Section Form -->
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
        <form name="sentMessage" id="contactForm" novalidate="novalidate">
          <div class="control-group">
            <div
              class="form-group floating-label-form-group controls mb-0 pb-2"
            >
              <label>Name</label>
              <input
                class="form-control"
                id="name"
                type="text"
                placeholder="Name"
                required="required"
                data-validation-required-message="Please enter your name."
              />
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div
              class="form-group floating-label-form-group controls mb-0 pb-2"
            >
              <label>Email Address</label>
              <input
                class="form-control"
                id="email"
                type="email"
                placeholder="Email Address"
                required="required"
                data-validation-required-message="Please enter your email address."
              />
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div
              class="form-group floating-label-form-group controls mb-0 pb-2"
            >
              <label>Phone Number</label>
              <input
                class="form-control"
                id="phone"
                type="tel"
                placeholder="Phone Number"
                required="required"
                data-validation-required-message="Please enter your phone number."
              />
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div
              class="form-group floating-label-form-group controls mb-0 pb-2"
            >
              <label>Message</label>
              <textarea
                class="form-control"
                id="message"
                rows="5"
                placeholder="Message"
                required="required"
                data-validation-required-message="Please enter a message."
              ></textarea>
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <br />
          <div id="success"></div>
          <div class="form-group">
            <button
              type="submit"
              class="btn btn-primary btn-xl"
              id="sendMessageButton"
            >
              Send
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>