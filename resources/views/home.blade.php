<!-- ABOUT ME -->
<div class="mb-6">
    <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">ABOUT ME</h3>
    <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->about_me ?? '')) !!}</p>
</div>

<!-- EDUCATION -->
<div class="mb-6">
    <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">EDUCATION</h3>
    <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->education ?? '')) !!}</p>
</div>

<!-- SKILLS -->
<div class="mb-6">
    <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">SKILLS</h3>
    <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->skills ?? '')) !!}</p>
</div>

<!-- PROJECTS -->
<div class="mb-6">
    <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">PROJECTS</h3>
    <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->projects ?? '')) !!}</p>
</div>

<!-- WORK EXPERIENCE -->
<div class="mb-6">
    <h3 class="font-bold text-gray-700 tracking-wider text-sm mb-1">WORK EXPERIENCE</h3>
    <p class="text-gray-900 leading-relaxed">{!! nl2br(e($portfolio->work_experience ?? '')) !!}</p>
</div>