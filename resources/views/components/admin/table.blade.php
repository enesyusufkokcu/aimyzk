<div class="table__responsive">
    <table class="table" id="{{ isset($id) ? $id : '' }}">
        @if (isset($head) && $head != '')
            <thead>
                {{ $head }}
            </thead>
        @endif
        @if (isset($body) && $body != '')
            <tbody>
                {{ $body }}
            </tbody>
        @endif
    </table>
</div>
