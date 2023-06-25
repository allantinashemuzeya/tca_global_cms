<template>
    <!-- Form -->
    <section class="shock-section pt-4 pb-4">
        <div class="container">
            <div class="row g-4">
                <div class="col-12 col-md-6">
                    <!-- Image -->
                    <div class="gallery image-mirror align-h-left">
                        <div class="image-wrapper">
                            <img src="assets/images/jpg/b-34.jpg" alt="Image name" class="image shadow rounded-3" />
                        </div>
                        <a href="assets/images/jpg/b-34.jpg" class="mirror-button rounded-3 lightbox-link magnetic-effect">
                            <i class="fa-solid fa-circle-play mirror-icon primary"></i>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-md-6 align-v-center">
                    <div class="holder">
                        <!-- Intro -->
                        <div class="basic-intro mb-35">
                            <h2 class="title black">
                                <span class="text-1 text-style-7">How can </span>
                                <span class="text-2 text-style-8">we <mark class="animated-underline accent">help you</mark>?</span>
                            </h2>
                            <div class="description gray">
                                <p>Please fill in the form below and we will get back to you shortly. 🥳</p>
                            </div>
                        </div>
                        <!-- Form -->
                        <div class="form-area scheme-1 primary">
                            <form class="form-fields needs-validation" novalidate="novalidate">
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" class="form-control" id="InputFloatingName" placeholder="Name" required="required">
                                        <label for="InputFloatingName" class="form-label">Name</label>
                                        <div class="invalid-feedback">Please enter your name.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="email" class="form-control" id="InputFloatingEmail" placeholder="name@example.com" required="required">
                                        <label for="InputFloatingEmail" class="form-label">Email</label>
                                        <div class="invalid-feedback">Please enter a valid email address.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input type="text" class="form-control" id="InputFloatingEducation" placeholder="Education">
                                        <label for="InputFloatingEducation" class="form-label">Education</label>
                                        <div class="valid-feedback">It's optional, but we'd like to know about it :)</div>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6">
                                        <input id="InputFloatingCategory" class="form-control form-datalist" list="InputFloatingCategoryOptions" placeholder="Category" required="required">
                                        <label for="InputFloatingCategory" class="form-label">Category</label>
                                        <datalist id="InputFloatingCategoryOptions">
                                            <option value="Business"></option>
                                            <option value="Engineering"></option>
                                            <option value="Cosmetics"></option>
                                            <option value="Architecture"></option>
                                            <option value="Marketing"></option>
                                            <option value="Technology"></option>
                                        </datalist>
                                        <div class="invalid-feedback">Please choose a category.</div>
                                        <div class="valid-feedback">Looks good.</div>
                                    </div>
                                </div>
                                <div class="form-row row">
                                    <div class="form-col col-12 col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="InputCheckbox" required="required">
                                            <label class="form-label form-check-label" for="InputCheckbox">
                                                I agree to the <a href="#your-link" class="link black primary-hover"><u>terms of use</u>.</a>
                                            </label>
                                            <div class="invalid-feedback">Please accept the terms to continue.</div>
                                        </div>
                                    </div>
                                    <div class="form-col form-floating col-12 col-md-6 align-h-right">
                                        <!-- Button -->
                                        <button class="button arrow-button next scheme-1 primary">
                          <span class="arrow">
                            <span class="item"></span>
                            <span class="item"></span>
                          </span>
                                            <span class="line"></span>
                                            <span class="text">SEND MESSAGE</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
export default {
    name: "Contact"
}
</script>

<style scoped>

</style>
