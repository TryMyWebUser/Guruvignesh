<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Business Advisory Form</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
        <style>
            body {
                font-family: "Open Sans", sans-serif;
                background-color: #f8f9fa;
            }
            .modal-content {
                border-radius: 12px;
                border: none;
            }
            .form-step {
                display: none;
            }
            .form-step.active {
                display: block;
            }
            .form-header {
                border-bottom: 1px solid #eee;
                padding-bottom: 15px;
                margin-bottom: 20px;
            }
            .form-footer {
                border-top: 1px solid #eee;
                padding-top: 15px;
                margin-top: 20px;
            }
            .progress {
                height: 8px;
                margin-bottom: 20px;
            }
            .progress-bar {
                background-color: #009688;
            }
            .btn-primary {
                background-color: #009688;
                border-color: #009688;
            }
            .btn-primary:hover {
                background-color: #00796b;
                border-color: #00796b;
            }
            .btn-outline-primary {
                color: #009688;
                border-color: #009688;
            }
            .btn-outline-primary:hover {
                background-color: #009688;
                color: white;
            }
            .yes-no-btns .btn {
                min-width: 100px;
                margin: 0 5px;
            }
            .conditional-field {
                margin-top: 15px;
                display: none;
            }
            .form-control:focus {
                border-color: #009688;
                box-shadow: 0 0 0 0.25rem rgba(0, 150, 136, 0.25);
            }
        </style>
    </head>
    <body>
        <!-- Button trigger modal -->
        <div class="container mt-5 text-center">
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#businessFormModal"><i class="fas fa-clipboard-list me-2"></i>Start Business Assessment</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="businessFormModal" tabindex="-1" aria-labelledby="businessFormModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="businessFormModalLabel">Business Clarity & Discovery</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <!-- Step 1: Basic Information -->
                        <div class="form-step active" id="step1">
                            <div class="form-header">
                                <h5>Basic Information</h5>
                                <p class="text-muted">Let's start with some basic details</p>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" required />
                            </div>
                            <div class="mb-3">
                                <label for="contact" class="form-label">Mobile & Email</label>
                                <input type="text" class="form-control" id="contact" required />
                            </div>
                        </div>

                        <!-- Step 2: Business Description -->
                        <div class="form-step" id="step2">
                            <div class="form-header">
                                <h5>About Your Business</h5>
                                <p class="text-muted">Tell us about your business and team</p>
                            </div>
                            <div class="mb-3">
                                <label for="businessDescription" class="form-label">What does your business do, and who makes up your team? Explain in detail</label>
                                <textarea class="form-control" id="businessDescription" rows="4" required></textarea>
                            </div>
                        </div>

                        <!-- Step 3: Business Goals -->
                        <div class="form-step" id="step3">
                            <div class="form-header">
                                <h5>Your Business Goals</h5>
                                <p class="text-muted">What are you aiming to achieve?</p>
                            </div>
                            <div class="mb-3">
                                <label for="businessGoals" class="form-label">What are your top 2-3 business goals for the next 6-12 months?</label>
                                <textarea class="form-control" id="businessGoals" rows="3" required></textarea>
                            </div>
                        </div>

                        <!-- Step 4: Challenges -->
                        <div class="form-step" id="step4">
                            <div class="form-header">
                                <h5>Current Challenges</h5>
                                <p class="text-muted">Select areas that are most challenging</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Which of these areas are currently most challenging? (Select all that apply)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="challenge1" name="challenges" value="Leadership & team culture" />
                                    <label class="form-check-label" for="challenge1">Leadership & team culture</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="challenge2" name="challenges" value="Operations & efficiency" />
                                    <label class="form-check-label" for="challenge2">Operations & efficiency</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="challenge3" name="challenges" value="Sales & revenue growth" />
                                    <label class="form-check-label" for="challenge3">Sales & revenue growth</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="challenge4" name="challenges" value="Talent development & retention" />
                                    <label class="form-check-label" for="challenge4">Talent development & retention</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="challenge5" name="challenges" value="Decision making & implementation" />
                                    <label class="form-check-label" for="challenge5">Decision making & implementation</label>
                                </div>
                            </div>
                        </div>

                        <!-- Step 5: Previous Solutions -->
                        <div class="form-step" id="step5">
                            <div class="form-header">
                                <h5>Previous Solutions</h5>
                                <p class="text-muted">Have you tried to solve these challenges before?</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Have you tried to solve these challenges so far?</label>
                                <div class="yes-no-btns">
                                    <button type="button" class="btn btn-outline-primary" onclick="showConditionalField(this, 'yes')">Yes</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="showConditionalField(this, 'no')">No</button>
                                </div>
                                <div id="solutionsField" class="conditional-field">
                                    <label for="solutionsTried" class="form-label mt-3">How have you tried to solve these challenges?</label>
                                    <textarea class="form-control" id="solutionsTried" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Step 6: Consequences -->
                        <div class="form-step" id="step6">
                            <div class="form-header">
                                <h5>Potential Consequences</h5>
                                <p class="text-muted">What if these challenges remain unresolved?</p>
                            </div>
                            <div class="mb-3">
                                <label for="consequences" class="form-label">What happens if these challenges remain unresolved?</label>
                                <textarea class="form-control" id="consequences" rows="3" required></textarea>
                            </div>
                        </div>

                        <!-- Step 7: Success Vision -->
                        <div class="form-step" id="step7">
                            <div class="form-header">
                                <h5>Vision of Success</h5>
                                <p class="text-muted">Imagine these challenges were resolved</p>
                            </div>
                            <div class="mb-3">
                                <label for="successVision" class="form-label">What would success look like if these were resolved?</label>
                                <textarea class="form-control" id="successVision" rows="3" required></textarea>
                            </div>
                        </div>

                        <!-- Step 8: Timeline -->
                        <div class="form-step" id="step8">
                            <div class="form-header">
                                <h5>Timeline Expectations</h5>
                                <p class="text-muted">When would you like to begin seeing results?</p>
                            </div>
                            <div class="mb-3">
                                <label for="timeline" class="form-label">When would you like to begin seeing results from our work together?</label>
                                <input type="text" class="form-control" id="timeline" required />
                            </div>
                        </div>

                        <!-- Step 9: KPIs -->
                        <div class="form-step" id="step9">
                            <div class="form-header">
                                <h5>Key Performance Indicators</h5>
                                <p class="text-muted">Do you have specific metrics to track?</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Do you have specific KPIs you want to hit? (e.g., revenue, retention, efficiency)</label>
                                <div class="yes-no-btns">
                                    <button type="button" class="btn btn-outline-primary" onclick="showConditionalField(this, 'yes')">Yes</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="showConditionalField(this, 'no')">No</button>
                                </div>
                                <div id="kpisField" class="conditional-field">
                                    <label for="specificKPIs" class="form-label mt-3">Please specify your KPIs:</label>
                                    <textarea class="form-control" id="specificKPIs" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Step 10: Previous Experience -->
                        <div class="form-step" id="step10">
                            <div class="form-header">
                                <h5>Previous Consulting Experience</h5>
                                <p class="text-muted">Have you worked with a coach/consultant before?</p>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Have you worked with a coach/consultant before?</label>
                                <div class="yes-no-btns">
                                    <button type="button" class="btn btn-outline-primary" onclick="showConditionalField(this, 'yes')">Yes</button>
                                    <button type="button" class="btn btn-outline-primary" onclick="showConditionalField(this, 'no')">No</button>
                                </div>
                                <div id="consultantExperienceField" class="conditional-field">
                                    <label for="previousExperience" class="form-label mt-3">How did it go?</label>
                                    <textarea class="form-control" id="previousExperience" rows="3"></textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Step 11: Review -->
                        <div class="form-step" id="step11">
                            <div class="form-header">
                                <h5>Review Your Information</h5>
                                <p class="text-muted">Please verify your answers before submitting</p>
                            </div>
                            <div class="mb-3">
                                <div id="reviewContent"></div>
                            </div>
                        </div>

                        <!-- Step 12: Thank You -->
                        <div class="form-step" id="step12">
                            <div class="text-center py-4">
                                <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                                <h3 class="mt-3">Thank You!</h3>
                                <p class="lead">Your form has been submitted successfully.</p>
                                <p>We'll review your information and get back to you soon.</p>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>

                        <div class="form-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-outline-primary" id="prevBtn" onclick="prevStep()"><i class="fas fa-arrow-left me-2"></i>Previous</button>
                            <button type="button" class="btn btn-primary" id="nextBtn" onclick="nextStep()">Next<i class="fas fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap JS Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            let currentStep = 1;
            const totalSteps = 12;

            // Initialize the form
            document.addEventListener("DOMContentLoaded", function () {
                updateProgressBar();
            });

            function nextStep() {
                if (currentStep === totalSteps - 1) {
                    submitForm();
                    return;
                }

                if (validateStep(currentStep)) {
                    document.getElementById(`step${currentStep}`).classList.remove("active");
                    currentStep++;
                    document.getElementById(`step${currentStep}`).classList.add("active");
                    updateProgressBar();
                    updateButtonStates();

                    if (currentStep === 11) {
                        prepareReview();
                    }
                }
            }

            function prevStep() {
                if (currentStep > 1) {
                    document.getElementById(`step${currentStep}`).classList.remove("active");
                    currentStep--;
                    document.getElementById(`step${currentStep}`).classList.add("active");
                    updateProgressBar();
                    updateButtonStates();
                }
            }

            function updateProgressBar() {
                const progress = (currentStep / totalSteps) * 100;
                document.querySelector(".progress-bar").style.width = `${progress}%`;
                document.querySelector(".progress-bar").setAttribute("aria-valuenow", progress);
            }

            function updateButtonStates() {
                const prevBtn = document.getElementById("prevBtn");
                const nextBtn = document.getElementById("nextBtn");

                if (currentStep === 1) {
                    prevBtn.style.display = "none";
                } else {
                    prevBtn.style.display = "block";
                }

                if (currentStep === totalSteps) {
                    nextBtn.style.display = "none";
                } else if (currentStep === totalSteps - 1) {
                    nextBtn.innerHTML = 'Submit<i class="fas fa-paper-plane ms-2"></i>';
                } else {
                    nextBtn.innerHTML = 'Next<i class="fas fa-arrow-right ms-2"></i>';
                }
            }

            function validateStep(step) {
                let isValid = true;

                // Basic validation for required fields
                if (step === 1) {
                    if (!document.getElementById("name").value || !document.getElementById("contact").value) {
                        isValid = false;
                        alert("Please fill in all required fields");
                    }
                } else if (step === 2) {
                    if (!document.getElementById("businessDescription").value) {
                        isValid = false;
                        alert("Please describe your business and team");
                    }
                } else if (step === 3) {
                    if (!document.getElementById("businessGoals").value) {
                        isValid = false;
                        alert("Please specify your business goals");
                    }
                } else if (step === 6) {
                    if (!document.getElementById("consequences").value) {
                        isValid = false;
                        alert("Please describe the potential consequences");
                    }
                } else if (step === 7) {
                    if (!document.getElementById("successVision").value) {
                        isValid = false;
                        alert("Please describe your vision of success");
                    }
                } else if (step === 8) {
                    if (!document.getElementById("timeline").value) {
                        isValid = false;
                        alert("Please specify your timeline expectations");
                    }
                }

                return isValid;
            }

            function showConditionalField(button, answer) {
                const parentDiv = button.closest(".mb-3");
                const conditionalField = parentDiv.querySelector(".conditional-field");

                // Reset all buttons in this group
                const buttons = parentDiv.querySelectorAll(".yes-no-btns .btn");
                buttons.forEach((btn) => {
                    btn.classList.remove("btn-primary");
                    btn.classList.add("btn-outline-primary");
                });

                // Highlight selected button
                button.classList.remove("btn-outline-primary");
                button.classList.add("btn-primary");

                if (answer === "yes") {
                    conditionalField.style.display = "block";
                    const input = conditionalField.querySelector("input, textarea");
                    if (input) input.required = true;
                } else {
                    conditionalField.style.display = "none";
                    const input = conditionalField.querySelector("input, textarea");
                    if (input) {
                        input.required = false;
                        input.value = "";
                    }
                }
            }

            function prepareReview() {
                const reviewContent = document.getElementById("reviewContent");
                let html = '<div class="card"><div class="card-body"><h5 class="card-title">Your Submission</h5><ul class="list-group list-group-flush">';

                // Add all form data to review
                html += `<li class="list-group-item"><strong>Name:</strong> ${document.getElementById("name").value}</li>`;
                html += `<li class="list-group-item"><strong>Contact:</strong> ${document.getElementById("contact").value}</li>`;
                html += `<li class="list-group-item"><strong>Business Description:</strong> ${document.getElementById("businessDescription").value}</li>`;
                html += `<li class="list-group-item"><strong>Business Goals:</strong> ${document.getElementById("businessGoals").value}</li>`;

                // Challenges
                const challenges = [];
                document.querySelectorAll('input[name="challenges"]:checked').forEach((chk) => {
                    challenges.push(chk.value);
                });
                html += `<li class="list-group-item"><strong>Challenges:</strong> ${challenges.join(", ") || "None selected"}</li>`;

                // Previous solutions
                const solutionsField = document.getElementById("solutionsField");
                if (solutionsField.style.display === "block") {
                    html += `<li class="list-group-item"><strong>Previous Solutions Tried:</strong> ${document.getElementById("solutionsTried").value}</li>`;
                } else {
                    html += `<li class="list-group-item"><strong>Previous Solutions Tried:</strong> No</li>`;
                }

                html += `<li class="list-group-item"><strong>Consequences if Unresolved:</strong> ${document.getElementById("consequences").value}</li>`;
                html += `<li class="list-group-item"><strong>Vision of Success:</strong> ${document.getElementById("successVision").value}</li>`;
                html += `<li class="list-group-item"><strong>Timeline Expectations:</strong> ${document.getElementById("timeline").value}</li>`;

                // KPIs
                const kpisField = document.getElementById("kpisField");
                if (kpisField.style.display === "block") {
                    html += `<li class="list-group-item"><strong>Specific KPIs:</strong> ${document.getElementById("specificKPIs").value}</li>`;
                } else {
                    html += `<li class="list-group-item"><strong>Specific KPIs:</strong> No</li>`;
                }

                // Previous consultant experience
                const consultantField = document.getElementById("consultantExperienceField");
                if (consultantField.style.display === "block") {
                    html += `<li class="list-group-item"><strong>Previous Consultant Experience:</strong> ${document.getElementById("previousExperience").value}</li>`;
                } else {
                    html += `<li class="list-group-item"><strong>Previous Consultant Experience:</strong> No</li>`;
                }

                html += "</ul></div></div>";
                reviewContent.innerHTML = html;
            }

            function submitForm() {
                // Here you would typically send the form data to a server
                // For this example, we'll just show the thank you message

                document.getElementById(`step${currentStep}`).classList.remove("active");
                currentStep++;
                document.getElementById(`step${currentStep}`).classList.add("active");
                updateProgressBar();
                updateButtonStates();

                // Reset form after 5 seconds
                setTimeout(() => {
                    const modal = bootstrap.Modal.getInstance(document.getElementById("businessFormModal"));
                    modal.hide();

                    // Reset form
                    document.querySelectorAll(".form-step").forEach((step) => {
                        step.classList.remove("active");
                    });
                    document.getElementById("step1").classList.add("active");
                    currentStep = 1;
                    updateProgressBar();
                    updateButtonStates();
                    document.querySelector("form").reset();
                }, 5000);
            }
        </script>
    </body>
</html>