<x-layout>
    <div>
        <h1 class="text-center mx-auto font-bold text-2xl my-7 relative">Addmission List</h1>
        <a href="{{route("admission.create")}}" class="text-blue-700 bg-blue-300 border border-blue-700 px-3 py-1 rounded-md shadow-xl absolute right-40">Add Course</a>
    </div>
    <section>
        <table class="w-full my-32">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border text-center">SN</th>
                    <th class="border text-center">Name</th>
                    <th class="border text-center">Email</th>
                    <th class="border text-center">phone</th>
                    <th class="border text-center">course</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($admissions as $admission)
                    <tr>
                    <td class="border text-center">{{$admission->id}}</td>
                    <td class="border text-center">{{$admission->name}}</td>
                    <td class="border text-center">{{$admission->email}}</td>
                    <td class="border text-center">{{$admission->phone}}</td>
                    <td class="border text-center">{{$admission->course_id}}</td>
                    </tr>
                    @endforeach

            </tbody>
        </table>
    </section>
</x-layout>
