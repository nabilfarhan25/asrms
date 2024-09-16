@include('inventory.partials.geometry')

@include('inventory.partials.affected_facilities')

<div class="grid sm:grid-cols-2 gap-4">
    <div>
        <h4 class="font-bold">PLAN AND CROSS SECTION</h4>
    </div>
    <div>
        <x-file-upload name="plan" title="Plan Section" required="true" maxFileSize="10MB"
            accept="image/png, image/jpeg, image/gif" type="image" notes="
            <h2 class='font-bold text-sm'>PLAN (1:1000)</h2>
            <ol class='list-decimal list-inside text-xs'>
                <li>Feature boundary (SIS) and revised feature boundary (if applicable)</li>
                <li>Section mark</li>
                <li>Photograph location and direction</li>
                <li>Signs of distress, if any</li>
                <li>Signs of seepage, if any</li>
                <li>Engineering measures (e.g. soil nails, shotcrete & buttress)</li>
            </ol>
        " />

        <x-file-upload name="cross" title="Cross Section" required="true" maxFileSize="20MB" multiple="true"
            maxFiles="2" accept="image/png, image/jpeg, image/gif" type="image" notes="
            <h2 class='font-bold text-sm'>CROSS-SECTIONS</h2>
            <ol class='list-decimal list-inside text-xs'>
                <li>Fully dimensioned</li>
                <li>Engineering measures (e.g. soil nails, shotcrete & buttress)</li>
            </ol>
        " />
    </div>

</div>