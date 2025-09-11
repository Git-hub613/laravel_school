<x-layout>
    <div>
        <h1 class="text-center mx-auto text-2xl font-semibold my-6">edit Course</h1>
    </div>
    <form action="/course/edit/{{$course->id}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        {{$course->image}}
        <div class="grid grid-cols-2 gap-5">
            <div>
                <label for="name" class="font-medium">Course Name</label>
                <input type="text" id="name" name="name" value="{{$course->name}}" class="w-full border rounded-md py-1 px-2 ">
            </div>
            <div>
                <label for="category" class="font-medium">Course Category</label>
                <input type="text" id="category" name="category" value="{{$course->category}}" class="w-full border rounded-md py-1 px-2 ">
            </div>
            <div>
                <label for="price" class="font-medium">Course Price</label>
                <input type="number" id="price" name="price" value="{{$course->price}}" class="w-full border rounded-md py-1 px-2 ">
            </div>
            <div>
                <label for="image" class="font-medium">upload image</label>
                <input type="file" id="image" name="image" class="w-full border rounded-md py-1 px-2">
                <img src="/{{$course->image}}" alt="image-course">
            </div>
        </div>
        <div class="mt-3">
            <label for="description" class="font-medium">Course Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full border rounded-md py-1 px-2 h-10">{{$course->description}}</textarea>
        </div>
        <input type="submit" value="edit record" class="text-white bg-green-700 border py-1 px-2 mt-3 rounded-md">
    </form>
</x-layout>
