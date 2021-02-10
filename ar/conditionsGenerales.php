<!DOCTYPE html>
<html lang="en">

<head>


    <?php
    $con = mysqli_connect('localhost', 'root', '', 'asteriac_asteria');

    if ($con->connect_error) {
        die("Connexion Failed" . $con->connect_error);
    }

    $sql = "SELECT * FROM `meta` ";

    $result =    $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<meta name="' . $row['name'] . '" content="' . $row['content'] . '"/>';
        }
    } ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Asteria Car Luxury | LE BLOG</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
    <!-- Third party plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />

</head>

<body id="page-top">


    <div class="d-flex flex-row p-2 justify-content-between kd-on">
        <div class="p-2 kd-on text-balck-50" onclick="onclickLogo();" style="cursor: pointer;">
            <img height="40px" src="../assets/img/logo.jpg" />
            Asteria Car
        </div>
        <div class="p-2 kd-on">
            <!-- <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z" />
            </svg>
            06 88 60 00 00</a>
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
            </svg>
            asteriacar@gmail.com
            </a> -->
            <!-- <img height="40px" src="assets/img/logo.jpg" />
            Asteria Car -->
        </div>
        <div class="p-2 kd-on">
            <a href="../">
                <img height="30px" src="../assets/img/france.png" />

            </a>
            <a href="">
                <img height="30px" src="../assets/img/maroc.png" />

            </a>
            <a href="../en/">
                <img height="30px" src="../assets/img/etats-unis.png" />

            </a>
        </div>
    </div>

    <!-- SNIPPET CODE: 1.NAVBAR TOGLLE BUTTON-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">


        <!-- SNIPPET CODE: 1.NAVBAR TOGLLE BUTTON-->
        <div class="navbar-toggler-left">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>


        <!-- SNIPPET CODE: 2.NAVBAR MAIN MENU-->

        <div class="collapse navbar-collapse flex-column " id="navbar">
            <ul class="navbar-nav  w-100 justify-content-end px-3">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">الصفحة الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="model.php">طراز السيارة <span class="sr-only">span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link active" href="conditionsGenerales.php">شروط عامة <span class="sr-only">span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="blog.php">مدونة <span class="sr-only"></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="contact.php">اتصل بنا <span class="sr-only">span></a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="page-section bg-dark" style="padding: 6rem 0;" id="about" style="direction: rtl; text-align: right;">
        <div class="container">
            <div class="row ">
                <div class="col-lg-12 ">
                    <h2 class="text-white mt-0 text-center"> شروط عامة </h2>
                    <hr class="divider">

                    <div style="margin: 100px;"></div>

                    <h5 class="text-white mt-0" style="  text-align: right;">عقد ايجار : </h5>

                    <p class="text-white-50 mb-4" style="  text-align: right;">
                        إنه عقد بين الوكالة والسائق الرئيسي ، يجب على كلا الطرفين التقيد الصارم بالشروط العامة لتأجير السيارة. </p>

                    <h5 class="text-white mt-0" style="  text-align: right;"> العمر السائق : </h5>

                    <p class="text-white-50 mb-4" style="  text-align: right;">
                        يجب أن يكون عمر السائق 23 عامًا على الأقل وأن يحمل رخصة قيادة سارية ولديه أكثر من عامين من الأقدمية. يمكن فقط للسائق المحدد في العقد تولي القيادة. </p>
                    <h5 class="text-white mt-0" style="  text-align: right;">استخدام السيارة : </h5>

                    <p class="text-white-50 mb-4" style="  text-align: right;"><br />
                        - سيتم إرفاق وصف لحالة السيارة بأوراقك وبعقدك. تقوم الوكالة بتسليم سيارة إليك ، بشرط يتوافق مع الوصف ، والذي يجب أن يوافق عليه المستأجر كتابةً ، <br ​​ /> <br /> - مفتش برجاء الحرص على السيارة قبل مغادرتك الوكالة ،
                        <br /> <br /> - لن تأخذ الوكالة في الاعتبار المطالبات المتعلقة بالضرر الواضح الذي لم يتم الإبلاغ عنه عندما تم توفير السيارة. <br /> <br /> - أثناء الترميم ، يجب أن تكون حالة المركبة مناسبة للوصف.
                        <br /> <br /> - ستؤدي جميع تكاليف الإصلاح اللاحقة بسبب خطأ المستأجر أو طرف ثالث محدد إلى تكلفة إضافية على الإيجار. <br /> <br /> - يحق للمستأجر التنقل بالسيارة في التراب المغربي فقط.
                        <br /> <br /> - المستأجر مسؤول عن الجرائم المرتكبة خلال فترة الإيجار ، حيث يمكن إرسال تفاصيل الاتصال الخاصة به إلى السلطات إذا لزم الأمر.
                        <br /> <br /> - يمنع منعاً باتاً:
                        <br /> <br /> 1. قم بتأجير السيارة مرة أخرى ،
                        <br /> <br /> 2. المشاركة في التجمعات / المسابقات مع السيارة.
                        <br /> <br /> 3. ارتكاب جريمة متعمدة.
                        <br /> <br /> - في حالة حدوث ضرر أو سرقة يجب على المستأجر إبلاغ الوكالة خلال مدة لا تتجاوز 48 ساعة. يُطلب منه إرسال التقرير الودي للوكالة في حالة وقوع حادث أو إيصال إقرار بالسرقة صادر من السلطات في حالة السرقة وكذلك مفاتيح ووثائق السيارة.
                        <br /> <br /> - يجب أن يكون المستأجر متيقظًا لأي إشارة تنبعث من أضواء التحذير التي تظهر على لوحة عدادات السيارة وأن يقوم بإجراء الفحوصات المعتادة (ضغط الإطارات ومحرك مستوى الزيت والمياه وما إلى ذلك) عند الحاجة.
                        <br /> <br /> - سيتم تسليم السيارة لك بحالة الإطارات وفقًا لأنظمة الطريق. في حالة تلف إحداها ، يلتزم المستأجر باستبدالها فورًا على نفقته بإطارات من نفس الحجم ونفس النوع ونفس العلامة التجارية.
                    </p>

                    <h5 class="text-white mt-0" style="  text-align: right;"> مدة الموقع : </h5>

                    <p class="text-white-50 mb-4" style="  text-align: right;"><br /><br />
                        - يوافق المستأجر على إعادة السيارة إلى وكالة التأجير في التاريخ المحدد في العقد.
                        <br /> <br /> - يتم احتساب فترة الإيجار من وقت إتاحة السيارة.
                        <br /> <br /> - مدة عقد الإيجار لا تقل عن 3 أيام.
                    </p>
                    <h5 class="text-white mt-0" style="  text-align: right;">عودة السيارة : </h5>

                    <p class="text-white-50 mb-4" style="  text-align: right;">
                        <br /> <br /> - يجب أن تتم إعادة السيارة خلال ساعات عمل الوكالة.
                        <br /> <br /> - في حالة العودة المبكرة ، لن تمنح الوكالة أي استرداد لأيام الإيجار غير المستخدمة.
                        <br /> <br /> - في حالة التأخر في العودة ، من المهم أن نقدم إلى وكالتنا طلبًا للتمديد ، بالإضافة إلى الدفع مقابل أيام الإيجار الإضافية.
                    </p>

                    <hr class="solid  my-4 " style="background-color: transparent;">



    </section>




    <!-- Footer-->
    <footer class="bg-dark py-5">
        <div class="container">
            <div class="small text-center text-muted">
                <p id="date"></p>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->

    <script>
        n = new Date();
        y = n.getFullYear();
        m = n.getMonth() + 1;
        d = n.getDate();
        document.getElementById("date").innerHTML = "Copyright ©" + y + "    ASTERIA CAR LUXURY -كل الحقوق محفوظة .";
    </script>

    <!-- Bootstrap core JS-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- This is code for change input in front end-->
</body>

</html>