<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Botting | login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    {{-- csrf token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- sweetalert --}}
    <link rel="stylesheet" href="{{ asset('plugins/sweetalert2/sweetalert2.min.css') }}">
</head>
