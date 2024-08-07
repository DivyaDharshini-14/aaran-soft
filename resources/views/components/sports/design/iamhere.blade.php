<div class="bg-gradient-to-b from-green-50 to-green-100 animate__animated wow animate__slideInUp"
     data-wow-duration="3s">

    <section class="pt-10 overflow-hidden md:pt-0 sm:pt-16 2xl:pt-16">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">

            <!-- Title & desc ----------------------------------------------------------------------------------------->
            <div class="grid items-center grid-cols-1 md:grid-cols-2">
                @foreach($list as $row)
                    <div>

                        <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl animate__animated wow animate__slideInLeft"
                            data-wow-duration="2s">
                            Hey 👋 I am <br class="block sm:hidden"/>{{$row->vname}}</h2>

                        <p class="max-w-lg mt-3 text-xl leading-relaxed text-gray-600 md:mt-8  animate__animated wow animate__slideInRight"
                           data-wow-duration="3s">
                            {{$row->vname}}</p>

                        <p class="mt-4 text-xl text-gray-600 md:mt-8  animate__animated wow animate__backInLeft"
                           data-wow-duration="2s">
                    <span class="relative inline-block">
                        <span class="absolute inline-block w-full bottom-0.5 h-2 bg-yellow-300"></span>
                        <span class="relative"> Have a question? </span>
                    </span>
                            <br class="block sm:hidden"/>Ask me on <a href="#" title=""
                                                                      class="transition-all duration-200 text-sky-500 hover:text-sky-600 hover:underline">Twitter</a>
                        </p>
                    </div>

                    <!-- Image ----------------------------------------------------------------------------------------->

                    <div class="relative">
                        <img
                            class="absolute inset-x-0 bottom-0 -mb-48 -translate-x-1/2 left-1/2  animate__animated wow animate__slideInRight"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/team/1/blob-shape.svg"
                            alt=""/>

                        <img
                            class="relative w-full xl:max-w-lg xl:mx-auto 2xl:origin-bottom 2xl:scale-110  animate__animated wow animate__slideInLeft"
                            data-wow-duration="3s"
                            src="{{ \Illuminate\Support\Facades\Storage::url('images/'.$row->master_photo)}}" alt="image"
                            />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</div>
