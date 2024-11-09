@props(['job'])

<div class="px-4 py-4 border border-transparent rounded-lg group bg-white/10 hover:border-blue-800">
    <h3>GovExec</h3>
    <div class="my-3 text-lg font-bold text-center group-hover:text-blue-800">
        <a href="{{$job->url}}" target="_blank">
            {{$job->title}}
        </a>
    </div>
    <div class="my-4 mt-4 text-xs text-center">Full Time - From $43.000</div>
    <div class="flex justify-between">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag :tag="$tag" size="sm" />
            @endforeach
        </div>

        <x-employer-logo :employer="job->employer" :width="42" />

    </div>
</div>