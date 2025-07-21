@extends('layouts.app')

@push('scripts')

@endpush

@section('content')
<div>
    <div class="mb-4">
        <div class="mb-3">
            <a href="{{ route('top') }}" class="hover:underline">トップ</a>
            <span> > </span>
            <a>自分の投稿</a>
        </div>
        <h1 class="text-3xl mb-3">自分の投稿</h1>
        <hr class="mb-3">
        <div class="flex justify-end">
            <a href="#" class="btn bg-green-600 hover:bg-green-200 py-2 px-2 mx-2 rounded text-center">新規作成</a>
            <a href="#" class="btn bg-transparent hover:bg-green-200 py-2 px-2 mx-2 border border-green-600 rounded text-center">自分のタグ</a>
        </div>
        <div class="md:max-w-lg place-self-center">
            <div class="flex justify-between">
                <a href="{{ url()->current().'?year='.$previousMonth->format('Y').'&month='.$previousMonth->format('m') }}" class="hover:opacity-75">< 前月</a>
                <div class="text-center">
                    <strong>{{ $thisMonth->format('Y年n月') }}</strong>
                </div>
                <a href="{{ url()->current().'?year='.$nextMonth->format('Y').'&month='.$nextMonth->format('m') }}" class="hover:opacity-75">翌月 ></a>
            </div>
            <div class="my-3">
                <div class="calendar_grid">
                    @foreach (['日', '月', '火', '水', '木', '金', '土'] as $weekName)
                        <div class="week_block text-center font-bold">
                            {{ $weekName }}
                        </div>
                    @endforeach
                    @foreach ($calendarDays as $calendarDay)
                        @if ($calendarDay['show'])
                            <div class="day_block">
                                <button class="button_day" type="button" date-date="{{ $calendarDay['date']->format('Y-m-d') }}">{{ $calendarDay['date']->format('j') }}</button>
                            </div>
                        @else
                            <div class="day_block"></div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection