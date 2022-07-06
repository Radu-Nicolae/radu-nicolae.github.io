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
        $grawe = new CvItem(
            "Oct 2017 - ",
            "Oct 2017 -",
            "present",
            "prezent",
            'Broker Business Development Director',
            'Broker Business Development Director',
            "<u>Grawe Romania S.A.</u>",
            "<u>Grawe Romania S.A.</u>",

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>
            ',

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>
            '
        );

        $generali = new CvItem(
            "Aug 2010 - ",
            "Aug 2010 - ",
            "Sep 2017",
            "Sep 2017",
            "National Sales Director",
            "National Sales Director",
            'FATA Asigurari S.A. – Generali Group',
            'FATA Asigurari S.A. – Generali Group',
            '
                   <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
            ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
            '

        );

        $eureko = new CvItem(
            "Sep 2007 - ",
            "Sep 2007 - ",
            "Jul 2010",
            "Jul 2010",
            "Regional director",
            "Regional director",
            'EUREKO ROMANIA INSURANCE COMPANY S.A. ',
            'EUREKO ROMANIA INSURANCE COMPANY S.A. ',

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>      
            ',

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>
            '
        );


        $bcr = new CvItem(
            "Sep 2005 - ",
            "Sep 2005 - ",
            "Jun 2010",
            "Jun 2010",
            "Project manager",
            "Project manager",
            'BCR ASIGURARI S.A. ',
            'BCR ASIGURARI S.A. ',

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>
                    ',

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>
                '
        );

        $broker = new CvItem(
            "Dec 2004 - ",
            "Dec 2004 - ",
            "Aug 2005",
            "Aug 2005",
            "President - General Manager",
            "President - General Manager",
            'PARTENER – BROKER DE ASIGURARE S.A.',
            'PARTENER – BROKER DE ASIGURARE S.A.',

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>
                    ',

            '
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                </p>
                    '
        );

        $unita = new CvItem(
            "Dec 2002 - ",
            "Dec 2002 - ",
            "Nov 2004",
            "Nov 2004",
            'Agency Director',
            "Agency Director",
            'UNITA S.A.',
            'UNITA S.A.',
            "
                   <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                   </p>
                       ",
            '
                   <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                   </p>
                       '
        );

        $asirom = new CvItem(
            "Apr 2000 - ",
            "Apr 2000 - ",
            "Apr 2001",
            "Apr 2001",
            "Branch Manager",
            "Branch Manager",
            'ASIROM S.A.',
            'ASIROM S.A.',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );

        $interamerican = new CvItem(
            "Apr 2000 - ",
            "Apr 2000 - ",
            "Apr 2001",
            "Apr 2001",
            "Branch Manager",
            "Branch Manager",
            'ASIROM S.A. ',
            'ASIROM S.A. ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );


        $grupas = new CvItem(
            "Aug 1999 - ",
            "Aug 1999 - ",
            "Mar 2000",
            "Mar 2000",
            "Director of the Life Insurance and Group Insurance Department",
            "Director of the Life Insurance and Group Insurance Department",
            'INTERAMERICAN ROMANIA INSURANCE COMPANY S.A. ',
            'INTERAMERICAN ROMANIA INSURANCE COMPANY S.A. ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );


        $economist = new CvItem(
            "Jul 1997 - ",
            "Jul 1997 - ",
            "Jul 1999",
            "Jul 1999",
            "Economist",
            "Economist",
            'The Financial Assistance and Investment Company S.A.',
            'The Financial Assistance and Investment Company S.A.',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );

        $sopas = new CvItem(
            "Feb 1997 - ",
            "Feb 1997 - ",
            "Jun 1997",
            "Jun 1997",
            "President - General Manager",
            "President - General Manager",
            'SOPAS S.A. ',
            'SOPAS S.A. ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );


        $referent = new CvItem(
            "Nov 1994 - ",
            "Nov 1994 - ",
            "Jan 1999",
            "Jan 1999",
            "Referent, financial analyst, head of FPAP department",
            "Referent, financial analyst, head of FPAP department",
            'Private Accumulation and Pensions Fund - Financial Assistance Company and Investments S.A.',
            'Private Accumulation and Pensions Fund - Financial Assistance Company and Investments S.A.',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );


        $romtyre = new CvItem(
            "Aug 1994 - ",
            "Aug 1994 - ",
            "Oct 1994",
            "Oct 1994",
            "Trainee economist ",
            "Trainee economist ",
            'Romtyre and Rubber S.A.',
            'Romtyre and Rubber S.A.',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );

        $cv = array(
            $grawe,
            $generali,
            $eureko,
            $bcr,
            $broker,
            $unita,
            $grupas,
            $asirom,
            $interamerican,
            $economist,
            $sopas,
            $referent,
            $romtyre
        );

        return $cv;
    }


}