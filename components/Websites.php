<?php


class Site
{

    var $name;
    var $duties;
    var $link;
    var $image;

    /**
     * Website constructor.
     * @param $name
     * @param $duties
     * @param $link
     * @param $image
     */
    public function __construct($name, $duties, $link, $image)
    {
        $this->name = $name;
        $this->duties = $duties;
        $this->link = $link;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getDuties()
    {
        return $this->duties;
    }

    /**
     * @param mixed $duties
     */
    public function setDuties($duties)
    {
        $this->duties = $duties;
    }

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    public function getWebsites()
    {
        $cava = new Site("ÇaVa?", "Web Developer, Web Designer", "http://revista-cava.ro/", "cava.jpeg");
        $interactBucharest = new Site("Interact Bucharest", "Web Developer, Web Design, Javascript Developer", "http://interactbucuresti.ro/", "interactBucharest.jpeg");
        $personalWebsite = new Site("Personal Website", "Web Developer, Web Designer, Javascript Developer, PHP Developer", "#", "personalWebsite.jpeg");
        $happyCampsClub = new Site("Happy Camps Club", "Web Developer, Web Design, Javascript Developer", "http://happycamps.club", "happyCampsClub.jpeg");
        $topTheWhole = new Site("Top The Whole", "Web Developer, Web Design, Javascript Developer, PHP Developer <br> Article Writer", "https://topthewhole.com", 'topTheWhole.jpeg');
        $viviriaFestival = new Site("Vivira Festival", "Web Developer, PHP Developer, Web Designer", "https://viviriafestival.ro", "viviriafestival.jpg");

        $sites = array(
            $cava,
            $interactBucharest,
            $personalWebsite,
            $happyCampsClub,
            $topTheWhole,
            $viviriaFestival
        );

        return $sites;
    }

    public function getCode($sites)
    {

        include "components/DataBase.php";


        $code = '
            <section class="ftco-section ftco-project" id="projects-section">
    <div class="container-fluid px-md-0">
        <div class="row no-gutters justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <h1 class="big big-2">Websites</h1>
                <h2 class="mb-4">' . "Websites I developed" . '</h2>
            </div>
        </div>

        <div class="row no-gutters">
        ';

        for ($i = 0; $i < sizeof($sites); $i++) {
            $website = $sites[$i];
            $codePerItem = '';

            $codePerItem = '
               <a href="http://revista-cava.ro/"></a>
            <div class="col-md-4"><a href="' . $website->getLink() . '">
                </a>

                <div class="project img ftco-animate d-flex justify-content-center align-items-center fadeInUp ftco-animated"
                     style="background-image: url(' . $website->getImage() . ');"><a href="' . $website->getLink() . '">
                        <div class="overlay"></div>
                    </a>
                    <div class="text text-center p-4"><a href="' . $website->getLink() . '">
                        </a>
                        <h3><a href="' . $website->getLink() . '"></a><a href="' . $website->getLink() . '" target="_blank">' . $website->getName() . '</a></h3>
                        <span>' . $website->getDuties() . '</span>
                    </div>
                </div>
            </div>  
            
            ';

            $code .= $codePerItem;
        }

        $code .= '
                    </div>
    </div>
</section>
        ';

        return $code;
    }

}

?>

<html>
<?php
$nw = new Site('', '', '', '');
echo $nw->getCode($nw->getWebsites());
?>
</html>
