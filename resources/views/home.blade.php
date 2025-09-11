<x-layout>
    <div>
        <h1 class="text-center mx-auto text-2xl font-bold my-5">Create Company</h1>
    </div>
    <form action="/company/store" method="post">
        @csrf
        <div class="grid grid-cols-2 gap-7">
            <div>
                <label for="name" class="font-semibold">Company Name</label>
                <input type="text" id="name" name="name" class="w-full border py-1 px-2 rounded-md">
            </div>
            <div>
                <label for="email" class="font-semibold">Company Email</label>
                <input type="email" id="email" name="email" class="w-full border py-1 px-2 rounded-md">
            </div>
            <div>
                <label for="phone" class="font-semibold">Company Phone</label>
                <input type="tel" id="phone" name="phone" class="w-full border py-1 px-2 rounded-md">
            </div>
            <div>
                <label for="address" class="font-semibold">Company Address</label>
                <input type="text" id="address" name="address" class="w-full border py-1 px-2 rounded-md">
            </div>
        </div>
        <input type="submit" value="save record" class="bg-green-700 border py-1 px-2 text-white rounded-md mt-4">
    </form>
    <section>
        <div class="w-full mx-auto">
            <table class="w-full text-center mt-5">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border">SN</th>
                        <th class="border">Name</th>
                        <th class="border">Email</th>
                        <th class="border">Phone</th>
                        <th class="border">Address</th>
                    </tr>
                </thead>
               @foreach ($companies as $company)
                   <tbody>
                    <tr>
                        <td class="border">{{$company->id}}</td>
                        <td class="border">{{$company->name}}</td>
                        <td class="border">{{$company->email}}</td>
                        <td class="border">{{$company->phone}}</td>
                        <td class="border">{{$company->address}}</td>
                    </tr>
                </tbody>
               @endforeach
            </table>
        </div>
    </section>
</x-layout>
