@extends('template.layout')
@section('content')
    {{-- Hero Section --}}
    <section id="home" class="pt-36">
        <div class="container mx-auto p-6">
            <div class="flex flex-wrap">
                <div class="w-full self-center px-4 lg:w-1/2">
                    <h2 class="text-xl text-center font-semibold text-primary mb-3 md:text-2xl">Hi, I'm Andika Dwi Prasetya</h2>
                    <h1 class="text-4xl text-center font-semibold text-dark mb-10 lg:text-5xl">I enjoy build websites and digital products</h1>
                    <div class="text-center">
                        <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:opacity-80 transition duration-300 ease-in-out">Contact Me</a>
                    </div>
                </div>
                <div class="w-full self-end px-4 lg:w-1/2">
                    <div class="mt-10 relative lg:mt-0 lg:right-0">
                        <img src="{{asset('image/Foto_Andika.png')}}" alt="foto profile" class="scale-75 max-w-full mx-auto">
                        <span class="absolute top-0 left-1/2 -z-10 -translate-x-1/2 md:scale-150 md:top-10 ">
                            <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                <path fill="#6366F1" d="M47.5,-50.4C54.9,-40.1,49.6,-20,47.7,-1.9C45.7,16.2,47.1,32.3,39.7,39.2C32.3,46.2,16.2,43.8,2.5,41.3C-11.2,38.8,-22.3,36.2,-37.4,29.2C-52.4,22.3,-71.4,11.2,-71.8,-0.4C-72.2,-12,-54.1,-24,-39,-34.2C-24,-44.5,-12,-53.1,4,-57.1C20,-61.2,40.1,-60.6,47.5,-50.4Z" transform="translate(100 100) scale(1)" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Me Section --}}
    <section id="about" class="pt-12">
        <div class="container mx-auto p-6">
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <h2 class="text-3xl text-center font-semibold text-primary mb-3 md:text-4xl">About Me</h2>
                    <p class="text-base text-center text-dark mb-6">I am a web developer with a passion for creating beautiful and functional websites. I have experience in various web technologies and enjoy learning new things to improve my skills.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h2 class="text-xl text-center font-semibold text-primary mb-3 md:text-2xl">My Skill</h2>
                    <p class="text-base text-center text-dark mb-6">I am interested in back-end development and proficient in languages such as PHP, JavaScript, Node.js, Java, and Python. I am always eager to take on new challenges and collaborate with others to create amazing projects.</p>
                    <div class="text-center">
                        <a href="https://twitter.com" class="text-base font-semibold text-primary mx-2"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com" class="text-base font-semibold text-primary mx-2"><i class="fab fa-linkedin"></i></a>
                        <a href="https://github.com" class="text-base font-semibold text-primary mx-2"><i class="fab fa-github"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Experience Section --}}
    <section id="experience" class="pt-12 mb-24">
        <div class="container mx-auto p-6">
            <h2 class="text-3xl text-center font-semibold text-primary mb-12 md:text-4xl">Experience</h2>
            <ol class="relative border-s border-primary ">
                @forelse($experiences as $experience)
                    <li class="mb-10 ms-4">
                        <div class="absolute w-3 h-3 bg-primary rounded-full mt-1.5 -start-1.5 border border-primary"></div>
                        <time class="mb-1 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">February 2022</time>
                        <h3 class="text-lg font-semibold text-gray-900">{{$experience->experience}}</h3>
                        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">{{$experience->description}}</p>
                    </li>
                @empty
                    <p>Empty</p>
                @endforelse

            </ol>
        </div>
    </section>

    {{-- Projects Section --}}
    <section id="projects" class="pt-12">
        <div class="container mx-auto p-6">
            <h2 class="text-3xl text-center font-semibold text-primary mb-12 md:text-4xl">Projects</h2>
            <div class="flex flex-wrap -mx-4">
                @foreach($projects as $project)
                    <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden mb-10">
                            <img src="{{asset('storage/'. $project->image)}}" alt="Project 1" class="w-full">
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-dark mb-2">{{$project->project}}</h3>
                                <p class="text-base text-dark mb-4">{!! $project->content !!}</p>
                                <a href="{{route('project.show', $project->id)}}" class="text-base font-semibold text-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
