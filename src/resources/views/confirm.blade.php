@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content__title">
        <h2>Confirm</h2>
    </div>
    <div class="content__item">
        <form action="/thanks" method="post">
            @csrf
            <table class="confirm-table">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__item">
                        <div class="confirm-table__item-name">
                            <input type="text" name="last_name" value="{{ $request['last_name'] }}" readonly>
                            <input type="text" name="first_name" value="{{ $request['first_name'] }}" readonly>
                        </div>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__item">
                        <input type="hidden" name="gender" value="{{ $request['gender'] }}" readonly>
                        @switch ($request['gender'])
                            @case (1)
                                男性
                                @break
                            @case (2)
                                女性
                                @break
                            @case (3)
                                その他
                                @break
                        @endswitch
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__item">
                        <input type="email" name="email" value="{{ $request['email'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__item">
                        <div class="confirm-table__item-tel">
                            <input type="tel" name="tel1" value="{{ $request['tel1'] }}" readonly>
                            <input type="tel" name="tel2" value="{{ $request['tel2'] }}" readonly>
                            <input type="tel" name="tel3" value="{{ $request['tel3'] }}" readonly>
                        </div>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__item">
                        <input type="text" name="address" value="{{ $request['address'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__item">
                        <input type="text" name="building" value="{{ $request['building'] }}" readonly>
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__item">
                        <input type="hidden" name="category_id" value="{{ $request['category_id'] }}">
                        {{ $categories[$request['category_id']] }}
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header"></th>
                    <td class="confirm-table__item">

                    </td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection