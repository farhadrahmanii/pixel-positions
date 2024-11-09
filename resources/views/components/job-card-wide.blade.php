@props(['job'])
<div
    class="flex p-4 transition-colors duration-300 border border-transparent rounded-lg group gap-x-6 bg-white/10 hover:border-blue-800">
    <div>
        <img src="http://picsum.photos/seed/{{rand(0, 10000)}}/100/100" class="rounded-xl" />
    </div>
    <div class="flex flex-col flex-1">
        <a href="#" class="self-start text-sm text-gray-600">GovExec</a>
        <div class="mt-3 text-xl font-bold transition-colors duration-300 group-hover:text-blue-800">
            <a href="{{$job->url}}" target="_blank">
                {{$job->title}}
            </a>
        </div>
        <div class="mt-auto text-gray-500">{{$job->salary}}</div>
    </div>
    <div>
        @foreach ($job->tags as $tag)
            <x-tag :tag="$tag" size="base" />
        @endforeach
    </div>
</div>