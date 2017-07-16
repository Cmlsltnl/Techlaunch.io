<div class="get-info-form <?php echo $classes ?>">
    <div class="get-info-form-overlay"></div>
    <div class="form-container">
        <h2 class="title">Learn how to get started</h2>
        <!-- <div class="steps">
            <span class="step active">Step 1</span>
            <span class="connector"></span>
            <span class="step">Step 2</span>
            <span class="connector"></span>
            <span class="step">Step 3</span>
        </div> -->
        <?php
          $url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
          $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
        ?>
        <i class="close-btn fa fa-times-circle" aria-hidden="true"></i>
        <form method="POST" action="https://secure.velocify.com/Import.aspx?Provider=TechLaunchWebsite&Client=30010&CampaignId=1101&URL=https://www.techlaunch.io/thank-you&referrerpage=<?php echo $escaped_url; ?>">
            <div class="form-input">
                <label>Program of Interest</label>
                <select name="program">
                    <option value="--" disabled <?php if ( !isset($program) || $program = '') echo 'selected' ?>>-- Select --</option>
                    <option value="web-developer" <?php if( isset($program) && $program == 'web-developer') echo 'selected' ?>>Web Developer</option>
                    <option value="cyber-security" <?php if(isset($program) && $program == 'cyber-security') echo 'selected' ?>>Cyber Security Network Technician</option>
                    <option value="aws" <?php if(isset($program) && $program == 'aws') echo 'selected' ?>>Amazon Web Services</option>
                    <option value="wordpress" <?php if(isset($program) && $program == 'wordpress') echo 'selected' ?>>WordPress</option>
                </select>
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>first name</label>
                    <input type="text" name="fname" required>
                </div>
                <div class="split-box">
                    <label>last name</label>
                    <input type="text" name="lname" required>
                </div>
            </div>
            <div class="form-input split-2">
                <div class="split-box">
                    <label>phone</label>
                    <input type="tel" name="day_phone">
                </div>
                <div class="split-box">
                    <label>zip code</label>
                    <input type="number" name="zipcode">
                </div>
            </div>
            <div class="form-input">
                <label>email</label>
                <input type="email" name="email" required>
            </div>
            <button class="submit-btn" type="submit">get info</button>
            <div class="user-feedback"></div>
        </form>
        <p class="disclosure">By clicking "Get Info", you agree for TechLaunch@FVI to contact you using our autodialer, text, pre-recorded message, via telephone or mobile device (including SMS and MMS) and email, even if your number is currently listed on any state, federal or corporate "Do Not Call list".</p>
    </div>
</div>