<div class="modal fade" id="businessFormModal" tabindex="-1" aria-labelledby="businessFormModalLabel" aria-hidden="true" style="background: rgba(0, 0, 0, 0.5); align-content: center;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="businessFormModalLabel">BusinessAdvisor.Guru - Client Profiler</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body account-page-body">
                <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                </div>

                <!-- Step 1: Basic Information -->
                <div class="form-step mian-wrapper-form active" id="step1">
                    <div class="form-header">
                        <p class="text-muted" style="color: #FF9800 !important;">Kindly spend less than <b>5 minutes</b> to fill the client profiler form to help us know you and your business. We will respond within <b>24 hours</b> to confirm the slot for the <b>FREE Discovery Session</b>.</p>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" placeholder="Name" id="name" required/>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="cname" placeholder="Company Name" id="cname" required/>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="web" placeholder="https://website.com" id="web" required/>
                    </div>
                    <div class="mb-3">
                        <input type="number" name="phone" placeholder="Mobile Number" id="contact" required/>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" placeholder="Email Address" required/>
                    </div>
                </div>

                <!-- Step 2: Business Description -->
                <div class="form-step mian-wrapper-form" id="step2">
                    <div class="form-header">
                        <h5>About Your Business</h5>
                        <p class="text-muted">Tell us about your business</p>
                    </div>
                    <div class="mb-3">
                        <label for="businessDescription" class="form-label">What does your business do, since when you are doing this business, b-b or b-c, who makes up your team, etc? Explain in detail...</label>
                        <textarea id="businessDescription" name="step2" rows="6" required></textarea>
                    </div>
                </div>

                <!-- Step 3: Business Goals -->
                <div class="form-step mian-wrapper-form" id="step3">
                    <div class="form-header">
                        <h5>Your Business Goals</h5>
                        <p class="text-muted">What are you aiming to achieve?</p>
                    </div>
                    <div class="mb-3">
                        <label for="businessGoals" class="form-label">What are your top 2-3 business goals for the next 6-12 months?</label>
                        <div class="mb-3">
                            <input type="text" name="one" placeholder="1." id="one" required/>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="two" placeholder="2." id="two" required/>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="three" placeholder="3." id="three" required/>
                        </div>
                    </div>
                </div>

                <!-- Step 4: Challenges -->
                <div class="form-step mian-wrapper-form" id="step4">
                    <div class="form-header">
                        <h5>Current Challenges</h5>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Which of these areas are currently most challenging? (Select all that apply)</label>
                        <div class="form-check">
                            <input type="checkbox" id="challenge1" name="challenges" value="Access to finance (loans, working capital, investor meet)"/>
                            <label  class="form-label" for="challenge1">Access to finance (e.g., loans, working capital, investor meet)</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="challenge2" name="challenges" value="Technology adoption & digital tools" />
                            <label  class="form-label" for="challenge2">Technology adoption & digital tools</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="challenge3" name="challenges" value="Hiring, development & retention of talent" />
                            <label class="form-label" for="challenge3">Hiring, development & retention of talent</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="challenge4" name="challenges" value="Operational efficiency & infrastructure" />
                            <label class="form-label" for="challenge4">Operational efficiency & infrastructure</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="challenge5" name="challenges" value="Sales growth & market access" />
                            <label class="form-label" for="challenge5">Sales growth & market access</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="challenge6" name="challenges" value="Strategic planning & decision-making" />
                            <label class="form-label" for="challenge5">Strategic planning & decision-making</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="challenge7" name="challenges" value="Cash flow & financial management" />
                            <label class="form-label" for="challenge5">Cash flow & financial management</label>
                        </div>
                    </div>
                </div>

                <!-- Step 5: Previous Solutions -->
                <div class="form-step mian-wrapper-form" id="step5">
                    <div class="form-header">
                        <h5>Previous Solutions</h5>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you tried to solve these challenges so far?</label>
                        <div class="yes-no-btns d-flex justify-content-start align-items-center">
                            <input type="radio" onclick="showConditionalField(this, 'yes')" required>
                            <label  class="form-label" for="challenge1">Yes</label>
                            <input type="radio" onclick="showConditionalField(this, 'no')" required>
                            <label  class="form-label" for="challenge2">No</label>
                        </div>
                        <div id="solutionsField" class="conditional-field">
                            <label for="solutionsTried" class="form-label mt-3">Mention the action which you have taken to address the challenge?</label>
                            <textarea id="solutionsTried" rows="6" required></textarea>
                        </div>
                    </div>
                </div>

                <!-- Step 6: Consequences -->
                <div class="form-step mian-wrapper-form" id="step6">
                    <div class="form-header">
                        <h5>Potential Consequences</h5>
                    </div>
                    <div class="mb-3">
                        <label for="consequences" class="form-label">What happens if these challenges remain unresolved? (Explain in detail)</label>
                        <textarea id="consequences" rows="6" required></textarea>
                    </div>
                </div>

                <!-- Step 7: Success Vision -->
                <div class="form-step mian-wrapper-form" id="step7">
                    <div class="form-header">
                        <h5>Vision of Success</h5>
                    </div>
                    <div class="mb-3">
                        <label for="successVision" class="form-label">What would success look like if these challenges were resolved?</label>
                        <textarea id="successVision" rows="6" required></textarea>
                    </div>
                </div>

                <!-- Step 8: Timeline -->
                <div class="form-step mian-wrapper-form" id="step8">
                    <div class="form-header">
                        <h5>Timeline Expectations</h5>
                    </div>
                    <div class="mb-3">
                        <label for="timeline" class="form-label">When would you like to work together with us to begin seeing results?</label>
                        <div class="form-check">
                            <input type="radio" id="challenge11" name="challenges" value="Immediately"/>
                            <label  class="form-label" for="challenge11">Immediately</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="challenge22" name="challenges" value="Within next 15 days" />
                            <label class="form-label" for="challenge22">Within next 15 days</label>
                        </div>
                    </div>
                </div>

                <!-- Step 9: KPIs -->
                <div class="form-step mian-wrapper-form" id="step9">
                    <div class="form-header">
                        <h5>Key Performance Indicators</h5>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Do you have specific KPIs you want to hit? (e.g., revenue, retention, efficiency)</label>
                        <textarea id="specificKPIs" rows="6" required></textarea>
                    </div>
                </div>

                <!-- Step 10: Previous Experience -->
                <div class="form-step mian-wrapper-form" id="step10">
                    <div class="form-header">
                        <h5>Previous Consulting Experience</h5>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Have you worked with a coach/consultant before, and how did it go?</label>
                        <textarea id="previousExperience" rows="6" required></textarea>
                    </div>
                </div>

                <!-- Step 11: Review -->
                <div class="form-step mian-wrapper-form" id="step11">
                    <div class="form-header">
                        <h5>Review Your Information</h5>
                        <p class="text-muted">Please verify your responses before submitting</p>
                    </div>
                    <div class="mb-3">
                        <div id="reviewContent"></div>
                    </div>
                </div>

                <!-- Step 12: Thank You -->
                <div class="form-step mian-wrapper-form" id="step12">
                    <div class="text-center py-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                        <h3 class="mt-3">Thank You!</h3>
                        <p>We will respond within <b>24 hours</b> to confirm the slot for the <b>FREE Discovery Session</b>.</p>
                    </div>
                </div>

                <div class="form-footer d-flex justify-content-between">
                    <button type="button" class="rts-btn btn-primary btn-white" id="prevBtn" onclick="prevStep()"><i class="fas fa-arrow-left me-2"></i>Previous</button>
                    <button type="button" class="rts-btn btn-primary" id="nextBtn" onclick="nextStep()">Next<i class="fas fa-arrow-right ms-2"></i></button>
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

        document.getElementById(`step${currentStep}`).classList.remove("active");
        currentStep++;
        document.getElementById(`step${currentStep}`).classList.add("active");
        updateProgressBar();
        updateButtonStates();

        if (currentStep === 11) {
            prepareReview();
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

    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(email);
    }

    function submitForm() {
        // Basic fields
        const name = document.getElementById("name").value.trim();
        const cname = document.getElementById("cname").value.trim();
        const web = document.getElementById("web").value.trim();
        const contact = document.getElementById("contact").value.trim();
        const email = document.querySelector('input[name="email"]').value.trim();
        const businessDescription = document.getElementById("businessDescription").value.trim();
        const one = document.getElementById("one").value.trim();
        const two = document.getElementById("two").value.trim();
        const three = document.getElementById("three").value.trim();
        const consequences = document.getElementById("consequences").value.trim();
        const successVision = document.getElementById("successVision").value.trim();
        const specificKPIs = document.getElementById("specificKPIs").value.trim();
        const previousExperience = document.getElementById("previousExperience").value.trim();

        // Validate required fields
        if (!name || !cname || !web || !contact || !email || !businessDescription || !one || !two || !three || !consequences || !successVision || !specificKPIs || !previousExperience) {
            alert("Please fill all the required fields.");
            return;
        }

        if (!validateEmail(email)) {
            alert("Please enter a valid email address.");
            return;
        }

        if (contact.length < 10) {
            alert("Please enter a valid 10-digit mobile number.");
            return;
        }

        // Collect multiple checkboxes (challenges)
        const challenges = [];
        document.querySelectorAll('input[name="challenges"]:checked').forEach((chk) => {
            challenges.push(chk.value);
        });

        // Solutions Tried
        const triedSolutions = document.getElementById("solutionsField").style.display === "block"
            ? document.getElementById("solutionsTried").value.trim()
            : "No";

        // WhatsApp message formatting
        const whatsappMessage =
    `*Client Profiler Submission*
    👤 Name: ${name}
    🏢 Company: ${cname}
    🌐 Website: ${web}
    📱 Contact: ${contact}
    📧 Email: ${email}

    📝 *Business Description:*  
    ${businessDescription}

    🎯 *Business Goals:*  
    1. ${one}  
    2. ${two}  
    3. ${three}

    📊 *Challenges:*  
    ${challenges.join(", ") || "None"}

    🛠 *Solutions Tried:*  
    ${triedSolutions}

    ⚠️ *Consequences if Unresolved:*  
    ${consequences}

    🏆 *Vision of Success:*  
    ${successVision}

    📈 *KPIs:*  
    ${specificKPIs}

    🧑‍💼 *Previous Consulting Experience:*  
    ${previousExperience}`;

        const encodedMessage = encodeURIComponent(whatsappMessage);
        const whatsappNumber = "919750996666";
        const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodedMessage}`;

        // Open WhatsApp chat
        window.open(whatsappURL, "_blank");

        // Show thank you step
        document.getElementById(`step${currentStep}`).classList.remove("active");
        currentStep++;
        document.getElementById(`step${currentStep}`).classList.add("active");
        updateProgressBar();
        updateButtonStates();

        // Reset after 5 seconds
        setTimeout(() => {
            const modal = bootstrap.Modal.getInstance(document.getElementById("businessFormModal"));
            modal.hide();

            // Reset all steps
            document.querySelectorAll(".form-step").forEach((step) => {
                step.classList.remove("active");
            });
            document.getElementById("step1").classList.add("active");
            currentStep = 1;
            updateProgressBar();
            updateButtonStates();

            // Reset form fields
            document.querySelectorAll("input, textarea").forEach((field) => {
                field.value = "";
            });
            document.querySelectorAll("input[type='checkbox'], input[type='radio']").forEach((field) => {
                field.checked = false;
            });

            // Hide conditional fields
            document.getElementById("solutionsField").style.display = "none";
        }, 5000);
    }
</script>