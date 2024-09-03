<div id="navbar">
    <ul>
        <li>
            <a class="href" href="#">Home</a>
        </li>
        <li>
            <a class="href" href="aboutus.html">About Us</a>
        </li>
        <li>
            <a class="href" href="investigations.html">Investigations</a>
        </li>
        <li>
            <a class="href" href="contact.html">Contact</a>
        </li>
        <?php
        if(isset($_SESSION['username'])){?>
        <li>
            <a class="href" href="upload.php">Contact</a>
        </li>
        <?php
        }?>
    </ul>
    <div class="sisu">
        <h3>Investigator</h3>
        <div id="btn">
            <a id="btnc" href="login.php">Login</a>
        </div>
    </div>
</div>
<br><br>
<div>
    <div class="orange">
        <img id="case-evidence" src="https://www.mgalabs.com/images/forensics.png" height="450px" width="450px" alt="Forensic Evidence Image">
    </div>
    <?php
    $username=$_SESSION['username'];
    print("Welcome $username")
    ?>
    <div id="text">
        <h1>Case: Digital Forensics Investigation</h1>
        <p>Digital forensics is the process of collecting and analyzing digital evidence.<br>that maintains its integrity and admissibility in court. Digital forensics is a field of forensic science.It is used to investigate cybercrimes but can also help with criminal and civil investigations.It is used to investigate cybercrimes but can also help with criminal and civil investigations.Digital forensics and incident response (DFIR) is an emerging cybersecurity discipline that integrates computer forensics and incident response activities<br></p>
        <br><br>
    </div>
    <div class="sisu2">
        <a id="btn3" href="https://example.com/digital-forensics-learn-more" target="blank">Learn More</a>
        <a id="btn4" href="https://youtu.be/forensics-tutorial" target="blank">Watch Tutorial</a>
    </div>
    <div id="orangefill">
        <div class="heading">
            <h1>How Digital Forensics Works?</h1>
        </div>
        <div class="container">
            <!-- box 1 -->
            <div class="box">
                <div class="circle">
                    <ion-icon class="icon" name="document-outline"></ion-icon>
                </div>
                <h4 class="ichead">Acquire Evidence</h4>
                <p class="icpara">The process of gathering and recovering sensitive data.And also it involves cloning or copying digital data evidence from mobile devices.</p>
            </div>
            <!-- box 2 -->
            <div class="box">
                <div class="circle">
                    <ion-icon class="icon" name="analytics-outline"></ion-icon>
                </div>
                <h4 class="ichead">Analyze Data</h4>
                <p class="icpara">Refers to using techniques to uncover patterns trends and anomalies within large volumes of digital data.</p>
            </div>
            <!-- box 3 -->
            <div class="box">
                <div class="circle">
                    <ion-icon class="icon" name="shield-checkmark-outline"></ion-icon>
                </div>
                <h4 class="ichead">Identify Threats</h4>
                <p class="icpara">The analysis of suspeted cyberattacks, with the objective of identifying,mitigating and eradicating cyber threats.</p>
            </div>
        </div>
        <!-- bar -->
        <div id="bar">
            <div id="state">
                <label>Select Evidence Type</label>
                <select id="st">
                    <option class="ot"></option>
                    <option class="ot">Disk Image</option>
                    <option class="ot">Memory Dump</option>
                    <option class="ot">Log Files</option>
                    <option class="ot">Network Traffic</option>
                    <option class="ot">Registry Entries</option>
                </select>
            </div>
            <div id="model">
                <label>Select Analysis Model</label>
                <select id="sqt">
                    <option class="ot"></option>
                    <option class="ot">Anomaly Detection</option>
                    <option class="ot">Pattern Recognition</option>
                    <option class="ot">Malware Analysis</option>
                    <option class="ot">Log Correlation</option>
                </select>
            </div>
            <div id="searchbox">
                <div id="search">
                    <ion-icon name="search-outline"></ion-icon>
                </div>
            </div>
        </div>
        <div class="heading">
            <h1>Reporting</h1><br>
        </div>
        <div id="img1">
            <img class="img" src="https://th.bing.com/th/id/OIP.-VRgLrWhDJUbOMAbwRj6lQHaGc?w=225&h=196&c=7&r=0&o=5&dpr=1.3&pid=1.7" alt="Forensic Report Sample">
            <!-- <img class="img" src="https://example.com/forensic-report-placeholder2.png"> -->
            <div id="report-section">
                <p id="fancy-paragraph">
                    The final step in our digital forensic project involves generating comprehensive reports of the analyzed evidence in CSV, PDF, and JSON formats. These reports not only provide detailed insights and summaries but also ensure that investigators can review, interpret, and act on the findings efficiently. By offering multiple formats, we guarantee compatibility with various systems, facilitating seamless sharing, archiving, and presentation of the crucial forensic data. This flexibility enhances collaboration among teams, supports legal proceedings, and ensures that the integrity of the evidence is maintained throughout the investigation process.
                </p>
            </div>
            <img id="img2" src="https://www.partnersplus.com/wp-content/uploads/2023/06/DFIR-Image-e1686230216544-1024x695.png" height="400px" width="400px" alt="Forensic Report Sample">
        </div>
    </div>