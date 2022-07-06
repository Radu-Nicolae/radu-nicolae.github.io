<?php
include 'components/cv/CvUtils.php';


class CvDatabase
{
    public function getHighSchoolCv()
    {
        $highSchool = new CvItem(
            "2018 - ",
            "2018 - ",
            "ongoing",
            "prezent",
            "Baccalaureate Diploma",
            "Diplomă de Bacalaureat",
            '<a href="https://licsfsava.ro" style="color: black !important" target="_blank">"Saint Sava" National College</a>',
            '<a href="https://licsfsava.ro" target="_blank" style="color: black !important">Colegiul Național "Sfântul Sava"</a>',

            '
                    <div style="color:#999999">
                        <p>I study at the best high school in Romania <b>mathematics-informatics profile</b> and I am currently in the 12<sup>th</sup> grade.</p>
                        <p>I will sustain Baccalaureate Exam at Mathematics, Physics, Romanian, Digital Competences and English.</p>    
                    </div>
                ',

            '
                    <div style="color:#999999">
                        <p> Studiez la cel mai bun liceu din România <b>profilul matematică-informatică</b> și în prezent sunt în clasa a 12-a.</p>
                        <p> Voi susține examenul de bacalaureat la matematică, fizică, română, competențe digitale și engleză.</p>
                    </div>
                '
        );

        $sat = new CvItem(
            "Dec 2020",
            "Dec 2020",
            "",
            "",
            '<a href="https://www.collegeboard.org/" style="color: black !important" target="_blank">Scholastic Assessment Test (SAT)</a>',
            '<a href="https://www.collegeboard.org/" style="color: black !important" target="_blank">Scholastic Assessment Test (SAT)</a>',
            '<a href="https://www.collegeboard.org/" style="color: black !important" target="_blank">College Board</a>',
            '<a href="https://www.collegeboard.org/" style="color: black !important" target="_blank">College Board</a>',

            "
                    <p>Overall: <b>1360 points</b> - higher than 91% of test takers</p>
                    <p>Math: <b>760 points</b> - higher than 96% of test takers
                    <br>English: <b>600 points</b> - higher than 76% of test takers</p>
                ",

            "
                    <p>Total: <b>1360 de puncte</b> - mai mare decât 91% dintre candidații SAT</p>
                    <p>Matematică: <b>760 de puncte</b> - mai mare decât 96% dintre candidații SAT
                    <br>Engleză: <b>600 de puncte</b> - mai mare decât 76% dintre candidații SAT</p>
                "
        );

        $schools = array(
            $highSchool,
            $sat
        );

        return $schools;
    }


    public function getEducationCv()
    {
        $django = new CvItem(
            "Jul 2021",
            "Iul 2021",
            "",
            "",
            "<a style='color:black' href='https://codewithmosh.com/'>Django - The Ultimate Course</a>",
            "<a style='color:black' href='https://codewithmosh.com/'>Django - The Ultimate Course</a>",
            "<a style='color:black' href='https://codewithmosh.com/'>Mosh Hamedani</a>",
            "<a style='color:black' href='https://codewithmosh.com/'>Mosh Hamedani</a>",
            "<p>The course covers the following chapters of Django: Data Models, Databases, Django ORM, Django Admin.</p>",
            "<p>Cursul cuprinde următoarele capitole: Data Models, Databases, Django ORM, Django Admin.</p>"
        );

        $edxHarvard = new CvItem(
            "Jun 2021 - ",
            "Jun 2021 - ",
            "ongoing",
            "prezent",
            "<a style='color:black' href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>Web Programming with Python and JavaScript</a>",
            "<a style='color:black' href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>Web Programming with Python and JavaScript</a>",
            "<a style='color:black' href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>Harvard CS50</a>",
            "<a style='color:black' href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>Harvard CS50</a>",

            "
                    <p>The course covers the following chapters: HTML, CSS, Git, Python, Django, MySQL, Javascript, User Interfaces, Testing and Scalability and Security.</p>
                ",

            "
                    <p>Cursul cuprinde următoarele capitole: HTML, CSS, Git, Python, Django, MySQL, Javascript, User Interfaces, Testing and Scalability și Security.</p>
                "
        );


        $sololearn = new CvItem(
            "Nov 2020 - ",
            "Nov 2020 - ",
            "ongoing",
            "prezent",
            "<a style='color:black' href='https://www.sololearn.com/home'>Programming Courses</a>",
            "<a style='color:black' href='https://www.sololearn.com/home'>Cursuri de programare</a>",
            "<a style='color:black' href='https://www.sololearn.com/home'>Sololearn</a>",
            "<a style='color:black' href='https://www.sololearn.com/home'>Sololearn</a>",
            '
                    <p>I have attended and graduated the following SoloLearn courses: Python Core, Python Data Structures, Java, PHP, HTML, CSS, Responsive Web Design.</p>
                    <p>I am currently attending MySQL and C++ courses.</p>
                ',
            '
                     <p>Am urmat și am absolvit următoarele cursuri SoloLearn: Python Core, Python Data Structures, Java, PHP, HTML, CSS, Responsive Web Design.</p>
                     <p>În prezent particip la cursurile de MySQL și C++. </p>
                '
        );

        $edxDelft = new CvItem(
            "Apr 2021 - ",
            "Apr 2021 - ",
            "Jun 2021",
            "Iun 2021",
            "<a href='https://learning.edx.org/course/course-v1:DelftX+Calc001x+2T2020/home' style='color:black;'>Pre-University Calculus</a>",
            "<a href='https://learning.edx.org/course/course-v1:DelftX+Calc001x+2T2020/home' style='color:black;'>Pre-University Calculus</a>",
            "<a href='https://www.tudelft.nl/' style='color:black;'>TU Delft</a>",
            "<a href='https://www.tudelft.nl/' style='color:black;'>TU Delft</a>",

            '
                    <p>I graduated the official pre-university calculus course organized by TU Delft with the remarkable <b>final grade of 91%</b>.</p>
                    <p>I did gain indispensable calculus and mathematical algorithm knowledge including equations, functions, differentiation, integration and geometry.</p>
                ',

            '
                    <p>Am absolvit cursul oficial de pre-university calculus organizat de TU Delft cu <b>nota finală de 91% </b>.</p>
                    <p>Am obținut cunoștiințe indispensabile de calcul și algoritmi matematici, inclusiv ecuații, funcții, diferențiere, integrale și geometrie.</p>
                '
        );


        $jademyCourses = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "Nov 2020",
            "Nov 2020",
            "<a href='https://jademy.ro/'  target='_blank' style='color:black;'>Java Courses</a>",
            "<a href='https://jademy.ro/' target='_blank' style='color:black;'>Cursuri Java</a>",
            "<a href='https://jademy.ro/' target='_blank' style='color:black;'>Jademy - Oracle Silver Partner</a>",
            "<a href='https://jademy.ro/' target='_blank' style='color:black;'>Jademy - Oracle Silver Partner</a>",

            '
                    <p>I have attended Oracle authorised back end courses of Java.</p>
                    <p>The course helped me develop an algorithmic thinking and I gained knowledge of OOP, debugging, solving problems, handling exceptions, databases (SQL and JDBC), functional programming and Java FX.</p>
                ',

            '
                    <p>Am participat la cursul de Java organizat de centrul partener Oracle, <a href="https://jademy.ro" target="_blank">Jademy</a>. </p>
                    <p>Cursul mi-a dezvoltat gândirea algoritmică și am dobândit cunoștiințe de OOP, debugging, rezolvarea erorilor, gestionarea excepțiilor, baze de date (SQL și JDBC), programare funcțională și Java FX.</p>
            '
        );


        //to be removed and added to skills
        $ecdl = new CvItem(
            "2018 - ",
            "2018 - ",
            "2019",
            "2019",
            "ECDL certificate",
            "Certificat ECDL",
            "ECDL (European Computer Driving Licence)",
            "ECDL (European Computer Driving Licence)",
            '<p style="color:#999999">I have achieved the ECDL (European Computer Driving License)
                                in: </p>

                            <ul style="color:#999999">
                                <li>KompoZer 2.0</li>
                                <li>Microsoft PowerPoint</li>
                                <li>Microsoft Word</li>
                                <li>Microsoft Excel</li>
                                <li>Microsoft Access</li>
                                <li>Microsoft Outlook</li>
                                <li>Computer Usage</li>
                            </ul>',
            '<p>În clasa a 9-a am luat toate examenele ECDL: </p><ul>
									<li>KompoZer 2.0</li>
									<li>Microsoft PowerPoint</li>
									<li>Microsoft Word</li>
									<li>Microsoft Excel</li>
									<li>Microsoft Access</li>
									<li>Microsoft Outlook</li>
									<li>Utilizarea Calculatorului</li>
								</ul>'
        );


        $cv = array(
            $edxHarvard,
            $sololearn,
            $django,
            $edxDelft,
            $jademyCourses
        );


        return $cv;
    }

    public function getDevelopingCv()
    {
        $github = new CvItem(
            "",
            "",
            "",
            "",
            '<a href="https://github.com/Radu-Nicolae?tab=repositories"
                                   style="text-decoration: underline; text-decoration-color: black !important;"><h2>
                    Github</h2></a>',
            '<a href="https://github.com/Radu-Nicolae?tab=repositories"
                                   style="text-decoration: underline; text-decoration-color: black !important;"><h2>
                    Github</h2></a>',
            "",
            "",

            '
                <p>
                    <a href="https://github.com/Radu-Nicolae?tab=repositories">Github</a> is the platform where I upload all my projects.
                </p>
            ',

            '
                <p>
                    <a href="https://github.com/Radu-Nicolae?tab=repositories">Github</a> este platforma pe care încarc toate proiectele pe care le dezvolt.
                </p>
            '
        );

        $viviriaFestival = new CvItem(
            "Jul 2021 - ",
            "Iul 2021 - ",
            "Sep 2021",
            "Sep 2021",
            "Web Developer",
            "Web Developer",
            '<a href="https://viviriafestival.ro" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Viviria Festival</a>',
            '<a href="https://viviriafestival.ro" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Viviria Festival</a>',
            '
                <p>I worked as a web developer for the official website of the literature festival Viviria. I created the website primarly using PHP and I kept its maintenance.</p>
            ',
            '
                <p>Am fost web developer pentru site-ul oficial al festivalului de literatură Viviria. Am creat acest website folosind în mare parte PHP și am păstrat mentenanța acestuia.</p>
            '

        );

        $topTheWhole = new CvItem(
            "Jan 2021 - ",
            "Ian 2020 - ",
            "ongoing",
            "prezent",
            "Website Founder",
            "Fondator Website",
            '<a href="https://topthewhole.com" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Top The Whole</a>',
            '<a href="https://topthewhole.com" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Top The Whole</a>',

            '
                <p>Website owner - developed in order to attract traffic for Google Adsense.<br> 
                I built the website together with <a href="https://luanaionica.com" target="_blank"><u>Luana</u></a> using PHP and SEO. I am currently keeping the maintenaince of the website.
                </p>        
            ',

            '
                <p> Website owner - dezvoltat pentru a atrage trafic pentru Google Adsense.<br>
                Am construit site-ul împreună cu <a href="https://luanaionica.com" target="_blank"><u>Luana</u></a> folosind PHP și SEO. În prezent păstrez mentenanța site-ului web. </p>
                </p>
            '
        );


        $raduNicolaeWebsite = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "ongoing",
            "prezent",
            "Web Developer",
            "Web Developer",
            '<a href="#" class="linksiteuri" style="text-decoration: underline; color: black !important">This website</a>',
            '<a href="#" class="linksiteuri" style="text-decoration: underline; color: black !important">Acest website</a>',

            '
                        <p style="text-align: justify;">I structured, designed and built my personal website by myself using HTML, CSS, Javascript, PHP and GIT. In present I am keeping its maintenance.</p>
                    ',

            '
                        <p style="text-align: justify;">Am structurat, proiectat și construit acest site folosind HTML, CSS, Javascript, PHP și GIT. În prezent păstrez mentenanța site-ului.</p>
                '
        );

        $happyCampsWebsite = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "Jun 2020",
            "Iun 2020",
            "Web Developer Internship",
            "Web Developer Internship",
            '<a href="https://happycamps.club" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Happy Camps Club Website</a>',
            '<a href="https://happycamps.club" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Happy Camps Club Website</a>',

            '
                        <p style="text-align: justify;">I structured, designed, built and kept the maintenance for the official website of Happy Camps Club.</p>
                    ',

            '
                        <p style="text-align: justify;">Am structurat, proiectat și dezvoltat site-ul oficial al Happy Camps Club, iar în prezent mă ocup cu mentenanța acestuia.</p>
                    '
        );

        $interactWebsite = new CvItem(
            "Feb 2020 - ",
            "Feb 2020 - ",
            "Jul 2021",
            "Iul 2021",
            'Web Developer Internship',
            "Web Developer Internship",
            '<a href="http://interactbucuresti.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Interact Bucharest</a>',
            '<a href="http://interactbucuresti.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Interact București</a>',
            '
                            <p>I structured, designed and built the official website of Interact Bucharest, member of Rotary. I kept maintenaince of the website during the period.</p>
                       ',
            '
                            <p>Am structurat, proiectat și construit site-ul oficial al Interact București, care aparține de Rotary și am păstrat mentenanța site-ului web.</p>
                       '
        );

        $revistaCaVaWebsite = new CvItem(
            "Oct 2019 - ",
            "Oct 2019 - ",
            "ongoing",
            "prezent",
            "Web Developer Internship",
            "Web Developer Internship",
            '<a href="http://revista-cava.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">ÇaVa Website</a>',
            '<a href="http://revista-cava.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">ÇaVa Website</a>',
            '
                            <p>I structured, designed and built the official website of CaVa, the magazine of "Saint Sava" National College. In present I keep the maintenance of the website by posting new articles, updating details, making announcements, etc.</p>
                       ',
            '
                            <p> Am structurat, proiectat și construit site-ul oficial al CaVa, revista Colegiului Național „Sfântul Sava”. În prezent păstrez mentenanța site-ului web postând articole noi, actualizând detalii, efectuarea de anunțuri etc. </p>
                         '
        );


        $cv = array(
            $github,
            $topTheWhole,
            $raduNicolaeWebsite,
            $revistaCaVaWebsite,
            $viviriaFestival,
            $happyCampsWebsite,
            $interactWebsite
        );

        return $cv;
    }


    public function getInternshipCv()
    {


        $jademyInternship = new cvItem(
            "May 2020 - ",
            "Mai 2020 - ",
            "Oct 2021",
            "Oct 2021",
            "Trainer Internship",
            "Trainer Internship",
            '<span class="position"><a
                                            href="https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start"
                                            target="_blank" class="linksiteuri"
                                            style="color: black !important">Jademy - Oracle Silver Partner</a></span>',
            '<span class="position"><a
                                            href="https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start"
                                            target="_blank" class="linksiteuri"
                                            style="color: black !important">Jademy - Oracle Silver Partner</a></span>',
            '<p>I structured, created and implemented a 25 module front end course containg notions and exercises of Javascript, HTML and CSS for <b>Jademy - Oracle Silver Partner</b>. The course can be found <a href="https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start"><u>here</u>.</a> I also participated as a trainer assistant at Java Courses.</p> ',


            '<p> Am structurat, creat și implementat un curs de Front-End de 25 de module care conține noțiuni și exerciții de Javascript, HTML și CSS pentru <b> Jademy - Oracle Silver Partner </b>. Cursul poate fi găsit <a href="https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start"><u>aici</u></a>. De asemenea, am participat ca trainer assistant la cursurile Java.</p>'
        );

        $cv = array($jademyInternship);

        return $cv;
    }


    public function getRoboticsCv()
    {
        $autovortex = new CvItem(
            "Oct 2019 - ",
            "Oct 2019 - ",
            "ongoing",
            "prezent",
            "<a href='https://autovortex.ro/' target='_blank' style='color:black;'>National Robotics Team Member</a>",
            "<a href='https://autovortex.ro/' target='_blank' style='color:black;'>Membru al Echipei Naționale de Robotică Autovortex</a>",
            "<a href='https://autovortex.ro/' target='_blank' style='color:black;'>Autovortex</a>",
            "<a href='https://autovortex.ro/' target='_blank' style='color:black;'>Autovortex</a>",
            '
                                    <p style="text-align: justify;"><a href="https://autovortex.ro/" target="_blank"><u>Autovortex</u></a> is the national robotics team,
                                        representing Romania in one of the biggest international contest of robotics,
                                        FIRST Tech Challenge.</p>
                                    <p>
                                        Principal activities: robot designing, construction and programming.
                                    </p>

                                    <p>
                                        Earnt Awards:
                                    </p>
                                    <ul>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2021 - April 2021
                                        </li>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2020 - February 2020
                                        </li>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2019 - December 2019
                                        </li>
                                    </ul>
            ',
            '<p style="text-align: justify;">
                                     <a href="https://autovortex.ro/" target="_blank"> <u> Autovortex </u> </a> este echipa națională de robotică ,
                                        reprezentând România la unul dintre cele mai mari concursuri internaționale de robotică,
                                        FIRST Tech Challenge. </p>
                                    <p>
                                        Activități principale: proiectarea, construcția și programarea robotului.
                                    </p>

                                    <p>
                                        Premiile câștigate:
                                    </p>
                                    <ul>
                                        <li> Locul I la FIRST Tech Challenge Rusia 2021 - aprilie 2021
                                        </li>
                                        <li>Locul I la FIRST Tech Challenge Rusia 2020 - februarie 2020
                                        </li>
                                        <li> Locul I la FIRST Tech Challenge Rusia 2019 - decembrie 2019
                                        </li>
                                    </ul>'
        );

        $ftcCamp = new CvItem(
            "8 -",
            "8 -",
            "14 Jul 2019",
            "14 Iul 2019",
            "<a href='https://www.firstinspires.org/robotics/ftc' target='_blank' style='color:black;'>Participant at FTC summer camp</a>",
            "<a href='https://www.firstinspires.org/robotics/ftc' target='_blank' style='color:black;'>Participant tabără de robotică FTC</a>",
            "<a href='https://www.firstinspires.org/robotics/ftc' target='_blank' style='color:black;'>FIRST Tech Challenge</a>",
            "<a href='https://www.firstinspires.org/robotics/ftc' target='_blank' style='color:black;'>FIRST Tech Challenge</a>",
            '
                 <p>I participated at the official FIRST Tech Challenge Summer Camp where I gained knowledge of PTC Creo, Java, Android Studio, robot designing and construction tactics.</p>

            ',
            '<p> Am participat la tabăra oficială de vară FIRST Tech Challenge, unde am dobândit cunoștiințe de proiectare, construcție și programare a robotului folosind PTC Creo, Java și Android Studio. </p>'
        );

        $gammaRobotics = new CvItem(
            "Oct 2018 - ",
            "Oct 2018 - ",
            "Oct 2019",
            "Oct 2019",
            "Team Leader",
            "Lider de Echipă",
            "Gamma Robotics",
            "Gamma Robotics",
            '
                <p>Gamma is my high school\'s robotics team and we participated at the international contest FIRST Tech Challenge.</p>
                <p>I was team leader and driver during the season. We passed the regional stage and we competed against the best robotics teams in Romania in the national stage.</p>
',
            '<p> Gamma este echipa de robotică a liceului meu, care a participat la concursul internațional FIRST Tech Challenge. </p>
                 <p> Am fost lider de echipă și driver în timpul sezonului. Am trecut de etapa regională și am concurat împotriva celor mai bune echipe de robotică din România la etapa națională. </p>'
        );

        $cv = array(
            $autovortex,
            $ftcCamp,
            $gammaRobotics
        );

        return $cv;
    }


    public function getCompetitionsCv()
    {
        $ftc2019 = new CvItem(
            "",
            "",
            "",
            "",
            "1<sup>st</sup> place",
            "Locul 1",
            "FIRST Tech Challenge Russia - Dec 2019",
            "FIRST Tech Challenge Russia - Dec 2019",
            "<br><br>",
            "<br><br>"
        );

        $ftc2020 = new CvItem(
            "",
            "",
            "",
            "",
            "1<sup>st</sup> place",
            "Locul 1",
            "FTC Russia Robotics from Siberia  - Feb 2020",
            "FTC Russia Robotics din Siberia - Feb 2020",
            "<br><br>",
            "<br><br>"
        );

        $ftc2021 = new CvItem(
            "",
            "",
            "",
            "",
            "1<sup>st</sup> place",
            "Locul 1",
            "FIRST Russia Robotics - Apr 2021",
            "FIRST Russia Robotics - Apr 2021",
            "<br><br>",
            "<br><br>"
        );

        $roboticsContest = new CvItem(
            "",
            "",
            "",
            "",
            "Robotics <span>&nbsp;</span>| <span>&nbsp;</span> Special Prize",
            "Robotică <span>&nbsp;</span> | <span>&nbsp;</span> Premiul Special",
            "Sciences and Technologies Ploiesti",
            "Științe și Technologii Ploiești",
            "<br><br>",
            "<br><br>"
        );


        $cv = array(
            $ftc2019,
            $ftc2020,
            $ftc2021,
            $roboticsContest,
        );

        return $cv;
    }

    public function getVolunteeringCv()
    {
        $happyCampsFinancial = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "Sep 2020",
            "Sep 2020",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Financial Manager</a>",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Manager Financiar</a>",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Happy Camps</a>",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Happy Camps</a>",
            '
                    <p>Buget, funding and sponsorship management for Happy Camps.</p>
                ',
            '
                    <p>Managementul bugetului, finanțărilor și sponsorizărilor pentru Happy Camps.</p>
                '
        );

        $corporateGamesFinancial = new CvItem(
            'Apr 2020 - ',
            'Apr 2020 - ',
            "Sep 2020",
            "Sep 2020",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Sales Agent</a>",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Agent de vânzari</a>",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Corporate Games Romania</a>",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Corporate Games Romania</a>",
            "
                    <p>I convinced the general managers of the greatest corporations from Romania to take part of Corporate Games together with their subordinates.</p>
                ",
            "
                    <p>Task-ul meu era de a convinge directorii generali ai celor mai mari corporații din România să ia parte la Corporate Games alături de subordonații lor.</p>
                "
        );

        $lazarMun = new CvItem(
            "14 - ",
            "14 - ",
            "17 Feb 2020",
            "17 Feb 2020",
            "Staff member at Lazăr MUN",
            "Membru Staff Lazăr MUN",
            "United Nations",
            "United Nations",
            '
                        <p style="text-align: justify;">Staff member at Model United Nations Conference, held in "Gheorghe Lazar" National College from Bucharest.</p>
                    ',
            '
                        <p style="text-align: justify;">Am ocupat funcția de voluntar la conferința model organizată de United Nations, desfășurată în Colegiul Național "Gheorghe Lazăr" din Bucureşti.</p>
                    '
        );

        $redCross = new CvItem(
            "Jan 2020 - ",
            "Ian 2020 - ",
            "Apr 2020",
            "Apr 2020",
            "<a href='https://www.icrc.org/' target='_blank' style='color:black;'>Volunteer</a>",
            "<a href='https://www.icrc.org/' target='_blank' style='color:black;'>Voluntar</a>",
            "<a href='https://www.icrc.org/' target='_blank' style='color:black;'>Red Cross</a>",
            "<a href='https://www.icrc.org/' target='_blank' style='color:black;'>Crucea Roșie</a>",
            '
                        <p style="text-align: justify;">I volunteered at two different editions of Food Bank and I attended a few First Aid classes.</p>
                    ',
            '
                        <p>Am fost voluntar la două ediții ale Băncii de Alimente și am participat la câteva cursuri de prim ajutor.</p>
                    '
        );

        $cg2019 = new CvItem(
            "15 - ",
            "15 - ",
            "16 Jun 2019",
            "16 Iun 2019",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Cycling Competition Participant</a>",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Concurent Ciclism</a>",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Corporate Games</a>",
            "<a href='https://www.corporate-games.ro/ro' target='_blank' style='color:black;'>Corporate Games</a>",
            '
                        <p style="text-align: justify;">I have managed to gain the second place in cycling at one of the biggest international competitions, Corporate Games.
                    ',
            '
                        <p style="text-align: justify;">Am obținut locul al doilea la ciclism la una dintre cele mai mari competiții internaționale, Corporate Games.
                    '
        );

        $happyCampsVolunteer = new CvItem(
            "Apr 2019 - ",
            "Apr 2019 - ",
            "ongoing",
            "prezent",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Volunteer</a>",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Voluntar</a>",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Happy Camps</a>",
            "<a href='https://www.happycamps.ro/' target='_blank' style='color:black;'>Happy Camps</a>",
            "
                        <p>I occupied the position of financial manager where I managed budgets, sponsorships and fundings for the organisation.</p> 
                        <p>I also developed the club's website, which can be found <a href='https://happycamps.club' target='_blank'>here</a>.</p>
                        <p>I also volunteered as a trainer in several summer and winter children camps where I improved my communication abilities, as well as my coordination skills.</p>
                    ",
            "
                        <p>Am ocupat funcția de manager financiar în care am gestionat bugete, sponsorizări și finanțări pentru organizație.</p> 
                        <p>De asemenea, am dezvoltat site-ul clubului, care poate fi găsit <a href='https://happycamps.club' target='_blank'> aici </a>.</p>
                        <p>În plus, am fost trainer în mai multe tabere de vară și de iarnă pentru copii, unde mi-am îmbunătățit abilitățile de comunicare, precum și abilitățile de coordonare.</p>                    
                    "
        );

        $euDialogue = new CvItem(
            "16 Oct 2020",
            "16 Oct 2020",
            "",
            "",
            'Participant at "The dialogue of the European Union with young people"',
            'Participant la "Dialogul Uniunii Europene cu tinerii"',
            "European Union",
            "Uniunea Europeană",
            '
                        <p>I have participated at the local consultation within the Seventh Cycle of the European Union Dialogue with young people, within the National College "Saint Sava". We\'ve discussed about the main problems in the European Union and seek solutions for them. The conclusions were recorded and sent to European Union\'s parliament as "the voice of the young generation".</p>
                    ',
            '
                        <p>Am participat la consultarea locală din cadrul celui de-al Șaptelea Ciclu al Dialogului Uniunii Europene cu Tinerii, organizată în Colegiul Național "Sfântul Sava".</p>
                    '
        );

        $cv = array(
            $happyCampsVolunteer,
            $happyCampsFinancial,
            $corporateGamesFinancial,
            $lazarMun,
            $redCross,
            $euDialogue
        );

        return $cv;

    }

    public function getOtherExperienceCv()
    {

        $kidsParliament = new CvItem(
            "07 Jun 2019",
            "07 Iun 2019",
            "",
            "",
            'Participant "Kids Parliament"',
            'Participant "Parlamentul Copiilor"',
            'The Chamber of Deputies',
            'Palatul Parlamentului - Camera Deputaților',
            '<p>I have participated as a deputy at a model conference in which we discussed the introduction of a few laws regarding the protection of the environment.</p>',
            '<p>Alături de echipa mea, am reprezentat Colegiul Național "Sfântul Sava" în "Parlamentul Copiilor". Am dezbătut diferite probleme ale țării noastre, precum și modalități de rezolvare ale acestora.</p>'
        );

//        $cv = array(
//            $happyCampsFinancial,
//            $corporateGamesFinancial,
//            $lazarMun,
//            $redCross,
//            $euDialogue,
//            $autovortex,
//            $ftcCamp,
//            $cg2019,
//            $kidsParliament,
//            $roboticsContest,
//            $happyCampsVolunteer,
//            $gammaRobotics
//        );
//
//        return $cv;

    }

}