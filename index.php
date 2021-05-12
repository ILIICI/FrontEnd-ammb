

<!DOCTYPE html>
<html lang="ro">
    <?php include_once 'head.php';?>
    <body>
        <?php include_once 'navigation_bar.php';?>
        <div id="mycarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" >
                <div class="item active" >
                    <img style="width:1800px;max-height:400px;object-fit: cover;object-position: 80% 0%;"

                        src="img/1a.jpg"
                        alt="">
                </div>
                <div class="item">
                    <img style="width:1800px;max-height:400px;object-fit: cover;object-position: 20% 0%;"

                        src="img/2a.jpg" 
                        alt=""> 
                </div>
                <div class="item">
                    <img style="width:1800px;max-height:400px;object-fit: cover;object-position: 20% 10%;"

                        src="img/3a.jpg"
                        alt="">
                </div>
                <div class="item">
                    <img style="width:1800px;max-height:400px;object-fit: cover;object-position: 20% 50%;"

                        src="img/4a.jpg" 
                        alt="">
                </div>
                <div class="item">
                    <img style="width:1800px;max-height:400px;object-fit: cover;object-position: 20% 80%;"
                      src="img/5a.jpg" 
                        alt="">
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Inapoi</span>
            </a>
            <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Inainte</span>
            </a>
        </div>
        <div class="container-fluid text-center">
            <div class="row content">
                <!-- Col-sm-12 starts  -->
                <div class="col-sm-12 text-center content-pusher">
                    <!-- Row A starts  -->
                    <div class="row">
                        <div class="col-sm-10">
                            <h2>Asociația Moldovenilor din Marea Britanie</h2>
                            <h3 class="title_topic">Cine Suntem?</h3>
                            <p style="text-align:justify;line-height: 1.6em;font-size: 1.2em;">Asociația a fost creată de către câțiva tineri basarabeni studenți la Londra cu scopul de a conecta diaspora din Marea Britanie și de a promova valorile naționale. Fiind o organizație non-profit știm că uneori tot ce trebuie pentru a schimba lumea este un mic sprijin. În afară de susținerea comunității noastre de aici, prin diferite activități caritabile încercăm să contribuim și la țara de baștină. De la înființarea noastră în 2007, am fost hotărâți să facem un impact. Nucleul eforturilor noastre este de a aduce ideile proaspete și pasiunea echipei noastre la gama de activități în care suntem implicați. Prin activitatea noastră sperăm să atragem membri ai diasporei din toate categoriile de vârstă, iar împreună să contribuim la inovația și evoluția noastră. Deasemenea, o sursă de informare și colaborare pentru moldovenii care își fac studiile în Marea Britanie poate fi obținută prin intermediul paginei AMMB students, care servește drept suport tinerilor și îi ajută să construiască relații și schimb de experiență.</p>
                            <br>
                            <hr>
                            <img src="img/2.jpg" class="img-fluid second_picture" alt="Responsive image" style="max-width: 100%;">     
                        </div>
                        <?php include_once 'sidenav.php';?>
                    </div>
                    <!-- Row A ends  -->
                    <!-- Row B starts  -->
                    <div class="row">
                        <h2 class="title_topic">Funcția Noastră</h2>
                        <h3 class="title_topic" style="font-style: italic;">Să facem diferența!</h3>
                        <hr>
                    </div>
                    <!-- Row B ends  -->
                    <!-- Row C starts  -->
                    <div class="container-fluid">
                        <!-- 3 Cards DesktopVersion Start  -->
                        <div class="row bigslide">
                            <div class="col-sm-4 col-pusher container-fluid">
                                <div class="card cards card-custom-bg">
                                    <img class="box img-fluid " src="img/char.jpg" alt="Card image cap">
                                    <div class="card-body card-custom-bg">
                                        <p class="card-title">Caritate</p>
                                        <p class="card-text">Donațiile diasporei de aici pot face o schimbare acasă. De aceea proiectele noastre dezvoltă parteneriate cu ONG-uri din R.Moldova, iar donațiile ajung la oamenii care au cu adevărat nevoie.</p>
                                        <a href="/charity.php" class="btn btn-primary btn_pusher">Vezi mai mult!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-pusher">
                                <div class="card cards card-custom-bg">
                                    <img class="box img-fluid" src="img/buss.jpg" alt="Card image cap">
                                    <div class="card-body card-custom-bg">
                                        <p class="card-title">Dezvoltarea profesională</p>
                                        <p class="card-text">Dezvoltarea profesională este un proces complex, iar dobandirea de noi cunostințe și abilități poate fi dificilă petru cei mutați recent în Marea Britanie.</p>
                                        <a href="devprof.php" class="btn btn-primary btn_pusher" id="position_button">Vezi mai mult!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-pusher">
                                <div class="card cards card-custom-bg ">
                                    <img class="box img-fluid" src="img/party.jpg" alt="Card image cap">
                                    <div class="card-body card-custom-bg">
                                        <p class="card-title">Interacțiune Socială</p>
                                        <p class="card-text"> Unul din rolul asociației este de a integra cât mai bine diaspora și de a menține o legătură strânsă între mebrii acesteia. Acestea pot fi mai ușor de creat prin intermediul activităților organizate precum: Hiking, Meetup’s, Paintball, pubquiz.</p>
                                        <a href="social.php" class="btn btn-primary btn_pusher">Vezi mai mult!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3 Cards DesktopVersion END  -->
                        <!-- 3 Cards MobileVersion Starts  -->
                        <div class="row smallslide">
                            <div id="myCarouselProjects" class="carousel slide" data-ride="carousel" data-interval="4000">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarouselProjects" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarouselProjects" data-slide-to="1"></li>
                                    <li data-target="#myCarouselProjects" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="col-sm-4 col-pusher container-fluid">
                                            <div class="card cards card-custom-bg">
                                                <img class="box img-fluid " src="img/char.jpg" alt="Card image cap">
                                                <div class="card-body card-custom-bg">
                                                    <p class="card-title">Caritate</p>
                                                    <p class="card-text">Donațiile diasporei de aici pot face o schimbare acasă. De aceea proiectele noastre dezvoltă parteneriate cu ONG-uri din R.Moldova, iar donațiile ajung la oamenii care au cu adevărat nevoie.</p>
                                                    <a href="charity.php" class="btn btn-primary btn_pusher">Vezi mai mult!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4 col-pusher">
                                            <div class="card cards card-custom-bg">
                                                <img class="box img-fluid" src="img/buss.jpg" alt="Card image cap">
                                                <div class="card-body card-custom-bg">
                                                    <p class="card-title">Dezvoltarea profesională</p>
                                                    <p class="card-text">Dezvoltarea profesională este un proces complex, iar dobandirea de noi cunostințe și abilități poate fi dificilă petru cei mutați recent în Marea Britanie.</p>
                                                    <a href="devprof.php" class="btn btn-primary btn_pusher" id="position_button">Vezi mai mult!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="col-sm-4 col-pusher">
                                            <div class="card cards card-custom-bg ">
                                                <img class="box img-fluid" src="img/party.jpg" alt="Card image cap">
                                                <div class="card-body card-custom-bg">
                                                    <p class="card-title">Interacțiune Socială</p>
                                                    <p class="card-text"> Unul din rolul asociației este de a integra cât mai bine diaspora și de a menține o legătură strânsă între mebrii acesteia. Acestea pot fi mai ușor de creat prin intermediul activităților organizate precum: Hiking, Meetup’s, Paintball, pubquiz.</p>
                                                    <a href="social.php" class="btn btn-primary btn_pusher">Vezi mai mult!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 3 Cards MobileVersion ENDs  -->
                    </div>
                    <!-- Row C ends  -->
                </div>
                <!-- Col-sm-12 starts  -->
            </div>
        </div>
        <!-- Row D starts  -->
        <div class="container-fluid" style="padding-bottom:1%; width: 90%; margin-bottom:2%;height: 1.5vw; text-align: center;transform: skewX(-15deg);">
            <span id="testimonialfontsize">
            TESTIMONIALE
            </span>
        </div>
        <div class="container-fluid">
            <div class="row bigslide">
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:370px;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="height:365px;background-color:#06273a;color:white;padding-top:1%;">
                        <div class="item active">
                            <div class="col-sm-4 ">
                                <div class="card">
                                    <img src="img/oxana.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Oxana Boleac</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Îmi place foarte mult această comunitate fiindcă datorită evenimentelor organizate de membrii acestei echipe magnifice am cunoscut multe persoane super tari , tineri entuziasmați, talentați și plini de viață!!! Aștept cu nerăbdare următoarele evenimente și atmosfera caldă de acolo! Mulțumesc frumos tuturor organizatorilor și celor din culise care ne adună în Londra ca să ne simțim ca acasă."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/ionzamfir.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Ion Zamfir</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Vreau să recomand tuturor să participe la evenimentele organizate de AMMB, ei fac un lucru mare si unesc comunitatea diasporei din UK. Personal prin intermediul acestei platforme, mi-am făcut prieteni, mi-am schimbat spre bine cercul de comunicare, am primit multă si buna dispoziție, iar prin contribuțiile financiare am ajutat si pe cei de acasa, la mai mult si la mai mare AMMB!"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/eugen.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Eugen Stanciu</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Am făcut cunoștință cu "AMMB" cu mulți ani în urmă, dar mereu am ezitat să mă implic in evenimentele organizate de ei. În 2019 am reușit să organizăm în comun un eveniment social și totodată caritabil cu ocazia Crăciunului. Echipa "AMMB" m-a impresionat prin energia și dăruirea de sine de care a dat dovadă la evenimentul în cauză. Ulterior "AMMB" a venit cu multe alte proiecte noi și interesante pentru diaspora moldovenească din Marea Britanie. Mă bucur nespus de mult că există o astfel de organizație în Marea Britanie."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-6">
                                <div class="card">
                                    <img src="img/alexpinzaru.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Alexandru Pinzaru</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"AMMB este locul unde ai oportunitate să întâlnești oameni înteresanți din domenii de activitate diferite, să creezi conexiuni cu cei ce au interese comune cu ale tale, și nu în ultimul rînd să legi relații strînse de prietenie. Participînd mai mult de 5 ani la majoritatea evenimentelor organizate de AMMB, pot să confirm că avut impact pozitiv asupra dezvoltării mele atît personale cît și profesionale."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <img src="img/victoria.png" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Victoria Morozov</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Am foarte mult respect și admirație pentru cei care nu-și doresc schimbări doar pentru sine, ci și pentru cei din jur. Colaborarea cu AMMB, organizație creată pentru a sprijini atât Diaspora din UK cât și pe cei de acasă, îmi întărește credința că moldovenii pot contribui la crearea unui viitor mai prosper în Moldova. Membrii AMMB s-au dedicat strângerii de fonduri în sprijinul Asociației The Moldova Project (TMP) nu doar o dată, iar implicarea lor a contribuit la multe zâmbete în rândul copiilor vulnerabili de acasă. TMP ajută familiile social-vulnerabile cu mulți copii din satele Moldovei să depășească starea de vulnerabilitate și să ajungă la autosuficiență prin diverse intervenții, iar Diaspora moldovenească are un rol important în lupta celor vulnerabili de acasă."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row smallslide">
                <div id="myCarouselSmall" class="carousel slide" data-ride="carousel" data-interval="7000">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarouselSmall" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarouselSmall" data-slide-to="1"></li>
                        <li data-target="#myCarouselSmall" data-slide-to="2"></li>
                        <li data-target="#myCarouselSmall" data-slide-to="3"></li>
                        <li data-target="#myCarouselSmall" data-slide-to="4"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="background-color:#06273a;color:white;">
                        <div class="item active">
                            <div class="col-sm-4 ">
                                <div class="card">
                                    <img src="img/oxana.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Oxana Boleac</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Îmi place foarte mult această comunitate fiindcă datorită evenimentelor organizate de membrii acestei echipe magnifice am cunoscut multe persoane super tari , tineri entuziasmați, talentați și plini de viață!!! Aștept cu nerăbdare următoarele evenimente și atmosfera caldă de acolo! Mulțumesc frumos tuturor organizatorilor și celor din culise care ne adună în Londra ca să ne simțim ca acasă."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/victoria.png" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Victoria Morozov</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Am foarte mult respect și admirație pentru cei care nu-și doresc schimbări doar pentru sine, ci și pentru cei din jur. Colaborarea cu AMMB, organizație creată pentru a sprijini atât Diaspora din UK cât și pe cei de acasă, îmi întărește credința că moldovenii pot contribui la crearea unui viitor mai prosper în Moldova.
                                            Membrii AMMB s-au dedicat strângerii de fonduri în sprijinul Asociației The Moldova Project (TMP) nu doar o dată, iar implicarea lor a contribuit la multe zâmbete în rândul copiilor vulnerabili de acasă. TMP ajută familiile social-vulnerabile cu mulți copii din satele Moldovei să depășească starea de vulnerabilitate și să ajungă la autosuficiență prin diverse intervenții, iar Diaspora moldovenească are un rol important în lupta celor vulnerabili de acasă."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/eugen.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Eugen Stanciu</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Am facut cunoștință cu "AMMB" cu mulți ani în urmă, dar mereu am ezitat să mă implic in evenimentele organizate de ei. În 2019 am reușit să organizăm în comun un eveniment social și totodată caritabil cu ocazia Crăciunului. Echipa "AMMB" m-a impresionat prin energia și dăruirea de sine de care a dat dovadă la evenimentul în cauză. Ulterior "AMMB" a venit cu multe alte proiecte noi și interesante pentru diaspora moldovenească din Marea Britanie. Mă bucur nespus de mult că există o astfel de organizație în Marea Britanie."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/alexpinzaru.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Alexandru Pinzaru</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"AMMB este locul unde ai oportunitate sa intalnesti oameni interesanti din domenii de activitate diferite, sa creezi conexiuni cu cei ce au interese comune cu ale tale, si nu in ultimul rind sa legi relatii strinse de prietenie.
                                            Participind mai mult de 5 ani la majoritatea evenimentelor organizate de AMMB, pot sa confirm ca avut impact pozitiv asupra dezvoltarii mele atit personale cit si profesionale."
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/ionzamfir.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Ion Zamfir</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Vreau sa recomand tuturor sa participe la evenimentele organizate de AMMB, ei fac un lucru mare si unesc comunitatea diasporei din UK. Personal prin intermediul acestei platforme, mi-am facut prieteni, mi-am schimbat spre bine cercul de comunicare, am primit multa si buna dispozitie, iar prin contributiile financiare am ajutat si pe cei de acasă, la mai mult si la mai mare AMMB!"</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row D ends  -->
        <div class="container-fluid" style="width: 90%; height: 1.5vw; text-align: center;transform: skewX(-15deg);">
            <h3 class="title_topic">
                PARTENERII NOȘTRI
            </h3>
        </div>
        <div class="slider">
            <div class="slide">
                <img
                    sizes="(max-width: 200px) 100vw, 200px"
                    srcset="
                    img/partners/brd_hhih0r_c_scale,w_50.png 50w,
                    img/partners/brd_hhih0r_c_scale,w_200.png 200w"
                    src="img/partners/brd_hhih0r_c_scale,w_200.png"
                    alt="" style="width:70%;height:auto;" > 
            </div>
            <div class="slide">
                <img
                    sizes="(max-width: 200px) 100vw, 200px"
                    srcset="
                    img/partners/diez_uf2n0m_c_scale,w_50.png 50w,
                    img/partners/diez_uf2n0m_c_scale,w_200.png 200w"
                    src="img/partners/diez_uf2n0m_c_scale,w_200.png"
                    alt="" style="width:70%;height:auto;"> 
            </div>
            <div class="slide">
                <img
                    sizes="(max-width: 134px) 100vw, 134px"
                    srcset="
                    img/partners/ea_r2s0za_c_scale,w_50.png 50w,
                    img/partners/ea_r2s0za_c_scale,w_134.png 134w"
                    src="img/partners/ea_r2s0za_c_scale,w_134.png"
                    alt="" style="width:70%;height:auto;"> 
            </div>
            <div class="slide">
                <img
                    sizes="(max-width: 200px) 100vw, 200px"
                    srcset="
                    img/partners/emblem_n4c6an_c_scale,w_50.jpg 50w,
                    img/partners/emblem_n4c6an_c_scale,w_200.jpg 200w"
                    src="img/partners/emblem_n4c6an_c_scale,w_200.jpg"
                    alt="" style="width:70%;height:auto;">  
            </div>
        </div>
        <script>
            window.onload=function(){
            $('.slider').slick({
            autoplay:true,
            autoplaySpeed:1500,
            arrows:false,
            
            centerMode:true,
            slidesToShow:3,
            slidesToScroll:1
            });
            };
        </script>
        <?php include_once 'footer.php';?>
    </body>
</html>