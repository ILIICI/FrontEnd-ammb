

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
                            <h2>Asocia??ia Moldovenilor din Marea Britanie</h2>
                            <h3 class="title_topic">Cine Suntem?</h3>
                            <p style="text-align:justify;line-height: 1.6em;font-size: 1.2em;">Asociat??ia a fost creata?? de ca??tre ca??t??iva tineri basarabeni student??i la Londra cu scopul de a conecta diaspora din Marea Britanie s??i de a promova valorile nat??ionale. Fiind o organizat??ie non-profit s??tim ca?? uneori tot ce trebuie pentru a schimba lumea este un mic sprijin. ??n afara?? de sust??inerea comunita??t??ii noastre de aici, prin diferite activita??t??i caritabile i??ncerca??m sa?? contribuim s??i la t??ara de bas??tina??. De la i??nfiint??area noastra?? i??n 2007, am fost hota??ra??t??i sa?? facem un impact. Nucleul eforturilor noastre este de a aduce ideile proaspete s??i pasiunea echipei noastre la gama de activita??t??i i??n care suntem implicat??i. Prin activitatea noastr?? spera??m sa?? atragem membri ai diasporei din toate categoriile de va??rsta??, iar i??mpreuna?? sa?? contribuim la inovat??ia s??i evolut??ia noastra??. Deasemenea, o surs?? de informare ??i colaborare pentru moldovenii care ????i fac studiile ??n Marea Britanie poate fi ob??inut?? prin intermediul paginei AMMB students, care serve??te drept suport tinerilor ??i ??i ajut?? s?? construiasc?? rela??ii ??i schimb de experien????.</p>
                            <br>
                            <hr>
                            <img src="img/2.jpg" class="img-fluid second_picture" alt="Responsive image" style="max-width: 100%;">     
                        </div>
                        <?php include_once 'sidenav.php';?>
                    </div>
                    <!-- Row A ends  -->
                    <!-- Row B starts  -->
                    <div class="row">
                        <h2 class="title_topic">Func??ia Noastr??</h2>
                        <h3 class="title_topic" style="font-style: italic;">S?? facem diferen??a!</h3>
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
                                        <p class="card-text">Dona??iile diasporei de aici pot face o schimbare acas??. De aceea proiectele noastre dezvolt?? parteneriate cu ONG-uri din R.Moldova, iar dona??iile ajung la oamenii care au cu adev??rat nevoie.</p>
                                        <a href="/charity.php" class="btn btn-primary btn_pusher">Vezi mai mult!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-pusher">
                                <div class="card cards card-custom-bg">
                                    <img class="box img-fluid" src="img/buss.jpg" alt="Card image cap">
                                    <div class="card-body card-custom-bg">
                                        <p class="card-title">Dezvoltarea profesional??</p>
                                        <p class="card-text">Dezvoltarea profesional?? este un proces complex, iar dobandirea de noi cunostin??e ??i abilit????i poate fi dificil?? petru cei muta??i recent ??n Marea Britanie.</p>
                                        <a href="devprof.php" class="btn btn-primary btn_pusher" id="position_button">Vezi mai mult!</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-pusher">
                                <div class="card cards card-custom-bg ">
                                    <img class="box img-fluid" src="img/party.jpg" alt="Card image cap">
                                    <div class="card-body card-custom-bg">
                                        <p class="card-title">Interac??iune Social??</p>
                                        <p class="card-text"> Unul din rolul asocia??iei este de a integra c??t mai bine diaspora ??i de a men??ine o leg??tur?? str??ns?? ??ntre mebrii acesteia. Acestea pot fi mai u??or de creat prin intermediul activit????ilor organizate precum: Hiking, Meetup???s, Paintball, pubquiz.</p>
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
                                                    <p class="card-text">Dona??iile diasporei de aici pot face o schimbare acas??. De aceea proiectele noastre dezvolt?? parteneriate cu ONG-uri din R.Moldova, iar dona??iile ajung la oamenii care au cu adev??rat nevoie.</p>
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
                                                    <p class="card-title">Dezvoltarea profesional??</p>
                                                    <p class="card-text">Dezvoltarea profesional?? este un proces complex, iar dobandirea de noi cunostin??e ??i abilit????i poate fi dificil?? petru cei muta??i recent ??n Marea Britanie.</p>
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
                                                    <p class="card-title">Interac??iune Social??</p>
                                                    <p class="card-text"> Unul din rolul asocia??iei este de a integra c??t mai bine diaspora ??i de a men??ine o leg??tur?? str??ns?? ??ntre mebrii acesteia. Acestea pot fi mai u??or de creat prin intermediul activit????ilor organizate precum: Hiking, Meetup???s, Paintball, pubquiz.</p>
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
                                        <p class="card-text-testo" style="font-style: italic;">"??mi place foarte mult aceast?? comunitate fiindc?? datorit?? evenimentelor organizate de membrii acestei echipe magnifice am cunoscut multe persoane super tari , tineri entuziasma??i, talenta??i ??i plini de via????!!! A??tept cu ner??bdare urm??toarele evenimente ??i atmosfera cald?? de acolo! Mul??umesc frumos tuturor organizatorilor ??i celor din culise care ne adun?? ??n Londra ca s?? ne sim??im ca acas??."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/ionzamfir.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Ion Zamfir</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Vreau s?? recomand tuturor s?? participe la evenimentele organizate de AMMB, ei fac un lucru mare si unesc comunitatea diasporei din UK. Personal prin intermediul acestei platforme, mi-am f??cut prieteni, mi-am schimbat spre bine cercul de comunicare, am primit mult?? si buna dispozi??ie, iar prin contribu??iile financiare am ajutat si pe cei de acasa, la mai mult si la mai mare AMMB!"</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <img src="img/eugen.jpg" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Eugen Stanciu</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Am f??cut cuno??tin???? cu "AMMB" cu mul??i ani ??n urm??, dar mereu am ezitat s?? m?? implic in evenimentele organizate de ei. ??n 2019 am reu??it s?? organiz??m ??n comun un eveniment social ??i totodat?? caritabil cu ocazia Cr??ciunului. Echipa "AMMB" m-a impresionat prin energia ??i d??ruirea de sine de care a dat dovad?? la evenimentul ??n cauz??. Ulterior "AMMB" a venit cu multe alte proiecte noi ??i interesante pentru diaspora moldoveneasc?? din Marea Britanie. M?? bucur nespus de mult c?? exist?? o astfel de organiza??ie ??n Marea Britanie."</p>
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
                                        <p class="card-text-testo" style="font-style: italic;">"AMMB este locul unde ai oportunitate s?? ??nt??lne??ti oameni ??nteresan??i din domenii de activitate diferite, s?? creezi conexiuni cu cei ce au interese comune cu ale tale, ??i nu ??n ultimul r??nd s?? legi rela??ii str??nse de prietenie. Particip??nd mai mult de 5 ani la majoritatea evenimentelor organizate de AMMB, pot s?? confirm c?? avut impact pozitiv asupra dezvolt??rii mele at??t personale c??t ??i profesionale."
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card">
                                    <img src="img/victoria.png" class="card-img-top" alt="..." style="max-height:150px; border-radius: 50%;">
                                    <div class="card-body">
                                        <h5 class="card-title">Victoria Morozov</h5>
                                        <p class="card-text-testo" style="font-style: italic;">"Am foarte mult respect ??i admira??ie pentru cei care nu-??i doresc schimb??ri doar pentru sine, ci ??i pentru cei din jur. Colaborarea cu AMMB, organiza??ie creat?? pentru a sprijini at??t Diaspora din UK c??t ??i pe cei de acas??, ??mi ??nt??re??te credin??a c?? moldovenii pot contribui la crearea unui viitor mai prosper ??n Moldova. Membrii AMMB s-au dedicat str??ngerii de fonduri ??n sprijinul Asocia??iei The Moldova Project (TMP) nu doar o dat??, iar implicarea lor a contribuit la multe z??mbete ??n r??ndul copiilor vulnerabili de acas??. TMP ajut?? familiile social-vulnerabile cu mul??i copii din satele Moldovei s?? dep????easc?? starea de vulnerabilitate ??i s?? ajung?? la autosuficien???? prin diverse interven??ii, iar Diaspora moldoveneasc?? are un rol important ??n lupta celor vulnerabili de acas??."</p>
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
                                        <p class="card-text-testo" style="font-style: italic;">"??mi place foarte mult aceast?? comunitate fiindc?? datorit?? evenimentelor organizate de membrii acestei echipe magnifice am cunoscut multe persoane super tari , tineri entuziasma??i, talenta??i ??i plini de via????!!! A??tept cu ner??bdare urm??toarele evenimente ??i atmosfera cald?? de acolo! Mul??umesc frumos tuturor organizatorilor ??i celor din culise care ne adun?? ??n Londra ca s?? ne sim??im ca acas??."</p>
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
                                        <p class="card-text-testo" style="font-style: italic;">"Am foarte mult respect ??i admira??ie pentru cei care nu-??i doresc schimb??ri doar pentru sine, ci ??i pentru cei din jur. Colaborarea cu AMMB, organiza??ie creat?? pentru a sprijini at??t Diaspora din UK c??t ??i pe cei de acas??, ??mi ??nt??re??te credin??a c?? moldovenii pot contribui la crearea unui viitor mai prosper ??n Moldova.
                                            Membrii AMMB s-au dedicat str??ngerii de fonduri ??n sprijinul Asocia??iei The Moldova Project (TMP) nu doar o dat??, iar implicarea lor a contribuit la multe z??mbete ??n r??ndul copiilor vulnerabili de acas??. TMP ajut?? familiile social-vulnerabile cu mul??i copii din satele Moldovei s?? dep????easc?? starea de vulnerabilitate ??i s?? ajung?? la autosuficien???? prin diverse interven??ii, iar Diaspora moldoveneasc?? are un rol important ??n lupta celor vulnerabili de acas??."
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
                                        <p class="card-text-testo" style="font-style: italic;">"Am facut cuno??tin???? cu "AMMB" cu mul??i ani ??n urm??, dar mereu am ezitat s?? m?? implic in evenimentele organizate de ei. ??n 2019 am reu??it s?? organiz??m ??n comun un eveniment social ??i totodat?? caritabil cu ocazia Cr??ciunului. Echipa "AMMB" m-a impresionat prin energia ??i d??ruirea de sine de care a dat dovad?? la evenimentul ??n cauz??. Ulterior "AMMB" a venit cu multe alte proiecte noi ??i interesante pentru diaspora moldoveneasc?? din Marea Britanie. M?? bucur nespus de mult c?? exist?? o astfel de organiza??ie ??n Marea Britanie."</p>
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
                                        <p class="card-text-testo" style="font-style: italic;">"Vreau sa recomand tuturor sa participe la evenimentele organizate de AMMB, ei fac un lucru mare si unesc comunitatea diasporei din UK. Personal prin intermediul acestei platforme, mi-am facut prieteni, mi-am schimbat spre bine cercul de comunicare, am primit multa si buna dispozitie, iar prin contributiile financiare am ajutat si pe cei de acas??, la mai mult si la mai mare AMMB!"</p>
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
                PARTENERII NO??TRI
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