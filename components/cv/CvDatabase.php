<?php
include 'components/cv/CvUtils.php';


class CvDatabase
{
    public function getHighSchoolCv()
    {


        $highSchool = new CvItem(
            "1989 - ",
            "1989 - ",
            "1994",
            "1994",
            "Economist ",
            "Economist ",
            'Academy of Economic Studies, Faculty of Commerce, specialization International economic Relations',
            'Academia de Studii Economice, Facultatea de Comerţ, specializarea Relaţii Economice Internaţionale',

            '
                    <div style="color:#999999">
                        <p><b>Bachelor\'s Degree in</b>: Political Economy, International Trade, Management
    and Foreign Trade Techniques</p>  
                        <p><b>Diploma:</b> Foreign exchange and interest rate risk in international trade.
Methods and techniques for covering them</p>
                        <p><b>Final degree: 9.13</b></p>
                        
                        <br><br>
                        <p><span style="font-size: 120%"><b>Other courses:</b></span>
<br>broker course (broker authorized by the Romanian Commodity
<br>Exchange on the spot, forward, futures markets)
<br>actuarial seminar - life insurance (USAID program)
<br>investment seminar (USAID program)
<br>sales techniques courses - LIMRA
<br>claims, reinsurance courses - MÜNICH RE, FRANKONA RE</p>
                    </div>
                ',

            '
                    <div style="color:#999999">
                        <p><b>Licenţă la disciplinele:</b> Economie Politică, Comerţ Internaţional, Management
şi Tehnici de Comerţ Exterior</p>  
                        <p><b>Diplomă:</b>Riscul valutar şi al ratei dobânzii în comerţul internaţional. Metode
şi tehnici de acoperire a lor</p>
                        <p><b>Medie finală: 9,13</b></p>
                    </div>
                '
        );



        $schools = array(
            $highSchool,
        );

        return $schools;
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
                    - negotiating and concluding contracts with insurance brokers; developing partnerships with insurance brokers; analysis and negotiation of more complex requests for quotation; (conditions, quotations, discounts, commissions)
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
                        - elaboration of the sales strategy; recruitment of branch managers; negotiating and concluding contracts with insurance brokers; development of franchise partnerships; developing the agricultural insurance portfolio through direct; negotiation with large farmers                    </p>
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
                    - developing the sales network by recruiting agency directors; eveloping partnerships with insurance brokers; monitoring the sales network in order to achieve the objectives on life; insurance, non-life insurance and the 2nd pension pillar;                </p>      
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