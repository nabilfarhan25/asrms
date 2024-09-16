<div class="border border-gray-300 rounded-2xl p-4 mb-3">
    <div class="flex items-center mb-3">
        <div class="bg-gray-200 p-3 mr-3 rounded-xl">
            @if($type === 'image')
            {{-- Image icon --}}
            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                <circle cx="8.5" cy="8.5" r="1.5"></circle>
                <path d="M21 15l-5-5L5 21"></path>
            </svg>
            @elseif($type === 'document')
            {{-- Document icon --}}
            <svg class="w-8 h-8 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 10V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1v6M5 19v1a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-1M10 3v4a1 1 0 0 1-1 1H5m14 9.006h-.335a1.647 1.647 0 0 1-1.647-1.647v-1.706a1.647 1.647 0 0 1 1.647-1.647L19 12M5 12v5h1.375A1.626 1.626 0 0 0 8 15.375v-1.75A1.626 1.626 0 0 0 6.375 12H5Zm9 1.5v2a1.5 1.5 0 0 1-1.5 1.5v0a1.5 1.5 0 0 1-1.5-1.5v-2a1.5 1.5 0 0 1 1.5-1.5v0a1.5 1.5 0 0 1 1.5 1.5Z" />
            </svg>
            @else
            {{-- Default file icon --}}
            <svg class="w-8 h-8 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6" />
            </svg>
            @endif
        </div>
        <div>
            <h2 class="font-bold text-xl">
                {{ $title }}
                @if($required)
                <span class="text-red-600">*</span>
                @endif
            </h2>
            <p class="text-gray-500 text-sm">
                Upload {{ $type === 'image' ? 'Image' : 'File' }} Here
            </p>
        </div>
    </div>
    <div class="border-2 border-gray-300 border-dashed rounded-xl p-2">
        <input type="file" name="{{ $name }}" class="filestyle" @if($multiple) multiple @endif @if($maxFileSize)
            data-max-file-size="{{ $maxFileSize }}" @endif @if($maxFiles) data-max-files="{{ $maxFiles }}" @endif
            accept="{{ $accept }}" />
    </div>
    @if($notes)
    <div class="pt-3">
        {!! $notes !!}
    </div>
    @endif
</div>