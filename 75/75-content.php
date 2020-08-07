<div class="type-75">
    <div class="container my-container">
        <div class="nl-head-logo">
            <a href="#" title="Home" rel="home" class="nl-link-home">
                <img class="nl-logo-default" src="./img/logo.png" alt="Home">
            </a>
        </div>
        <div class="nl-tbl-tabs">
            <ul class="nl-nav-tabs nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Log in</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">CREATE NEW ACCOUNT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">RESET YOUR PASSWORD</a>
                </li>
            </ul>
            <div class="nl-tab-content tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <form action="#">
                        <label for="nl_user" class="nl-lbl-login">Username</label>
                        <input type="text" id="nl_user" class="nl-ip">
                        <p class="nl-decs-frm">Enter your Lozin - Directory & Listing Drupal 8 Theme username.</p>
                        <label for="nl_pass" class="nl-lbl-login">Password</label>
                        <input type="text" id="nl_pass" class="nl-ip">
                        <p class="nl-decs-frm">Enter the password that accompanies your username.</p>
                        <button class="nl-submit">Log In</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form action="#">
                        <label for="nl_email" class="nl-lbl-login">Email address</label>
                        <input type="text" id="nl_email" class="nl-ip">
                        <p class="nl-decs-frm">A valid email address. All emails from the system will be sent to this address. The email address is not made public and will only be used if you wish to receive a new password or wish to receive certain news or notifications by email.</p>
                        
                        <label for="nl_user_2" class="nl-lbl-login">Username</label>
                        <input type="text" id="nl_user_2" class="nl-ip">
                        <p class="nl-decs-frm">Several special characters are allowed, including space, period (.), hyphen (-), apostrophe ('), underscore (_), and the @ sign.</p>
                        
                        <label for="nl_pic" class="nl-lbl-login">Picture</label>
                        <input type="file" id="nl_pic">
                        <p class="nl-decs-frm">
                            Your virtual face or picture.<br/>
                            One file only.<br/>
                            30 KB limit.<br/>
                            Allowed types: png gif jpg jpeg.<br/>
                            Images larger than <b>200x200</b> pixels will be resized.
                        </p>
                        <label for="nl_full_name" class="nl-lbl-login">User Fullname</label>
                        <input type="text" id="nl_full_name" class="nl-ip">

                        <label for="nl_bio" class="nl-lbl-login">User Bio</label>
                        <textarea id="nl_bio" class="nl-ip" cols="60" rows="5"></textarea>

                        <button class="nl-submit">Create new account</button>
                    </form>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <form action="#">
                        <label for="nl_user_mail" class="nl-lbl-login">Username or email address</label>
                        <input type="text" id="nl_user_mail" class="nl-ip">
                        <p class="nl-decs-frm">Password reset instructions will be sent to your registered email address.</p>
                        <button class="nl-submit">Submit</button>
                    </form>
               </div>
            </div>
        </div>
    </div>  
</div>