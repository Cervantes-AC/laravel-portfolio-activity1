@extends('layout')

@section('title', 'Home - My Portfolio')

@section('content')
    <div style="
        text-align: center;
        padding: 2rem;
        max-width: 800px;
        margin: 1rem auto;
    ">
        <h1>Welcome to My Portfolio</h1>

        <p style="
            font-size: 1.2rem;
            color: #555;
            margin-top: 1rem;
        ">
            Hello! I'm a web developer passionate about creating amazing applications.
        </p>

        <p style="margin-top: 1rem;">
            Explore my website to learn more about me, see my projects, and get in touch!
        </p>

        <div style="margin-top: 1.5rem;">
            <a href="{{ route('hobbies') }}" style="
                padding: 0.6rem 1.2rem;
                margin: 0.5rem;
                background: #007bff;
                color: white;
                text-decoration: none;
                border-radius: 4px;
            ">
                My Hobbies
            </a>
            
     
        </div>
    </div>
@endsection
