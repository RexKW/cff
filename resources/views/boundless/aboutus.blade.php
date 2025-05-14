@extends('layouts.template')

@section('title', 'About Us')

@section('content')
    <div class = "home-bg justify-content-center">
        <img src="/images/[BACKGROUND].jpg" class="bg-home-image" alt="" draggable="false">
        <img src="/images/[BACKGROUND2].webp" class="bg-home-image" alt="" draggable="false">
        <div class="padding container">
            <div class = "text-start">
                <p style = "text-align: justify;" class = "fs-min10 text-white-custom px-2 headline" data-aos = "fade-up" data-aos-duration = "1500"> Vision</p>
                <p style = "text-align: justify;" class = "fs-8 text-white-custom body-text px-2" data-aos = "fade-up" data-aos-duration = "1500"> Creating a festival for Indonesians and international filmmakers, especially students, that focuses on the values of integrity, professionalism, and entrepreneurship.</p>
            </div>
            <div class = "text-start">
                <p style = "text-align: justify;" class = "fs-min10 text-white-custom px-2 headline" data-aos = "fade-up" data-aos-duration = "1500"> mission</p>
                <p style = "text-align: justify;" class = "fs-8 text-white-custom body-text px-2" data-aos = "fade-up" data-aos-duration = "1500"> 1. Organizing film festivals for students and students who are professionally managed by the Ciputra University Surabaya academic community.  <br>
                    2. Realizing the appreciation for Indonesians and world film people by upholding integrity values.  <br>
                    3. Providing entrepreneurship insights and entrepreneurial collaboration opportunities in the field of film.  </p>
            </div>
            <div class = "text-start">
                <p style = "text-align: justify;" class = "fs-min10 text-white-custom px-2 headline" data-aos = "fade-up" data-aos-duration = "1500"> Core Value</p>
                <p style = "text-align: justify;" class = "fs-8 text-white-custom body-text px-2" data-aos = "fade-up" data-aos-duration = "1500"> 1.<u>Optimal Screening Experience</u> presented by CFF by providing an optimal film viewing experience in the form of film screening programs in cinemas with international standards that guarantee the quality of screening and audience comfort.  <br>
                2.<u>Intensive Learning</u> refers to CFF's efforts in presenting various programs that become comfortable spaces for learning, discussing, and working with fellow filmmakers or practitioners, such as learning in the form of workshops that involve participants to actively receive material and implement practical skills within a certain time that has been designed.<br>
                3.<u>Enjoyable Vibes</u> will be implemented in creating a series of events that have an atmosphere where it can be enjoyed comfortably, fun, and positively. </p>
            </div>
            <div class="director-container row fw-bold">
                <p style = "text-align: justify;" class = "fs-min10 text-center text-md-start text-white-custom px-2 headline col-12" data-aos = "fade-up" data-aos-duration = "1500"> festival Director</p>
                <div class = "text-start mr-md-10 order-2 order-md-1 col-12 col-md-8">
                    <p style = "" class = "fs-2 text-center text-md-start text-white-custom body-text-bold px-2" data-aos = "fade-up" data-aos-duration = "1500"> EMMA REGINA CHANDRA</p>
                    <p style = "text-align: justify;" class = "fs-8 text-white-custom body-text px-2" data-aos = "fade-up" data-aos-duration = "1500">Today's technological advances have created opportunities for filmmaking to transcend traditional boundaries and unlock new creative possibilities. Tools such as Artificial Intelligence (AI) and virtual production streamline film production by automating labor-intensive tasks, reducing costs, and enabling real-time creative decisions. As the festival director of 4th Ciputra Film Festival, we embrace this transformative moment with our theme, "Boundless". This year, Ciputra Film Festival is expanding our reach to welcome filmmakers from around the world to celebrate creativity without limits through innovative narratives, diverse cultural perspectives, or the groundbreaking use of AI and emerging technologies. Ciputra Film Festival is committed to fostering a vibrant, inclusive platform where creativity knows no borders, inspiring filmmakers everywhere to push the boundaries of cinema and shape the future of filmmaking.</p>
                </div>
                <div class="fest-director order-1 order-md-2 col-12 my-auto col-md-4" data-aos = "fade-up" data-aos-duration = "1500">
                    <img src="/images/Emma.png" class="w-100" alt="" data-aos = "fade-up">
                </div>

            </div>
            
        </div>
    </div>
@endsection