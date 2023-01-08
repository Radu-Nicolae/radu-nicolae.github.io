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
            "Grawe Romania S.A.",
            "Grawe Romania S.A.",

            '
                <p>
- negotiating and concluding contracts with insurance brokers <br>
- developing partnerships with insurance brokers<br>
- analysis and negotiation of more complex requests for quotation (conditions, quotations, discounts, commissions)                </p>
            ',

            '
                <p>
- negocierea si incheierea contractelor cu brokerii de asigurare<br>
- repartizarea brokerilor catre agentiile Grawe spre administrare directa<br>
- dezvoltarea parteneriatelor cu brokerii de asigurare<br>
- analiza si negocierea cererilor de oferta complexe (conditii, cotatii, reduceri, comisioane)                </p>
            '
        );

        $generali = new CvItem(
            "Oct 2010 - ",
            "Oct 2010 - ",
            "Aug 2017",
            "Aug 2017",
            "National Sales Director",
            "National Sales Director",
            'FATA Asigurari S.A. – Generali Group',
            'FATA Asigurari S.A. – Generali Group',
            '
                   <p>
- elaboration of the sales strategy <br>
- recruitment of branch managers <br>
- negotiating and concluding contracts with insurance brokers<br> 
- development of franchise partnerships <br>
- developing the agricultural insurance portfolio through direct negotiation with large farmers            ',
            '
                    <p>
- intocmirea strategiei de vanzari<br>
- recrutarea de directori de sucursale<br>
- negocierea si incheierea contractelor cu brokerii de asigurare<br>
- dezvoltarea de parteneriate de tip franciza<br>
- dezvoltarea portofoliului de asigurari agricole prin negocierea directa cu fermierii mari                    </p>
            '

        );

        $eureko = new CvItem(
            "Sep 2007 - ",
            "Sep 2007 - ",
            "Aug 2010",
            "Aug 2010",
            "Regional director",
            "Regional director",
            'EUREKO Romania Insurance Company S.A. ',
            'EUREKO Romania Insurance Company S.A. ',

            '
                <p>
- developing the sales network by recruiting agency directors <br>
- developing partnerships with insurance brokers <br>
- monitoring sales network for achieving the objectives on life<br> 
- insurance, non-life insurance and the 2nd pension pillar
</p>
            ',

            '
                <p>
- dezvoltarea retelei de vanzari prin recrutarea de directori de agentie<br>
- dezvoltarea parteneriatelor cu brokerii de asigurare<br>
- monitorizarea retelei de vanzari in vederea atingerii obiectivelor pe asigurarile de viata, asigurarile generale si pilonul 2 pensii                </p>
            '
        );


        $bcr = new CvItem(
            "Sep 2005 - ",
            "Sep 2005 - ",
            "Sep 2007",
            "Sep 2007",
            "Project manager",
            "Project manager",
            'BCR Asigurari S.A. ',
            'BCR Asigurari S.A. ',

            '
                <p> 
- elaboration of the sales strategy <br>
- recruitment of branch managers <br>
- negotiating and concluding contracts with insurance brokers<br> 
- development of franchise partnerships <br>
- developing the agricultural insurance portfolio through direct<br> 
- negotiation with large farmers                
</p>
                    ',

            '
                <p>
- recrutarea de directori de sucursale si agentii<br>
- recrutarea si dezvoltarea parteneriatelor cu brokerii de asigurare<br>
- monitorizarea retelei proprii in vederea atingerii obiectivelor de vanzare                </p>
                '
        );

        $broker = new CvItem(
            "Dec 2004 - ",
            "Dec 2004 - ",
            "Sep 2005",
            "Sep 2005",
            "Chief Executive Officer",
            "President - General Manager",
            'Partener - Broker de Asigurare S.A.',
            'Partener - Broker de Asigurare S.A.',

            '
                <p>
                </p>
                    ',

            '
                <p>
                </p>
                    '
        );

        $unita = new CvItem(
            "Dec 2002 - ",
            "Dec 2002 - ",
            "Dec 2004",
            "Dec 2004",
            'Agency Director',
            "Agency Director",
            'UNITA Insurance Company S.A.',
            'UNITA Insurance Company S.A.',
            "
                   <p>
- negotiating and concluding contracts with insurance brokers <br>
- recruitment of agency staff and insurance agents <br>
- monitoring the activity of the agency in order to achieve the sales objectives
                  </p>
                       ",
            '
                   <p>
- negocierea si incheierea contractelor cu brokerii de asigurare<br>
- recrutarea personalului agentiei si a agentilor de asigurare<br>
- monitorizarea activitatii agentiei in vederea atingerii obiectivelor de vanzari
                   </p>
                       '
        );

        $grupas = new CvItem(
            "May 2001 - ",
            "Mai 2001 - ",
            "Dec 2002",
            "Dec 2002",
            "National Sales Director, Branch Director",
            "Branch Manager, Area Manager (20 districts)",
            'GRUP AS Asigurari S.A.',
            'GRUP AS Asigurari S.A.',
            '
                    <p>
                        - negotiating and concluding contracts with insurance brokers<br> 
- recruiting branch staff <br>
- recruitment of branch managers and agencies in the counties<br> 
- developing partnerships with brokers in the area <br>
- monitoring and direct support to the sales force in case of more complex insurances<br> 
- direct negotiation of large insurance contracts (conditions, quotations, commissions)
                       </p>                      ',
            '
                    <p>
- negocierea si incheierea contractelor cu brokerii de asigurare<br>
- recrutarea personalului sucursalei<br>
- recrutarea directorilor de sucursale si agentii din judetele arondate<br>
- dezvoltarea parteneriatelor cu brokerii din zona arondata<br>
- monitorizarea si suportul direct acordat fortei de vanzari in cazul asigurarilor complexe<br>
- negocierea directa a contractelor de asigurare mari( conditii, cotatii, comisioane)
                    </p>
                         '
        );

        $asirom = new CvItem(
            "Apr 2000 - ",
            "Apr 2000 - ",
            "May 2001",
            "Mai 2001",
            "Deputy Branch Manager",
            "Branch Manager",
            'Asirom S.A.',
            'Asirom S.A.',
            '
                    <p>
- developing partnerships with insurance brokers <br>
- recruitment of own sales force (agency directors, insurance inspectors)<br> 
- training life insurance and non-life insurance <br>
- monitoring the activity of the branch to achieve the sales objectives
                    </p>                       ',
            '
                    <p>
- coordonarea activitatii sucursalei pe linie de asigurari                    </p>
                         '
        );

        $interamerican = new CvItem(
            "Aug 1999 - ",
            "Aug 1999 - ",
            "Apr 2000",
            "Apr 2000",
            "Life and Health Insurance Department Director",
            "Director of the Life Insurance and Group Insurance Department",
            'Interamerican Romania Insurance Company S.A.',
            'Interamerican Romania Insurance Company S.A.',
            '
                    <p>
- coordinating the activities of the Life Insurance Department & Health Insurance Department<br> 
- development of the network of agents <br>
- recruitment, employment and personal training (consultants, unit managers, agency directors and for head office)<br> 
- activities related to the launch of new types of life insurance (financial program concepts)
</p>
                       ',
            '
                    <p>
- coordonarea activitatii Departamentului Asigurari de Viata<br>
- coordonarea activitatii Departamentului Asigurari de Sanatate<br>
- dezvoltarea retelei de agentii<br>
- recrutare, angajare si instruire personal (consultanti, unit manageri, directori agentii si pentru sediul central)<br>
- activitati legate de lansarea de noi tipuri de asigurari de viata (conceptie program finantare consultanti de asigurare, instruire pe “produse”, elaborarea materialelor de instruire (in colaborare), intocmirea bussiness plan-ului <br>
- elaborarea sistemului de plata a primelor de asigurare si negocierea contractului cu banca                    </p>
                         '
        );



        $economist = new CvItem(
            "Nov 1994 - ",
            "Noi 1994 - ",
            "Jul 1999",
            "Jul 1999",
            "CEO, Department Director, Financial Analyst",
            "CEO, Department Director, Financial Analyst!!",
            'Societatea de Asistenta Financiara si Investitii S.A. - Fondul Privat de Acumulare si Pensii ',
            'Societatea de Asistenta Financiara si Investitii S.A. - Fondul Privat de Acumulare si Pensii ',
            '
                    <p>
- public relations <br>
- relations with the bank (contracts, account openings, account statements)<br> 
- negotiation, conclusion and follow-up of contracts with distribution companies<br> 
- negotiation and conclusion of bank deposit contracts <br>
- conclusion of sales contracts - purchase of securities (shares, treasury certificates, participation certificates)<br> 
- the development and implementation of the placement policy
</p>                       ',
            '
                    <p>
- relatii cu publicul<br>
- relatiile cu banca (contracte, deschideri de conturi, extrase de cont)<br>
- negocierea, incheierea si urmarirea derularii contractelor cu firmele distribuitoare<br>
- negocierea si incheierea contractelor de depozit bancar<br>
- incheierea contractelor de vanzare – cumparare de titluri de valoare (actiuni, certificate de trezorerie, titluri de participare)<br>
- studierea pietei monetare si a pietei de capital si elaborarea de sinteze privind principalii indicatori: BUBID, BUBOR, taxa oficiala a scontului, dobanda de refinantare, rata inflatiei, dobanzile practicate de banci pe diferite termene, cotatia actiunilor la Bursa de Valori si pe RASDAQ, titluri de participare la fondurile mutuale si valorificarea, prin plasamente, a oportunitatilor oferite de aceste doua piete<br>
- elaborarea si implementarea politicii de plasamente<br>
- coordonarea departamentului Fond Privat de Acumulare si Pensii                    </p>
                         '
        );


        $romtyre = new CvItem(
            "Apr 1994 - ",
            "Apr 1994 - ",
            "Nov 1994",
            "Noi 1994",
            "Trainee economist ",
            "Trainee economist ",
            'Romtyre and Rubber S.A.',
            'Romtyre and Rubber S.A.',
            '
                    <p>
- contacting potential external partners by launching offers through economic advisers of Romanian embassies and consulates abroad<br> 
- negotiation of export prices (within the limits imposed by management) <br>
- negotiation and conclusion of international transport contracts (bill of lading, consignment note)<br> 
- agreeing, with the external partner, the conditions of payment (letter of credit or documentary collection) and the conditions of delivery of the goods
</p>                       ',
            '
                    <p>
- contactarea potentialilor parteneri externi prin lansarea de oferte prin intermediul consilierilor economici ai ambasadelor sau consulatelor Romaniei in strainatate<br>
- negocierea preturilor de export (in limitele impuse de conducere)<br>
- negocierea si incheierea contractelor de transport international (conosament, scrisoare de trasura)<br>
- convenirea, cu partenerul extern, a conditiilor de plata (acreditiv sau incaso) si a conditiilor de livrare a marfii<br>
- remiterea documentelor de export bancii in vederea incasarii exportului<br>
- intocmirea lunara a situatiei operatiunilor derulate in luna precedenta si prezentarea acestora presedintelui societatii                    </p>
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
            $romtyre
        );

        return $cv;
    }


}