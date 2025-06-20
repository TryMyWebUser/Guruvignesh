<div id="side-bar" class="side-bar header-two">
    <button class="close-icon-menu" title="Close menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="rts-sidebar-menu-desktop">
        <a class="logo-1" href="index.php">
             <img src="assets/images/logo-1.png" width="120" alt="transparent" />
        </a>
        <div class="mobile-menu" style="display: block !important;">
            <nav class="nav-main mainmenu-nav mt--30">
                <ul class="mainmenu metismenu" id="mobile-menu-active">
                    <li>
                        <a href="index.php" class="main text-dark" aria-expanded="false">Home</a>
                    </li>
                    <li>
                        <a href="about.php" class="main text-dark" aria-expanded="false">About Us</a>
                    </li>
                    <li class="has-droupdown">
                        <a href="#" class="main text-dark" aria-expanded="false">AI Powered Business Solutions</a>
                        <ul class="submenu mm-collapse">
                            <li><a class="text-dark" href="incubator.php">Startup Incubator</a></li>
                            <li><a class="text-dark" href="accelerator.php">Growth Accelerator</a></li>
                            <li><a class="text-dark" href="maximizer.php">Profit Maximizer</a></li>
                            <li><a class="text-dark" href="comparator.php">Second Opinion Validator</a></li>
                            <li><a class="text-dark" href="auditor.php">Performance Auditor</a></li>
                            <li><a class="text-dark" href="automator.php">Future Ready Automator</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="blog.php" class="main text-dark" aria-expanded="false">Blog</a>
                    </li>
                    <li>
                        <a href="contact.php" class="main text-dark" aria-expanded="false">Contact Us</a>
                    </li>
                </ul>
            </nav>

            <div class="social-wrapper-one">
                <ul>
                    <li>
                        <a href="https://www.linkedin.com/in/guruvigneshrajamanickam" aria-label="Linkedin">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/9751825077" aria-label="whatsapp">
                            <i class="fa-brands fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- inner menu area desktop End -->

<!-- progress area start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<!-- progress area end -->


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
                        <input type="email" name="email" placeholder="Email Address" id="email" required/>
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
                            <input type="text" name="one" placeholder="1." id="goal1" required/>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="two" placeholder="2." id="goal2"/>
                        </div>
                        <div class="mb-3">
                            <input type="text" name="three" placeholder="3." id="goal3"/>
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
                            <label class="form-label" for="challenge6">Strategic planning & decision-making</label>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" id="challenge7" name="challenges" value="Cash flow & financial management" />
                            <label class="form-label" for="challenge7">Cash flow & financial management</label>
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
                            <div class="form-check me-3">
                                <input class="form-check-input" type="radio" name="triedSolutions" id="triedSolutionsYes" value="yes" onclick="showConditionalField(this, 'yes')" required>
                                <label class="form-check-label" for="triedSolutionsYes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="triedSolutions" id="triedSolutionsNo" value="no" onclick="showConditionalField(this, 'no')">
                                <label class="form-check-label" for="triedSolutionsNo">No</label>
                            </div>
                        </div>
                        <div id="solutionsField" class="conditional-field mt-3" style="display: none;">
                            <label for="solutionsTried" class="form-label">Mention the action which you have taken to address the challenge?</label>
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
                            <input type="radio" id="timeline1" name="timeline" value="Immediately" required/>
                            <label  class="form-label" for="timeline1">Immediately</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="timeline2" name="timeline" value="Within next 15 days" />
                            <label class="form-label" for="timeline2">Within next 15 days</label>
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
                    <div class="text-center py-4">
                        <i class="fas fa-check-circle text-success" style="font-size: 4rem;"></i>
                        <h3 class="mt-3">Thank You!</h3>
                        <p>We will respond within <b>24 hours</b> to confirm the slot for the <b>FREE Discovery Session</b>.</p>
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

<style>
    .is-invalid {
        border-color: #dc3545 !important;
    }

    .error-message {
        font-size: 1.4rem;
        /* margin-left: 1.4rem; */
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let currentStep = 1;
        const totalSteps = 12;

        // Initialize the form
        updateProgressBar();
        document.getElementById("solutionsField").style.display = "none";

        // Navigation functions
        window.nextStep = function() {
            if (!validateCurrentStep()) {
                return;
            }

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
        };

        window.prevStep = function() {
            if (currentStep > 1) {
                document.getElementById(`step${currentStep}`).classList.remove("active");
                currentStep--;
                document.getElementById(`step${currentStep}`).classList.add("active");
                updateProgressBar();
                updateButtonStates();
            }
        };

        // Form validation
        function validateCurrentStep() {
            const currentStepEl = document.getElementById(`step${currentStep}`);
            let isValid = true;

            // Clear all existing error messages
            const existingErrors = currentStepEl.querySelectorAll('.error-message');
            existingErrors.forEach(error => error.remove());

            // Clear all invalid states
            const invalidInputs = currentStepEl.querySelectorAll('.is-invalid');
            invalidInputs.forEach(input => input.classList.remove('is-invalid'));

            // Step-specific validation
            switch(currentStep) {
                case 1: // Basic Information
                    const requiredFields = ['name', 'cname', 'web', 'contact', 'email'];
                    requiredFields.forEach(field => {
                        const input = document.getElementById(field);
                        if (!input.value.trim()) {
                            showError(input, 'This field is required');
                            isValid = false;
                        }
                        
                        // Email validation
                        if (field === 'email' && input.value.trim()) {
                            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                            if (!emailRegex.test(input.value)) {
                                showError(input, 'Please enter a valid email address');
                                isValid = false;
                            }
                        }
                        
                        // Phone validation
                        if (field === 'contact' && input.value.trim()) {
                            const phoneRegex = /^[0-9]{10,15}$/;
                            if (!phoneRegex.test(input.value)) {
                                showError(input, 'Please enter a valid phone number (10-15 digits)');
                                isValid = false;
                            }
                        }
                    });
                    break;

                case 3: // Business Goals (only first goal required)
                    const goal1 = document.getElementById("goal1");
                    if (!goal1.value.trim()) {
                        showError(goal1, 'At least one business goal is required');
                        isValid = false;
                    }
                    break;

                case 4: // Challenges (at least one checkbox)
                    const challengesSelected = currentStepEl.querySelectorAll('input[name="challenges"]:checked').length > 0;
                    if (!challengesSelected) {
                        const error = document.createElement('div');
                        error.className = 'error-message text-danger mt-2';
                        error.textContent = 'Please select at least one challenge';
                        currentStepEl.querySelector('.form-label').after(error);
                        isValid = false;
                    }
                    break;

                case 5: // Previous Solutions
                    const triedSolutions = document.querySelector('input[name="triedSolutions"]:checked');
                    if (!triedSolutions) {
                        const error = document.createElement('div');
                        error.className = 'error-message text-danger mt-2';
                        error.textContent = 'Please select an option';
                        document.querySelector('.yes-no-btns').appendChild(error);
                        isValid = false;
                    } else if (triedSolutions.value === 'yes' && !document.getElementById("solutionsTried").value.trim()) {
                        showError(document.getElementById("solutionsTried"), 'Please describe the solutions you tried');
                        isValid = false;
                    }
                    break;

                case 8: // Timeline (radio required)
                    const timelineSelected = currentStepEl.querySelector('input[name="timeline"]:checked');
                    if (!timelineSelected) {
                        const error = document.createElement('div');
                        error.className = 'error-message text-danger mt-2';
                        error.textContent = 'Please select a timeline option';
                        currentStepEl.querySelector('.form-label').after(error);
                        isValid = false;
                    }
                    break;

                default:
                    // Validate all required fields in other steps
                    const inputs = currentStepEl.querySelectorAll('input[required], textarea[required], select[required]');
                    inputs.forEach(input => {
                        if (!input.value.trim()) {
                            showError(input, 'This field is required');
                            isValid = false;
                        }
                    });
            }

            return isValid;
        }

        function showError(input, message) {
            input.classList.add('is-invalid');
            const error = document.createElement('div');
            error.className = 'error-message text-danger mt-1';
            error.textContent = message;
            input.parentNode.insertBefore(error, input.nextSibling);
        }

        // Conditional field for Step 5
        window.showConditionalField = function(radio, answer) {
            const solutionsField = document.getElementById("solutionsField");
            const solutionsTried = document.getElementById("solutionsTried");
            
            if (answer === 'yes') {
                solutionsField.style.display = 'block';
                solutionsTried.required = true;
            } else {
                solutionsField.style.display = 'none';
                solutionsTried.required = false;
                solutionsTried.value = '';
            }
            
            // Update radio button styling
            document.querySelectorAll('input[name="triedSolutions"]').forEach(radio => {
                const label = document.querySelector(`label[for="${radio.id}"]`);
                if (radio.checked) {
                    label.classList.add('fw-bold');
                    label.classList.add(radio.value === 'yes' ? 'text-success' : 'text-primary');
                } else {
                    label.classList.remove('fw-bold', 'text-success', 'text-primary');
                }
            });
        }

        // Progress bar and button states
        function updateProgressBar() {
            const progress = (currentStep / totalSteps) * 100;
            document.querySelector(".progress-bar").style.width = `${progress}%`;
            document.querySelector(".progress-bar").setAttribute("aria-valuenow", progress);
        }

        function updateButtonStates() {
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            prevBtn.style.display = currentStep === 1 ? "none" : "block";

            if (currentStep === totalSteps) {
                nextBtn.style.display = "none";
            } else {
                nextBtn.style.display = "block";
                nextBtn.innerHTML = currentStep === totalSteps - 1 
                    ? 'Submit <i class="fas fa-paper-plane ms-2"></i>' 
                    : 'Next <i class="fas fa-arrow-right ms-2"></i>';
            }
        }

        // Review step preparation
        function prepareReview() {
            const reviewContent = document.getElementById("reviewContent");
            let html = '<div class="card"><div class="card-body"><h5 class="card-title">Your Submission</h5><ul class="list-group list-group-flush">';

            // Basic Information
            html += `<li class="list-group-item"><strong>Name:</strong> ${document.getElementById("name").value}</li>`;
            html += `<li class="list-group-item"><strong>Company:</strong> ${document.getElementById("cname").value}</li>`;
            html += `<li class="list-group-item"><strong>Website:</strong> ${document.getElementById("web").value}</li>`;
            html += `<li class="list-group-item"><strong>Phone:</strong> ${document.getElementById("contact").value}</li>`;
            html += `<li class="list-group-item"><strong>Email:</strong> ${document.getElementById("email").value}</li>`;

            // Business Description
            html += `<li class="list-group-item"><strong>Business Description:</strong> ${document.getElementById("businessDescription").value}</li>`;

            // Business Goals
            const goals = [];
            ['goal1', 'goal2', 'goal3'].forEach(id => {
                const value = document.getElementById(id).value.trim();
                if (value) goals.push(value);
            });
            html += `<li class="list-group-item"><strong>Business Goals:</strong>`;
            html += goals.length ? `<ol>${goals.map(g => `<li>${g}</li>`).join('')}</ol>` : 'None provided';
            html += `</li>`;

            // Challenges
            const challenges = Array.from(document.querySelectorAll('input[name="challenges"]:checked')).map(c => c.value);
            html += `<li class="list-group-item"><strong>Challenges:</strong>`;
            html += challenges.length ? `<ul>${challenges.map(c => `<li>${c}</li>`).join('')}</ul>` : 'None selected';
            html += `</li>`;

            // Previous Solutions
            const triedSolutions = document.querySelector('input[name="triedSolutions"]:checked');
            html += `<li class="list-group-item"><strong>Previous Solutions:</strong> `;
            html += triedSolutions.value === 'yes' 
                ? document.getElementById("solutionsTried").value 
                : 'No solutions tried';
            html += `</li>`;

            // Other fields
            html += `<li class="list-group-item"><strong>Consequences if Unresolved:</strong> ${document.getElementById("consequences").value}</li>`;
            html += `<li class="list-group-item"><strong>Vision of Success:</strong> ${document.getElementById("successVision").value}</li>`;
            html += `<li class="list-group-item"><strong>Timeline:</strong> ${document.querySelector('input[name="timeline"]:checked')?.value || 'Not specified'}</li>`;
            html += `<li class="list-group-item"><strong>KPIs:</strong> ${document.getElementById("specificKPIs").value}</li>`;
            html += `<li class="list-group-item"><strong>Previous Experience:</strong> ${document.getElementById("previousExperience").value}</li>`;

            html += "</ul></div></div>";
            reviewContent.innerHTML = html;
        }

        // Form submission
        function submitForm() {
            // Collect form data
            const formData = {
                name: document.getElementById("name").value,
                company: document.getElementById("cname").value,
                website: document.getElementById("web").value,
                phone: document.getElementById("contact").value,
                email: document.getElementById("email").value,
                businessDescription: document.getElementById("businessDescription").value,
                goals: ['goal1', 'goal2', 'goal3']
                    .map(id => document.getElementById(id).value.trim())
                    .filter(g => g),
                challenges: Array.from(document.querySelectorAll('input[name="challenges"]:checked')).map(c => c.value),
                triedSolutions: document.querySelector('input[name="triedSolutions"]:checked').value,
                solutionsTried: document.querySelector('input[name="triedSolutions"]:checked').value === 'yes' 
                    ? document.getElementById("solutionsTried").value 
                    : 'No solutions tried',
                consequences: document.getElementById("consequences").value,
                successVision: document.getElementById("successVision").value,
                timeline: document.querySelector('input[name="timeline"]:checked')?.value || 'Not specified',
                kpis: document.getElementById("specificKPIs").value,
                previousExperience: document.getElementById("previousExperience").value
            };

            // Format WhatsApp message
            const message = `*Business Advisory Request Form*\n\n` +
                `*Basic Information*\n` +
                `Name: ${formData.name}\n` +
                `Company: ${formData.company}\n` +
                `Website: ${formData.website}\n` +
                `Phone: ${formData.phone}\n` +
                `Email: ${formData.email}\n\n` +
                
                `*Business Description*\n${formData.businessDescription}\n\n` +
                
                `*Business Goals*\n${formData.goals.map((g, i) => `${i+1}. ${g}`).join('\n')}\n\n` +
                
                `*Current Challenges*\n${formData.challenges.length ? formData.challenges.map(c => `• ${c}`).join('\n') : 'None specified'}\n\n` +
                
                `*Previous Solutions*\n` +
                `Tried solutions before? ${formData.triedSolutions === 'yes' ? 'Yes' : 'No'}\n` +
                `${formData.triedSolutions === 'yes' ? `Solutions tried:\n${formData.solutionsTried}\n\n` : '\n'}` +
                
                `*Consequences if Unresolved*\n${formData.consequences}\n\n` +
                
                `*Vision of Success*\n${formData.successVision}\n\n` +
                
                `*Timeline Expectations*\n${formData.timeline}\n\n` +
                
                `*Key Performance Indicators*\n${formData.kpis}\n\n` +
                
                `*Previous Consulting Experience*\n${formData.previousExperience}`;

            // Open WhatsApp
            const whatsappNumber = "919751825077";
            const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, "_blank");

            // Proceed to thank you step
            document.getElementById(`step${currentStep}`).classList.remove("active");
            currentStep++;
            document.getElementById(`step${currentStep}`).classList.add("active");
            updateProgressBar();
            updateButtonStates();

            // Reset form after delay
            setTimeout(() => {
                const modal = bootstrap.Modal.getInstance(document.getElementById("businessFormModal"));
                modal.hide();
                resetForm();
            }, 5000);
        }

        function resetForm() {
            document.querySelectorAll(".form-step").forEach(step => step.classList.remove("active"));
            document.getElementById("step1").classList.add("active");
            document.querySelector("form").reset();
            document.getElementById("solutionsField").style.display = "none";
            currentStep = 1;
            updateProgressBar();
            updateButtonStates();
        }
    });
</script>

<script defer src="assets/js/plugins/jquery.js"></script>

<script defer src="assets/js/plugins/odometer.js"></script>
<script defer src="assets/js/plugins/jquery-appear.js"></script>

<script defer src="assets/js/plugins/gsap.js"></script>
<script defer src="assets/js/plugins/split-text.js"></script>
<script defer src="assets/js/plugins/scroll-trigger.js"></script>
<script defer src="assets/js/plugins/smooth-scroll.js"></script>
<script defer src="assets/js/plugins/metismenu.js"></script>
<script defer src="assets/js/plugins/popup.js"></script>

<script defer src="assets/js/vendor/bootstrap.min.js"></script>
<script defer src="assets/js/plugins/swiper.js"></script>
<script defer src="assets/js/plugins/contact.form.js"></script>

<script defer src="assets/js/main.js"></script>