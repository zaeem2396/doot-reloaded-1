@include('include.header')
<div class="main-wrapper page-aboutus">

    <!-- BREDCRUMB -->
    <section class="bredcrumb">
        <div class="bg-image text-center" style="background-image: url('https://res.cloudinary.com/dyelhjua9/image/upload/v1742495020/home-cleaning_h08gch.jpg');">
            <h1>{{$h1}}</h1>
        </div>
    </section>

    <section class="about-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <img src="https://res.cloudinary.com/dyelhjua9/image/upload/v1742495020/home-cleaning_h08gch.jpg"
                            alt="about-us"
                            class="img-fluid rounded w-100"
                            style="max-width: 100%; height: auto; object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-12 pt-4">
                    <p>A clean and organized home is not just aesthetically pleasing but also contributes to a healthier and happier lifestyle. At Home Doot, our professional <b>Home Cleaning Services In Thane</b> are designed to bring sparkle and freshness to every corner of your abode, offering a range of benefits for you and your family.
                    </p>
                    <li>Thorough Cleaning: Our trained professionals perform deep cleaning, reaching overlooked areas and ensuring a spotless environment.</li>
                    <li>Elimination of Dirt and Allergens: Removing dust, allergens, and pollutants creates a healthier indoor environment, especially beneficial for those with allergies or respiratory conditions.</li>
                    <li>Saves Time: Hiring professionals saves you valuable time and effort, allowing you to focus on other priorities.</li>
                    <li>Flexible Scheduling: Services tailored to your schedule offer convenience without disrupting your routine.</li>
                    <li>Attention to Detail: Professionals pay attention to your preferences and specific areas of concern, ensuring satisfaction with the results.</li>
                    <li>Environmentally Friendly: Some services use eco-friendly products, promoting a safer environment for your family and pets.</li>
                    <li>Improved Air Quality: Clean spaces promote better indoor air quality, contributing to overall well-being.</li>
                    <p>
                        If you or anyone you might know is searching for <b>Home Cleaning Services In Mumbai, Panvel, Kharghar, or Thane</b>, then you don’t have to look for it, because we are the destination for you. We have years of experience and expertise, with the help of which we always deliver the right set of home cleaning services. To know more, you can connect with us, and we will deliver you the best as per the requirement.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('include.footer')
    <script>
        const gotToHome = () => {
            window.location.href = '/';
        }
    </script>