<?php require "partials/header.php"; ?>

<div class="container my-3">
    <h1 class="text-center mb-4">Our Officials</h1>
    <div class="w-100 mb-5">
        <img src="assets/536270435_1066825788988028_6422763575634555138.jpg" class="img-fluid w-100 rounded shadow-sm" alt="Officials">
    </div>

    <div class="row mb-5">
        <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Vision
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Mission
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Accordion Item #3
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="h-100 p-4 bg-light border rounded-3 shadow-sm">
                <h2 class="mb-4 border-bottom pb-2">Statistics</h2>
                <div class="fs-5">
                    <p class="mb-2"><strong>Total Population:</strong> 49,584</p>
                    <p class="mb-2"><strong>Household Population:</strong> 40,000</p>
                    <p class="mb-2"><strong>No. of Household:</strong> 7,259</p>
                    <p class="mb-2"><strong>Voters Population:</strong> 35,652</p>
                    <p class="mb-2"><strong>Land Area:</strong> 443 hectares</p>
                    <p class="mb-2"><strong>Annual Budget:</strong> 58,714,229.34</p>
                    <p class="mb-2"><strong>Sitios:</strong> 48 Sitios</p>
                    <p class="mb-2"><strong>No. of Barangay Workers:</strong> 170 Workers</p>
                    <p class="mb-2"><strong>No. of Day Care Centers:</strong> 8 Day Care Centers</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12">
            <div id="carouselExampleCaptions" class="carousel slide shadow rounded overflow-hidden" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/Sample-image1.jpg" class="d-block w-100" alt="Sample Image 1">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/Sample-image3.png" class="d-block w-100" alt="Sample Image 2">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/sample-photo-2.jpg" class="d-block w-100" alt="Sample Image 3">
                        <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-50 rounded">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<?php include "partials/footer.php" ?>