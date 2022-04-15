<?= $this->extend('index');?>
<?= $this->section('bodycontent');?>
<body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Fariz Putra</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src ="assets/img/Fariz1.jpg" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#experience">Pengalaman</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#education">Pendidikan</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#interests">Hobi</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#awards">Certifications</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Fariz
                        <span class="text-primary">Putra</span>
                    </h1>
                    <div class="subheading mb-5">
                        JL. Bhayangkara Gg. Dewa 2· Sukabumi · (+62) 81220789473 ·
                        <a href="Farizputrarizki@gmail.com">Farizputrarizki@gmail.com</a>
                    </div>
                    <p class="lead mb-5">Saya sebagai pemikir visioner dan kreatif dengan keterampilan analitis yang kuat mahir dalam mengkonseptualisasikan solusi yang menyelaraskan analisis tingkat lanjut dengan tujuan strategi bisnis dalam tingkat risiko yang dapat diterima</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#!"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">Pengalaman</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Business Analyst</h3>
                            <div class="subheading mb-3"> IT Business Analyst</div>
                            <p>Meningkatkan kualitas produk dan layanan TI pada perusahaan, menganalisis data untuk menginformasikan keputusan bisnis, dan menemukan solusi teknologi untuk kebutuhan bisnis</p>
                        </div>
                        
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">Business Analyst</h3>
                            <div class="subheading mb-3"> Management Analyst</div>
                            <p>Merekomendasikan cara-cara untuk meningkatkan efisiensi organisasi. Mereka menasihati manajer tentang bagaimana membuat organisasi lebih menguntungkan melalui pengurangan biaya dan peningkatan pendapatan.</p>
                        </div>
                        
                   
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Education</h2>
                   <?php foreach ($porto as $row): ?>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?=$row['edu_name']?></h3>
                            <div><?=$row['edu_detail']?></div>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary"><?=$row['edu_in']?> <i>to</i> <?=$row['edu_out']?></span></div>
                    </div>
                    <?php endforeach; ?>
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Skills</h2>
                
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Data Gathering & Analysis 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Financial Structures
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Business Process Improvment
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Risk Analysis & Decision Making
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">Hobi</h2>
                    <p>Selain menjadi Business Analysis saya mempunyai hobi jual beli saham dan treding saham bisa juga disebut broker saham</p>
                    <p class="mb-0">Karena hobi tersebut dapat membantu saya cepat dalam menganalisi kondisi suatu pasar/perusahaan yang akan berguna di skill pekerjaan saya </p>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fa-solid fa-certificate"></i></span>
                            Business Analyst MIRAE
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-solid fa-certificate"></i></span>
                            Pemateri WEBINAR Nasional "the Risk Of Business Analyst"
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-solid fa-certificate"></i></span>
                            Peserta Seminar Se-Asean Di Malaysia Tentang Analisis Perusahaan 
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-solid fa-certificate"></i></span>
                           Juara 1 Tentang Problem Solving Bursa Efek
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <?=$this->endSection();?>