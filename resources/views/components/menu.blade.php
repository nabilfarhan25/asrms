<div class="col-span-3 p-5 mb-3 sm:mb-0 flex flex-col justify-between bg-white rounded-2xl bg-center bg-cover"
    style="background-image: url('/components/{{$image}}')">
    <h2 class="text-white text-3xl font-bold uppercase mb-5">
        {{$title}}
    </h2>

    <div class="flex flex-wrap text-white sm:flex">

        <a href="/inventory">
            <div
                class="{{$active == 'inventory' ? 'bg-white font-semibold text-gray-800' : ''}} border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 3v4a1 1 0 0 1-1 1H5m4 8h6m-6-4h6m4-8v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                </svg>

                Slope Inventory
            </div>
        </a>
        <a href="/management">
            <div
                class="{{$active == 'management' ? 'bg-white font-semibold text-gray-800' : ''}} border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 13v-2a1 1 0 0 0-1-1h-.757l-.707-1.707.535-.536a1 1 0 0 0 0-1.414l-1.414-1.414a1 1 0 0 0-1.414 0l-.536.535L14 4.757V4a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v.757l-1.707.707-.536-.535a1 1 0 0 0-1.414 0L4.929 6.343a1 1 0 0 0 0 1.414l.536.536L4.757 10H4a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1h.757l.707 1.707-.535.536a1 1 0 0 0 0 1.414l1.414 1.414a1 1 0 0 0 1.414 0l.536-.535 1.707.707V20a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-.757l1.707-.708.536.536a1 1 0 0 0 1.414 0l1.414-1.414a1 1 0 0 0 0-1.414l-.535-.536.707-1.707H20a1 1 0 0 0 1-1Z" />
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                </svg>

                Slope Priority
            </div>
        </a>
        <a href="/inspection">
            <div
                class="{{$active == 'inspection' ? 'bg-white font-semibold text-gray-800' : ''}} border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                        d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                </svg>

                Inspection
            </div>
        </a>
        <a href="/preservation">
            <div
                class="{{$active == 'preservation' ? 'bg-white font-semibold text-gray-800' : ''}} border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                <svg class="w-6 h-6 mr-2s" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z" />
                </svg>
                Preservation
            </div>
        </a>
        <a href="/mitigation">
            <div
                class="{{$active == 'mitigation' ? 'bg-white font-semibold text-gray-800' : ''}} border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                <svg class="w-6 h-6 mr-2s" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M11 6.5h2M11 18h2m-7-5v-2m12 2v-2M5 8h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Zm0 12h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Zm12 0h2a1 1 0 0 0 1-1v-2a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Zm0-12h2a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-2a1 1 0 0 0-1 1v2a1 1 0 0 0 1 1Z" />
                </svg>

                Mitigation
            </div>
        </a>
        <a href="https://map-srms.gwadestek.com/" target="_blank">
            <div
                class=" border-2 border-white px-5 py-3 sm:mr-2 mb-2 flex rounded-full hover:bg-white transition duration-150 hover:text-gray-800">
                <svg class="w-6 h-6 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                Slope Information
            </div>
        </a>
    </div>
</div>