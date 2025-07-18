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
    <div class="grid grid-cols-6 gap-4 mb-4">
        <div class="col-start-2">
            <a href="{{ route('top') }}" class="hover:underline">トップ</a>
            <span> > </span>
            <a>自分の投稿</a>
        </div>
        <h1 class="col-start-2 text-3xl">自分の投稿</h1>
        <br>
        <a href="#" class="col-end-6 col-span-1 btn bg-green-600 hover:bg-green-200 py-2 px-2 rounded text-center">新規作成</a>
        <a href="#" class="col-end-6 col-span-1 btn bg-transparent hover:bg-green-200 py-2 px-2 border border-green-600 rounded text-center">自分のタグ</a>
    </div>
    <div style="width: 50%; margin: auto;">
        <div id="calendar"></div>
    </div>
</div>
@endsection