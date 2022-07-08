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
                    negotiating and concluding contracts with insurance brokers<b> |</b> developing partnerships with insurance brokers<b> |</b> analysis and negotiation of more complex requests for quotation<b> |</b> (conditions, quotations, discounts, commissions)
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
                        elaboration of the sales strategy<b> |</b> recruitment of branch managers<b> |</b> negotiating and concluding contracts with insurance brokers<b> |</b> development of franchise partnerships<b> |</b> developing the agricultural insurance portfolio through direct<b> |</b> negotiation with large farmers                    </p>
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
                    developing the sales network by recruiting agency directors<b> |</b> eveloping partnerships with insurance brokers<b> |</b> monitoring the sales network in order to achieve the objectives on life<b> |</b> insurance, non-life insurance and the 2nd pension pillar                </p>      
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
            "Jun 2007",
            "Jun 2007",
            "Project manager",
            "Project manager",
            'BCR ASIGURARI S.A. ',
            'BCR ASIGURARI S.A. ',

            '
                <p> recruitment of branch managers and agencies<b> |</b> recruitment and development of partnerships with insurance brokers<b> |</b> monitoring network in order to achieve sales objectives                </p>
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
                        negotiating and concluding contracts with insurance brokers<b> |</b> recruitment of agency staff and insurance agents<b> |</b> monitoring the activity of the agency in order to achieve the sales objectives
                  </p>
                       ",
            '
                   <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                   </p>
                       '
        );

        $interamerican = new CvItem(
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
                                            negotiating and concluding contracts with insurance brokers<b> |</b> recruiting branch staff<b> |</b> recruitment of branch managers and agencies in the counties<b> |</b> developing partnerships with brokers in the area<b> |</b> monitoring and direct support to the sales force in case of more complex insurances<b> |</b> direct negotiation of large insurance contracts (conditions, quotations, commissions)                    </p>

                       ',
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
                    developing partnerships with insurance brokers<b> |</b> recruitment of own sales force (agency directors, insurance inspectors)<b> |</b> training life insurance and non-life insurance<b> |</b> monitoring the activity of the branch in order to achieve the sales objectives
                    </p>                       ',
            '
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur non optio perferendis temporibus veniam voluptas?
                    </p>
                         '
        );

        $grupas = new CvItem(
            "May 2001 - ",
            "Mai 2001 - ",
            "Nov 2002",
            "Nov 2002",
            "Branch Manager, Area Manager (20 districts)",
            "Branch Manager, Area Manager (20 districts)",
            'GRUP AS S.A.',
            'GRUP AS S.A.',
            '
                    <p>
                        negotiating and concluding contracts with insurance brokers<b> |</b> recruiting branch staff<b> |</b> recruitment of branch managers and agencies in the counties<b> |</b> developing partnerships with brokers in the area<b> |</b> monitoring and direct support to the sales force in case of more complex insurances<b> |</b> direct negotiation of large insurance contracts (conditions, quotations,
commissions)                       ',
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
                        monitoring the development of financing contracts for individuals<b> |</b> negotiation and conclusion of bank deposit contracts<b> |</b> study of the money and capital market and elaboration of syntheses regarding the main indicators                    </p>
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
                    <p> public relations<b> |</b> relations with the bank (contracts, account openings, account statements)<b> |</b> negotiating, concluding and monitoring the development of contracts with distribution companies<b> |</b> negotiation and conclusion of bank deposit contracts<b> |</b> concluding contracts for sale - purchase of securities (shares, treasury certificates, participation securities)<b> |</b> study of the money market and the capital market and elaboration of syntheses regarding the main indicators: BUBID, BUBOR, official discount tax, refinancing interest, inflation rate, interest rates charged by banks on different terms, quotation of shares on the Stock Exchange and on RASDAQ, mutual fund shares and capitalization, through investments, of the opportunities offered by these two markets<b> |</b> elaboration and implementation of the investment policy<b> |</b> coordination of the Private Accumulation Fund and Pensions department                    </p>
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
                        contacting potential external partners by launching offers through economic advisers of Romanian embassies and consulates abroad<b> |</b> negotiation of export prices (within the limits imposed by management)<b> |</b> negotiation and conclusion of international transport contracts (bill of lading, consignment note)<b> |</b> agreeing, with the external partner, the conditions of payment (letter of credit or documentary collection) and the conditions of delivery of the goods<b> |</b> sending the export documents to the bank in order to collect the export<b> |</b> monthly preparation of the situation of the operations carried out in the previous month and their presentation to the president of the company                    </p>
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