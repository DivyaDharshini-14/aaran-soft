@props([
    "list" => null
])
<div class="h-64 bg-[#10172B] rounded-b-3xl font-roboto">
    <div class="w-11/12 h-5/6 mx-auto py-5 flex-col ">
        <div class="text-white font-gab">{{ App\Helper\Core::greetings() }}</div>
        <div class="pt-1 text-xs text-gray-500">Curated activities for you</div>
        <div class="pt-4 md:grid md:grid-cols-8 gap-6 md:h-auto h-44 overflow-y-auto grid grid-cols-2 p-2">
            @foreach($list as $row)
                <div class="flex-col">

                    <a href="{{route('feed',['category_id'=>$row->feed_category_id?:'','tag_id'=>$row->tag_id?:''])}}">
                        <div
                            class="h-32 border border-white  hover:border-dashed hover:border-red-700 rounded-lg ">
                            <img class="rounded-lg hover:scale-95 hover:duration-300 w-full h-full"
                                 src="{{ URL(\Illuminate\Support\Facades\Storage::url($row->image))}}"
                                 alt="Img"/>
                        </div>
                        <div class="w-28 text-center pt-1 text-sm text-white">{{ \Illuminate\Support\Str::words($row->vname, 5)}}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
