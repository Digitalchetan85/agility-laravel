@extends('layout')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 7"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
    </div>
    <div class="carousel-inner">
        @foreach ($images as $image)
        <div class="carousel-item {{$image['id']==18?'active':''}}">
            <a href="{{$image['link']}}" target="_blank">
                <img src="{{ $image['imageurl'] }}" alt="{{$image['alt']}}" class="d-block w-100"/>
            </a>
        </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div id="about" class="pt-3 pb-3 pt-md-5 pb-md-5 bg-light">
    <div class="container">
        <Row class="justify-content-center">
            <Col md={10}>
            <div class="text-center">
                <h2 class="pt-2 pb-2 text-primary">
                    "Digital Agility Institute"
                </h2>
                <p>
                    Despite so many certifications flourishing in the markets
                    across the globe, the success rate is transforming
                    organizations to be Agile is much smaller.
                </p>
            </div>
            <div class="text-center p-2 bg-white shadow">
                <h4 class="pt-2 pb-2 text-primary">Our Mission</h4>
                <p>
                    "To help you and your organizations to successfully transform
                    and navigate the extreme disruptions, for you to continue to
                    thrive & excel through continuous evolution & high value
                    creation".
                </p>
                <p>
                    We intend to accomplish this by helping Agile Coaches, Change
                    Agents & Organizational Leaders and Executives integrate Agile
                    Values & Principles into their mindset thereby influencing
                    their behaviors and habits that help them inspire whoever they
                    interact with.
                </p>
                <p>
                    We ensure this by using experiential learning & coaching
                    mindset in our programs rather than teaching. We run the
                    highest quality programs at a price you feel valued to invest.
                </p>
            </div>
            </Col>
        </Row>
    </div>
</div>

<div id="about" class="pt-3 pb-3 pt-md-5 pb-md-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 align-self-center">
                <h2 class="pt-2 pb-2 text-primary">
                    Digital Agility Framework
                </h2>
                <p>
                    “Digital Agility is the ability of an organization to digitalize
                    their spectrum of products and services with a goal of achieving
                    enterprise agility being the flag bearer which helps them derive
                    better customer centricity, employee engagement, culture of
                    collaboration, continuous improvement and innovation to thrive &
                    excel in accomplishing their business vision & strategies”.
                </p>
                <p>
                    It requires proactively looking out for global challenges that
                    are driven by both people & the environment around them and the
                    opportunities they present, developing new technologies,
                    products, practices and behaviors to resolve them considering
                    the emerging business, political and people landscape for
                    economic, social and environmental risks.
                </p>
            </div>
            <div class="col-md-4 align-self-center">
                <Image src="/assets/images/temp1.png" alt="Slide 1" class="img-fluid rounded shadow-sm" />
            </div>
        </div>
    </div>
</div>

<div class="pt-3 pb-3 pt-md-5 pb-md-5 bg-light">
    <div class="container">
        <h2 class=" pt-2 pb-2 text-center text-primary">Training</h2>
        <p class="text-center">
            We specialize in imparting experiential learning for people on
            ICAgile Courses, Scaled Agile (SAFe), DevOps Courses (DASA) and
            Project Management (PMI) apart from our own flagship programs. We
            have experts who are accredited for these courses and have trained
            people from across the globe to excel and enhance their skillsets.
        </p>
        <div class="owl-carousel owl-theme" id="trainingSlider">
            @foreach ($trainings as $image)
            <div class="item">
                <a href="{{$image['link']}}" target="_blank">
                    <img src="{{ $image['imgurl'] }}" alt="{{$image['alt']}}" class="img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="pt-3 pb-3 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class=" pt-2 pb-2 text-center text-primary">Mentoring</h2>
        <p class="text-center">
            Mentoring is all about giving people broader outlooks, more things to consider. People want to be around people who are exceptional and those who can provide an opportunity for them to apprise situations and cultivate their own ways. You mentor by advice, by your wisdom. We mentor people through stories of what we and others we have worked with, have done in situations like the associates, make them learn from, to gain insights. As a mentor, we work closely with the people to develop new abilities and interests in the areas they are keen to explore.
        </p>
        <p class="text-center">
            We have expertise in the field of Executive / Leadership Coaching, Transforming Organizations to accomplish Digital Agility by adopt new ways of working & leading. We provide mentoring services to Agile Coaches, Scrum Masters, Senior Leaders & Change Agents to enhance their skill sets.
        </p>
        <div class="owl-carousel owl-theme" id="mentoringSlider">
            @foreach ($mentoring as $image)
            <div class="item">
                <a href="{{$image['link']}}" target="_blank">
                    <img src="{{ $image['imgurl'] }}" alt="{{$image['alt']}}" class="img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="pt-3 pb-3 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class=" pt-2 pb-2 text-center text-primary">Coaching</h2>
        <p class="text-center">
            Coaching is a process of working with a client to explore and resolve personal and professional challenges. For executives, coaching is often used as a tool to help accelerate the development of leadership skills.
        </p>
        <div class="owl-carousel owl-theme" id="coachingSlider">
            @foreach ($coaching as $image)
            <div class="item">
                <a href="{{$image['link']}}" target="_blank">
                    <img src="{{ $image['imgurl'] }}" alt="{{$image['alt']}}" class="img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="pt-3 pb-3 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class=" pt-2 pb-2 text-center text-primary">Assessments</h2>
        <div class="owl-carousel owl-theme" id="assessmentSlider">
            @foreach ($assessments as $image)
            <div class="item">
                <a href="{{$image['link']}}" target="_blank">
                    <img src="{{ $image['imgurl'] }}" alt="{{$image['alt']}}" class="img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="pt-3 pb-3 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class=" pt-2 pb-2 text-center text-primary">Resources</h2>
        <div class="owl-carousel owl-theme" id="resourcesSlider">
            @foreach ($resources as $image)
            <div class="item">
                <a href="{{$image['link']}}" target="_blank">
                    <img src="{{ $image['imgurl'] }}" alt="{{$image['alt']}}" class="img-fluid">
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="pt-3 pb-3 pt-md-5 pb-md-5">
    <div class="container">
        <h2 class=" pt-2 pb-2 text-center text-primary">Youtube Videos</h2>
        <div class="owl-carousel owl-theme" id="youtubeSlider">
            @foreach ($videos as $image)
            <div class="text-center m-2 ratio ratio-16x9" key={video.id}>
                <iframe src={{$image['link']}} title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
            </div>
            @endforeach
        </div>
        <div class="text-center">
            <a class="btn btn-primary" href="">View more Videos</a>
        </div>
    </div>
</div>


<div class="pt-3 pb-3 pt-md-5 pb-md-5" id="testimonial-slider">
    <div class="container">
        <h2 class=" pt-2 pb-2 text-center text-primary">Testimonials</h2>
        <div class="owl-carousel owl-theme" id="testimonialSlider">
            @foreach ($testimonials as $image)
            <div class="item">
                <div class="border border-primary m-2 p-3 rounded" key={index}>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center">
                                <img src="{{$image['imgurl']}}" alt="{{$image['alt']}}" class="img-fluid rounded-circle" width="200px" height="200px" />
                            </div>
                            <blockquote class="blockquote mb-0">
                                <p class="pt-3">{{$image['content']}}</p>
                                <footer class="blockquote-footer">
                                    <cite title="Source Title">{{$image['name']}}</cite>
                                </footer>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>




@stop