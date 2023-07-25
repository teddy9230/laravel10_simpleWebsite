<!-- 指定繼承 layout.master 母模板 -->
@extends('layouts.master')

<!-- 傳送資料到母模板，並指定變數為title -->
@section('title', $title)

<!-- 傳送資料到母模板，並指定變數為content -->
@section('content')
    <h1 style="text-align: center">首頁</h1>
@endsection