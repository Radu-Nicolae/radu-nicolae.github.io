<?php


class cvUtils
{

    public function generateCode($cv, $lang)
    {
        $code = "";

        for ($i = 0; $i < sizeof($cv); $i++) {
            $codePerItem = ' ';
            $cvItem = $cv[$i];
            $codePerItem .= '
                    <div class="resume-wrap d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">';

            if ($lang == 0) {
                $codePerItem .= $cvItem->getStartingDate() . $cvItem->getEndingDate() . "</span>";
                $codePerItem .= '<h2>' . $cvItem->getTitle() . '</h2>';
                $codePerItem .= '<span class="position">' . $cvItem->getOrganizer() . "</span>";
                $codePerItem .= $cvItem->getDescription();
                $codePerItem .= "</div>
                    </div>
                    ";
            }
            else{
                $codePerItem .= $cvItem->getStartingDateRo() . $cvItem->getEndingDateRo() . "</span>";
                $codePerItem .= '<h2>' . $cvItem->getTitleRo() . '</h2>';
                $codePerItem .= '<span class="position">' . $cvItem->getOrganizerRo() . "</span>";
                $codePerItem .= $cvItem->getDescriptionRo();
                $codePerItem .= "</div>
                    </div>
                    ";
            }

            $code .= $codePerItem;
        }

        return $code;
    }
}