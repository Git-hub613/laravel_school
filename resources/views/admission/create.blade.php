<x-layout>
    <div class="relative">
        <h1 class="text-center mx-auto text-2xl font-extrabold my-7">Create Admission</h1>
        <a href="{{route('admission.index')}}" class="text-blue-700 bg-blue-300 border border-blue-700 rounded-md py-1 px-2 flex items-center gap-2 max-w-fit absolute right-10 text-md-center font-medium" ><i class="fa-solid fa-arrow-left"></i>Go Back</a>
    </div>
    <form action="{{route('admission.store')}}" class="my-20" method="post">
        @csrf
        <div class="grid grid-cols-2 gap-8">

            <div>
                <label for="name">Course</label>
                <select name="course_id" id="course_id" class="border w-full rounded-md py-1 px-2">
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->name}}</option>
                        {{$course}}
                    @endforeach
                </select>
            </div>
            <div>
                <label for="name">Enter Your Name</label>
                <input type="text" id="name" name="name" class="w-full border rounded-md py-1 px-2" value="{{old("name")}}"
                >
                @error('name')

                <span class="text-red-800 my-2">{{$message}}</span>

                @enderror
            </div>
            <div>
             <label for="email">Enter Your Email</label>
             <input type="email" id="email" name="email" class="w-full border rounded-md py-1 px-2" value="{{old("email")}}">
             @error('email')
                 <span class="text-red-700 my-3">{{$message}}</span>
             @enderror
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" class="w-full border rounded-md py-1 px-2" value="{{old("phone")}}">
                @error('phone')
                <span class="text-red-700 my-3">{{$message}}</span>
                @enderror
            </div>
        </div>

        <input type="submit" class="text-green-800 bg-green-300 border border-green-800 rounded-md py-1 px-2 text-md-center font-medium my-6" value="save record">
    </form>
</x-layout>
