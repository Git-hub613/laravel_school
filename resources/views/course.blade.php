<x-layout>
    <div>
        <h1 class="text-center mx-auto text-2xl font-semibold my-6">Create Course</h1>
    </div>
    <form action="/course/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-2 gap-5">
            <div>
                <label for="name" class="font-medium">Course Name</label>
                <input type="text" id="name" name="name" class="w-full border rounded-md py-1 px-2 ">
            </div>
            <div>
                <label for="category" class="font-medium">Course Category</label>
                <input type="text" id="category" name="category" class="w-full border rounded-md py-1 px-2 ">
            </div>
            <div>
                <label for="price" class="font-medium">Course Price</label>
                <input type="number" id="price" name="price" class="w-full border rounded-md py-1 px-2 ">
            </div>
            <div>
                <label for="image" class="font-medium">upload image</label>
                <input type="file" id="image" name="image" class="w-full border rounded-md py-1 px-2 ">
            </div>
        </div>
        <div class="mt-3">
            <label for="description" class="font-medium">Course Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="w-full border rounded-md py-1 px-2 h-10"></textarea>
        </div>
        <input type="submit" value="save record" class="text-white bg-green-700 border py-1 px-2 mt-3 rounded-md">
    </form>
    <section>
        <div class="grid grid-cols-4 items-center justify-between gap-5 my-8 ">
            @foreach ($courses as $course)
               <div class="overflow-hidden rounded-lg hover:shadow-2xl max-w-fit bg-gray-300">
                <img class="w-[400px] h-[200px] rounded-md" src="{{$course->image}}" alt="course-Image">
                <div class="flex items-center justify-around">
                    <h1 class="border border-green-700 max-w-fit rounded-md my-3 ml-4 py-1 px-2 bg-green-200 text-green-950">{{$course->name}}</h1>
                <h1 class="border border-red-700 max-w-fit rounded-md my-3 ml-4 py-1 px-2 bg-red-200 text-red-950">{{$course->category}}</h1>
                </div>
                <div class="mx-4 flex items-center justify-between">
                <a href="/course/edit/{{$course->id}}" class="text-blue-700"><i class="fa-solid fa-pen-to-square"></i><span>edit</span></a>
                 <form action="course/delete/{{$course->id}}" method="post">
                    @csrf
                    @method("delete")
                    <button class="text-red-700" id="id" onclick="deleteCourse({{$course->id}})"><i class="fa-solid fa-trash"></i>Delete</button>
                    <p id="p"></p>
                </form>
                </div>
                <p class="ml-4 w-[1500px] text-gray-500">{{$course->description}}</p>
                <div class="mb-3">
                <span class="ml-4">Rs.<span class="text-red-600">{{$course->price}}</span></span>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <script>
     document.addEventListener("DOMContentLoaded", function () {
        const button = document.getElementById("id");
        const title = document.getElementById("p");

        button.addEventListener("click", function () {
            title.innerText = "New Product Title!";
        });
    });
    </script>
</x-layout>
