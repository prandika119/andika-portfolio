@extends('template.layout')
@section('content')
    <section id="project-detail" class="pt-36">
        <div class="container mx-auto p-6">
            <div class="flex flex-wrap">
                <div class="w-full px-4 lg:w-1/2">
                    <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->project }}" class="w-full rounded-lg shadow-lg">
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <h2 class="text-3xl font-semibold text-primary mb-6">{{ $project->project }}</h2>
{{--                    <p class="text-base text-dark mb-6">{!! $project->content !!} </p>--}}
                    <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 mt-6 mb-6 rounded-full hover:opacity-80 transition duration-300 ease-in-out">View Project</a>
                    <div class="text-base text-dark mt-6">
                    {!! $project->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
