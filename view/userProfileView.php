<?php
$title = "userProfile";
ob_start();
?>
<!-- TODO: UNCOMMENT THIS ONE DOWN BELOW FOR GETTING GOOGLE ACCOUNT INFORMATIONS -->
<!-- <pre> -->
<!-- <?php print_r($user); ?> -->
<!-- </pre> -->
<!-- part of website icon: we can choose from navibar or can create our own -->
<!--sidebar  -->
<div class="sidebar">
    <h1 class="logo"><a href="./index.php"> WaygukIn</a></h1>
    <!-- profile photo upload here -->
    <div class="profile">
        <form
      action="index.php?action=userPhotoUpload"
      method="post"
      enctype="multipart/form-data"
    >
      <button id="photoUploadClick" type="button" onclick="profilePhoto.click()">
        <img
          id="imgPreview"
          src="./public/images/default.svg"
          alt=""
          width="200"
          height="200"
        />
      </button>
      <p>
        <label for="profilePhoto">Click photo to update</label>
        <input
          type="file"
          name="profilePhoto"
          id="profilePhoto"
          accept="image/*"
        />
      </p>
      <p>
        <input id="submitUploadPhoto" type="submit" value="UPLOAD" />
      </p>
    </form>
        <!-- <div class="profile-name">
            <h4>Elon Musk</h4>
            <p>Space</p>
        </div> -->
    </div>
    <div class="menus">
        <button onclick="myFunction('personal')"><i class="fa-solid fa-house"></i>Personal</button>

        <button onclick="myFunction('resume')"><i class="fa-solid fa-magnifying-glass"></i>Resume/CV</button>

        <button onclick="myFunction('education')"><i class="fa-solid fa-chart-simple"></i>Education & Experience</button>

        <button onclick="myFunction('skills')"><i class="fa-solid fa-bookmark"></i></i>Skills</button>

        <button onclick="myFunction('avail')"><i class="fa-solid fa-message"></i>Availability</button>
    </div>
</div>

<!-- main -->
<div class="main">
    <section id="personal">
        <div id="personal">
            <form action="index.php?action=userProfilePersonal" method="POST">
                <h2>Personal</h2>
                <label for="phonenb">Phone Number:</label>
                <input type="text" name="phoneNb" value="<?= $user->phone_number; ?>" />
                <br />
                <p>
                    <span class="tooltip">Please select a city: </span>
                    <!-- change all placeholders to $user->... -->
                    <select name="city" id="city" value="<?= $user->city_id; ?>">
                        <option value="">Select your city of residence</option>
                        <option value="Andong">Andong</option>
                        <option value="Ansan">Ansan</option>
                        <option value="Anyang">Anyang</option>
                        <option value="Boryeong">Boryeong</option>
                        <option value="Bucheon">Bucheon</option>
                        <option value="Busan">Busan</option>
                        <option value="Cheonan">Cheonan</option>
                        <option value="Cheongju">Cheongju</option>
                        <option value="Chungju">Chungju</option>
                        <option value="Daejeon">Daejeon</option>
                        <option value="Dangjin">Dangjin</option>
                        <option value="Gangneung">Gangneung</option>
                        <option value="Gimcheon">Gimcheon</option>
                        <option value="Gimhae">Gimhae</option>
                        <option value="Gimpo">Gimpo</option>
                        <option value="Gongju">Gongju</option>
                        <option value="Goyang">Goyang</option>
                        <option value="Cheonan">Cheonan</option>
                        <option value="Gunsan">Gunsan</option>
                        <option value="Guri">Guri</option>
                        <option value="Gwangju">Gwangju</option>
                        <option value="Gwangmyeong">Gwangmyeong</option>
                        <option value="Gwangyang">Gwangyang</option>
                        <option value="Gyeongju">Gyeongju</option>
                        <option value="Hanam">Hanam</option>
                        <option value="Hwaseong">Hwaseong</option>
                        <option value="Icheon">Icheon</option>
                        <option value="Iksan">Iksan</option>
                        <option value="Incheon">Incheon</option>
                        <option value="Jecheon">Jecheon</option>
                        <option value="Jeju">Jeju</option>
                        <option value="Jeongeup">Jeongeup</option>
                        <option value="Jeonju">Jeonju</option>
                        <option value="Jinju">Jinju</option>
                        <option value="Mokpo">Mokpo</option>
                        <option value="Naju">Naju</option>
                        <option value="Namyangju">Namyangju</option>
                        <option value="Gyeongju">Gyeongju</option>
                        <option value="Osan">Osan</option>
                        <option value="Paju">Paju</option>
                        <option value="Pocheon">Pocheon</option>
                        <option value="Pochang">Pochang</option>
                        <option value="Pyeongtaek">Pyeongtaek</option>
                        <option value="Samcheok">Samcheok</option>
                        <option value="Sejong">Sejong</option>
                        <option value="Seogwipo">Seogwipo</option>
                        <option value="Seongnam">Seongnam</option>
                        <option value="Soesan">Soesan</option>
                        <option value="Seoul">Seoul</option>
                        <option value="Suncheon">Suncheon</option>
                        <option value="Suwon">Suwon</option>
                        <option value="Uijeongbu">Uijeongbu</option>
                        <option value="Ulsan">Ulsan</option>
                        <option value="Wonju">Wonju</option>
                        <option value="Yangju">Yangju</option>
                        <option value="Yeosu">Yeosu</option>
                        <option value="Yongin">Yongin</option>
                    </select>
                </p>
                <label for="salary">Expected salary (KRW):</label>
                <input type="text" name="salary" value="<?= $user->desired_salary; ?>" /><br />
                <p>
                    Do you need visa sponsorhip?
                    <label for="yes">Yes</label>
                    <input type="radio" name="visa" id="yes" value="<?= $user->visa_sponsorship; ?>" checked />
                    <label for="no">No</label>
                    <input type="radio" name="visa" id="no" value="<?= $user->visa_sponsorship; ?>" />
                </p>
            </form>
        </div>
    </section>
    <section id="resume" class="hidden">
      <div id="resume">
        <form
        action="index.php?action=userResumeUpload"
        method="post"
        enctype="multipart/form-data"
        >
        <p>
              <h2>Resume/CV</h2>
              <input
                type="file"
                name="resume"
                id="resume"
                accept=".pdf"
              />
            </p>
            <p>
              <input id="submitResume" type="submit" value="UPLOAD" />
            </p>
          </form>
        </div>
    </section>

    <section id="education" class="hidden">
        <p>Your education level</p>
        <div id="education">
            <form action="index.php?action=userProfileEducation&Experience" method="POST">

                <h2>Education Level</h2>
                <label for="degree">Level of Education</label>
                <select name="degree" id="degree">
                    <option value="highschool">High School</option>
                    <option value="associates">Associates Degree</option>
                    <option value="undergraduate">Undergraduate</option>
                    <option value="graduate">Graduate</option>
                    <option value="phD">PhD</option>
                </select><br /><br />
                <label for="major">Subject of study</label>
                <input type="text" name="major" id="major" placeholder="BSc Computer Science..."><br /><br />

                <h2>Experience</h2>
                <!-- labels -->
                <label for="jobTitle">Job Title</label>
                <input type="text" name="jobTitle" id="jobTitle" value="<?= $experience->job_title; ?>"><br /><br />
                <label for="yearsExperience">Years Experience</label>
                <input type="number" name="yearsExperience" id="yearsExperience" min="1" max="40" value="<?= $experience->years_experience; ?>"><br /><br />
                <label for="company">Company Name</label>
                <input type="text" name="company" id="company" value="<?= $experience->company_name; ?>" /><br /><br />

            </form>
        </div>
    </section>

    <section id="skills" class="hidden">
        <p>Your Skills</p>
        <div id="skills">
            <form action="index.php?action=userProfileSkills" method="POST">
                <h2>Skills</h2>
                <label for="programming">Programming Languages & Proficiency</label>
                <input type="text" name="skillset" id="skillset" placeholder="Programming Language Proficiencies">
                <select name="yearsProgramming" id="yearsProgramming">
                    <option value="year">Select years experience</option>
                    <option value="year1">1 year</option>
                    <option value="year2">2 years</option>
                    <option value="year3">3 years</option>
                    <option value="year4">4 years</option>
                    <option value="year5">5 years</option>
                    <option value="year6">6 years</option>
                    <option value="year7">7 years</option>
                    <option value="year8">8 years</option>
                    <option value="year9">9 years</option>
                    <option value="year10">10+ years</option>
                </select><br /><br />
                <label for="lang">Spoken and/or Written Language Proficiency</label>
                <input type="text" name="lang" id="lang" placeholder="Language">
                <select name="degree" id="degree">
                    <option value="proficiency">Select proficiency</option>
                    <option value="beginner">Beginner</option>
                    <option value="intermediate">Intermediate</option>
                    <option value="advanced">Advanced</option>
                    <option value="native">Native</option>
                </select><br /><br />
            </form>
            <?php include('./view/userProfileSkills.php') ?>
        </div>
    </section>

    <section id="avail" class="hidden">
        <p>Your Availability</p>
        <div id="avail"></div>
    </section>

</div>

<?php
$content = ob_get_clean();
require('./view/userProfileTemplate.php');
?>