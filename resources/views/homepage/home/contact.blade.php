<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 position-relative">
                <div class="left_wall"></div>
                <img src="{{ asset('/assets/img/fryderyk_dev.png') }}" alt="FRYDERYK SZAFARCZYK" style="position: relative;z-index: 10">
            </div>
            <div class="col-md-6">
                <div class="contact_box">
                    <div class="contact_box_heading">
                        <h1>Get in Touch!</h1>
                    </div>
                    <div class="row">
                            <div class="col-md-6 form_grid_2 mb-3">
                                <label for="firstname" class="fryderyk_label">Firstname:</label>
                                <input type="text" name="firstname" id="firstname" class="input_fry">
                            </div>
                            <div class="col-md-6 form_grid_2 mb-3">
                                <label for="lastname" class="fryderyk_label">Lastname</label>
                                <input type="text" name="lastname" id="lastname" class="input_fry">
                            </div>
                            <div class="col-md-6 form_grid_2 mb-3">
                                <label for="company" class="fryderyk_label">Company</label>
                                <input type="text" name="company" id="company" class="input_fry">
                            </div>
                            <div class="col-md-6 form_grid_2 mb-3">
                                <label for="email" class="fryderyk_label">E-Mail</label>
                                <input type="email" name="email" id="email" class="input_fry">
                            </div>
                            <div class="col-md-12 form_grid_2 mb-3">
                                <label for="title" class="fryderyk_label">Title</label>
                                <input type="text" name="title" id="title" class="input_fry">
                            </div>
                            <div class="col-md-12 form_grid_1 mb-3">
                                <label for="subject" class="fryderyk_label_1">Subject</label>
                                <textarea name="subject" id="subject" cols="50" rows="7"></textarea>
                            </div>
                            <div class="col-md-12 button_place">
                                <button id="submitform" class="fry_submit">Submit</button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
