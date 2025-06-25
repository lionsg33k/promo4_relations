@extends('layouts.index')


@section('content')
    <form class="w-full flex flex-col items-center gap-y-6 py-4" action="/school/store" method="post">
        @csrf
        <h1>Create New Field</h1>

        <input class="border  rounded-lg text-center py-1 px-3" placeholder="Insert a valid class name ..." type="text"
            name="name">

        <button class="bg-black text-white py-1 px-5 rounded-lg hover:bg-black/80">Add</button>
    </form>


    <hr>
    <hr>
    <hr>
    <hr>


    <form class="w-full flex flex-col items-center gap-y-6 py-4" action="/student/store" method="post">
        @csrf
        <h1>Create New Student</h1>

        <input class="border  rounded-lg text-center py-1 px-3" placeholder="Insert a valid class name ..." type="text"
            name="name">
        <div class="flex items-center gap-x-6">

            @foreach ($fields as $field)
                <div class="flex items-center gap-x-2">
                    <label for="option_{{ $field->id }}">{{ $field->name }}</label>
                    <input name="field[]" id="option_{{ $field->id }}" value="{{ $field->id }}" type="checkbox">
                </div>
            @endforeach
        </div>

        <button class="bg-black text-white py-1 px-5 rounded-lg hover:bg-black/80">Add</button>
    </form>

    <hr>
    <hr>
    <hr>
    <hr>

    <div class="space-y-4">
        @foreach ($students as $student)
            <h1>Student name : <span class="font-bold">{{ $student->name }}</span></h1>

            classes he/she joined to

            <div class="flex flex-col gap-y-2">

                @foreach ($student->fields as $field)
                    <h1> {{ $field->name }}</h1>
                @endforeach
            </div>
        @endforeach
    </div>
@endsection
