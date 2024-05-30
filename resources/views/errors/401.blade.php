@extends('errors::layout')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __("You're not authorized to access this resource. Please check permissions or contact admin."))
