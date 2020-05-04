@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://media-exp1.licdn.com/dms/image/C4E0BAQH2ziZFcJBC_g/company-logo_200_200/0?e=2159024400&v=beta&t=kTEgIii3i05GvefD5OjWDbLfmV_pzjE6KFidu0DlsQ0" class="rounded-circle" style="height: 150px">
        </div>
        <div class="col-9 pt-5">
            <div><h1> {{ $user->username }} </h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">FreeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fbsb10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.55.847.847a/s640x640/95032566_2590953614493815_1061141814829510346_n.jpg?_nc_ht=instagram.fbsb10-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=8ikzr5PVEN4AX_PNetm&oh=d0cc0603ec886d53c20eb77177434b9c&oe=5ED7D34F" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbsb10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.55.847.847a/s640x640/95032566_2590953614493815_1061141814829510346_n.jpg?_nc_ht=instagram.fbsb10-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=8ikzr5PVEN4AX_PNetm&oh=d0cc0603ec886d53c20eb77177434b9c&oe=5ED7D34F" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fbsb10-1.fna.fbcdn.net/v/t51.2885-15/sh0.08/e35/c0.55.847.847a/s640x640/95032566_2590953614493815_1061141814829510346_n.jpg?_nc_ht=instagram.fbsb10-1.fna.fbcdn.net&_nc_cat=111&_nc_ohc=8ikzr5PVEN4AX_PNetm&oh=d0cc0603ec886d53c20eb77177434b9c&oe=5ED7D34F" class="w-100">
        </div>
    </div>

</div>
@endsection
