
<main class="site-wrapper">
    <section class="pt-table">
        <div class="pt-tablecell page-welcome relative">
            <div class="author-image-large">
                <img src="{{ asset('assets/images/myimg') }}/{{ $mains->image }}" alt="">
            </div>
            <div class="container">
                {{-- home start--}}
                <div class="row home" id="home">
                    <div class="col-xs-12 col-md-12">
                        <p class="animate__animated animate__bounce">{{ $mains->title }}</p>
                        <h1>{{ $mains->intro }}</h1>
                        <p><span>{{ $mains->subtitle }}</span></p>
                        <a href="" class="hbtn hireme">Hire Me</a>

                        @livewire('download-component')
                        <div class="contact-block pt-3">
                            <ul class="contact-social">
                                <li>
                                    <span class="contact-social-hex"></span>
                                    <a href="{{ $admin_contacts->facebook }}"target="_blank"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li>
                                    <span class="contact-social-hex"></span>
                                    <a href="{{ $admin_contacts->twitter }}"target="_blank"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <span class="contact-social-hex"></span>
                                    <a href="{{ $admin_contacts->telegram }}"target="_blank"><i class="fab fa-telegram"></i></a>
                                </li>
                                <li>
                                    <span class="contact-social-hex"></span>
                                    <a href="{{ $admin_contacts->github }}"target="_blank"><i class="fab fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- home end --}}

                {{-- About Me --}}
                <div class="row py-4 mx-auto text-center" id="about">
                    <div class="col-md-12">
                        <div class="page-title text-center">
                            <h2>About <span class="primary">me</span> <span class="title-bg">Nang Myintzu</span></h2>
                        </div>
                    </div>
                </div>

                <div class="about_skill">
                <div class="row mx-auto">

                    <div class="col-md-6">
                        <div class="about-author">

                            <figure class="author-thumb">
                                <img src="{{ asset('assets/images/my_profile') }}/{{ $abouts->profile }}" alt="">
                            </figure>
                            <div class="author-desc">
                                <p><b>Date of birth:</b> <span> {{ $abouts->date_of_birth }} </span></p>
                                <p><b>Nationality:</b> <span> {{ $abouts->nationality }} </span></p>
                                <p><b>Religion:</b> <span> {{ $abouts->religion }} </span></p>
                                <p><b>Language:</b> <span> {{ $abouts->language }} </span></p>
                                <p><b>Expert in:</b> <span> {{ $abouts->expert_in }} </span></p>
                                <p><b>Freelance:</b> <span> {{ $abouts->freelance }} </span></p>
                            </div>
                        </div>
                        <p class="about-me">{{ $abouts->objective }}</p>
                    </div>

                    <div class="col-md-6 skill">
                        <div class="section-title clear">
                            <h5 class="myskills">My Skill</h5>
                        </div>
                        <div class="skill-wrapper">
                            @foreach ($skills as $skill)
                                <div class="progress clear">
                                    <div class="skill-name">{{ $skill->name }}</div>
                                    <div class="skill-bar">
                                        <div class="bar"style="width: {{ $skill->percent }}%"></div>
                                    </div>
                                    <div class="skill-lavel">{{ $skill->percent }}%</div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                </div>

                {{-- service start --}}
                <div class="row py-4" id="service">
                    <div class="col-xs-12 col-lg-offset-1 col-lg-10 mx-auto">
                        <div class="page-title text-center">
                             <h2>Awesome <span class="primary">Services</span> <span class="title-bg">Services</span></h2>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consequatur eveniet quis dolorem rerum quas impedit, provident corrupti rem molestiae ab, nemo laborum suscipit? Minus neque reprehenderit veritatis doloremque voluptatum.</p>
                        </div>
                        <div class="hexagon-menu services clear">

                        @foreach($services as $service)
                                <div class="service-hex">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 372 424.5" style="enable-background:new 0 0 372 424.5;" xml:space="preserve">
                                    <g>
                                        <polygon class="st0" points="359.9,314.1 186.9,414 14,314.1 14,114.4 186.9,14.6 359.9,114.4"/>
                                        <polygon class="st1" points="331.2,297.6 186.9,380.9 42.6,297.6 42.6,131 186.9,47.6 331.2,131"/>
                                    </g>
                                </svg>

                                <div class="content">
                                    <div class="icon">
                                         <i class="{{$service->icon}}"></i>
                                    </div>
                                    <h4>{{$service->name}}</h4>
                                    <p>{{ $service->service_description}}</p>
                                </div>
                            </div>
                        @endforeach

                        </div>

                    </div>

                </div>
                {{-- service end --}}

                {{--  Portfolio start  --}}
                <div class="row pt-4" id="project">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 mx-auto">
                        <div class="page-title text-center">
                            <h2>My <span class="primary">works</span> <span class="title-bg">Porject</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>



                <div class="row pj-group px-5">
                    @foreach ($projects as $project)
                    <div class="col-md-4 pj-item">
                        <figure class="works-item">
                            <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="">
                            <div class="overlay"></div>
                            <figcaption class="works-inner">
                                <h5>{{ $project->pj_title }}</h5>
                                <p>{{ $project->language }}</p>
                            </figcaption>
                        </figure>
                    </div>
                    @endforeach
                </div>

                {{--  Portfolio end  --}}

                {{-- Team --}}

                <div class="row pt-4" id="team">
                    <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8 mx-auto">
                        <div class="page-title text-center">
                            <h2>My <span class="primary">Team</span><span class="title-bg">Member</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>

                <div class="row px-5 pb-4">
                    <div class="col-md-12 mx-auto">
                        <div class="team">
                            <div class="row">
                                @foreach ($teams as $team)
                                    <div class="col-md-6 item clear">
                                        <figure class="thumb">
                                            <div class="tm-hex" style="background-image: url('{{ asset('assets/images/member_profile') }}/{{ $team->author_profile }}');">
                                                <div class="hexTop"></div>
                                                <div class="hexBottom"></div>
                                            </div>

                                        </figure>
                                        <div class="text">
                                            <figcaption class="px-5">
                                                <h4>{{ $team->member_name }}</h4>
                                                <span>{{ $team->post }}</span>
                                            </figcaption>
                                            <p class="px-5">{{ $team->member_obj }} </p>
                                        </div>
                                    </div>
                                @endforeach



                        </div>
                        </div>
                    </div>
                </div>
                {{-- Team --}}

                {{--  Contact Start  --}}
                <div class="row pt-4" id="contact">
                    <div class="col-xs-12 mx-auto">
                        <div class="page-title text-center">
                            <h2>Get in  <span class="primary">touch</span> <span class="title-bg">Contact</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </div>
                <div class="row pt-2 pb-4">
                    <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 mx-auto">
                        <div class="contact-block">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope-open-text"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Email</h4>
                                    <p><a href="mailto:{{ $admin_contacts->email }}">{{ $admin_contacts->email }}</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-block">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone-square-alt"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Phone</h4>
                                    <p><a href="tel:{{ $admin_contacts->phone }}">{{ $admin_contacts->phone }}</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="contact-block">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker-alt"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Address</h4>
                                    <p><a href="#">{{ $admin_contacts->address }}</a></p>
                                </div>
                            </div>
                        </div>


                        <ul class="contact-social">
                            <li>
                                <span class="contact-social-hex"></span>
                                <a href="{{ $admin_contacts->facebook }}"target="_blank"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li>
                                <span class="contact-social-hex"></span>
                                <a href="{{ $admin_contacts->twitter }}"target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <span class="contact-social-hex"></span>
                                <a href="{{ $admin_contacts->telegram }}"target="_blank"><i class="fab fa-telegram"></i></a>
                            </li>
                            <li>
                                <span class="contact-social-hex"></span>
                                <a href="{{ $admin_contacts->github }}"target="_blank"><i class="fab fa-github"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-md-offset-1 col-lg-offset-2">
                        <div class="section-title clear">
                            <h5>Send me a meesage</h5>
                            <span class="bar-dark"></span>
                            <span class="bar-primary"></span>
                        </div>

                        @if(Session::has('success'))
                            <div class="alert success-alert" role="alert">{{ Session::get('success') }}</div>
                        @endif

                        <form id="contact-form" class="row contact-form no-gutter" wire:submit.prevent="sendMessage"  action="#" method="post">
                            @csrf
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-field name">
                                    <span class="input-icon" id="name" ><i class="far fa-user"></i></span>
                                    <input type="text" class="form-control"  placeholder="Enter your name" wire:model="name">
                                    @error('name')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="input-field email">
                                    <span class= "input-icon" id="email"><i class="fas fa-envelope-open-text"></i></span>
                                    <input type="email" class="form-control" name="email" placeholder="Your email address" wire:model="email">
                                    @error('email')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="input-field">
                                    <span class= "input-icon" id="subject"><i class="fas fa-tags"></i></span>
                                    <input type="text" class="form-control" name="subject" placeholder="Enter the discussion title" wire:model="discussion_title">
                                    @error('discussion_title')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                <div class="input-field message">
                                    <span class= "input-icon" ><i class="fas fa-pen-fancy"></i></span>
                                    <textarea name="message" id="message" class="form-control" placeholder="Write your message" wire:model="message"></textarea>
                                    @error('message')
                                    <p class="validate-error alert ">{{ $message }}</p>
                                @enderror
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12">
                                    <span class="btn-border">
                                        <button type="submit" class="send-message">Send Message now</button>
                                    </span>
                                <div class="msg-success">Your Message was sent successfully</div>
                                <div class="msg-failed">Something went wrong, please try again later</div>
                            </div> 
                        </form>
                    </div>
                </div>
                {{--  Contact End  --}}

            </div>
        </div>
    </section>
</main>


