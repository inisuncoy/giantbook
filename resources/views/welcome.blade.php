@extends('layout')
@section('judul')
    Detail
@endsection

@section('konten')
    <div class="container">
        <div class="page-heading">
            <h2>Detail Book</h2>
            <hr>

        </div>
        <img src="https://source.unsplash.com/400x600?book" class="card-img-top" alt="internet sedang tidak baik baik saja">
        <div class="card-body">
            <div class="cards-title fw-bold">Tittle: </div>
            <p class="card-text">Just some random book</p>
            <div class="cards-title fw-bold">Author: </div>
            <p class="card-text">Just another random author</p>
            <div class="cards-title fw-bold">Publisher: </div>
            <p class="card-text">And yet this get publish</p>
            <div class="cards-title fw-bold">Year: </div>
            <p class="card-text">2022</p>
            <div class="cards-title fw-bold">Synopsis: </div>
            <p class="card-text">This book is about the female friendship following three Anglo-Nigerian best
                friends and the lethally glamorous fourth woman who infiltrates their group.</p>
        </div>



    </div>
@endsection
