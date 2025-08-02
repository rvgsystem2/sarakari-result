
@extends('component.main')
@section('content')
<div class="bg-blue-50 text-center py-6 px-4 rounded-lg shadow-md max-w-4xl mx-auto">
    <p class="text-sm md:text-base font-semibold text-gray-800">
      <strong>Sarkari Result:</strong> Get Online Form, Results, Admit Card, Answer Key, Syllabus, Career News, Sarkari Yojana, Scholarship, Sarkari Notice & More.
    </p>

    <div class="flex justify-center items-center mt-4 space-x-2">
      <img src="https://img.icons8.com/stencil/32/record.png" alt="record" class="animate-ping h-3 w-3">
      <span class="text-red-600 font-bold uppercase tracking-wider text-sm">Live</span>
    </div>
  </div>

  {{-- Extra buttons --}}

  <div>
    <div class="flex justify-center items-center mt-4 space-x-2 bg-green-600 rounded-xl p-2 w-64 mx-auto transition duration-300 hover:bg-green-500 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40" height="40" viewBox="0 0 48 48">
            <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
            </svg>
        <span class="text-white font-bold uppercase tracking-wider text-sm">Join Whatsapp</span>
      </div>

      <div class="flex justify-center items-center  w-64 mx-auto transition duration-300 my-2 cursor-pointer">

        <span class="text-blue-900 font-bold uppercase tracking-wider text-sm hover:underline">Sarakari Result Tool</span>
      </div>
  </div>

  {{-- multi-cards --}}
<div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 p-4">
        <div class="bg-[#FB0303] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">

                BSF Constable Online Form (3588 Posts)</p>
        </div>
        <div class="bg-[#FB5E03] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">

                RRB Technician Online Form (6238 Post)</p>
        </div>
        <div class="bg-[#ED13E3] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">IB ACIO Grade-II Form (3717 Posts)</p>
        </div>
        <div class="bg-[#0D13B5] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">

                IB Security Assistant Form (4987 Post)</p>
        </div>
        <div class="bg-[#868A08] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">

                RRB Technician Online Form (6238 Post)</p>
        </div>
        <div class="bg-[#0080FF] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">

                Bihar Police Constable Form (4361 Posts)</p>
        </div>
        <div class="bg-[#5F0000] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">

                BOB LBO Online Form (2500 Post)</p>
        </div>
        <div class="bg-[#077822] rounded-lg shadow-md p-6">

            <p class="text-white text-xl">
                UP Police Constable Form (19,220 Post)
            </p>
        </div>

    </div>
</div>


{{-- main-section --}}
<div class="max-w-7xl mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 bg-red-900 p-2 text-white text-center">Results</h2>
            <ul class="list-disc  marker:text-black space-y-2 space-x-2 p-4">
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC Civil Services Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">SSC CGL Tier 1 Result 2025</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">IBPS PO 2025 Online Form Released</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC Civil Services Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">SSC CGL Tier 1 Result 2025</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">IBPS PO 2025 Online Form Released</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>
            </ul>
           <div class="flex justify-center p-2"> <button class="text-white bg-sky-600 hover:sky-800 rounded-full px-3 p-2 text-base">View More</button></div>

        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 bg-red-900 p-2 text-white text-center">Admit Cards</h2>
            <ul class="list-disc  marker:text-black space-y-2 space-x-2 p-4">
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC Civil Services Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">SSC CGL Tier 1 Result 2025</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">IBPS PO 2025 Online Form Released</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC Civil Services Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">SSC CGL Tier 1 Result 2025</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">IBPS PO 2025 Online Form Released</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>
            </ul>
            <div class="flex justify-center p-2"> <button class="text-white bg-sky-600 hover:sky-800 rounded-full px-3 p-2 text-base">View More</button></div>

        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 bg-red-900 p-2 text-white text-center">Latest Jobs Updates</h2>
            <ul class="list-disc  marker:text-black space-y-2 space-x-2 p-4">
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC Civil Services Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">SSC CGL Tier 1 Result 2025</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">IBPS PO 2025 Online Form Released</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC Civil Services Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">SSC CGL Tier 1 Result 2025</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">IBPS PO 2025 Online Form Released</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>
            </ul>
            <div class="flex justify-center p-2"> <button class="text-white bg-sky-600 hover:sky-800 rounded-full px-3 p-2 text-base">View More</button></div>

        </div>
    </div>
</div>

{{-- other updates --}}
<div class="max-w-7xl mx-auto p-4">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 bg-red-900 p-2 text-white text-center">Anwser Key</h2>
            <ul class="list-disc  marker:text-black space-y-2 space-x-2 p-4">
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC Civil Services Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">SSC CGL Tier 1 Result 2025</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">IBPS PO 2025 Online Form Released</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>

            </ul>
           <div class="flex justify-center p-2"> <button class="text-white bg-sky-600 hover:sky-800 rounded-full px-3 p-2 text-base">View More</button></div>

        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 bg-red-900 p-2 text-white text-center">Documents</h2>
            <ul class="list-disc  marker:text-black space-y-2 space-x-2 p-4">

                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>

                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Rajasthan Patwari Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>
            </ul>
            <div class="flex justify-center p-2"> <button class="text-white bg-sky-600 hover:sky-800 rounded-full px-3 p-2 text-base">View More</button></div>

        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4 bg-red-900 p-2 text-white text-center">Admission</h2>
            <ul class="list-disc  marker:text-black space-y-2 space-x-2 p-4">


                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">UPSC NDA/NA Exam 2025 Online Form</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Delhi Police Constable Exam Date</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Haryana Police SI Exam 2025 Notification</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Madhya Pradesh Patwari Exam Date</a>
                </li>

                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Railway Group D Exam Date Announced</a>
                </li>
                <li class="text-blue-700 hover:text-purple-600 transition duration-300 underline text-lg">
                    <a href="#">Bihar Police Constable Exam Date</a>
                </li>


            </ul>
            <div class="flex justify-center p-2"> <button class="text-white bg-sky-600 hover:sky-800 rounded-full px-3 p-2 text-base">View More</button></div>

        </div>
    </div>
</div>

{{-- section-contents --}}
<div>
    <p><strong>Sarkari Result 2025 :</strong> find latest Sarkari job vacancies and Sarkari exam results at Sarkariresult.com.cm Get all the information you need on govt jobs and online from, exam, results, admit card in one place</p>
</div>

<div class="max-w-6xl mx-auto my-6 p-4">
    <h2 class="text-xl font-bold mb-4 text-red-800">Popular Sarkari Result Searches</h2>
    <div class="overflow-x-auto">
      <table class="min-w-full bg-white border border-gray-200 shadow-sm rounded-lg">
        <thead>
          <tr class="bg-red-900 text-white text-left text-sm">
            <th class="py-3 px-4 border-b">Updates</th>
            <th class="py-3 px-4 border-b">Latest</th>
            <th class="py-3 px-4 border-b">Recents</th>
          </tr>
        </thead>
        <tbody class="text-gray-800 text-sm border-gray-200">
          <tr class="hover:bg-gray-50">
            <td class="py-2 px-4 border-b">Bharat Result</td>
            <td class="py-2 px-4 border-b">Up Police Result</td>
            <td class="py-2 px-4 border-b">Bihar Police Result</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="py-2 px-4 border-b">Sarkari Exam</td>
            <td class="py-2 px-4 border-b">SarkariResult Hindi</td>
            <td class="py-2 px-4 border-b">Sarkari Result Ntpc</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="py-2 px-4 border-b">Sarkari Result 2025</td>
            <td class="py-2 px-4 border-b">Sarkari result</td>
            <td class="py-2 px-4 border-b">Sarkari</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="py-2 px-4 border-b">Sarkari Naukri / job listing</td>
            <td class="py-2 px-4 border-b">Sarkari Result 10th</td>
            <td class="py-2 px-4 border-b">Sarkari Result Center</td>
          </tr>
          <tr class="hover:bg-gray-50">
            <td class="py-2 px-4 border-b">Sarkari Result 10+2</td>
            <td class="py-2 px-4 border-b">Sarkariresult</td>
            <td class="py-2 px-4 border-b">Sarkari Result SSC</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  {{-- other information --}}
  <div class=" mx-auto ">
    <!-- Banner -->
    <div class="bg-red-800 text-white text-center text-xl font-semibold py-3 rounded-md shadow-md">
      Sarkari Results 10+2 Latest Job
    </div>

    <!-- Description -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-700 text-base leading-relaxed">
        Most recent Sarkari Work, Sarkari Test result, Most recent On the web and Disconnected structure, Concede Card, Prospectus, Affirmation, ansawer key, Grant, notice etc.If you need to get refreshes connected with Sarkari occupations on sarkari result.com.cm like concede warning like Govt. test, sarkari result, most recent bord result, bihar result tenth and so on you could Sarkari Result 10+2 Most recent Occupation at any point website page consistently.
    </p>
    </div>
  </div>
   {{-- other information --}}
   <div class=" mx-auto ">
    <!-- Banner -->
    <div class="bg-red-800 text-white text-center text-xl font-semibold py-3 rounded-md shadow-md">
        sarkari results
    </div>

    <!-- Description -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-700 text-base leading-relaxed">
        <strong>Sarkari Results: </strong> Sarkari Results is a famous site in India that gives data about sarkari work tests, sarkari result 2025, and other related refreshes. It is one of the notable entries that many work searchers use to secure data about government position opening, concede cards, test dates, and results.
    </p>
    </div>
  </div>
   {{-- other information --}}
   <div class=" mx-auto ">
    <!-- Banner -->
    <div class="bg-red-800 text-white text-center text-xl font-semibold py-3 rounded-md shadow-md">
        Sarkari Result Bihar
    </div>

    <!-- Description -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-700 text-base leading-relaxed">
        Each data connected with Sarkari Test Result in Bihar can be seen as here like: OFSS Bihar, Bihar Board tenth Outcome, Sarkari Result Bihar Board 2025, Bihar Board Matric 2025, Bihar Police 2025, Bihar Board tenth, Bihar Ssc, Bihar Je, bihar Common Court, Sarkari Result Bihar Board result, Bihar Work, Bihar Result, bihar 10+2 Most recent Work, Bihar Sarkari Result , Bihar Sarkari Test, bihar Govt Work, Concede Card, Bihar Sarkari Result, eleventh Affirmation And so forth.
    </p>
    </div>
  </div>
   {{-- other information --}}
   <div class=" mx-auto ">
    <!-- Banner -->
    <div class="bg-red-800 text-white text-center text-xl font-semibold py-3 rounded-md shadow-md">
        sarkari result Hindi
    </div>

    <!-- Description -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-700 text-base leading-relaxed">
        Uttar Pradesh (sarkariresult.com.cm UP Board) is a state where lakhs of young people give Sarkari Test consistently to land government positions, so here UP Board plays a significant part, so here you will get Sarkari Result Up Board 2024, Up Barricade Result , Board 2025,Up Board test result, Sarkari Result Up Board Class tenth, Up Board Result Date, Sarkari Result Up Board 2024 In Hindi and so on. Will continue to get refreshes.
    </p>
    </div>
  </div>
   {{-- other information --}}
   <div class=" mx-auto ">
    <!-- Banner -->
    <div class="bg-red-800 text-white text-center text-xl font-semibold py-3 rounded-md shadow-md">
        sarkariresult
    </div>

    <!-- Description -->
    <div class="mt-4 bg-white p-6 rounded-lg shadow-md">
      <p class="text-gray-700 text-base leading-relaxed">
      <strong>  Sarkariresult:</strong> data presents to you all the most recent news like outcome, online structure, naukri, test result 2025, work result, information hindi test, government work data, and updates, notice and output gives.

    <ul class="list-disc marker:text-black space-y-2 space-x-2 p-4">
        <li class="font-bold">    This website is not associated with official websites. All information provided is for general informational purposes only.
        </li>
    </ul>
    </p>
    </div>
  </div>

  {{-- FAQ --}}
  <div class=" mx-auto p-6 mt-8 bg-white ">
    <h2 class="text-2xl font-bold text-red-700 mb-6 border-b pb-2"> FAQ – Sarkari Result</h2>

    <!-- Question 1 -->
    <div class="mb-5">
      <h3 class="text-lg font-semibold text-gray-800 mb-1">What is Sarkari Result?</h3>
      <p class="text-gray-700 leading-relaxed">
        <span class="font-semibold text-blue-600">Sarkari Result</span>: Find the latest government job vacancies and exam results at
        <span class="font-medium text-red-600">SarkariResult.com.cm</span>. Get all the essential information about govt jobs, online forms, results, admit cards, and more — all in one place.
      </p>
    </div>

    <!-- Question 2 -->
    <div class="mb-5">
      <h3 class="text-lg font-semibold text-gray-800 mb-1"> How can I check the latest government job vacancies?</h3>
      <p class="text-gray-700 leading-relaxed">
        You can visit the <span class="font-semibold text-blue-600">Sarkari Result</span> website and go to the
        <span class="font-medium text-red-600">“Latest Jobs”</span> section. You'll find up-to-date listings of available government jobs, along with exam preparation guides and Sarkari job details.
      </p>
    </div>

    <!-- Question 3 -->
    <div>
      <h3 class="text-lg font-semibold text-gray-800 mb-1">Is Sarkari Result free to use?</h3>
      <p class="text-gray-700 leading-relaxed">
        Absolutely! <span class="font-semibold text-blue-600">Sarkari Result</span> is completely free to use. You can browse job listings, view admit cards, results, and more — all at no cost.
      </p>
    </div>
  </div>

@endsection

