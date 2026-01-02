<?php require "partials/header.php"; ?>

<div class="container my-5">
    <div class="row mb-5 text-center">
        <div class="col-12">
            <h1 class="display-4 fw-bold text-primary">Contact Us</h1>
            <p class="lead text-muted">We'd love to hear from you! Reach out to us with any questions or concerns.</p>
        </div>
    </div>

    <div class="row g-5">
        <!-- Contact Information Section -->
        <div class="col-lg-5">
            <div class="h-100 p-4 bg-light border rounded-3 shadow-sm">
                <h3 class="mb-4 border-bottom pb-2">Get in Touch</h3>
                
                <div class="d-flex align-items-start mb-4">
                    <div class="me-3 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Address</h5>
                        <p class="mb-0 text-muted">Barangay Lahug Hall<br>Cebu City, Philippines 6000</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="me-3 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.68 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Phone</h5>
                        <p class="mb-0 text-muted">(032) 233-0197</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="me-3 text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                        </svg>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-1">Email</h5>
                        <p class="mb-0 text-muted">info@barangaylahug.gov.ph</p>
                    </div>
                </div>

                <div class="mt-4">
                     <!-- Placeholder Map -->
                    <div class="ratio ratio-4x3 rounded overflow-hidden shadow-sm bg-secondary bg-opacity-10 d-flex align-items-center justify-content-center text-muted">
                        <!-- Ideally, you would embed a Google Map iframe here -->
                        <span>Map Area (Google Maps Embed)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form Section -->
        <div class="col-lg-7">
            <div class="p-4 bg-white border rounded-3 shadow-sm h-100">
                <h3 class="mb-4">Send us a Message</h3>
                <form action="submit_handler.php" method="POST">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstName" name="first_name" required placeholder="John">
                        </div>
                        <div class="col-md-6">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastName" name="last_name" required placeholder="Doe">
                        </div>
                        
                        <div class="col-12">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com">
                        </div>
                        
                        <div class="col-12">
                            <label for="subject" class="form-label">Subject</label>
                            <select class="form-select" id="subject" name="subject">
                                <option selected>Select a topic...</option>
                                <option value="Inquiry">General Inquiry</option>
                                <option value="Complaint">Complaint</option>
                                <option value="Request">Document Request</option>
                                <option value="Feedback">Feedback</option>
                            </select>
                        </div>
                        
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required placeholder="How can we help you?"></textarea>
                        </div>
                        
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary w-100 py-2 fw-bold">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require "partials/footer.php"; ?>