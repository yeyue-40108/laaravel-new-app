@extends('layouts.app')

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.18/index.global.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const calendarEl = document.getElementById('calendar');
        const calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: '/events',
        });
        calendar.render();
    });
</script>
@endpush

@section('content')
<div>
    <div style="width: 50%; margin: auto;">
        <div id="calendar"></div>
    </div>
</div>
@endsection