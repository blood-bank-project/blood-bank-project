<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>blood bank</title>
    <link rel="stylesheet" href="style.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <script
      src="https://kit.fontawesome.com/b8f6f13c30.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <!--navbar-->
    <section id="navbar">
      <nav
        class="navbar navbar-expand-lg bg-body-tertiary bg-light"
        data-bs-theme="light"
      >
        <div class="container-fluid">
          <a class="navbar-brand logo" href="#">e-Raktakosh</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <div class="dropdown">
                <li class="nav-item">
                  <a
                    class="nav-link active dropdown-toggle"
                    aria-current="page"
                    data-bs-toggle="dropdown"
                    href=""
                    >Home</a
                  >
                </li>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                  <li><a class="dropdown-item" href="#">About</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Why donate?</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Type of donation</a>
                  </li>
                  <li><a class="dropdown-item" href="#">Contact us</a></li>
                </ul>
              </div>
              <div class="dropdown">
                <li class="nav-item">
                  <a
                    class="nav-link  dropdown-toggle"
                    aria-current="page"
                    data-bs-toggle="dropdown"
                    href=""
                    >Looking for blood?</a
                  >
                </li>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                  <li><a class="dropdown-item" href="#">Register as Patient</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Login</a>
                  </li>
                </ul>
              </div>
              <div class="dropdown">
                <li class="nav-item">
                  <a
                    class="nav-link dropdown-toggle"
                    aria-current="page"
                    data-bs-toggle="dropdown"
                    href=""
                    >Want to donate blood?</a
                  >
                </li>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                  <li><a class="dropdown-item" href="#">Register as Donar</a></li>
                  <li>
                    <a class="dropdown-item" href="#">Login</a>
                  </li>
              </div>
              <div class="dropdown">
                <li class="nav-item">
                  <a
                    class="nav-link dropdown-toggle"
                    aria-current="page"
                    data-bs-toggle="dropdown"
                    href=""
                    >Admin</a
                  >
                </li>
                <ul class="dropdown-menu dropdown-menu-dark dropdown-content">
                      <a class="dropdown-item" href="#">Login</a>
                  </li>
              </div>
            </ul>
            <button class="btn btn-outline-danger me-2">Login</button>
            <button class="btn btn-danger">Sign-in</button>
          </div>
        </div>
      </nav>
    </section>

    <section id="body1">
      <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleCaptions"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="image/1.jpg" class="d-block w-100 img-fluid"  />
            <div class="carousel-caption d-none d-md-block">
              <h5>Why donate blood?</h5>
              <p>
                Some representative placeholder content for the first slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/2.jpg" class="d-block w-100 img-fluid" />
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>
                Some representative placeholder content for the second slide.
              </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="image/3.jpg" class="d-block w-100 img-fluid"  />
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>
                Some representative placeholder content for the third slide.
              </p>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleCaptions"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>

    <section id="body2">
      <h4 class="title">About us</h4>
      <div class="row featurette m-2">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">
            Who we are?
            <span class="text-body-secondary">It’ll blow your mind.</span>
          </h2>
          <p class="lead">
            Some great placeholder content for the first featurette here.
            Imagine some exciting prose here.
          </p>
          <button type="button" class="btn btn-outline-danger about-btn">
            More..
          </button>
        </div>
        <div class="col-md-5">
          <img
            class="img-fluid mx-auto"
            src="image/about.jpg"
            class="img-fluid"
            width="500"
            height="500"
          />
        </div>
      </div>
    </section>

    <section id="body3">
      <h4 class="title1">Learn About Donation</h4>
      <div class="row featurette" style="padding: 0 4rem">
        <div class="col-md-7 mx-auto">
          <h3 class="featurette-heading fw-normal lh-1">Why donate blood?</h3>
          <p class="lead">
            You can save lives by giving blood. Blood is a vital part of our
            body and every day, thousands of people need it. Blood is life,
            people need it to survive. But there's always more demand than
            supply. That means when you donate blood we can match up the supply
            with demand.
          </p>
        </div>
        <div class="col-md-5 mx-auto">
          <h5 class="container bg-danger" style="padding: 10px">
            Compatible blood type donors
          </h5>
          <table class="table">
            <thead>
              <td><b>Blood Type</b></td>
              <td><b>Donate Blood To</b></td>
              <td><b>Receive Blood From</b></td>
            </thead>
            <tbody>
              <td>A+</td>
              <td>A+ AB+</td>
              <td>A+ A- O+ O-</td>
            </tbody>
            <tbody>
              <td>A-</td>
              <td>A+ A- AB+ AB-</td>
              <td>A- o-</td>
            </tbody>
            <tbody>
              <td>B+</td>
              <td>B+ AB+</td>
              <td>B+ B- O+ O-</td>
            </tbody>
            <tbody>
              <td>B-</td>
              <td>B+ B- AB+ AB-</td>
              <td>B- O-</td>
            </tbody>
            <tbody>
              <td>AB+</td>
              <td>AB+</td>
              <td>Everyone</td>
            </tbody>
            <tbody>
              <td>AB-</td>
              <td>AB+ AB-</td>
              <td>AB- A- B- O-</td>
            </tbody>
            <tbody>
              <td>O+</td>
              <td>O+ A+ B+ AB+</td>
              <td>O+ O-</td>
            </tbody>
            <tbody>
              <td>O-</td>
              <td>Everyone</td>
              <td>O-</td>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section id="body4">
      <div class="contianer">
        <h4 class="title2">Types of Donation</h4>
        <p class="text-center">
          The average human body contains about five liters of blood, which is
          made of several celluar and non-cellular components such as
          <b>Red blood cell</b>, <b>Platelete</b>, and <b>Plasma</b>.
        </p>
        <p class="text-center">
          Each type of component has its unique properties and can be used for
          different indications. The donated blood is separated into these
          components by the blood centre and one donated unit can save upto four
          lives depending on the number of components separated from your blood.
        </p>
      </div>
      
      <div class="card donation-details">
        
        <div class="card-header mb-3 c-po" role="tab">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true"  id="redbloodbtn">Packed Red Blood Cells</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="plasmabtn">plasma</a>
      </li>
      <li class="nav-item">
        <a class="nav-link "  id="plateletbtn">Platelet</a>
      </li>
    </ul>
  </div>
        <div class="row content card-body ml-2" id="about-whole-blood">
          <div class="col-md-4 detail">
            <h6>What is it?</h6>
            <p>
              Blood Collected straight from the donor into a blood bag and mixed
              with an anticoagulant is called as whole blood. This collected
              whole blood is then centrifuged and red cell, platelets and plasma
              are separated. The separated Red cells are mixed with a
              preservative to be called as packed red blood cells.
            </p>
            <h6>Who can donate?</h6>
            <p>
              You need to be 18-65 years old, weight 45kg or more and be fit and
              healthy.
            </p>
          </div>
          <div class="col-md-4 detail">
            <h6>Used For?</h6>
            <p>
              Correction of severe anemia in a number of conditions and blood
              loss in case of child birth, surgery or trauma settings.
            </p>
            <h6>Lasts For?</h6>
            <p>Red cells can be stored for 42 days at 2-6 degree celsius.</p>
          </div>
          <div class="col-md-4 detail">
            <h6>How long does it take to donate?</h6>
            <p>15-30 minutes to donate including the pre-donation check-up.</p>
            <h6>How often can I donate?</h6>
            <p>
              Male donors can donate again after 90 days and female donors can
              donate again after 120 days.
            </p>
          </div>
        </div>
        <div class="row content card-body" id="about-plasma">
          <div class="col-md-4 detail">
            <h6>What is it?</h6>
            <p>
              The straw-coloured liquid in which red blood cells, white blood
              cells, and platelets float in is called plasma.Contains special
              nutrients which can be used to create 18 different type of medical
              products to treat many different medical conditions. Plasma can be
              obtained from the collected whole blood after red blood cells and
              platelets have been separated. Additionally, it can also be
              collected using an apheresis equipment where other components are
              returned to the donor. The former is a common method of plasma
              preparation in our country.
            </p>
            <h6>Who can donate?</h6>
            <p>
              The donation criteria is similar to that of red blood cell.
              However, for apheresis plasma collection minimum weight is 50 kgs.
            </p>
          </div>
          <div class="col-md-4 detail">
            <h6>Used For?</h6>
            <p>
              Used for bleeding patients with coagulation factor deficiency such
              as hemophilia A and B, von willibrand disease etc. also used in
              cases of blood loss due to trauma.
            </p>
            <h6>Lasts For?</h6>
            <p>
              Plasma after separation if frozen below -30 degrees can be stored
              up to one year.
            </p>
          </div>
          <div class="col-md-4 detail">
            <h6>How long does it take to donate?</h6>
            <p>15-30 minutes to donate including the pre-donation check-up.</p>
            <h6>How often can I donate?</h6>
            <p>
              Male donors can donate again after 90 days and female donors can
              donate again after 120 days.
            </p>
          </div>
        </div>
        <div class="row content card-body" id="about-platelet">
          <div class="col-md-4 detail">
            <h6>What is it?</h6>
            <p>
              Blood Collected straight from the donor into a blood bag and These
              are cellular elements in blood which wedge together to help to
              clot and reduce bleeding. Always in high demand, Vital for people
              with low platelet count, like hematology and cancer patients.
            </p>
            <h6>Who can donate?</h6>
            <p>
              One can donate whole blood from which the blood centre will
              separate platelets from other components. Criteria similar to
              whole blood donation apply. Alternatively, one can donate using
              apheresis equipment where only platelets are collected and rest
              components are returned back to donate. One need to satisfy whole
              blood criteria and pre- donation screening which include negative
              infectious markers and platelet count >1,50,000 per microlitre of
              blood. Weight should be >50kgs.
            </p>
          </div>
          <div class="col-md-4 detail">
            <h6>User For?</h6>
            <p>
              Conditions with very low platelet count such as Cancer, blood
              diseases, trauma, dengue etc.
            </p>
            <h6>Lasts For?</h6>
            <p>can be stored for 5 days at 20-24 degree celsius.</p>
          </div>
          <div class="col-md-4 detail">
            <h6>How long does it work?</h6>
            <p>
              We collect your blood, keep platelet and return rest to you by
              apheresis donation.
            </p>
            <h6>How long does it take to donate?</h6>
            <p>
              45-60 minutes to donate. 2-3 hours for pre-donation screening.
            </p>
            <h6>How often can I donate?</h6>
            <p>
              Every 2 weeks but should not exceed more than 24 times in a year.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="body5">
      <h4 class="title3">Contact Us</h4>
    </section>

    <section id="footer1">
      <div class="container-fluid">
        <footer >
          <div class="row">
            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary"
                    >Features</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary"
                    >Pricing</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                </li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary"
                    >Features</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary"
                    >Pricing</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                </li>
              </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary"
                    >Features</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary"
                    >Pricing</a
                  >
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
                </li>
                <li class="nav-item mb-2">
                  <a href="#" class="nav-link p-0 text-body-secondary">About</a>
                </li>
              </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                </div>
              </form>
            </div>
          </div>

          <div
            class="d-flex flex-column flex-sm-row justify-content-between py-4  border-top"
          >
            <p>© 2024 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class="ms-3">
                <a class="link-body-emphasis" href="#"
                  ><i class="fa-brands fa-facebook"></i
                ></a>
              </li>
              <li class="ms-3">
                <a class="link-body-emphasis" href="#"
                  ><i class="fa-brands fa-instagram"></i
                ></a>
              </li>
              <li class="ms-3">
                <a class="link-body-emphasis" href="#"
                  ><i class="fa-brands fa-whatsapp"></i
                ></a>
              </li>
              <li class="ms-3">
                <a class="link-body-emphasis" href="#"
                  ><i class="fa-brands fa-viber"></i
                ></a>
              </li>
            </ul>
          </div>
        </footer>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
      integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
