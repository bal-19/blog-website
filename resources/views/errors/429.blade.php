@extends('errors::layout')

@section('title', __('Too Many Requests'))
@section('code', '429')
@section('message', __("Too many requests. Please wait and try again later."))
