@extends('layouts.app')

@section('content')
    <section class="p-10 md-p-l5">
        <h2 class="white fs-l2 md-fs-xl1 fw-900 lh-2">
            <span class="border-b bc-indigo bw-4">Unauthorised</span>
        </h2>
        <div class="br-8 bg-indigo-lightest-10 p-5 md-p-l5 flex flex-wrap md-justify-between md-items-center">
            <h2 class="white">
                <i data-feather="x-circle" width="16" height="16" color="red"></i> You are not authorised to access this Scribbl.
            </h2>
        </div>
    </section>
@endsection
