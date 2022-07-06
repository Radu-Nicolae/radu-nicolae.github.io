<?php
require_once "Service.php";

class Services
{

    public function getDataBase()
    {
        $webDeveloper = new service("Web Developer", "HTML and CSS are the languages that make the magic happen transforming the code into a website, containing colors, shadows, different alignemtents and sizes of elements, etc.", 'HTML și CSS sunt limbaje care transformă liniile de cod într-un site web, conținând culori, umbre, diferite alinieri și dimensiuni ale elementelor, etc.', 'flaticon-flasks');
        $jsDeveloper = new service("Javascript Developer", "Javascript, or JS, makes the website react to some of your actions. A button from a website is programmed in Javascript, as well as the cookies (not the tasty ones).", 'Javascript, sau JS, este limbajul de programare care ”învață” un website să reacționeze la anumite acțiuni ale utilizatorului. De exemplu, un buton, prezent pe un site, este programat în Javascript, precum și "coockie-urile".', 'flaticon-innovation');
        $webDesigner = new service("Web Designer", "CSS, or Cascading Style Sheets, is the programming language that adds style to the HTML. This is the reason we have colors or diferent text sizes. And alingnment. And shadows.", 'CSS, numit și Cascading Style Sheets, este limbajul de programare care dă culoare unui website. La propriu. Și nu doar culoare, datorită CSS-ului textele au diferite dimensiuni, există alinieri ale elementelor, decorații, umbre, etc.', 'flaticon-ux-design');
        $phpDeveloper = new Service("PHP Developer", "PHP is an indispensable server-side programming language and makes developers' life much easier when working with both external and internal data.", "PHP este un limbaj indispensabil de programare server-side care face viața programatorilor mult mai ușoară atunci când lucrează atât cu date externe, cât și interne.", "flaticon-ux-design");

        $servs = array(
            $webDeveloper,
            $jsDeveloper,
            $phpDeveloper
        );

        return $servs;
    }

    public function getCode($services, $lang)
    {
        include 'components\DataBase.php';
        $servicesDBB = array(
            "Services", "Servicii"
        );

        $servicesCode = '';
        for ($i = 0; $i < sizeof($services); $i++) {
            $service = $services[$i];

            $codePerItem = '<div class="col-md-4 text-center d-flex ftco-animate fadeInUp ftco-animated">
                        <a class="services-1 shadow">
                                    <span class="icon">
                                        <i class="' . $service->getClass() . '"></i>
                                    </span>
                            <div class="desc">
                                <h3 class="mb-5">' . $service->getTitle() . '</h3>
                                <p>' . (($lang == 0)?($service->getDescription()):($service->getDescriptionRo())) . '</p>
                            </div>
                        </a>
                    </div>
                    ';



            $servicesCode .= $codePerItem;
        }



        $code = '
        <section class="ftco-section">
            <div class="container-fluid px-md-5">
                <div class="row justify-content-center py-5 mt-5">
                    <div class="col-md-12 heading-section text-center ftco-animate fadeInUp ftco-animated">
                        <h1 class="big big-2">' . $servicesDBB[$lang] . '</h1>
                        <h2 class="mb-4">' . $servicesDBB[$lang] . '</h2>
                        <p></p>
                    </div>
                </div>
                <div class="row">
                    ' . $servicesCode . '
                </div>
            </div>
        </section>';

        return $code;
    }

}

?>

<html>
<?php
$serv = new Services();
echo ($serv->getCode($serv->getDataBase(), $lang));
?>
</html>


